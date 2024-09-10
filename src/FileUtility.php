<?php
// FileUtility.php

class FileUtility {
    public static function writeToFile($filename, $data) {
        $file = fopen($filename, 'w');
        if ($file === false) {
            throw new Exception("Unable to open file for writing.");
        }
        fwrite($file, $data);
        fclose($file);
    }

    public static function readFromFile($filename) {
        $file = fopen($filename, 'r');
        if ($file === false) {
            throw new Exception("Unable to open file for reading.");
        }
        $data = fread($file, filesize($filename));
        fclose($file);
        return $data;
    }
}
?>
