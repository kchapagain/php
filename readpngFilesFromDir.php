<?php
/*
        File information
        File Name: function.php
        Description: Reads png file from directory
        Created by : Kamal Chapagain
        Created on: 07/03/2015
*/

function readFileFromDir($dirName)
{
    $dir = $dirName;
    $images = array();
    $i = 0;
    if (is_dir($dir)) {

        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                $parts = explode('.', $file);
                $extension = array_pop($parts);
                if ($extension == 'png') {
                    //display only if file is .png
                    echo $file . "[" . $i . " ] <br>";
                    $images[$i] = $file;
                    $i++;
                }
            }
            closedir($dh);
        }
    } else {
        echo "No Dir found";
    }
}

readFileFromDir("../images/");
