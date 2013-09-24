<?php 
	$success = isset($_POST['AddAlbum']) && ($_POST['title'] != "");
?>

<?php
	if($success){
		echo 'Congrats, the album was created';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap-3.0.0/assets/ico/favicon.png">

    <title>Instant Photo Gallery</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR -->


  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Instant Gallery</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="albums.php">View Albums</a></li>
                <li><a href="create_album.php">Create Album</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connect <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Invite a Friend</a></li>
                    <li><a href="#">Send to a Friend</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

	<!--    -->
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" >
        <h1>Create an Album</h1>
        <form action="create_album.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<label>Album Title: </label>
				<input type="text" name="title" /><br/>
				<label>Photo: </label><br/>
                <input type="file" name="photo1" id="file"><br/>
                <label>Photo: </label>
                <input type="file" name="photo2" id="file"><br/>
                <label>Photo: </label>
                <input type="file" name="photo3" id="file"><br/>
				<p>Use this password to edit your album later.</p>
				<label> Password:</label>
                <input name="password" type="password" /><br/>
				<input type="submit" name="AddAlbum" value="Create &raquo;" class="btn btn-lg btn-primary">
			</fieldset>
    	</form>
      </div>

      <!-- /END THE FEATURETTES -->
            <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Thanks Twitter Bootstrap!</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.0.0/assets/js/holder.js"></script>
  </body>
</html>