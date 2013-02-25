<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Promotion
 *
 * @author Marc
 */
class Promotion {

  private $id;
  private $titre;
  private $description;
  private $isActive;
  private $dateCreation;
  private $dateUpdate;

  public function __construct($id, $titre,$description,$isActive,$dateCreation,$dateUpdate) {
    $this->id = $id;
    $this->titre = htmlentities($titre);
    $this->description = htmlentities($description);
    $this->isActive = $isActive;
    $this->dateCreation = $dateCreation;
    $this->dateUpdate = $dateUpdate;
  }

  public function __destruct() {
    unset($this->id);
    unset($this->titre);
    unset($this->description);
    unset($this->isActive);
    unset($this->dateCreation);
    unset($this->dateUpdate);
  }

  public function getId() {
    return $this->id;
  }

  public function getTitre() {
    return $this->titre;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getIsActive() {
    return $this->isActive;
  }

  public function getDateCreation() {
    return $this->dateCreation;
  }

  public function getDateUpdate() {
    return $this->dateUpdate;
  }

}

?>
