<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
//
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// define variables and set to empty values
$type = $firstname = $lastname = $Sex = $Age = $Add =$City =$province =
  $postcode = $Country = $Tell = $Email = $Emerperson = $Emerphone 
  =$Size =" ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $type = test_input($_POST["Type"]);
  $firstname = test_input($_POST["firstnameeng"]);
  $lastname = test_input($_POST["lastnameeng"]);
  $Sex = test_input($_POST["gender"]);
  $Age = test_input($_POST["age"]);
  $Add = test_input($_POST["Address"]);
  $City = test_input($_POST["city"]);
  $province = test_input($_POST["province"]);
  $postcode = test_input($_POST["postcode"]);
  $Country = test_input($_POST["country"]);
  $Tell = test_input($_POST["phone"]);
  $Email = test_input($_POST["Email"]);
  $Emerperson = test_input($_POST["emerperson"]);
  $Emerphone = test_input($_POST["emerphone"]);
  $Size = test_input($_POST["size"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2ข้อมูลผู้ลงทะเบียน</h2>";
echo $type;
echo "<br>";
echo nl2br("$firstname &nbsp;&nbsp; $lastname");
echo "<br>";
echo $Sex;
echo "<br>";
echo $Age;
echo "<br>";
echo $Add;
echo "<br>";
echo $City;
echo "<br>";
echo $province;
echo "<br>";
echo $postcode;
echo "<br>";
echo $Country;
echo "<br>";
echo $Tell;
echo "<br>";
echo $Email;
echo "<br>";
echo $Emerperson;
echo "<br>";
echo $Emerphone;
echo "<br>";
echo $Size;
echo "<br>";

$sql = "INSERT INTO userprofile1 (Type,firstnameeng ,lastnameeng , 
gender, age,Address,city,province,postcode,country,phone,Email,emerperson,emerphone,size) 
VALUES ('$type', '$firstname', '$lastname', '$Sex', '$Age','$Add',
'$City','$province','$postcode','$Country','$Tell','$Email','$Emerperson','$Emerphone','$Size')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>