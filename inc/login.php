<?php 

if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
	/* 
	   Up to you which header to send, some prefer 404 even if 
	   the files does exist for security
	*/
	header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

	/* choose the appropriate page to redirect users */
	die( header( 'location: /error.php' ) );

}

echo '<script>console.log("Connection starting")</script>';

define("SERVER", "localhost");
define("DB_SECRET_KEY", "password");
define("DB_USER_NAME", "dbservice");
define("DB", "srishti_students_db");
$db_conn = new mysqli(SERVER, DB_USER_NAME, DB_SECRET_KEY, DB);

// Check connection
if (!$db_conn) {
    die('<script>console.log("Connected failed")</script>' . mysqli_connect_error());
  }
  echo '<script>console.log("Connected successfully")</script>';

 

// $sql_query = "SELECT Secret FROM `user_info` WHERE Name = \'vignesh\'";
// echo '<script>console.log("'.(string)$sql_query.'")</script>';



$sql = "INSERT INTO `user_info` (`Timestamp`, `SerialNo`, `StudentNumber`, `Name`, `Email`, `Secret`, `MobileNo`, `Gender`, `Profession`, `ExistingSadhaka`, `HowYouKnow`, `WhyYouWant`, `PastExperience`) VALUES (CURRENT_TIMESTAMP, NULL, \'3\', \'Vignesh_4\', \'srishti@vignesh.com\', \'password\', \'9994396162\', \'Male\', \'IT\', \'0\', \'test\', \'test\', \'test\')";


if(mysqli_query($db_conn , $sql))
   {
    echo '<script>console.log(" Successful")</script>';
   }
else
   {
    echo '<script>console.log(" unSuccessful")</script>';
   }

// if ($result = $db_conn -> query($sql_query)) {
// 	echo "Returned rows are: " . $result -> num_rows;
// 	// Free result set
// 	$result -> free_result();
//   }
// else echo "no data";


// $total = 555;
// echo "Total rows: " . $total;

mysqli_close($db_conn);


?>