<!DOCTYPE HTML>
<html>
<?php 

$command = escapeshellcmd('/var/www/backupNow.py');
$output = shell_exec($command);
echo $output;

//header("Location: backup.php");
?>
<div>
<a class="click-me" href="backup.php">Return to Backup Screen</a>
</div>
</html>