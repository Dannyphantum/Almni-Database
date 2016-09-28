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

<h1>Student</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:50%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th> 
                      <th data-field="STU_LNAME">Last Name</th> 
                      <th data-field="STU_EMAIL">Email Address</th> 
                      <th data-field="STU_GDATE">Graduation Date</th> 
                  
                      
                  </tr>
                </thead> 
                <tbody>
<?php

$query = "SELECT * FROM ALUMNI";
if( $result= mysqli_query($connection, "SELECT * FROM ALUMNI"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[STU_EMAIL] . '</td>';
     echo '<td>' . $row[STU_GDATE] . '</td>'; 
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>  
     <br>         
<!----------End of Query------>               
 
<h1>Department</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:100%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="DEPT_ID">Department ID</th> 
                      <th data-field="DEPT_NAME">Department Name</th> 
                      <th data-field="STU_MAJOR">Student Major</th> 
                      <th data-field="STU_GPA">Student GPA</th> 
                      <th data-field="STU_COMPANY">Student Company</th> 
                      <th data-field="STU_ID">Student ID</th>
                      
                  </tr>
                </thead> 
                <tbody>
                
<?php

$query = "SELECT * FROM DEPARTMENT";
if( $result= mysqli_query($connection, "SELECT * FROM DEPARTMENT"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[DEPT_ID] . '</td>';
     echo '<td>' . $row[DEPT_NAME] . '</td>';
     echo '<td>' . $row[STU_MAJOR] . '</td>';
     echo '<td>' . $row[STU_GPA] . '</td>';
     echo '<td>' . $row[STU_COMPANY] . '</td>';
     echo '<td>' . $row[STU_ID] . '</td>'; 
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>  
         <br>                
<!---End of Query--->
              
<h1>Donations</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:75%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="DON_ID">Donation ID</th> 
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="DON_AMOUNT">Donation Amount</th> 
                      <th data-field="SCH_ID">Scholarship ID</th> 
                      <th data-field="SCH_NAME">Scholarship Name</th> 
                      <th data-field="DON_DATE">Donation Date</th>
                      
                  </tr>
                </thead> 
                <tbody>
                
<?php

$query = "SELECT * FROM DONATIONS";
if( $result= mysqli_query($connection, "SELECT * FROM DONATIONS"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[DON_ID] . '</td>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[DON_AMOUNT] . '</td>';
     echo '<td>' . $row[SCH_ID] . '</td>';
     echo '<td>' . $row[SCH_NAME] . '</td>';
     echo '<td>' . $row[DON_DATE] . '</td>'; 
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>               
             <br> 
<!--- End of Query--->

<h1>Graduate</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:100%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="OPE_ID">OPE ID</th> 
                      <th data-field="STU_ID">Student ID</th> 
                      <th data-field="STU_FNAME">First Name</th> 
                      <th data-field="STU_LNAME">Last Name</th> 
                      <th data-field="GRAD_SCHOOL">Graduate School</th> 
                      <th data-field="GRAD_PROGRAM">Graduate Program</th>
                      <th data-field="GRAD_DATE">Graduation Date</th>
                      
                  </tr>
                </thead> 
                <tbody>
                
<?php

$query = "SELECT * FROM GRADUATE";
if( $result= mysqli_query($connection, "SELECT * FROM GRADUATE"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[OPE_ID] . '</td>';
     echo '<td>' . $row[STU_ID] . '</td>';
     echo '<td>' . $row[STU_FNAME] . '</td>';
     echo '<td>' . $row[STU_LNAME] . '</td>';
     echo '<td>' . $row[GRAD_SCHOOL] . '</td>';
     echo '<td>' . $row[GRAD_PROGRAM] . '</td>'; 
     echo '<td>' . $row[GRAD_GDATE] . '</td>';
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>
             <br>
<!---End of Query--->

<h1>Scholarships</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:85%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="SCH_ID">Scholarship ID</th> 
                      <th data-field="SCH_NAME">Scholarship Name</th> 
                      <th data-field="SCH_CRITERIA">Scholarship Criteria</th> 
                    
                     
                      
                  </tr>
                </thead> 
                <tbody>
                
<?php

$query = "SELECT * FROM SCHOLARSHIPS";
if( $result= mysqli_query($connection, "SELECT * FROM SCHOLARSHIPS"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[SCH_ID] . '</td>';
     echo '<td>' . $row[SCH_NAME] . '</td>';
     echo '<td>' . $row[SCH_CRITERIA] . '</td>';
    
                         
                         
                          echo '</tr>';
                       }
                    } else {
                        echo "it failed";
                    }
                ?>

 
                </tbody>
              </table>
              <br>
<!---End of Query--->

<h1>Receipts</h1>
      <div class="col s12">
        <table class="table table-bordered"  style="width:85%" style="length:5%">
                     
              </style>
                <thead>
                  <tr>
                      <th data-field="REC_ID">Receipt ID</th> 
                      <th data-field="DON_ID">Donation ID</th> 
                      <th data-field="REC_ADDRESS">Receipt Address</th> 
                      <th data-field="REC_CIY">Receipt City</th> 
                      <th data-field="REC_STATE">Receipt State</th> 
                     
                      
                  </tr>
                </thead> 
                <tbody>
                
<?php

$query = "SELECT * FROM RECEIPTS";
if( $result= mysqli_query($connection, "SELECT * FROM RECEIPTS"))   {

while ($row = mysqli_fetch_array($result))    {
  echo '<tr>';
     echo '<td>' . $row[REC_ID] . '</td>';
     echo '<td>' . $row[DON_ID] . '</td>';
     echo '<td>' . $row[REC_ADDRESS] . '</td>';
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
              <br>
<!---End of Query--->
    </body>
</html>

