<?php
namespace TDD;
/*
 //clase carta, prototipos de carta
*/
class Carta
{protected $numero;
 protected $palo;
 protected $tipo;

 	  
	  //@desc constructor de la clase
	  //@param int, string numero de la carta y palo
	  //@return
	  
	   public function __construct($numero = null, $palo = null) 
	   {
		   $this->numero = $numero;
		   $this->palo = $palo;
		   if ($palo == "Treboles" || $palo == "Diamantes" || $palo == "Picas" || $palo == "Corazones") {
		   $this->tipo = "Poker";
	   } else {
		$this->tipo = "Españolas";
	}
	}
		
		  //@desc devuelve el palo de la carta
		  //@param
		  //@return string palo de la carta
		

	public function palo() // devuelve el palo de la carta
	{
		return $this->palo;
	}


		
		  //@desc devuelve el numero de la carta
		  //@param
		  //@return int numero de la carta
		 
	public function numero() // devuelve el numero de la carta
	{
	return $this->numero;
	}

		
		  //@desc devuelve el tipo de la carta, de poker o espaÃ±ola
		  //@param
		  //@return string de poker o espaÃ±ola
		
 public function tipo()// devuelve el tipo de la carta
 {
	return $this->tipo;
}
}
