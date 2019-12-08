<?php 
/**
 * summary
 */
class Name_class  
{
    /**
     * summary
     */ 
    //-podemos pasar parametros al construcctor siendo iguales en cantidad al ser instanciado
    public function __construct($enviado)
    {   /*
         *Esta variable es modificable por lo tanto se puede pasar datos o concatenar valores 
         colocamos this si vamos a obtener datos desde los parametros o si le vamos a asigmnar
         datos, se le deve asignar un valor aun sea de vacio
        */
        $this -> variable = 'esta variable es publica por lo tanto se puede acceder' . "<br>";
        $this-> separadorVariable = '__--------------------------------------------------__'. '<br>';
        /*
		* $varVacia; declaramos esta variable entonces luego le podemos pasar valores desde la fucncion
        */
         $varVacia;
         /*
		 * esta variable esta recibiendo parametros desde fuera entonces podemos llamarla como pram a la 
		 *hora de obtener su valor
         */
         $this-> pram = $enviado;

         $this-> error_Daa = "";
         
}

	/*
    *Con esta funcion podemos emplear toda la logica insertar, hacer comparaciones, insertar, o hacer 
    *nuevos archivos y todo lo demas
	*/
    public function localFuction()
    {/*
      * a esta variable se le esta concaetnando un dato o se le puede devolver el valor de un resultado
      *entonces una variable vacia puede obner un valor devuelto desde aca
      */
       echo  $this-> variable .= ' :Tambien le puedo concatenar informacion desde la fuincion';
       /*
       * a esta variable $varVacia se le esta pasando un valor ya que solo se habia inicializado
       */
        $this-> varVacia = '<br>'.'__ahora tiene asignado un valor desde la funcion';
    }

    public function __destruct()
    {

    }
 }

/*
* Nueva clase esta extendiendo de la clase name_class entonces esta va a eredesr las propiedades
* desde aca podemos concatenar datos y obtener datos desde la clase heredada
*/
 
class Nueva_clase extends Name_class
{
   

    public function extrae()
    {
    	// Estamos accediendo a una variable de otra clase para concatenar un valor
    	echo $this-> variable. "concateno desde ka herencia de datos";
    }
}


 $instac = new Name_class("dato enviado desde la instanciacion");
 echo $instac -> variable;
 echo $instac -> separadorVariable;
 echo $instac -> localFuction();
 echo $instac -> varVacia. "<br>";  
 echo $instac -> pram;
 echo $instac -> error_Daa;


/*
*instaciamos la nueva clase OBLIGATORIAMENTE se le debe pasar parametros ya que la 
*clase madre asi lo exige
*/
 $instac_dos = new Nueva_clase('paso desde la seg');
 // accedemos a la funcion detrn de la clase que hereda 
echo $instac_dos -> extrae();
echo '<br>';
//accedemos al parametro de la clase madre
echo $instac_dos -> pram;
echo '<br>';
// incluso accedemos a parametros de la variable madre
echo $instac_dos -> separadorVariable;