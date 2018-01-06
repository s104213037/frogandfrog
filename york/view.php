<?php
require("dbconnect.php");
function getList() {
	global $conn;
	$sql = "select butterfly.* from butterfly";
	return mysqli_query($conn, $sql);
}
$results=getList();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hello!</title>
</head>

<body>
<table border="1">
<?php
while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr><td>" , $rs['id'] ,
	"</td><td>",'<img src="data:image/png;base64,'.base64_encode($rs['picture']).'"/>',
    "</td><td>" , $rs['scname'],
	"</td><td>", $rs['coname'],
    "</td><td>", $rs['buildtime'],"",
    "</td><td>", $rs['title'],"</td></tr>";
}
?>
</table>
</body>
</html>
