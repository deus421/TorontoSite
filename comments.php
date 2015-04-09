<?php 
	
	$title = "Toronto : Comment";
	include 'assets/inc/header.php';

	$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if( !empty ($_POST)) {
		$query = "INSERT INTO projectComments
				  SET name = '".sanitize($_POST['name'], $link) . "',
				      comment = '" .sanitize($_POST['comment'], $link) . "'";

	$result = mysqli_query($link, $query);

	$num_rows = mysqli_affected_rows($link);
	}


	function sanitize($data, $link){

		$data = trim($data);
		$data = strip_tags($data);
		$data = htmlentities($data);

		mysqli_real_escape_string($link, $data);

		return $data;
	}
?>	

	<div class="fitMain">
	<div>

	<h1>Thoughts?</h1>
	<div id="errorDiv">

	</div>

	<div id="topComment">
	<form name="commentForm" id="commentForm" method="post" onsubmit="return validateComment()">
	<span>Name:</span>
	<input type="text" size="20" id="name" name="name" maxlength="20" placeholder="Name">
	<br/>
	<span>Comment:</span>
	<textarea rows="5" cols="25" name="comment" id="comment"></textarea>
	<input type = 'submit' value ='Add'/>
	</form>
	</div>
	</div>

	<h1>Comments :</h1>

	<div id = "commentDiv">

<?php

	$query = "SELECT * FROM projectComments";
	$result = mysqli_query($link, $query);
	$num_rows = mysqli_affected_rows($link);
	if( $result && $num_rows > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			echo "<div class = 'commentOnPage'>" .
			"<strong>" . $row['name'] . ":</strong><br/>" .
			$row['comment'] .
			"</div>" . "<br/>" ;
		}
	}

?>
	</div>
	</div>

	<script src="assets/js/javascript.js"></script> 
</body>
</html>