
<?
	mysql_connect("localhost","root");
	mysql_select_db("poll");
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$q=mysql_query("select * from login where user='$email' and pass='$pass'");
	if($r=mysql_fetch_array($q))
	{
		$_SESSION['uid']=$r['uid'];
		$uid=$r['uid'];
		mysql_query("insert into log values('$uid')");
		echo $r['uid'];
	}
?>
