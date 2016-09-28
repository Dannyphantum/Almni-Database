<!DOCTYPE html>
<html>
    <head>
        <title> Alumni Database </title> 
        <?php include('connect.php')?>  
         <?php include('css.php')?> 
        
        <style type="text/css">
            body{
                background: #3A02C4;
                /*background: url(https://www2.howard.edu/sites/default/files/styles/howard_home_slider/public/header1_0.png?itok=K3rtNcLV) no-repeat center center fixed; */
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.55)),
                rgba(0,0,0,0.55) url('https://www2.howard.edu/sites/default/files/styles/howard_home_slider/public/header1_0.png?itok=K3rtNcLV') no-repeat center;
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


  <center>   <h1>Alumni Database</h1> 
            <h2> Presented by
            <br> Daniel Bonaparte
            <br> Kevin Jack
            <br> Kripa the Kreepa
            <br> and Talia LeRay </h2>  
  </center> 
  
  


    </body>
</html>
