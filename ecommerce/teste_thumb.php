<?php

require 'vendor/autoload.php';

$thumb = PhpThumbFactory::create('uploads/'. $_FILES['foto']['name']);
$thumb->adaptiveResize(475, 475);

$thumb->save('uploads/thumb/casa.jpg');
// $thumb->show();

?>

<img src="uploads/thumb/<?php echo $linha['imagem']; ?>" />