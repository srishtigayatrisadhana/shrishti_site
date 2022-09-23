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
  

?>