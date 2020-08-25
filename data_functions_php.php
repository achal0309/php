 <?php
        $temp = mysqli_connect("localhost","root","Achal@12345","ecommerce") or die(mysqli_error($temp));
        $select_query = "SELECT id,email,first_name FROM users";
        $select_query_result = mysqli_query($temp, $select_query) or die(mysqli_error($temp));
?>
<html>
    <head>
         <style>
            .container_decor{
                background-color: white;
                color:black;
            }
            .adjust{
                padding:7px;
                background-color: yellow;
            }
         </style>
         <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <title>TABLE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 style="padding:20px">LINKING PHP WITH MYSQL SERVER</h1>
        <div class="container container_decor">
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr><th>ID</th><th>EMAIL</th><th>FIRST_NAME</th></tr>
                    <?php while($row = mysqli_fetch_array($select_query_result)) {?>
                    <tr><td><?php echo $row['id']." "?></td><td><?php echo $row['email']." "?></td><td><?php echo $row['first_name']." "?></td></tr>
                    <br>
                    <?php }?>
                </tbody>
            </table>
            <div class="row">
                <div class ="col-xs-2">Products</div>
                <div class="col-xs-10"><?php echo number_of_products_purchased($temp, $row['id']); ?></div>
        </div>
        </div>  
    </body>
</html>
<?php
function number_of_products_purchased($temp,$user_id)
{
    $users_products_query = "SELECT id FROM users_products WHERE user_id='$user_id'";
    $users_products_result = mysqli_query($temp, $users_products_query);
    $number_of_products = mysqli_num_rows($users_products_result);
    return $number_of_products;
}
?>


