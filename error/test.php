<?php

try{
	throw new Exception("Mensagem de erro");
	echo 'Não executa';
}catch(Exception $e)
{
	echo $e->getMessage();
}

echo 'Executa';