<?php
session_start();

if (isset($_SESSION['id'])) {
    // Put stored session variables into local PHP variable
    $uid = $_SESSION['id'];
    $usname = $_SESSION['username'];
    $result = "Test variables: <br /> Username: ".$usname. "<br /> Id: ".$uid;
} else {
    $result = "You are not logged in yet";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $usname ;?> - Test Site</title>
</head>
 
<body>
<?php
echo $result;
?>
</body>
</html>