<?php

include "header.php";
class Film{
  private $id;
  private $name;
  private $director;
  private $year;

  public function __construct($id, $name, $director, $year){

    $this->id = $id;
    $this->name = $name;
    $this->director = $director;
    $this->year = $year;
  }


  public function id(){
    return $this->id;
  }
  public function name(){
    return $this->name;
  }
  public function director(){
    return $this->director;
  }
  public function year(){
    return $this->year;
  }
}
  $newFilm = new Film("1", "The Game", " David Fincher", "1997");
  echo "The title of the film is " . $newFilm->name() . " which was directed by  " . $newFilm->director() . " " . "and was released in " . $newFilm->year();


include "footer.php";
?>
