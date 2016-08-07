<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML5 Streaming</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="container">
          <div class="row">
            <h1><?php echo substr($_GET['file'], 0, strpos($_GET['file'], '.')) ?></h1>
          </div>
          <div class="row">
              <div class="col-md-8 video-box">
                <video width="1080" controls>
                  <source src="stream.php?file=<?php echo $_GET['file'] ?>" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="col-md-4">
                <?php include 'dateiliste.php' ?>
              </div>
          </div>
          
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>