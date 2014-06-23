function conn()
	{
		$server = "localhost"
		$username = "root";
		$password = "";
		$database = "union";

		$link = mysql_connect($server,$username,$password);
		if (!$link) 
		{
			die('Gagal Konek: '.mysql_error());
		}

		$db = mysql_select_db($database);
		if (!$db) 
		{
			die(' Error : '.mysql_error());
		}

		return $link;
	}