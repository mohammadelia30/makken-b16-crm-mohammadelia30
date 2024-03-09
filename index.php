<?php
$conn = mysqli_connect("localhost", "root", "", "crm");
if (mysqli_connect_errno()) {
    printf("connaction faild", mysqli_connect_error());
    exit();
}
$type = $_GET["type"];
$table = $_GET["own"];
if ($type == "Add") {
    $endk = array_key_last($_POST);
    $query = "INSERT INTO $table (";
    foreach ($_POST as $key => $value) {
        $query .= $key;
        if ($key !== $endk) {
            $query .= ",";
        } else {
            $query .= ")";
        }
    }
    $query .= "VALUES (";
    foreach ($_POST as $key => $value) {
        if ($key !== $endk) {
            $query .= "'$value',";
        } else {
            $query .= "'$value');";
        }
    }
    echo $query;
    mysqli_query($conn, $query);
    header("Location: ./$table/" . "$table" . "_list.php");
} elseif ($type == "Edit") {
    $id = $_GET["id"];
    $endk = array_key_last($_POST);
    $query = "UPDATE $table SET ";
    foreach ($_POST as $key => $value) {
        $query .= "$key='$value'";
        if ($key !== $endk) {
            $query .= ", ";
        } else {
            $query .= " ";
        }
    }
    $query .= "WHERE id=$id;";
    echo $query;
    mysqli_query($conn, $query);
    header("Location:" . "./$table/$table". "_list.php");
}
