<?php
	$question_code=$_POST["question_code"];
	if ( !( $database = mysqli_connect( "localhost", "comment", "Wr8SEN9xGtTK8Nfk" ) ) )
    	die( "Could not connect to database </body></html>" );
	if ( !mysqli_select_db($database,"comment_area" ) )
    	die( "Could not open products database </body></html>" );
   else
      
   if ( !( $result = mysqli_query($database,"SELECT * FROM `question` WHERE `question_code`=$question_code") ) )
	{
		print( "<p>Could not execute query!</p>" );
		die( mysqli_error() . "</body></html>" );
	}
	echo "success";
	while ( $row = mysqli_fetch_row( $result ) )
	{
		$search=0;
		foreach ( $row as $key=>$value ){
			echo $value."||";
		}
	}

    mysqli_close( $database );
?>