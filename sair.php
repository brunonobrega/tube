<?php
	session_start();
	session_destroy();
	
	echo "<script>var date = new Date();var minutes = 1;date.setTime(date.getTime() + (minutes * 3 * 1000));document.cookie = 'btb_fail=Session expired.; expires=' + date.toUTCString() + 'path=/';location.href='index.php';</script>";
?>