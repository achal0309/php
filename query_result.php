<?php
$temp = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($temp));
$select_query = "SELECT id,email,first_name FROM users";      //THE QUERY IS WRITTEN IN FORM OF STRING
$select_query_result = mysqli_query($temp, $select_query) or die(mysqli_error($temp)); //THIS STATEMENT EXECUTES THE QUERY USING MYSQLI_QUERY
$row = mysqli_fetch_array($select_query_result);
echo $row1['id']." ";
echo $row1['email']." ";
echo $row1['first_name']." "."<br>";
$row2= mysqli_fetch_array($select_query_result);
echo $row2[0]." ";
echo $row2[1]." ";
echo $row2[2]." ";
foreach($row as $index)
{
    echo $index." ";
}



