<?php
include 'class.streaming.php';

$stream = new VideoStream($_GET['file']);
$stream->start();