<?php
$conn = mysqli_connect("localhost","root","","crm");
if (mysqli_connect_errno()) {
    printf("connaction faild", mysqli_connect_error());
    exit();
}
$type = $_GET["type"];
$table = $_GET["own"];
if ( $type == "Add") {
    $endk = array_key_last($_POST);
    $end = end($_POST);
    $query = "INSERT INTO $table (";
    foreach($_POST as $key => $value) {
        $query .= $key;
        if ($key !== $endk) {
            $query .= ",";
        }else{
            $query .=")";
        }
    }
        $query .= "VALUES (";
        foreach($_POST as $value){
            $query .= "'$value'";
            if($value !== $end){
                $query .= ",";
            }else{
                $query .= ");";
        }
    }
    echo $query;
    mysqli_query($conn,$query);
    header("Location: ./$table/"."$table"."_list.php");
}