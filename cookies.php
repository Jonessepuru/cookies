<?php
// 1. Define the values
$first_name     = "Lerato";
$last_name      = "Nkosi";
$student_number = "20251234";
$created_time   = date("Y-m-d H:i:s"); // time the cookie was created

// 2. Create the cookies (expire in 1 day, available site-wide)
setcookie("first_name", $first_name, time() + 86400, "/");
setcookie("last_name", $last_name, time() + 86400, "/");
setcookie("student_number", $student_number, time() + 86400, "/");
setcookie("created_time", $created_time, time() + 86400, "/");
?>
<!DOCTYPE html>
<html>
<head><title>PHP Cookies Demo</title></head>
<body>
<?php
// 3. Display what we just set
echo "<h3>Cookies created:</h3>";
echo "First name: " . $first_name . "<br>";
echo "Last name: " . $last_name . "<br>";
echo "Student number: " . $student_number . "<br>";
echo "Time created: " . $created_time . "<br>";

// 4. On a refresh, read from $_COOKIE
if (isset($_COOKIE['first_name'])) {
    echo "<hr><h3>Reading from \$_COOKIE (after refresh):</h3>";
    echo "First name: " . htmlspecialchars($_COOKIE['first_name']) . "<br>";
    echo "Last name: " . htmlspecialchars($_COOKIE['last_name']) . "<br>";
    echo "Student number: " . htmlspecialchars($_COOKIE['student_number']) . "<br>";
    echo "Time created: " . htmlspecialchars($_COOKIE['created_time']) . "<br>";
} else {
    echo "<p><em>Refresh the page to see the cookies read from \$_COOKIE.</em></p>";
}
?>
</body>
</html>
