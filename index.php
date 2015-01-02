<?php


//Qui c'est ?
$kingOfPop = "Erwann";

//Quelle plateforme?
$coolTool = "win";//"mac" , "win" ou linux


// repertoires  gnorer dans les projets
$projectsListIgnore = array ('.','..');

// changements selon plateform


if(isset($_GET["phpinfo"])){
	echo "<a href='index.php'>retour</a>";
	phpinfo();
	echo "<a href='index.php'>retour</a>";
}else{


switch($coolTool){
	case "win":
		$initial = "W";
		$phpMyAdmin = "";
		break;
	case "mac":
		$initial = "M";
		$phpMyAdmin = "";
		break;
	case 'linux':
		$initial = "L";
		$phpMyAdmin = "";
		break;
}



// recuperation des projets
$handle=opendir(".");
$projectContents = '';
while ($file = readdir($handle)) 
{
	if (is_dir($file) && !in_array($file,$projectsListIgnore)) 
	{		
		$projectContents .= '<li><a href="'.$file.'">
                                    <i class="icon-folder"></i>
                                </span> '.$file.'</a></li>';
	}
}
closedir($handle);



//var_dump ($projectContents);

?>


<html>
   <head><title>Accueil Perso</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"> -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:900,300' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'> -->
        <meta charset="utf-8">
        <style>
            
            @font-face {
  font-family: 'fontello';
  src: url('../font/fontello.eot?15772790');
  src: url('../font/fontello.eot?15772790#iefix') format('embedded-opentype'),
       url('../font/fontello.svg?15772790#fontello') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'fontello';
  src: url('data:application/octet-stream;base64,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') format('woff'),
       url('data:application/octet-stream;base64,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') format('truetype');
}
/* Chrome hack: SVG is rendered more smooth in Windozze. 100% magic, uncomment if you need it. */
/* Note, that will break hinting! In other OS-es font will be not as sharp as it could be */
/*
@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: 'fontello';
    src: url('../font/fontello.svg?15772790#fontello') format('svg');
  }
}
*/
 .clearfix:after {
     content: ".";
     display: block;
     clear: both;
     visibility: hidden;
     line-height: 0;
     height: 0;
}
.clearfix {display: block;}
html[xmlns] .clearfix {display: block;}
* html .clearfix {height: 1%;}
 [class^="icon-"]:before, [class*=" icon-"]:before {
  font-family: "fontello";
  font-style: normal;
  font-weight: normal;
  speak: none;
 
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  /* opacity: .8; */
 
  /* For safety - reset parent styles, that can break glyph codes*/
  font-variant: normal;
  text-transform: none;
     
  /* fix buttons height, for twitter bootstrap */
  line-height: 1em;
 
  /* Animation center compensation - margins should be symmetric */
  /* remove if not needed */
  margin-left: .2em;
 
  /* you can be more comfortable with increased icons size */
  /* font-size: 120%; */
 
  /* Uncomment for 3D effect */
  /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */
}
.icon-menu:before { content: '\e800'; } /* '' */
.icon-check:before { content: '\e801'; } /* '' */
.icon-cancel:before { content: '\e802'; } /* '' */
.icon-book:before { content: '\e803'; } /* '' */
.icon-folder:before { content: '\e804'; } /* '' */
.icon-cog:before { content: '\e805'; } /* '' */
.icon-down-open-mini:before { content: '\e806'; } /* '' */
.icon-left-open-mini:before { content: '\e807'; } /* '' */
.icon-up-open-mini:before { content: '\e808'; } /* '' */
.icon-right-open-mini:before { content: '\e809'; } /* '' */
.icon-cc:before { content: '\e80a'; } /* '' */
.icon-gplus:before { content: '\e80b'; } /* '' */
.icon-database:before { content: '\e80c'; } /* '' */
.icon-globe:before { content: '\e80d'; } /* '' */
.icon-info:before { content: '\e80e'; } /* '' */
.icon-home:before { content: '\e80f'; } /* '' */
.icon-cloud:before { content: '\e810'; } /* '' */
            
            body{
                background: #eee;
                /* font-family: 'Shadows Into Light', tahoma; */
                font-family: roboto, tahoma;
            }
            html {
            box-sizing: border-box;
            }
            *, *:before, *:after {
              box-sizing: inherit;
            }
            .wrap, .wrapT{
                margin : 2em auto;
                width :90%;
                max-width:960px;

            }
            

			section.wrap article{
				padding : 1em 1%;
				width: 	25%;
				margin:  0 ;
				float : left;
				background: #fff;
			}

			section.wrap article:first-of-type{
				width: 	74%;
				margin-right : 1%;
			}
            a, a *{
                -webkit-transition: all 100ms ease-out;
                -moz-transition: all 100ms ease-out;
                -ms-transition: all 100ms ease-out;
                -o-transition: all 100ms ease-out;
                transition: all 100ms ease-out;}
            #siteList ul , .extWeb   ul , #toolsList ul   {list-style-type : none;}
            #siteList a    {text-decoration: none; font-size:1.5em; color : #666}
            #toolsList a   {text-decoration: none; font-size:1em; color : #666}
            #siteList a:hover  , #toolsList a:hover {text-decoration: none; color : #c68103}
            
            
            
            #headerSite{text-align : center}
            .extWeb li {display : inline-block}
            .extWeb a{font-size : 2em;color : black;}
            .extWeb a:hover{color : #c68103;}
            
            #footerSite{
                text-align : right;
				background: #fff;
				padding: .2em 1%;
            }
			
			#footerSite a{ font-size : 1em;color : black; }
			#footerSite a:hover{color : #c68103;}
        </style>
    </head>








    <body>

       
       <header class="wrapT" id="headerSite">
           <h1><img src="data:image/png;base64,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" alt="CEFIM" />
           <br>
           Serveur <?= $initial ?>AMP Perso de <?= $kingOfPop ?>
           </h1>
           


           
       </header>
       <section class="wrap clearfix">
         <article>
           
           
            <h1>Projets Web</h1>
            <nav id="siteList">
                <ul>
                   <?php echo $projectContents; ?>
                </ul> 
            </nav>
        </article>

        <article>
        	<h1>Outils</h1>
        	<nav id="toolsList">
        		<ul>
        			<li><a href="?phpinfo=1"><i class="icon-info"></i> PhPInfo</a></li>
        			<li><a href="<?= $phpMyAdminLink ?>"><i class="icon-database"></i> PhPMyAdmin</a></li>
        			<!-- Image lamp <li><a href=""><i class="icon-cog"></i> WebMin</a></li> -->
        		</ul>
        	</nav>
        </article>
       </section>

<!-- TRAVAUX FUTURS SUR PAGE D'ACCUEIL : Cadre d'utils serveur 
       -PhPinfo()
       -PhPMyAdmin        
        <div class="wrap">
            <h1>Outils</h1>
            <ul>
                <li><a href="">PhP Info</a></li>
            </ul>
        </div>
-->
   <footer class='wrapT' id="footerSite">
	<a href="//cefim.eu" title="CEFIM">CEFIM</a>
	-
    <a href="//plus.google.com/u/0/communities/115473612304968181395" title="Communauté Google + DL et CDI">Communauté g+ DL_CDI</a>
    -
    <a href="//plus.google.com/communities/103916411774981184150" title="Communauté Google + DL et CDI">Communauté g+ IMM</a>
	-
	<a href="//github.com/ejallier/local-amp-homepage">Source sur GitHub</a>
   </footer>
    </body>
</html>
<?php } ?>