<img src="uploads/banner_335x280.jpg" />

<?php
exit;
$info_file = pathinfo('uploads/teste.jpg');

var_dump($info_file);

$nome_final = $info_file['filename']."_".uniqid().".".$info_file['extension'];

echo $nome_final;

// $a = 0;
// $arquivo = 'teste.jpg';
// while(file_exists('uploads/'.$arquivo))
// {
// 	$a++;
// 	$arquivo = $info_file['filename']."_$a.".$info_file['extension'];
// 	// echo $arquivo.'<br>';
// }

// move_uploaded_file(filename, $arquivo);
// echo $arquivo;