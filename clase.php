<?php 
/**
 * summary
 */
class Name_class  
{
    /**
     * summary
     */ 
    //------ luego usamos el costructor
    // public function __construct()
    // {
        
    // }
/*--------------------------------------------------------------------*/
/*
public $unaclase; 
esta clase es publica entonces desde la instanciacion se le pueden asignar datos
asi como se puede modificar desde la fincion para luego ser leida desde la instan
ciacion llamandola luego de ser instanciada
*/    
public $unaclase; 
/*
Esta clase es publica por lo que se puede acceder a ella desde afuera al ser instan
ciada la clase perooo no puede ser modificada por nada ya que el elemento static la 
hace inmodificable
*/
public static $unaclasellena = 'esta clase esta llena'; 
/*
Esta clase privada es solo accecible dentro de la misma classe pero una vez capturada
por la funcion llamando a la funcion entonces si se puede llamar desde afuera.
*/
private $privada = 'esta clase privada'; 


public function lafunc()
{
/* 
Como la clase $unaclase es publica y no es estatica se puede
modificar cconcatenando datos o en si cambiando los datos que
esta contiene
*/
$this -> unaclase .= ' : esto lo estoy intentando concatenar';
 echo $this -> unaclase . "<br>";
 // se puede concatenar datos a una clase privada ya que esta dentro
 $this-> privada .= " :Estoy concatenando datos a una clase privada";
 echo $this -> privada;  

}//funcion

}

//fuera de la clase la llamamis 
$llamada = new Name_class; 
$llamada -> unaclase = 'este parametro se lo pasamos a la clasae';
$llamada -> unaclase .= ' :tambien concateno contenido desde afuera'; 
// $llamada -> privada = 'datos introducidos a la variable privada'; 
  echo Name_class:: $unaclasellena. "<br>";
  $llamada->lafunc();
// echo Name_class::$unaclase;