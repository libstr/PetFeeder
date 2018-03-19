<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100" rel="stylesheet">
</head>
<body>

</body>
</html>


<?php
$font="Josefin Sans";
$siz=10;

$file = fopen("state.txt","w+");
ftruncate($file,0);
if (isset($_POST['state'])) {
	echo " ";
    fwrite($file,1);
}else{
	fwrite($file,0);
	ob_flush();
	flush();
	sleep(1);
	$array = explode("\n", file_get_contents('processingControl/positions.txt'));
	$str=$array[0]+'';
	echo '<p style="font-family:'.$font.';font-size: 80px;color: #ccc;">'.$str.'%</p>';
}
fclose($file);

?>