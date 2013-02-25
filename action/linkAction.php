<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function makeLink($href,$content) {
$link = "<div class=\"entete4middle\">
                  <table>
                    <tr>
                      <td><a href=\"$href\" class=\"link\" title=\"Cliquez poour accéder à la galerie\">$content</a></td>
                    </tr>
                  </table>
               </div>";

echo $link;
}
?>