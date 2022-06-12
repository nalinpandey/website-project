<html>
    <title> Payment web page</title>
    <style>
        a:hover{
    border: 1px solid black;
    width: 60px;
    background-color: yellow; 

}
body{
    text-align: center;
    padding: 20px;
    background-image: url("expresso.png");
    background-size: cover;
}
div {
  width: 150px;
  height: 300px;
  background: white;
  transition: width 2s;
  text-align: center;
  font-size:larger;
}
.center {
  margin: auto;
  width: 40%;
  border: 3px solid #73AD21;
  padding: 10px;
}
div:hover {
  width: 500px;
}
#trans{transition-timing-function: ease-in-out;}
    </style>
<body id="trans">
<h1 style="font-size: 100px;"> Welcome <?php echo $_POST["name"]; ?></h1>
<h1> Order receipt</h1><br>
<div class="center" id="trans">
<h3>Your order is: <?php echo $_POST["orderlist"]; ?></h3><br>
The quantity you have ordered is <?php echo $_POST["quantity"]; ?><br><br>
Address: <?php echo $_POST["message"]; ?><br><br>
Contact no: <?php echo $_POST["contact_no"]; ?><br><br>
<?php
$price=$_POST["quantity"]*100;
echo "The price is ".$price;
?>
<br><br>
</div><br>
<a href="https://razorpay.me/@akashtambade?amount=bd6mwPoVV2sRePhB8DGUcw%3D%3D">Proceed</a>
<?php 
$servername = "localhost:3306";
$username = "root";
$password = "root123";
$dbname = "company_db";
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
$sqlquery = "INSERT INTO table VALUES
    ($_POST["name"], $_POST["orderlist"] ,$_POST["quantity"], $_POST["contact_no"],$_POST["message"])";
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>
</div>
</body>
</html>