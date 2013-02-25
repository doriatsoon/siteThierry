<?php
include 'action/menuAction.php';
include 'action/contentBoxAction.php';
include 'action/bandeauAction.php';
include 'text/ConstantesBlocDroite.php5';
include 'text/ConstantesArticles.php5';
include 'tools/ReadTextFile.php5';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

  <head>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-6478670-6']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>


    <!-- Google Website Optimizer Control Script -->
    <script>
      function utmx_section(){}function utmx(){}
      (function(){var k='3091063940',d=document,l=d.location,c=d.cookie;function f(n){
          if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.indexOf(';',i);return escape(c.substring(i+n.
                length+1,j<0?c.length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;
        d.write('<sc'+'ript src="'+
          'http'+(l.protocol=='https:'?'s://ssl':'://www')+'.google-analytics.com'
          +'/siteopt.js?v=1&utmxkey='+k+'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='
          +new Date().valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
          '" type="text/javascript" charset="utf-8"></sc'+'ript>')})();
    </script><script>utmx("url",'A/B');</script>
    <!-- End of Google Website Optimizer Control Script -->
    <!-- Google Website Optimizer Tracking Script -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['gwo._setAccount', 'UA-6478670-4']);
      _gaq.push(['gwo._trackPageview', '/3091063940/test']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- End of Google Website Optimizer Tracking Script -->


    <meta name="title" content="Espace forme - Acces"/>
    <meta name="description" content="Espace forme est une salle de musculation situ&eacute;e &agrave; Montfermeil limite Gagny. De nombreuses machines sont &agrave; votre disposition pour faire de bons entra�nements."/>
    <meta name="keywords" content="Sport,Musculation,muscles, musculation, pectoraux, salle de sport, Montfermeil, Gagny, Fonte, entrainement, groupe musculaire, Gagny, Montfermeil"/>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="google-site-verification" content="GXxPVEVLw7JE8ncaZ5L2Yfu6kY-qChE_l9rou59a9bk" />
    <meta name='robots' content='index'/>
    <meta name='revisit-after' content='7 days'/>
    <meta name='author' lang='Marc Joly'/>
    <meta name='copyright' content=''/>
    <meta name='identifier-url' content='http://thierry.frederique.free.fr'/>
    <meta name='Date-Creation-yyyymmdd' content='10/02/2011'/>
    <meta name='Date-Revision-yyyymmdd' content='13/02/2011'/>
    <title>Espace forme - Montfermeil</title>

    <link rel="stylesheet" media="all" href="style.css" />
    <meta name="viewport" content="width=device-width" />

     <script src="http://code.jquery.com/jquery-latest.js"></script>


  </head>


  <body>

    <!-- HEADER -->
    <div id="header">
      <?php makeBandeau() ?>
    </div>

    <!-- MENU -->
    <div id="menu">
      <?php makeMenu() ?>
    </div>



    <!-- CONTENT -->
    <div id="content">

      <div id="content_left">

        <?php makeContentBoxOther(ConstantesArticles::$titleArnaques, ReadTextFile::getTextFromFile(ConstantesArticles::$messageArnaques), ConstantesArticles::$idArnaques); ?>
        <?php makeContentBoxOther(ConstantesArticles::$titleCulturePhysique, ReadTextFile::getTextFromFile(ConstantesArticles::$messageCulturePhysique), ConstantesArticles::$idCulturePhysique); ?>
        <?php makeContentBoxOther(ConstantesArticles::$titleMotivation, ReadTextFile::getTextFromFile(ConstantesArticles::$messageMotivation), ConstantesArticles::$idMotivation); ?>

      </div>

      <div id="content_right">
        <?php makeContentRightBox(ConstantesBlocDroite::$titleWhereAreWe, ConstantesBlocDroite::$messageWhereWe); ?>
        <?php makeContentRightBox(ConstantesBlocDroite::$titleHours, ConstantesBlocDroite::$messageHours); ?>
      </div>

    </div>

  </body>

</html>