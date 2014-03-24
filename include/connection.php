<?php
class Connection
{
	public function openfire_connect()
	{
		$con=mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
		mysql_select_db(OPENFIRE_DATABASE,$con)or die("Could not connect to database ");
	}
	
	public function wise_connect()
	{
		$con=mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
		mysql_select_db(WISECHAT_DATABASE,$con)or die("Could not connect to database ");
	}
}



?>