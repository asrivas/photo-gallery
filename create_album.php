<?php 

	// UPLOAD FILE CODE taken from W3SCHOOLS
  require_once('photo_lib.php');

  $uploaded = false;

  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file"]["name"]);
  $extension = end($temp);

  //echo $_FILES['file']['name'];
  echo $_FILES["file"]["error"];
  //echo ($_FILES["file"]["type"]);
  //echo ($_FILES["file"]["type"] == "image/jpg");

  if ((($_FILES["file"]["type"] == "image/gif")
  || ($_FILES["file"]["type"] == "image/jpeg")
  || ($_FILES["file"]["type"] == "image/jpg")
  || ($_FILES["file"]["type"] == "image/pjpeg")
  || ($_FILES["file"]["type"] == "image/x-png")
  || ($_FILES["file"]["type"] == "image/png"))
  && in_array($extension, $allowedExts))
  {
    if ($_FILES["file"]["error"] > 0)
      {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
      }
    else
      {
   //   echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   //   echo "Type: " . $_FILES["file"]["type"] . "<br>";
   //   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   //   echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

      if (file_exists("photos/" . $_FILES["file"]["name"]))
        {
        echo $_FILES["file"]["name"] . " already exists. ";
        }
      else
        {
        move_uploaded_file($_FILES["file"]["tmp_name"],
       "photos/" . $_FILES["file"]["name"]);
        $uploaded = true;
    //    echo "Stored in: " . "photos/" . $_FILES["file"]["name"];
        }
      }
  }
  else
  {
    if(isset($_POST['AddPhoto'])){
      echo "Invalid file";
    }
  }

$success = isset($_POST['AddAlbum']) && ($_POST['title'] != "") && $uploaded; 

?>

<?php
	if($success){
		$albums = getArray("albums");
		$photos = array($_FILES['photo1']['name'], $_FILES['photo2']['name'], $_FILES['photo3']['name']);
		$a = array("title" => $_POST['title'], 'password' => $_POST['password'], "photos" => $photos);
		array_push($albums, $a);
		saveArray($albums, "albums");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

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

<?php
	if($success){
		//echo 'Congrats, the album was created';
?>
	<h3>Congratulations, the album was created<h3>
<?php
	} else {
    if(isset($_POST['AddAlbum'])){
		 echo '<span style="color: red;">There were errors.<br></span>';
    }
	}
?>

	<!--    -->
      <!-- Main component for a primary marketing message or call to action -->
    <div class="container" style="width: 80%;" align="center">
      <div class="jumbotron" align="left">
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
