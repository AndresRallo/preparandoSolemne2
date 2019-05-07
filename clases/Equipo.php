<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of equipo
 *
 * @author cetecom
 */
class Equipo {
    //put your code here
    
    private $idEquipo;
    private $codigo;
    private $nombre;
    
    function __construct($idEquipo, $codigo, $nombre) {
        $this->idEquipo = $idEquipo;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
    }
    
    function getIdEquipo() {
        return $this->idEquipo;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



}
