# get_element_in_sentence
get element in sentence with php / ambil pecahan kalimat dengan php

untuk megambil kata di dalam kalimat maka, kalimat harus di urai satu per satu dengan menggunakan fungsi explode, 
dapat kita lihat pada perintah berikut //

to take the meaning of the word in the sentence, the sentence should be explained one by one using the explode function,
we can see in the following command

<?php
function element($teks,$pemisah,$urutan){
	$pecah = explode($pemisah, $teks);
	$hasil = $pecah[$urutan];
return $hasil;}


$text = "i will go to school";
print "<br>".$text."<br>";
$jum = str_replace(" "," ",$text,$c);

$r=element($text," ",2);
print $r."<br>";

for($i=0;$i<=$c;$i++){
	print $i." ".element($text," ",$i)."<br>";
	}
	
$text="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";	
print "<br>".$text."<br>";
print "<strong>result : </strong><br>";
$jum = str_replace(" "," ",$text,$c);
for($i=0;$i<=$c;$i++){
	print $i." ".element($text," ",$i)."<br>";
	}
