<html>
    <head>
        <title> Selections </title> 
        <?php include('connect.php')?>  
         <?php include('css.php')?> 
        
          <style type="text/css">
            body{
                background:#003a63 ;
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

<!---Header--->
<br>
<h1> Top Donations </h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th>
                      <th data-field="STU_LNAME">Last Name</th>
                      <th data-field="DON_AMOUNT">Donation Amount</th> 
                      <th data-field="DON_DATE">Donation Date</th> 
                      
                  
                      
                  </tr>
                </thead> 
                <tbody>
 <?php

$query = "SELECT ALUMNI.STU_ID, ALUMNI.STU_FNAME, ALUMNI.STU_LNAME, DONATIONS.DON_AMOUNT, DONATIONS.DON_DATE
FROM ALUMNI, DONATIONS
WHERE DONATIONS.DON_AMOUNT > 1000
AND ALUMNI.STU_ID = DONATIONS.STU_ID";
if( $result= mysqli_query($connection, "SELECT ALUMNI.STU_ID, ALUMNI.STU_FNAME, ALUMNI.STU_LNAME, DONATIONS.DON_AMOUNT, DONATIONS.DON_DATE
FROM ALUMNI, DONATIONS
WHERE DONATIONS.DON_AMOUNT >  1000
AND ALUMNI.STU_ID = DONATIONS.STU_ID"))   {

                     
                            
                  
while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[DON_AMOUNT] . '</td>'; 
     echo '<td>' . $row[DON_DATE] . '</td>';

                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>  
              <!---End of Query--->
   
   
     <br>  
     <br>
     <br>
     
     <h1> Dean's List </h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th>
                      <th data-field="STU_LNAME">Last Name</th>
                      <th data-field="STU_GPA">Student GPA</th> 
                      <th data-field="STU_MAJOR">Student Major</th> 
                      
                  
                      
                  </tr>
                </thead> 
                <tbody>
 
 <?php

$query = "SELECT  ALUMNI.STU_ID, ALUMNI.STU_FNAME, ALUMNI.STU_LNAME, DEPARTMENT.STU_GPA, DEPARTMENT.STU_MAJOR
FROM ALUMNI, DEPARTMENT
WHERE DEPARTMENT.STU_GPA >= 3.5";
if( $result= mysqli_query($connection, "SELECT  ALUMNI.STU_ID, ALUMNI.STU_FNAME, ALUMNI.STU_LNAME, DEPARTMENT.STU_GPA, DEPARTMENT.STU_MAJOR
FROM ALUMNI, DEPARTMENT
WHERE DEPARTMENT.STU_GPA >= 3.5
AND ALUMNI.STU_ID = DEPARTMENT.STU_ID"))   {

                     
                            
                  
while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[STU_GPA] . '</td>'; 
     echo '<td>' . $row[STU_MAJOR] . '</td>';

                         
                         
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