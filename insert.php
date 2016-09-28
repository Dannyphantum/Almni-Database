<html>
    <head>
        <title> Insert </title> 
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

<!---Header--->
    

<?php

if ($_POST['submit'])  {
    $id = $_POST['STU_ID'];
    $fname = $_POST['STU_FNAME'];
    $lname = $_POST['STU_LNAME'];
    $email = $_POST['STU_EMAIL'];
    $gdate = $_POST['STU_GDATE'];
    
    
    $query = "INSERT INTO ALUMNI VALUES ('$id', '$fname', '$lname', '$email', '$gdate')";
    mysqli_query($connection, $query);
}


?>

<br>

<div class="container"> 
     <h2>Add an Alumni!</h2>
     <div class="row">
         <div class="col s6">
          <div class="row">
            <form class="col s12" method="post">
              <div class="row">
                <div class="input-field col s10"> 
                  <label for="STU_ID">Student ID</label>
                  <input value="" id="STU_ID" name="STU_ID" type="number" class="validate form-control">
                
                </div>
            </div>
            
                <br>
                    
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_FNAME">First Name</label>
                  <input id="STU_FNAME" name="STU_FNAME" type="text" class="validate form-control">
                
                </div>
            </div>
            
            <br>
    
            <div class="row"> 
                <div class="input-field col s10">  
                  <label for="STU_LNAME">Last Name</label>
                  <input id="STU_LNAME" name="STU_LNAME" type="text" class="validate form-control">
                 
                </div> 
            </div> 
                
                <br>
                
              <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_EMAIL">Email</label>
                  <input id="STU_EMAIL" name="STU_EMAIL" type="text" class="validate form-control">
                  
                </div> 
              </div> 
                
                <br>
                
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_GDATE">Graduation Date</label> 
                  <input id="STU_GDATE" name="STU_GDATE" type="date" class="validate form-control">
                  
                </div> 
            </div> 
                
                
             </div>
            </div> 
            
        
             <input type="submit"   name="submit" value="submit" class="btn btn-primary btn-lg">

            </form>
          </div>
    </div> 
    <!--- End of Query--->
    
    
    </body>
</html>