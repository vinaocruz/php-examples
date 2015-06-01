<?php
// var_dump($_POST);
// var_dump($_FILES);

$a = 0;
$arquivo = $_FILES['foto']['name'];
$info_file = pathinfo('uploads/'.$arquivo);

while(file_exists('uploads/'.$arquivo))
{
	$a++;
	$arquivo = $info_file['filename']."_$a.".$info_file['extension'];
}

if(move_uploaded_file($_FILES['foto']['tmp_name'], 
			'uploads/'.$arquivo)){
			// 'uploads/'.uniqid()."_".$_FILES['foto']['name'])){

	echo "arquivo salvo";
}else
{
	echo "falha no upload";
}