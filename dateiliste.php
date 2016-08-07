<?php

function b2mb($b) {
    return floor($b/1024/1024);
}

?>

<ul class="filelist">
    
    <?php
    
    $folder = 'videos/';
    $alledateien = scandir($folder);

    foreach ($alledateien as $datei) {
        if(substr($datei, strpos($datei, '.')) == '.mp4') {
            ?>
            
            <li class="<?php if($_GET['file'] == $datei) { echo 'active'; } ?>"><a href="?file=<?php echo $datei ?>">
                <div class="title"><?php echo substr($datei, 0, strpos($datei, '.')) ?></div>
                <div><?php echo b2mb(filesize($folder.$datei)) ?>MB</div>
            </a></li>
    
            <?php
        }
    };

    ?>
    
</ul>
