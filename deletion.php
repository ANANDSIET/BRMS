<?php
  $size=sizeof($_POST);
$j=1; 
for($i=1;$i<=$size;$i++,$j++)
{
    $index="b".$j;
    
    if(isset($_POST[$index]))
    {
        $b_id[$i]=$_POST[$index];
    }
    else
        $i--;
    
        
}
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'BRM_DB');
for($k=1;$k<=$size;$k++)
{
     $q="delete from book where bookid=".$b_id[$k];
   mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Deletion</title>
    </head>
    <body>
        <h1 align="center">Book Record Management </h1><br><hr/>
        <p align="center">
            <?php
               echo $size." Record/s deleted";
            ?>
        </p>
        <h3 align="center"> Go Back to home page<a href="home.php">Click here</a></h3>
    </body>
</html>
