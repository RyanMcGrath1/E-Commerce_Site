<?php
$auth1 = $_POST['username'];
$auth2 = $_POST['password'];

$mysqli = new mysqli('localhost', 'mcgratr1', 'Thompson16!', 'mcgratr1_Test');

//echo phpinfo();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit;
}

$baseUrlHeader = "Location: http://cyan.csam.montclair.edu/~mcgratr1/Final%20Project/src/";
$accountTypeURLs = ["customer/HTML/index.html", "employee.php"];

$stmt = $mysqli->prepare("SELECT account_type FROM auth_info WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $auth1, $auth2);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0){
    header($baseURLHeader);
    exit();
}
$user = $result->fetch_assoc();
header($baseUrlHeader . $accountTypeURLs[$user['account_type']]);

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>
