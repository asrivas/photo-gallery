<?php 
	require_once('photo_lib.php');

	$all_albums = getArray("albums");
	$albums = array();
	foreach($all_albums as $a){
	   array_push($albums, $a['title']);
	}

	if($success){
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
                <li class="active"><a href="index.html">Home</a></li>
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
    <div class="container" style="width: 80%;" align="center">
      <div class="jumbotron" align="left">
        <h1>Select an album to view.</h1>
	    <form action="view_album.php" method="post" enctype="multipart/form-data">
	      <fieldset>
		
			<label>Album: </label>
			<select name="album">
<?php
                    foreach ($albums as $a){
                       echo "<option value='$a'>$a</option>\n";
                    } 
?>	      
			</select><br/>
			<input type="submit" name="ViewAlbum" value="View &raquo;" class="btn btn-lg btn-primary">
	      </fieldset>
	    </form>
      </div>
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