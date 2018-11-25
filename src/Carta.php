<?php
namespace TDD;
/*
 //clase carta, prototipos de carta
*/
class Carta
{protected $numero;
 protected $palo;
 protected $tipo;

	   public function __construct($numero = null, $palo = null) //Constructor de la clase asigna tipo y palo
	   {
		   $this->numero = $numero;
           $this->palo = $palo;
		   if ($palo == "Treboles" || $palo == "Diamantes" || $palo == "Picas" || $palo == "Corazones") {
		   $this->tipo = "Poker";
	   } else {
		$this->tipo = "Españolas";
	}
	}


	public function palo() // devuelve el palo de la carta
	{
		return $this->palo;
	}



	public function numero() // devuelve el numero de la carta
	{
	return $this->numero;
	}

		
 public function tipo()// devuelve el tipo de la carta
 {
	return $this->tipo;
}
}
