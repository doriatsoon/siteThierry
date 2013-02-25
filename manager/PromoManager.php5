<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'dao/PromoDao.php5';

/**
 * Description of NewsManager
 *
 * @author Marc
 */
class PromoManager {

  private $dao = null;

  public function __construct() {
    $this->dao = new PromoDao();
  }

  public function getLastPromo() {
    return $this->dao->getLastPromo();
  }

}

?>