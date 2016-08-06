<html>
    <head>
        <title>Streaming!!!</title>
    </head>
    <body>
        <h1>Stream</h1>
        <video width="1080" controls>
          <source src="stream.php?file=<?php echo $_GET['file'] ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </body>
</html>