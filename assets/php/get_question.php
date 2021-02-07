<?php
	$question_code=$_POST["question_code"];
	$returnjson=array();
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
	mysqli_close( $database );
	// echo "success";
	while ( $row = mysqli_fetch_array( $result ) )
	{
		$question_title=$row['question_title'];
		$question=$row['question'];
		$answer=$row['answer'];
		$returnjson[]=array(
			"question_title"=>$question_title,
			"question"=>$question,
			"answer"=>$answer,
		);
	}
	echo json_encode($returnjson);

    
?>