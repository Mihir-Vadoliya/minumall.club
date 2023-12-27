<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url1");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Previous Results</title>
</head>

<style>
      body {
        background-color: #F14625; /* replace with your preferred color value */
      }
    </style>


<body>
    
    <h4 class="center" style="font-family: Arial, sans-serif; color: white;">Last 3 Game Trend</h4>

    

        <style>
        
        .tab button.tablinks {
              background-color: #ee82ee; /* Set the background color */
              color: white; /* Set the text color */
              float: left;
              border: none;
              outline: none;
              cursor: pointer;
              padding: 14px 16px;
              transition: 0.3s;
              font-size: 17px;
            }
            
            .tab button.tablinks.active {
              background-color: #555; /* Set the background color for the active tab */
            }



            .tab {
                display: flex;
            }
        
            .tablinks {
                margin-right: 10px;
                padding: 10px;
                border: none;
                border-radius: 5px;
                color: white;
                cursor: pointer;
            }
        
            .tabcontent {
                display: none;
                padding: 10px;
                border: 1px solid black;
            }
        
            .graph {
                display: flex;
                height: 50px;
                margin-top: 10px;
            }
        
            .graph div {
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                font-weight: bold;
            }
        
            .graph div.green {
                background-color: green;
            }
        
            .graph div.red {
                background-color: red;
            }
            .graph div.voilet {
                background-color: voilet;
            }
            
            @media only screen and (max-width: 769px) {
 
         .p-text{
             left:0px;
             bottom: -315px;
             line-height: 16px;
         }
         .btn-primary{margin-top:-87px !important;}
         
        }
        .center {
          text-align: center;
        }
        
        .graph {
        display: flex;
        width: 100%;
        max-width: auto; /* optional, set a maximum width */
        }
    
        .graph > div {
            height: auto;
            line-height: 25px;
            margin: 1px;
            text-align: center;
            color: white;
            font-weight: bold;
        }
        
        .bg-box {
          background-color: #ffffff; /* gray background color */
          padding: 10px; /* add some padding around the content */
        }
        
      /* Responsive styles for mobile devices */
        @media only screen and (max-width: 768px) {
          .bg-box {
            padding: 10px;
          }
          .tab {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
          }
          .tab button.tablinks {
            width: auto;
            padding: 10px 10px;
            margin:2px;
            font-size: 14px;
            max-width: 100%;
            box-sizing: border-box;
          }
          .graph div {
            font-size: 12px;
          }
        }
        h4.center {
          font-family: Arial, sans-serif;
        }


        
        
        
        
        


            
         

            
        </style>
     <div class="bg-box">    
            <div class="graph">
                <?php
                // Create connection
                $conn = new mysqli('localhost', 'colourfu_root', 'e=#s(e3mu!~_', 'colourfu_root');
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                // Retrieve data from tbl_result and order by ID in descending order
                $sql = "SELECT randomcolor FROM tbl_result ORDER BY id DESC LIMIT 12";
                $result = $conn->query($sql);
                
                // Check if there are any results
                if ($result->num_rows > 0) {
                
                    // Create array to store color counts
                    $color_counts = array("red" => 0, "green" => 0, "violet" => 1);
                
                    // Count occurrences of each color
                    while ($row = $result->fetch_assoc()) {
                        $color_counts[$row["randomcolor"]] += 1;
                    }
                
                    // Calculate percentages
                    $total_count = array_sum($color_counts);
                    $red_percent = round(($color_counts["red"] / $total_count) * 100);
                    $green_percent = round(($color_counts["green"] / $total_count) * 100);
                    $violet_percent = round(($color_counts["violet"] / $total_count) * 100);
                
                    // Output horizontal bar graph
                    echo "<div class='graph'>";
                    echo "<div style='width: $red_percent%; background-color: red;'>$red_percent%</div>";
                    echo "<div style='width: $green_percent%; background-color: green;'>$green_percent%</div>";
                    echo "<div style='width: $violet_percent%; background-color: violet;'>$violet_percent%</div>";
                    echo "</div>";
                
                } else {
                    echo "No results found.";
                }
                
                // Close connection
                $conn->close();
                ?>
            </div>
      </div>    
       
       
        

        
        <h4 class="center" style="font-family: Arial, sans-serif; color: white;">Last 3 Games Results With Number</h4>


        <div class="bg-box">
            <?php
            // Create connection
            $conn = new mysqli('localhost', 'colourfu_root', 'e=#s(e3mu!~_', 'colourfu_root');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Retrieve data from tbl_result and order by ID in descending order
            $sql = "SELECT randomresult, randomcolor, tabtype FROM tbl_result ORDER BY id DESC LIMIT 12";
            $result = $conn->query($sql);
            
            // Check if there are any results
            if ($result->num_rows > 0) {
            
                // Create array to store tab types and corresponding values
                $tab_values = array();
            
                // Output tabs
                echo "<div class='tab' style='text-align: center;'>";
                while($row = $result->fetch_assoc()) {
                    // Store tab type and value in array
                    $tab_type = $row["tabtype"];
                    $tab_value = $row["randomresult"];
                    $tab_color = $row["randomcolor"];
                    $tab_values[$tab_type] = $tab_value;
            
                    // Output tab
                    echo "<button class='tablinks' style='background-color: $tab_color;' onclick='openTab(event, \"$tab_type\")'>$tab_type - $tab_value</button>";
                }
                echo "</div>";
            
                // Create div for tab content
                echo "<div class='tabcontent'>";
            
                // Output content for each tab in reverse order
                foreach(array_reverse($tab_values, true) as $tab_type => $tab_value) {
                    echo "<div id='$tab_type' class='tabcontent'>";
                    echo "<h5>$tab_type</h5>";
                    echo "<p>$tab_value</p>";
                    echo "</div>";
                }
            
                // Determine tab with highest value and calculate percentages
                $highest_tab = array_keys($tab_values, max($tab_values))[0];
                $total_value = array_sum($tab_values);
                $highest_value = $tab_values[$highest_tab];
                $highest_percent = round(($highest_value / $total_value) * 100);
                $other_percent = round(((($total_value - $highest_value) / $total_value) * 100) / (count($tab_values) - 1));
            
                // Output percentage graph
                echo "<div class='graph'>";
                foreach(array_reverse($tab_values, true) as $tab_type => $tab_value) {
                    $percent = round(($tab_value / $total_value) * 100);
                    $percent_color = ($tab_type == $highest_tab) ? "green" : "red";
                    echo "<div style='width: $percent%; background-color: $percent_color;'>$percent%</div>";
                }
                echo "</div>";
            
                echo "</div>";
            
            } else {
                echo "No results found.";
            }
            
            // Close connection
            $conn->close();
            ?>
   
            </div>
            
            <h4 class="center" style="font-family: Arial, sans-serif; color: white;">Masters Suggestion</h4>
            
            <?php
            // Database connection variables
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "database_name";
            
            // Create connection
            $conn = new mysqli('localhost', 'colourfu_root', 'e=#s(e3mu!~_', 'colourfu_root');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to retrieve latest 4 rows
            $sql = "SELECT periodid, value, amount, tab FROM tbl_betting ORDER BY periodid DESC LIMIT 4";
            
            // Execute query and get result set
            $result = $conn->query($sql);
            
            // Close connection
            $conn->close();
            ?>
            
            <!DOCTYPE html>
            <html>
            <head>
                <title>Latest 4 Bets</title>
                <style>
                /* Set default styles for bet div */
               .bet {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    align-items: center;
                    margin: 5px;
                    background-color: #ffffff;
                    color: #000000;
                    font-size: 12px;
                    border: 3px solid black;
                    padding: 5px;
                    border-radius: 11px;
                }


            
                /* Add styles for screens smaller than 768px */
                @media screen and (max-width: 767px) {
                    .bet {
                        flex-basis: 50%; /* reduce width to fit two bets per row */
                    }
                }
            
                /* Add styles for screens smaller than 480px */
                @media screen and (max-width: 479px) {
                    .bet {
                        flex-basis: 100%; /* reduce width to fit one bet per row */
                    }
                }
                
                .periodid, .value, .amount, .tab {
                    padding: 5px;
                    text-align: center;
                }
                
                .periodid {
                    flex-basis: 25%;
                    border-right: 1px solid black;
                }
                
                .value {
                    flex-basis: 25%;
                    font-weight: bold;
                    font-size: 20px;
                }
                
                .red {
                    color: red;
                }
                
                .green {
                    color: green;
                }
                
                .violet {
                    background-color: violet;
                }
                
                .green.violet {
                    color: white;
                }
                
                .amount, .tab {
                    flex-basis: 25%;
                }
                
                </style>
            </head>
            <body>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="bet">
                            <div class="periodid">Period ID<br/><?php echo $row['periodid']; ?></div>
                            <div class="value <?php 
                                if ($row['value'] == '5') {
                                    echo 'green violet';
                                } else if (substr($row['value'], -1) == '0') {
                                    echo 'red';
                                } else if (in_array($row['value'], array('1', '3', '7', '8'))) {
                                    echo 'green';
                                } else {
                                    echo '';
                                }
                            ?>"><?php echo $row['value']; ?></div>
                            <div class="amount">Amount<br/><?php echo $row['amount']; ?></div>
                            <div class="tab">Tab<br/><?php echo $row['tab']; ?></div>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </body>
            </html>
            
            <?php 
            // Close connection
            ?>

            
            
            
            


</body>
</html>



