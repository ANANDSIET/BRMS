<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="select *from book";
$rt=mysqli_query($con,$q);
$num=mysqli_num_rows($rt);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>updation</title>
    </head>
    <body>
        <h1 align="center">Update Book Records </h1><hr/>
        <link rel="stylesheet" href="./css/viewStyle.css">
        <form action="updation.php" method="post">
        <table align="center" id="view_table">
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Author</th>
            </tr>
            <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($rt);
            
            ?>
            <tr>
                <td><?php echo $row['bookid'];?><input type="hidden" name="bookid<?php echo $i; ?>"  value="<?php echo $row['bookid'];?>"/></td>
                <td><input type="text" 
                           name="title<?php echo $i; ?>" value="<?php echo $row['title'];?>"/></td>
                <td><input type="text" name="price<?php echo $i; ?>"  value="<?php echo $row['price'];?>"/></td>
                <td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author'];?>"/></td>
            </tr>
            <?php
            }
            ?>
        </table>
            <p align="center"><input type="submit" value="Update" /></p>
        </form>
    </body>
</html>