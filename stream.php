<?php
include 'class.streaming.php';

$stream = new VideoStream('videos/'.$_GET['file']);
$stream->start();