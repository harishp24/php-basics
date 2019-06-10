<?php

//readfile('colors.txt');

//$colors = fopen("colors.txt", "r");
// echo fread($colors, filesize("colors.txt"));
// fclose($colors);
// $colors = fopen("colors.txt", "r");
// $colors_copy = fopen("colors-copy.txt", "w");
// while(!feof($colors)){
//     fwrite($colors_copy, fgetc($colors));
// }
// fclose($colors);
// fclose($colors_copy);

function copy_file($file1, $file2){
    $org_file = fopen($file1, "r");
    $copied_file = fopen($file2, "w");
    while(!feof($org_file)){
        fwrite($copied_file, fgets($org_file));
    }
    fclose($org_file);
    fclose($copied_file);
}

// copy_file("colors.txt", "color-test.txt");
// echo filetype('colors.txt');
// file_exists();
// unlink('color-test.txt');
// fseek();
// ftell();
// frewind();