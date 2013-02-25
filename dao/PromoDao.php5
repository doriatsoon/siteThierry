<?php

include_once 'pojo/Promotion.php5';

/**
 * Description of PersonneDao
 *
 * @author Marc
 */
class PromoDao {

  private $bdd = null;

  public function __construct() {

    $ini = "config.ini";
    $parse = parse_ini_file($ini, true);

    $driver = $parse ["db_driver"];
    $dsn = "${driver}:";
    $user = $parse ["db_user"];
    $password = $parse ["db_password"];
    $options = $parse ["db_options"];
    $attributes = $parse ["db_attributes"];

    foreach ($parse ["dsn"] as $k => $v) {
      $dsn .= "${k}=${v};";
    }

    try {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $this->bdd = new PDO($dsn, $user, $password, $options);
    } catch (Exception $e) {
      die('Erreur dans le DAO: ' . $e->getMessage());
    }
  }

  public function getPromoFromId($id) {
    $request = "SELECT * FROM promo_t where id ='".$id."'";
    $prepare = $this->bdd->prepare($request);
    $prepare->execute();
    $reponse = $prepare->fetch(PDO::FETCH_OBJ);
    return $reponse;
  }

  public function getLastPromo() {
    $request = 'SELECT * FROM promo_t WHERE date_modification = (SELECT max( date_modification)FROM promo_t )';
    $statement = $this->bdd->prepare($request);
    $statement->execute();
    $reponse = $statement->fetch(PDO::FETCH_OBJ);
    return $reponse;
  }

  public function getBdd() {
    return $this->bdd;
  }

}

?>
