<?php

$problem = array('O panelaço ', 'As vaias são ', 'As manifestações são', 'A crise é ', 'O impeachment é ', 'A alta do dolar é ',
			'A operação lava-jato é ', 'Os ataques à Petrobras são ', 'Os altos índices de rejeição do governo são ');

$nature = array('uma invensão ', 'uma estratégia ', 'uma manobra ', 'uma bandeira ', 'um golpe ',	'um teoria ', 'um ato de ódio ','uma tática');

$guilty = array('do FHC ', 'dos almofadinhas ', 'da elite branca ', 'do PIG ', 'da oposição ', 'do Olavo de Carvalho ', 'dos coxinhas ',			
			'do PSDB ',	'da direita fascista ', 'da VEJA ', 'dos burgueses ', 'do capitalismo selvagem ', 'do Lobão ', 'da Rede Globo ',
			'do Juiz Sérgio Moro ', 'dos Estados Unidos ', 'do TCU ', 'do Danilo Gentili ');

$reason = array('para ameassar ', 'para desorganizar ', 'para desmoralizar ',	'para destruir ', 'para controlar ', 'para subverter ',
		 'para manipular ', 'para desrespeitar ', 'para oprimir ', 'para prejudicar ', 'para destituir ');

$victim = array('a presidenta!', 'os movimentos sociais!', 'os avanços da democracia!','as conquistas do trabalhadores!', 'o PT!',
		 'o Lula!', 'a mandioca!', 'a Mulher-Sapiens!', 'os pobres!', 'os direitos dos trabalhadores!', 'a pátria educadora!',
		 'o resultado das urnas!');

function shuffleValues($list){
	$length = count($list);
	$index = floor(mt_rand(0, $length -1));	
	return $list[$index];
}

function generateApologies(){
	return shuffleValues($GLOBALS['problem']) . shuffleValues($GLOBALS['nature']) . shuffleValues($GLOBALS['guilty']) . shuffleValues($GLOBALS['reason']) . shuffleValues($GLOBALS['victim'])."\n";
}

echo generateApologies();

?>