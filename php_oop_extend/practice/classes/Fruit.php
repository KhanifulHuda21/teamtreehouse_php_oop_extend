<?php
class Fruit {
  public $name="apel";
  private $color="hijau";
  protected $jenis="batu";
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function getintro() {
    echo "Ya ini adalah buah {$this->name} dan mempunyai warna {$this->color}.";
  }
}




