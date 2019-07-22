<?php
abstract class Actor{
  protected $first_name;
  protected $last_name;
  protected $rating;
  protected $favoritmovie;

  public function __construct($first_name, $last_name, $rating){
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->fechaNac=$rating;
  }
  public function getNombre(){
    return $this->first_name;
  }
  public function set($first_name){
    $this->first_name=$first_name;
}
  public function getApellido($last_name){
    return $this->last_name;
  }
  public function setApellido($last_name){
    $this->last_name=$last_name;

    public function getFechaNac($rating){
      return $this->rating;
    }
    public function setFechaNac($rating){
      $this->rating=$rating;
} ?>
