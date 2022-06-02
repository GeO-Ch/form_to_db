<?php
//connection
$host = "localhost";
$dbname = "sql_connector";
$username = "root";
$password = "RooTpAsSworD"; 


$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("connection error: " . mysqli_connect_errno());
}
echo "connection successfull!!";

//see the data
echo "The data = ";
print_r($_POST);


$name = $_POST["name"];
$insurance = filter_input(INPUT_POST, "insurance", FILTER_VALIDATE_INT);

$sql = "INSERT INTO userdetails(_name, insur_numb)
VALUES (?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

//type specification chars s = string i = int statement
mysqli_stmt_bind_param($stmt, "si",
                       $name, 
                       $insurance);


//passing it as an argument
mysqli_stmt_execute($stmt);

echo "Success!";
?>
