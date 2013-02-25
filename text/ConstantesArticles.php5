<?php

/**
 * Description of ConstantesArticles
 * Classes de constantes pour l'onglet Articles
 *
 * @author Marc
 */

class ConstantesArticles {

  //Arnaques
  public static $idArnaques = "arnaque";
  public static $titleArnaques = "<table>
            <tr>
              <td>
                <img src=\"images/icones/ouvrir.png\" onClick=\"divaffiche('arnaque','voir_arnaque','cacher_arnaque')\" id=\"voir_arnaque\" title=\"Cliquez pour afficher l'article\"/>
                <img src=\"images/icones/fermer.png\" onClick=\"divcache('arnaque','voir_arnaque','cacher_arnaque')\" id=\"cacher_arnaque\" style=\"display:none;\" title=\"Cliquez pour replier l'article\"/>
              </td>
              <td>Les arnarques de la musculation et de la forme</td>
            </tr>
          </table>";
  public static $messageArnaques = "text/articles/messageArnaques.txt";

  // Culture physique
  public static $idCulturePhysique = "culture_physique";
  public static $titleCulturePhysique = "<table>
            <tr>
              <td>
                <img src=\"images/icones/ouvrir.png\" onClick=\"divaffiche('culture_physique','voir_culture_physique','cacher_culture_physique')\" id=\"voir_culture_physique\" title=\"Cliquez pour afficher l'article\"/>
                <img src=\"images/icones/fermer.png\" onClick=\"divcache('culture_physique','voir_culture_physique','cacher_culture_physique')\" id=\"cacher_culture_physique\" style=\"display:none;\" title=\"Cliquez pour replier l'article\"/>
              </td>
              <td>L'histoire d'une vocation : Edmond Desbonnet: (1867-1953)</td>
            </tr>
          </table>";
  public static $messageCulturePhysique = "text/articles/messageCulturePhysique.txt";

  // Motivation
  public static $idMotivation = "motivation";
  public static $titleMotivation = "<table>
            <tr>
              <td>
                <img src=\"images/icones/ouvrir.png\" onClick=\"divaffiche('motivation','voir_motivation','cacher_motivation')\" id=\"voir_motivation\" title=\"Cliquez pour afficher l'article\"/>
                <img src=\"images/icones/fermer.png\" onClick=\"divcache('motivation','voir_motivation','cacher_motivation')\" id=\"cacher_motivation\" style=\"display:none;\" title=\"Cliquez pour replier l'article\"/>
              </td>
              <td>Vraie ou fausse motivation ?</td>
            </tr>
          </table>";
  public static $messageMotivation = "text/articles/messageMotivation.txt";

}

?>
