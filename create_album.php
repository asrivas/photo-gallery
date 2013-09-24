<?php 
	$success = isset($_POST['AddAlbum']) && ($_POST['title'] != "");
?>

<?php
	if($success){
		echo 'Congrats, the album was created';
	}
?>

<form action="signup.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<label>Album Title: 
		<input type="text" name="title" />
		</label>
	</fieldset>
</form>