<?php require_once('config_url.php'); ?>

<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8" />
    
        <title>Porfolio Guillaume Barranco - Développeur Web Full Stack</title>

        <link rel="shortcut icon" href="http://webarranco.fr/img/favicon.ico.png" type="image/x-icon"/> 
        <link rel="icon" href="http://webarranco.fr/img/favicon.ico.png" type="image/x-icon"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="yes" />
        <meta name="description" content="Découvrez le Portefolio d'un développeur passionné par son métier qui cherche sans cesse à parfaire sa curiosité Web !" />

        <meta property="og:title" content="Portefolio d'un Développeur Full Stack - Guillaume Barranco" />
        <meta name="twitter:creator" content="@Webarranco"/>
        <link rel="publisher" href="https://plus.google.com/105422105949000889772">

        <!-- En fonction de l'environnement défini dans config_url.php, on met en place la version minifiée du CSS ou non -->

        <?php if(ENV === 'dev') { ?>
            <?= $this->Html->css('foundation') ?>
            <?= $this->Html->css('foundation-icons') ?>
            <?= $this->Html->css('lightbox') ?>
            <?= $this->Html->css('index') ?>
        <?php } else { ?>
            <?= $this->Html->css('min') ?>
        <?php } ?>

        <!-- Grâce au config_url avec laquelle on spécifie l'url courante en PHP, on affecte des variables au JS pour les utiliser dans les scripts -->
        
        <script>
            var WEB_URL = "<?=WEB_URL?>",
                SITE_URL = "<?=SITE_URL?>",
                autorisedMic = false;
        </script>

        <!-- Si un paramètre GET "micro" est précisé, on passe autorisedMic à true, ce qui aura pour effet de donner la possibilité d'utiliser le micro et ses fonctionnalités pour naviguer -->

        <?php  if(isset($_GET['micro'])) echo '<script>autorisedMic = true;</script>'; ?>

        <!-- On inclue JQuery dans le head étant donné que certains scripts sont appelés par des pages spécifiques dans le content servi dynamiquement -->
        <?= $this->Html->script('jquery-1.11.1') ?>
    </head>

    <body>

        <header id="header" role="banner">
            <nav id="navigation" role="navigation">
                <ul class="menu">
                    <li>
                        <a class="link-nav link-home cbutton" href="<?=WEB_URL?>/home">Accueil</a>
                    </li>
                    <li>
                        <a class="link-nav link-blog cbutton" href="<?=WEB_URL?>/blog">Blog</a>
                    </li>
                    <li>
                        <a class="link-nav link-skills cbutton" href="<?=WEB_URL?>/skills">Compétences</a>
                    </li>
                    <li class="logo">
                        <a href="<?=WEB_URL?>/home">
                            <img src="<?=WEB_URL?>/img/link2.png"  width="130" alt="Logo du site" />
                        </a>
                    </li>
                    <li>
                        <a class="link-nav link-projects cbutton" href="<?=WEB_URL?>/projects">Projets</a>
                    </li>
                    <li>
                        <a class="link-nav link-about cbutton" href="<?=WEB_URL?>/about">A Propos</a>
                    </li>
                    <li>
                        <a class="link-nav link-about cbutton" href="<?=WEB_URL?>/fun">Fun</a>
                    </li>
                </ul>

                <div class="menu_mobile">
                    <div class="traits_menu">
                    </div>

                    <div class="div_menu">Menu</div>

                    <ul class="list-menu">
                        <li><a class="link-nav link-home" href="<?=WEB_URL?>/">Accueil</a></li>
                        <li><a class="link-nav link-blog" href="<?=WEB_URL?>/blog">Blog</a></li>
                        <li><a class="link-nav link-skills" href="<?=WEB_URL?>/skills">Compétences</a></li>
                        <li><a class="link-nav link-projects" href="<?=WEB_URL?>/projects">Projets</a></li>
                        <li><a class="link-nav link-about" href="<?=WEB_URL?>/about">A Propos</a></li>
                        <li><a class="link-nav link-about" href="<?=WEB_URL?>/fun">Fun</a></li>
                    </ul>
                </div>
            </nav>

            <a href="<?=WEB_URL?>/home" class="logo_mobile" title="Retour à l'accueil">
                <img src="<?=WEB_URL?>/img/build/link2.png"  width="70" alt="Logo du site" />
            </a>
        </header>

        <?= $this->fetch('content'); ?>

        <footer id="footer" role="contentinfo">
            <div>© Copyright Webarranco 2015</div>
            
            <div class="separator"></div>

            <div class="footer-contact">
                <a href="<?=WEB_URL?>/contact" title="Se rendre sur la page de contact">Contact</a>
            </div>
        </footer>

        <!-- Script qui va permettre d'écouter le micro de l'utilisateur si celui-ci l'a voulu, et lui permettre de naviguer en fonction des pages qu'il énoncera -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.0.0/annyang.min.js"></script>

        <!-- En fonction de l'environnement défini dans config_url.php, on met en place la version minifiée du JS ou non -->

        <?php if(ENV === 'dev') { ?>
            <?= $this->Html->script('main') ?>
            <?= $this->Html->script('modernizr.custom') ?>
            <?= $this->Html->script('lightbox.min') ?>
            
            <!--For links nav hover effect -->
            <?= $this->Html->script('classie') ?>
            
        <?php } else { ?>
            <?= $this->Html->script('min') ?>
        <?php } ?>

    </body>

</html>
