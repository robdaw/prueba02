<?php
class Calculo
{
  private $persona=[];

  public function almacenar($dato){

    $this->persona[]=$dato;
  }
  public function media(){
    $media=0;
    foreach ($this->persona as $key => $value) {
      $media=$media+$value;

    }
    $mediatotal=$media/count($this->persona);
    return $mediatotal;
  }
public function imprimir(){
  foreach ($this->persona as $key => $value) {
    echo $value."<br>";
  }
}



}








 ?>
