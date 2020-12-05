<?php
// class DB{
//     public $con;
//     protected $servername = "localhost";
//     protected $username = "root";
//     protected $password = "";
//     protected $dbname = "project1";

//     function __construct(){
//         $this->con = mysqli_connect($this->servername, $this->username, $this->password);
//         mysqli_select_db($this->con, $this->dbname);
//         mysqli_query($this->con, "SET NAMES 'utf8'");
//     }

// }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
    echo "loi <br>";
}

$sql = "SELECT * FROM khach-hang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo "A";
  }
} else {
  echo "0 results";
}
$conn->close();
?>