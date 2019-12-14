<?php
require_once "vendor/autoload.php";

class Invcat extends \koolreport\KoolReport {
    
    public function settings()
    {
        return array(   
            "dataSources"=>array(
                "insumos"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=db_insumos",
                    "username"=>"root",
                    "password"=>"",
                    "charset"=>"utf8"
                )
            )
        );
    }

    public function setup()
    {
        $this->src('insumos')
        ->query("SELECT nombre_insumo,costo_unidad FROM insumos")
        ->pipe($this->dataStore('insumos'));
    }
}