<?php
// mkdir("test", 0777, true);
// file_put_contents("test/f.txt", "Hasan");
// sleep(4);
// rmdir("test");
// unlink("test/f.txt");
// sleep(2);
// rmdir("test");

deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");

function deleteDir($path)
{
    $filesInPath = scandir($path);
    if (count(scandir($path)) > 2) {
        foreach ($filesInPath as $file) {
            if ("." != $file && ".." != $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                unlink($filePath);
            }
        }
    }
    rmdir($path);
}
