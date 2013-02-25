<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ReadTextFile {

  public static $text;

  public static function getTextFromFile($filePath) {
    $text = "";
    $handle = fopen($filePath, "r");
    while (!feof($handle)) {
      $text.=fgets($handle, 4096);
    }
    return $text;
  }

}

?>
