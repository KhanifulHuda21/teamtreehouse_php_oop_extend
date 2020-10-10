<?php
include "Fruit.php";

class Aple extends Fruit {
  public function message() {
    echo "Apakah ini buah apel? ";

  }
  public function TestProperty(){
    echo $this->name;
    //  echo $this->color;
    echo $this->jenis;
  }
}
$aple = new Aple("Apel", "Hijau");
$aple->TestProperty();
echo $aple->name;
// echo $aple->jenis;
// $aple->message();
// $aple->getintro();


