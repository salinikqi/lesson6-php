<?php 

$my_file = fopen("ds.txt", "w");//write only
// $my_file = fopen("ds.txt", "r");//read only
// $my_file = fopen("ds.txt", "a");//write only por shtohet ne fund te file-it
// $my_file = fopen("ds.txt", "w+");//read only + write only (fshihen te dhenat paraprake ne file)
// $my_file = fopen("ds.txt", "x");//krijohet file i ri per write only


// $myfile = fread($myfile, filesize($myfile));


$teksti = "Digital School";

fwrite($my_file, "teskti i ri");


fclose($my_file);

$tekxt = fopen("file.txt", "w");

fclose($tekxt);

file_put_contents("new.txt", $teksti);

echo file_get_contents("new.txt");


$lista = ['laptop' , 'computer' , 'telefon' , 'lodra'];


//metoda 1
file_put_contents("new1.txt", $lista);
echo file_get_contents("new1.txt");

//metoda 2
$fajlli = fopen("lista.txt", "w");

for($i=0; $i<count($lista); $i++){
    fwrite($fajlli,$lista[$i] . "<br>");
}
fclose($fajlli);


echo file_get_contents("lista.txt");

?>