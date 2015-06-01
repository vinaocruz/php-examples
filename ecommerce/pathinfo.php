<?php

$info_file = pathinfo('uploads/teste.jpg');

var_dump($info_file);

$a = 0;
$arquivo = 'teste.jpg';
while(file_exists('uploads/'.$arquivo))
{
	$a++;
	$arquivo = $info_file['filename']."_$a.".$info_file['extension'];
	// echo $arquivo.'<br>';
}

move_uploaded_file(filename, $arquivo);
// echo $arquivo;