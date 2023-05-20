<?php

function clearCash($root, $v){
    if (is_dir($root)) {
        $files = scandir($root);

        foreach ($files as $file) {
            if ($file == "." || $file == "..")
                continue;
            if (is_dir($root . "/" . $file)) {
                clearCash($root . "/" . $file, $v);
            } else {
                if (strpos($file, '.css')) {
                    $content = file_get_contents($root . "/" . $file);
                    $content = preg_replace('/@import.+url\(([\'|\"])(.+).css(.+)\)/', '@import url("${2}.css?v='.$v.'")', $content);
                    file_put_contents($root . "/" . $file, $content);
                }
            }
        }
    }
}