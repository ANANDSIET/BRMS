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
        <title>Deletion</title>
    </head>
    <body>
        <h1 align="center">Delete Book Records </h1><hr/>
        <link rel="stylesheet" href="./css/viewStyle.css">
        <form action="deletion.php" method="post">
        <table align="center" id="view_table">
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Author</th>
                <th>Select to delete</th>
            </tr>
            <?php
            for($i=1;$i<=$num;$i++)
            {
                $row=mysqli_fetch_array($rt);
            
            ?>
            <tr>
                <td><?php echo $row['bookid'];?></td>
                <td><?php echo $row['title'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['author'];?></td>
                <td><input type="checkbox" value="<?php echo $row['bookid']?>" name="b<?php echo $i;?>"/></td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="5" align="center"><input type="submit" value="Delete"></td>
                
            </tr>
        </table>
        </form>
    </body>
</html>