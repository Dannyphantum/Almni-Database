<html>
    <head>
        <title> Donations </title> 
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

<?php

if ($_POST['submit'])  {
    $id = $_POST['DON_ID'];
    $sid = $_POST['STU_ID'];
    $amnt = $_POST['DON_AMOUNT'];
    $schid = $_POST['SCH_ID'];
    $schname = $_POST['SCH_NAME'];
    $dondate = $_POST['DON_DATE'];
    
    
    $query = "INSERT INTO DONATIONS VALUES ('$id', '$sid', '$amnt', '$schid', '$schname', 
    '$dondate')";
    mysqli_query($connection, $query);
}


?>

<br>

<div class="container"> 
     <h2>Donate to a Bison!</h2>
     <div class="row">
         <div class="col s6">
          <div class="row">
            <form class="col s12" method="post">
              <div class="row">
                <div class="input-field col s10"> 
                  <label for="DON_ID">Donation ID</label>
                  <input value="" id="DON_ID" name="DON_ID" type="text" class="validate form-control">
                
                </div>
            </div>
            
                <br>
                    
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="STU_ID">Student ID</label>
                  <input id="STU_ID" name="STU_ID" type="number" class="validate form-control">
                
                </div>
            </div>
            
            <br>
    
            <div class="row"> 
                <div class="input-field col s10">  
                  <label for="DON_AMOUNT">Donation Amount</label>
                  <input id="DON_AMOUNT" name="DON_AMOUNT" type="number" class="validate form-control">
                 
                </div> 
            </div> 
                
                <br>
                
              <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="SCH_ID">Scholarship ID</label>
                  <input id="SCH_ID" name="SCH_ID" type="text" class="validate form-control">
                  
                </div> 
              </div> 
                
                <br>
                
            <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="SCH_NAME">Scholarship Name</label> 
                  <input id="SCH_NAME" name="SCH_NAME" type="text" class="validate form-control">
                  
                </div> 
            </div> 
                
                <br>
                
                <div class="row"> 
                <div class="input-field col s10"> 
                  <label for="DON_DATE">Donation Date</label> 
                  <input id="DON_DATE" name="DON_DATE" type="date" class="validate form-control">
                  
                </div> 
            </div> 
                
             </div>
            </div> 
            
        
             <input type="submit"   name="submit" value="submit">

            </form>
          </div>
    </div> 
    <!--- End of Query--->
    
    
    </body>
</html>