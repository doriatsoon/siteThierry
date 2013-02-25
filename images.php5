<?php
include 'action/bandeauAction.php';
include 'action/menuAction.php';
include 'action/contentBoxAction.php';
include 'action/linkAction.php';
include 'text/ConstantesImages.php5';
include 'text/ConstantesBlocDroite.php5';
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


    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>Espace forme - Montfermeil</title>

    <link rel="stylesheet" media="all" href="style.css" />
	<link href="css/carousel.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="skins/tango/skin.css" />
    <meta name="title" content="Espace forme - Les photos"/>
    <meta name="description" content="L'entra�neur de la salle met �galement des articles � votre disposition de mani�re � ce qui vous puissiez vous progressiez rapidement."/>
    <meta name="keywords" content="Sport,Musculation,muscles, musculation, pectoraux, salle de sport, Montfermeil, Gagny, Fonte, entrainement, groupe musculaire"/>
    <meta name="viewport" content="width=device-width" />
    <meta name="google-site-verification" content="GXxPVEVLw7JE8ncaZ5L2Yfu6kY-qChE_l9rou59a9bk" />
    <meta name='robots' content='index'/>
    <meta name='revisit-after' content='7 days'/>
    <meta name='author' content='Marc Joly'/>
    <meta name='copyright' content=''/>
    <meta name='identifier-url' content='http://thierry.frederique.free.fr'/>
    <meta name='Date-Creation-yyyymmdd' content='10/02/2011'/>
    <meta name='Date-Revision-yyyymmdd' content='13/02/2011'/>

    <script src="prettygallery/js/jquery-1.6.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <link rel="stylesheet" href="prettygallery/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <script src="prettygallery/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('.jcarousel-skin-tango').jcarousel({
    	wrap: 'circular'
    });
});

</script>
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
        <?php makeContentBoxOtherWithOtherCss(ConstantesImages::$titleEspritSain, ConstantesImages::$contentEspritSain, ConstantesImages::$idEspritSain); ?>
        <?php makeContentBoxOtherWithOtherCss(ConstantesImages::$titleSalle, ConstantesImages::$contentSalle, ConstantesImages::$idSalle); ?>
        <?php makeContentBoxOtherWithOtherCss(ConstantesImages::$titleAvantApres, ConstantesImages::$contentAvantApres, ConstantesImages::$idAvantApres); ?>
        <?php makeContentBoxOtherWithOtherCss(ConstantesImages::$titleMusee, ConstantesImages::$contentMusee, ConstantesImages::$idMusee); ?>
        <?php makeContentBoxOtherWithOtherCss(ConstantesImages::$titleAmbiance, ConstantesImages::$contentAmbiance, ConstantesImages::$idAmbiance); ?>
      </div>
      <div id="content_right">
        <?php makeContentRightBox(ConstantesBlocDroite::$titleWhereAreWe, ConstantesBlocDroite::$messageWhereWe); ?>
        <?php makeContentRightBox(ConstantesBlocDroite::$titleHours, ConstantesBlocDroite::$messageHours); ?>
      </div>
    </div>
	
	 
	
	

    <script type="text/javascript" charset="utf-8">
	
      $(document).ready(function(){
        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
          custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
          changepicturecallback: function(){ initialize(); }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
          custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
          changepicturecallback: function(){ _bsap.exec(); }
        });
      });
    </script>
  </body>
</html>