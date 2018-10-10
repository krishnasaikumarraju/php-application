<!DOCTYPE html>
<html>
<body> 

<?php
$cars=array
(
array("volvo",22,18),
array("BMW",18,13),
array("saab",13,10),
array("land rover",15,12)	
);
for ($row=0;$row<4;$row++){
	echo "<p> row number $row </p>";
	echo "<ul>";
for($col=0;$col<3; $col++){
	echo "<li>" .$cars[$row][$col]."</li>";
	}echo "</ul>";

} 
?>
<?php
$d=mktime(1,3,5,6,8,9);
	echo "today time is" .date("y-m-d h:i:sa",$d);
	echo "<br>"

?>
<?php
$d=strtotime(tomorrow);
echo "tomorrow time is" .date("y-d-m h:i:sa");

?>

</body>
</html>