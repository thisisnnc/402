<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?
	if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$objConnect = mysql_connect("localhost","root","trackkingsystem") or die("Error Connect to Database");
		$objDB = mysql_select_db("mydatabase");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(FilesName) VALUES ('".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysql_query($strSQL);		
	}
?>
<a href="จนทตารางกำหนดการ2.php">View files</a>
</body>
</html>