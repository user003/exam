<?php

#Autor Serge Skudaev 07/27/042004

include('database_access_param.php');



		if($password1 != $password2)
		{
		echo "Passwords do not match! Please try again";

		$newaction='adduser';

		include('index.php');

		}
		else
		{

$password=md5($password1);


		$db_link=mysql_connect($hostname, $dbuser, $dbpassword) or die("Unable to connect to the server!");

		mysql_select_db($dbname) or die("Unable to connect to the database.");

		$sql="select * from students where username='".$username."'";

		$result=mysql_query($sql);

			if(mysql_numrows($result))
			{
			echo "The User name is in use. Please choose different user name!";
			$newaction="adduser";
			include('index.php');

			}
			else
			{

			$sql="insert into students(stid, lastname, firstname, username, password, email, role)
					values
					(0, \"$lastname\",\"$firstname\",\"$username\", \"$password\", \"$email\",\"$arole\")";

					if(!mysql_query($sql))
					{
					echo mysql_errno() . ": ";
					echo mysql_error() . "<BR>";
					}
					else{
					$message="User inserted";


					$idsql="select MAX(stid) as id from students";

					$idresult=mysql_query($idsql);

						if(mysql_numrows($idresult))
						{

						$row=mysql_fetch_row($idresult);

						$stid=$row[0];
						$message="";
						}



					}

					 include('view_user_form.php');

		   }




	 }


	 			//echo '<p align=center>'.$message.'</p>';



?>