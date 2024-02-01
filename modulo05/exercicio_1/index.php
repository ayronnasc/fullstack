<?php 

for ($i=0; $i <= 1000; $i++) { 
    file_put_contents('file.txt', "3 X $i = ".(3*$i)."\n\n", FILE_APPEND);
}

echo 'Terminado';