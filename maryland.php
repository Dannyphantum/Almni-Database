<html>
    <head>
        <title> Selections </title> 
        <?php include('connect.php')?>  
         <?php include('css.php')?> 
         
         
         <style type="text/css">
            body{
                background:#003a63 ;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;
                  background-size: cover;
                  color:white;
            }
            a{
                color:white;
            }
        </style>
        
        </head>
    <body> 
    
    
  <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">Home</a></li>
  <li role="presentation"><a href="select.php">Selections</a></li>
  <li role="presentation"><a href="insert.php">Insert</a></li>
  <li role="presentation"><a href="donations.php">Donate</a></li>
  <li role="presentation"><a href="topdonations.php">Top Donations</a></li>
  <li role="presentation"><a href="maryland.php">MD College Fund</a></li>
</ul>
 <br>
<!--- Header--->

<h1>Maryland College Fund</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="DON_ID">Donation ID</th> 
                      <th data-field="DON_DATE">Donation Date</th> 
                      <th data-field="DON_AMOUNT">Donation Amount</th></th> 
                      <th data-field="REC_CITY"> Receipt City</th> 
                      <th data-field="REC_STATE">Receipt State</th> 
                  
                      
                  </tr>
                </thead> 
                <tbody>
<?php

$query = "SELECT DONATIONS.DON_ID, DONATIONS.DON_DATE, 
          DONATIONS.DON_AMOUNT, RECEIPTS.REC_CITY, RECEIPTS.REC_STATE
          FROM DONATIONS, RECEIPTS
          WHERE RECEIPTS.REC_STATE = 'MD'
          AND DONATIONS.DON_AMOUNT <= 1500
          AND DONATIONS.DON_ID = RECEIPTS.DON_ID";
if( $result= mysqli_query($connection, "SELECT DONATIONS.DON_ID, DONATIONS.DON_DATE, 
          DONATIONS.DON_AMOUNT, RECEIPTS.REC_CITY, RECEIPTS.REC_STATE
          FROM DONATIONS, RECEIPTS
          WHERE RECEIPTS.REC_STATE = 'MD'
          AND DONATIONS.DON_AMOUNT <= 1500
          AND DONATIONS.DON_ID = RECEIPTS.DON_ID"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[DON_ID] . '</td>';
     echo '<td>' . $row[DON_DATE] . '</td>';
     echo '<td>' . $row[DON_AMOUNT] . '</td>';
     echo '<td>' . $row[REC_CITY] . '</td>';
     echo '<td>' . $row[REC_STATE] . '</td>'; 
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>  
     </body>
  </html>