<?php
set_time_limit(0);
if(isset($_GET['key'])){
	$key = $_GET['key'];
	if(strlen($key)!=5)
		die("Key is of length 5, and alphanumeric (both upper and lower case).");
	for($i=0;$i<strlen($key);$i++)
	{
	    $KEY=getenv('KEY');
		if($key[$i]!=$KEY[$i])
			die("Wrong key");
		usleep(200000);
	}
	echo getenv('FLAG');
}
else{
	echo <<<EOD
This time the FLAG is safe from a brute force attack. <a href="source.php">source</a>.
<form action="index.php">
	<input name="key" maxlength="5" size="5"><input type="submit">
</form>
EOD;
}
