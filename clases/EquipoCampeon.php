<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipoCampeon
 *
 * @author cetecom
 */
class EquipoCampeon {
    //put your code here
    private $idEquipoCampeon;
    private $idEquipo;
    private $idCampeonato;
    private $pGanados;
    private $pEmpatados;
    private $pPerdidos;
    private $gaFavor;
    private $genContra;
    
    function __construct($idEquipoCampeon, $idEquipo, $idCampeonato, $pGanados, $pEmpatados, $pPerdidos, $gaFavor, $genContra) {
        $this->idEquipoCampeon = $idEquipoCampeon;
        $this->idEquipo = $idEquipo;
        $this->idCampeonato = $idCampeonato;
        $this->pGanados = $pGanados;
        $this->pEmpatados = $pEmpatados;
        $this->pPerdidos = $pPerdidos;
        $this->gaFavor = $gaFavor;
        $this->genContra = $genContra;
    }
    
    function getIdEquipoCampeon() {
        return $this->idEquipoCampeon;
    }

    function getIdEquipo() {
        return $this->idEquipo;
    }

    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getPGanados() {
        return $this->pGanados;
    }

    function getPEmpatados() {
        return $this->pEmpatados;
    }

    function getPPerdidos() {
        return $this->pPerdidos;
    }

    function getGaFavor() {
        return $this->gaFavor;
    }

    function getGenContra() {
        return $this->genContra;
    }

    function setIdEquipoCampeon($idEquipoCampeon) {
        $this->idEquipoCampeon = $idEquipoCampeon;
    }

    function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setPGanados($pGanados) {
        $this->pGanados = $pGanados;
    }

    function setPEmpatados($pEmpatados) {
        $this->pEmpatados = $pEmpatados;
    }

    function setPPerdidos($pPerdidos) {
        $this->pPerdidos = $pPerdidos;
    }

    function setGaFavor($gaFavor) {
        $this->gaFavor = $gaFavor;
    }

    function setGenContra($genContra) {
        $this->genContra = $genContra;
    }



}
