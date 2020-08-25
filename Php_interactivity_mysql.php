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
        </div>
    </body>
</html>


