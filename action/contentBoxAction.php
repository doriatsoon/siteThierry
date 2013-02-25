<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function makeContentBox($title, $message) {
  $contentBox = "<div class=\"entete4middle\">
                  $title
                </div>
                <div class=\"contenu4middle\">
                  <p class=\"presentation\">$message</p>
                </div>";
  echo $contentBox;
}

function makeContentBoxPromo($title, $message) {
  $contentBox = "<div class=\"entete4middle\" style=\"color:red;\">
                  $title
                </div>
                <div class=\"contenu4middle\" style=\"color:red;font-weight:bold;\">
                  <p class=\"presentation\">$message</p>
                </div>";
  echo $contentBox;
}

function makeContentBoxOther($title, $message, $id) {
  $contentBox = "<div class=\"entete4middle\">
                  $title
                </div>
                <div class=\"contenu4middle\" id=\"$id\">
                  <p class=\"presentation\">$message</p>
                </div>";
  $script = "<script type=\"text/javascript\">
      $(\"#voir_$id\").click(function(){
        $(\"#$id\").toggle(\"slow\");
      });
       </script>";

  echo $contentBox.$script;
}

function makeContentBoxOtherWithOtherCss($title, $message, $id) {
  $contentBox = "<div class=\"entete4middle\">
                  $title
                </div>
                <div class=\"contenu4middle\" id=\"$id\">
                  <p class=\"presentation\">$message</p>
                </div>";
  $script = "<script type=\"text/javascript\">
      $(\"#voir_$id\").click(function(){
        $(\"#$id\").toggle(\"slow\");
      });
       </script>";

  echo $contentBox.$script;
}

function makeContentRightBox($title, $message) {
  $contentRightBox = "<div class=\"entete\">
                  $title
                </div>
                <div class=\"contenu_droite\">
                  $message
                </div>";
  echo $contentRightBox;
}

?>