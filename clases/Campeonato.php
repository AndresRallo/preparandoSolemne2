<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campeonato
 *
 * @author cetecom
 */
class Campeonato {
    //put your code here
    private $idCampeonato;
    private $codigo;
    private $nombre;
    private $fechaInicio;
    private $fechaTermino;
    private $cantidadPartidos;
    
    function __construct($idCampeonato, $codigo, $nombre, $fechaInicio, $fechaTermino, $cantidadPartidos) {
        $this->idCampeonato = $idCampeonato;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->fechaInicio = $fechaInicio;
        $this->fechaTermino = $fechaTermino;
        $this->cantidadPartidos = $cantidadPartidos;
    }
    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaInicio() {
        return $this->fechaInicio;
    }

    function getFechaTermino() {
        return $this->fechaTermino;
    }

    function getCantidadPartidos() {
        return $this->cantidadPartidos;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    function setFechaTermino($fechaTermino) {
        $this->fechaTermino = $fechaTermino;
    }

    function setCantidadPartidos($cantidadPartidos) {
        $this->cantidadPartidos = $cantidadPartidos;
    }


    
}
