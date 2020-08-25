<?php
$temp = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($temp));
$select_query = "SELECT id,email,first_name FROM users";      //THE QUERY IS WRITTEN IN FORM OF STRING
$select_query_result = mysqli_query($temp, $select_query) or die(mysqli_error($temp)); //THIS STATEMENT EXECUTES THE QUERY USING MYSQLI_QUERY
$total_rows_fetched = mysqli_num_rows($select_query_result);//MYSQLI_NUM_ROWS RETURNS THE NUMBER OF ROWS IN QUERY
echo $total_rows_fetched;
?>
