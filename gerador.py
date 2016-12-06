#!/usr/bin/python
# -*- coding: utf-8 -*-
import math
import random

problem = ['O panelaço ', 'As vaias são ', 'As manifestações são', 'A crise é ', 'O impeachment é ', 'A alta do dolar é ',
			'A operação lava-jato é ', 'Os ataques à Petrobras são ', 'Os altos índices de rejeição do governo são ']

nature = ['uma invenção ', 'uma estratégia ', 'uma manobra ', 'uma bandeira ', 'um golpe ', 'um teoria ', 'um ato de ódio ','uma tática ']

guilty = ['do FHC ', 'dos almofadinhas ', 'da elite branca ', 'do PIB ', 'da oposição ', 'do Olavo de Carvalho ', 'dos coxinhas ',			
			'do PSDB ',	'da direita fascista ', 'da VEJA ', 'dos burgueses ', 'do capitalismo selvagem ', 'do Lobão ', 'da Rede Globo ',
			'do Juiz Sérgio Moro ', 'dos Estados Unidos ', 'do TCU ', 'do Danilo Gentili ']

reason = ['para ameaçar ', 'para desorganizar ', 'para desmoralizar ',	'para destruir ', 'para controlar ', 'para subverter ',
		 'para manipular ', 'para desrespeitar ', 'para oprimir ', 'para prejudicar ', 'para destituir ']

victim = ['a presidenta!', 'os movimentos sociais!', 'os avanços da democracia!','as conquistas do trabalhadores!', 'o PT!',
		 'o Lula!', 'a mandioca!', 'a Mulher-Sapiens!', 'os pobres!', 'os direitos dos trabalhadores!', 'a pátria educadora!', 'o resultado das urnas!']


def shuffle(param):
	length = len(param)
	index = math.floor(random.random() * length);
	return param[int(index)]

def generateApologies():
	return shuffle(problem) + shuffle(nature) + shuffle(guilty) + shuffle(reason) + shuffle(victim);
	

print generateApologies()
