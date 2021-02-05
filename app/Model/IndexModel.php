<?php /* copyright© Jhon S. Vique */


class IndexModel{


    protected $_conexion;

    function __construct(){
        try{
            $this->_conexion = new DataBase();

        }catch(Exception $e){
            die();
        }
    }
	
	public function showCities(){
        try {
            $this->_conexion->consult("SELECT * FROM cities");
            $this->_conexion->execute();
            
            return $this->_conexion->showAll();
        } catch (Exception $e) {
            die($e);
        }
    }
}


?> 