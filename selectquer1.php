<?php
$temp = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($temp));
$select_query = "SELECT id,email,first_name FROM users";      //THE QUERY IS WRITTEN IN FORM OF STRING
$select_query_result = mysqli_query($temp, $select_query) or die(mysqli_error($temp)); //THIS STATEMENT EXECUTES THE QUERY USING MYSQLI_QUERY
$hold = mysqli_fetch_array($select_query_result);
$size_of_hold = count($hold);
echo $size_of_hold;
/*
for($index=0;$index<$size_of_hold;$index++)
{
    echo $hold[$index]." ";
}
*/