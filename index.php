<?php
    $rand = rand(0, 1);
    $GUI_URL = "gui.html";
    $MS_URL = "ms.html";

    echo $rand;

    if ($rand == 0) {
        $content = file_get_contents($GUI_URL);
        echo $content;
    } else {
        $content = file_get_contents($MS_URL);
        echo $content;
    }