<?php
    /** Librería de modelo */
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Menu{
        /** creo una variable que utilizará la clase, es privada, no la muestra */
        private $arr_menu;
        public function __construct($arr){
            /** en el constructor lo que hago e cargar el parámetro $arr en la variabr privada */
            $this->arr_menu = $arr;
        }
        public function construirMenu(){
            /** creo una variable $ret_menu que es lo que voy a retornar 
             * como resultado de la función de esta clase */
            $ret_menu = "<nav><ul><li><b>Menu creado desde Libraries</b></li>";
            foreach($this->arr_menu as $opcion){
                $ret_menu .="<li>$opcion</li>";
            }
            $ret_menu .="</ul></nav>";
            return $ret_menu;
        }
    }