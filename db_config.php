<?php

error_reporting(E_ALL &amp;~E_DEPRICATED &amp;~E_NOTICE);
session_start();
define('DB_DRIVER', 'mysql');
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','compaqv45');
define('DB_DATABASE','task1');	

$dboptions = array(
				PDO::ATTR_PERSISTENT =&gt; FALSE,
				PDO::ATTR_DEFAULT_FETCH_MODE =&gt;PDO::FETCH_ASSOC,
				PDO::ATTR_ERRMODE = &gt;PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND =&gt;'SET NAMES utf8',
				);

try
{
	$db = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE,DB_USER,DB_PASS,$dboptions);
	echo "Connection successfull";
}
catch(Exception $ex)
{
	echo $ex-&gt;getMessage();
	die;
}

//get error/success messages
if ($_SESSION["errorType"] != "" &amp;&amp; $_SESSION["errorMsg"] != "" ) {
    $ERROR_TYPE = $_SESSION["errorType"];
    $ERROR_MSG = $_SESSION["errorMsg"];
    $_SESSION["errorType"] = "";
    $_SESSION["errorMsg"] = "";
}

?>