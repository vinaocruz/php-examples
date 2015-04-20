<?php

setcookie("test", "Ola", time() + 1 * 24 * 60 * 60 );
setcookie("id", "123", time() + 1 * 24 * 60 * 60 );


if(isset($_COOKIE['test']) == false)
{
	echo 'primeiro acesso';
}