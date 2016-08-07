<?php
require_once('getid3/getid3.php');

function sec2min($sec){
    return floor($sec/60).":".($sec%60)."";
}

function b2mb($b) {
    return floor($b/1024/1024);
}

?>

<ul class="filelist">
    
    <?php
    
    $folder = 'videos/';
    $alledateien = scandir($folder);
    $tags = new getID3;

    foreach ($alledateien as $datei) {
        if($datei != '.' and $datei != '..') {
            $filetags = $tags->analyze($folder.$datei);
            ?>
            
            <li class="<?php if($_GET['file'] == $datei) { echo 'active'; } ?>"><a href="?file=<?php echo $datei ?>">
                <div class="title"><?php echo substr($datei, 0, strpos($datei, '.')) ?></div>
                <div class="row">
                    <div class="col-md-6"><?php echo sec2min($filetags['playtime_seconds']) ?></div>
                    <div class="col-md-6 text-right"><?php echo b2mb(filesize($folder.$datei)) ?>MB</div>
                </div>
            </a></li>
    
            <?php
        }
    };

    ?>
    
</ul>
