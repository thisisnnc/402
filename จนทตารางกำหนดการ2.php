<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?
	$objConnect = mysql_connect("localhost","root","trackkingsystem") or die("Error Connect to Database");
	$objDB = mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM files";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="200" >
<tr>
<th width="50"> <div >Files ID </div></th>
<th width="150"> <div >Files Name </div></th>
</tr>
<?
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
<tr>
<td><div><?=$objResult["FilesID"];?></div></td>
<td><a href="myfile/<?=$objResult["FilesName"];?>"><?=$objResult["FilesName"];?></a></td>
</tr>
<?
	}
?>
</table>
<?
mysql_close($objConnect);
?>
</body>
</html>