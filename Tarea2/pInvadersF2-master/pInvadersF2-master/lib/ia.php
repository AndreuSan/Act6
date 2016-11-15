<?php
class ia
{
  // Declaración de una propiedad
  public $columna=1;

  public $fila=1;

    //Getters

  public function getcolumna() {
    return $this->columna;
  }

  public function getfila() {
    return $this->fila;
  }

  //Setters
  public function setcolumna($col){
    $this->columna = $col;
  }

  public function setfila($fil){
    $this->fila = $fil;
  }

  //Movimiento de la nave ramdom
  public function randompos() {
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
  }
}
?>
