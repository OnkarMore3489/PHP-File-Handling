<!-- 
    write a program to read directory name and extension and displays files with specified 
    extension from that director.also display the size and last access time
-->
<?php
    date_default_timezone_set("Asia/Calcutta");
    $dir_name=readLine("Enter directory name: ");
    $file_ext=readLine("Enter the file extension: ");
   
    $dir=opendir($dir_name);
    echo "\n\nFiles: \n";

    while(($file=readdir($dir))!=false)
    {
        if(strpos($file,$file_ext)!=false)
        {
            echo "\n".$file."\n";
            $filesizebytes=filesize("$dir_name/$file");
            echo "\nsize:".$filesizebytes."\n";
            echo $file." last access date: ".date("f d y H:i:s.".fileatime("$dir_name/$file"));
            echo "\n-----------------------------------------------------------";
        }
    }
    closedir($dir);
?>
