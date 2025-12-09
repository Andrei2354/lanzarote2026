<?php

class Aulas extends Base
{
    function __construct()
    {
        $this->tabla = 'aulas';
    }


    function cargar()
    {
        $datos = [];
        $datos['select'] = 'id, nombre, letra, numero, planta';

        $datos_consulta = $this->get_rows($datos);


        $aula = [];


        foreach($datos_consulta as $inc => $registro)
        {

            $aula[$registro['id']] = $registro['numero'].' '.$registro['letra']. ' '.$registro['numero']. ''.$registro['planta'];
        }

        return $aula;


    }

}