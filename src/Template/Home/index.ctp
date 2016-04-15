<div id="large-header" class="bloc-one page-home">
    <div class="index" style="color: white;">
        <h1>Un développeur web pétillant pour vous !</h1>

        <p>
            Un projet à proposer, une idée impossible à mettre en oeuvre ? <br />
            Rien n'est impossible ! N'hésitez pas à <a href="<?=$this->request->base?>/contact">me contacter</a> pour n'importe quelle demande que ce soit !
        </p>
    </div>

    <canvas id="demo-canvas" style="position: absolute;left: 0;top: 0;"></canvas>
</div>

<section class="wrapper" role="main">

    <div class="row">
        <div class="bloc large-4 columns">
            <h2>Qui suis-je ?</h2>
            <div>
                <img class="willchange" src="img/build/myPicture.jpg" alt="Photo de Guillaume Barranco" width="140" class="myPicture" />
            </div>
            <p>
                Un jeune développeur passionné par le web depuis des années et actuellement en Licence Chef de Projet Multimedia travaillant pour l'entreprise <a target="_blank" title="Site de l'entreprise Weblib" href="http://weblib.eu/">Weblib</a>. <br />
                Un inconditionnel fan de manga, les plus curieux et passionnés pourront en trouver <a href="http://webarranco.fr/read_mangas/" title="Liste des mangas lus">un exemple ici</a> !<br />
                Un pro avant tout, un jeune curieux et avide de connaissances qui ne demande qu'à apprendre et transmettre après.
            </p>
        </div>

        <div class="bloc large-4 columns">
            <h2>Mes compétences</h2>
            <p>
                Toutes les technologies de développement web les plus connues (HTML5, CSS3, Javascript, PHP, SQL), agrémenté des sciences d'intégration étudiées pour le plaisir de se parfaire (Référencement, Ergonomie, Accessibilité) ainsi que de frameworks bien utiles. Vous pouvez les trouver et mieux les comprendre sur la <a href="/skills">page de mes compétences</a>.
            </p>
            <ul class="graphic">
                <li class="li-graphic-percent">
                    <div class="graphic-percent">25</div>
                    <div class="graphic-percent">50</div>
                    <div class="graphic-percent">75</div>
                    <div class="graphic-percent">100</div>
                </li>
                <li>
                    <div class="graphic-name">HTML5</div>
                    <div class="graphic-bar graphic-bar-html5"></div>
                </li>
                <li>
                    <div class="graphic-name">CSS3</div>
                    <div class="graphic-bar graphic-bar-css3"></div>
                </li>
                <li>
                    <div class="graphic-name">Javascript</div>
                    <div class="graphic-bar graphic-bar-js"></div>
                </li>
                <li>
                    <div class="graphic-name">PHP</div>
                    <div class="graphic-bar graphic-bar-php"></div>
                </li>
                <li>
                    <div class="graphic-name">SQL</div>
                    <div class="graphic-bar graphic-bar-sql"></div>
                </li>
                <li>
                    <div class="graphic-name">Curiosité</div>
                    <div class="graphic-bar graphic-bar-curieux"></div>
                </li>
            </ul>
        </div>

        <div class="bloc large-4 columns">
            <h2>Blog de Webarranco</h2>
            <p>
                Lorsqu'on a appris sur le web, avec des tutoriels, des vidéos, des supers articles qu'on a vite gardé dans les favoris, on a envie de partager son évolution avec les autres. L'expérience, les avis professionnels peuvent aider bon nombre de jeunes développeurs. C'est ainsi qu'est né <a href="/blog" title="Aller sur le Blog">mon Blog</a>, que vous pourrez observer se remplir au fur et à mesure.
            </p>
            <div>
                <img src="img/build/linkou3.png" alt="Photo de moi version Link" width="200" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="bloc large-4 columns">
            <h2>Mes Projets</h2>
            <p>
                Dernier projet en date : 
                <a href="<?= $newest->link_website ?>" target="_blank" class="img-projet last_project_home" title="Voir le dernier projet en date">
                    <img src="<?= $newest->Cover ?>" alt="Image du dernier projet en date" />
                </a>
                Je fais partie de ceux qui pensent que l'on fonctionne par projet. L'apprentissage d'un langage, d'un CMS, d'un framework sans son utilisation sur un projet concret ne dépassera jamais les 40% de pertinence. Se lancer un projet personnel ou professionnel, y'a que ça de vrai. Je vous invite donc à regarder <a href="/projects" title="Voir les projets">mon Portfolio</a>, en espérant qu'il vous amusera !
            </p>
        </div>

        <div class="bloc large-4 columns">
            <h2>Me Contacter</h2>

            <div>guillaume.barranco8@hotmail.fr</div>
            <a href="<?=$this->request->base?>/contact" title="Se rendre sur la page de contact" class="mail">
                <i class="fi-mail size-80"></i>
            </a>

            <ul class="socials">
                <li class="twitter">
                    <a href="https://twitter.com/Webarranco" target="_blank" title="Voir mon Twitter">
                        <i class="fi-social-twitter size-34"></i>
                    </a>
                </li>

                <li class="linkedin">
                    <a href="https://www.linkedin.com/profile/view?id=224191169&trk=nav_responsive_tab_profile" target="_blank" title="Voir mon LinkedIn">
                        <i class="fi-social-linkedin size-34"></i>
                    </a>
                </li>

                <li class="github">
                    <a href="https://github.com/guillaumebarranco/" target="_blank" title="Voir mon Github">
                        <i class="fi-social-github size-34"></i>
                    </a>
                </li>

                <li class="codepen">
                    <a href="http://codepen.io/Webarranco/" target="_blank" title="Voir mes Codepen">
                        <svg style="display: none;" xmlns="http://www.w3.org/2000/svg" style="color: white;width:120px;">
                            <symbol id="codepen-logo" viewBox="0 0 120 120">
                                <path class="outer-ring" d="M60.048 0C26.884 0 0 26.9 0 60.048s26.884 60 60 60.047c33.163 0 60.047-26.883 60.047-60.047 S93.211 0 60 0z M60.048 110.233c-27.673 0-50.186-22.514-50.186-50.186S32.375 9.9 60 9.9 c27.672 0 50.2 22.5 50.2 50.186S87.72 110.2 60 110.233z"/>
                                <path class="inner-box" d="M97.147 48.319c-0.007-0.047-0.019-0.092-0.026-0.139c-0.016-0.09-0.032-0.18-0.056-0.268 c-0.014-0.053-0.033-0.104-0.05-0.154c-0.025-0.078-0.051-0.156-0.082-0.232c-0.021-0.053-0.047-0.105-0.071-0.156 c-0.033-0.072-0.068-0.143-0.108-0.211c-0.029-0.051-0.061-0.1-0.091-0.148c-0.043-0.066-0.087-0.131-0.135-0.193 c-0.035-0.047-0.072-0.094-0.109-0.139c-0.051-0.059-0.104-0.117-0.159-0.172c-0.042-0.043-0.083-0.086-0.127-0.125 c-0.059-0.053-0.119-0.104-0.181-0.152c-0.048-0.037-0.095-0.074-0.145-0.109c-0.019-0.012-0.035-0.027-0.053-0.039L61.817 23.5 c-1.072-0.715-2.468-0.715-3.54 0L24.34 46.081c-0.018 0.012-0.034 0.027-0.053 0.039c-0.05 0.035-0.097 0.072-0.144 0.1 c-0.062 0.049-0.123 0.1-0.181 0.152c-0.045 0.039-0.086 0.082-0.128 0.125c-0.056 0.055-0.108 0.113-0.158 0.2 c-0.038 0.045-0.075 0.092-0.11 0.139c-0.047 0.062-0.092 0.127-0.134 0.193c-0.032 0.049-0.062 0.098-0.092 0.1 c-0.039 0.068-0.074 0.139-0.108 0.211c-0.024 0.051-0.05 0.104-0.071 0.156c-0.031 0.076-0.057 0.154-0.082 0.2 c-0.017 0.051-0.035 0.102-0.05 0.154c-0.023 0.088-0.039 0.178-0.056 0.268c-0.008 0.047-0.02 0.092-0.025 0.1 c-0.019 0.137-0.029 0.275-0.029 0.416V71.36c0 0.1 0 0.3 0 0.418c0.006 0 0 0.1 0 0.1 c0.017 0.1 0 0.2 0.1 0.268c0.015 0.1 0 0.1 0.1 0.154c0.025 0.1 0.1 0.2 0.1 0.2 c0.021 0.1 0 0.1 0.1 0.154c0.034 0.1 0.1 0.1 0.1 0.213c0.029 0 0.1 0.1 0.1 0.1 c0.042 0.1 0.1 0.1 0.1 0.193c0.035 0 0.1 0.1 0.1 0.139c0.05 0.1 0.1 0.1 0.2 0.2 c0.042 0 0.1 0.1 0.1 0.125c0.058 0.1 0.1 0.1 0.2 0.152c0.047 0 0.1 0.1 0.1 0.1 c0.019 0 0 0 0.1 0.039L58.277 96.64c0.536 0.4 1.2 0.5 1.8 0.537c0.616 0 1.233-0.18 1.77-0.537 l33.938-22.625c0.018-0.012 0.034-0.027 0.053-0.039c0.05-0.035 0.097-0.072 0.145-0.109c0.062-0.049 0.122-0.1 0.181-0.152 c0.044-0.039 0.085-0.082 0.127-0.125c0.056-0.055 0.108-0.113 0.159-0.172c0.037-0.045 0.074-0.09 0.109-0.139 c0.048-0.062 0.092-0.127 0.135-0.193c0.03-0.049 0.062-0.098 0.091-0.146c0.04-0.07 0.075-0.141 0.108-0.213 c0.024-0.051 0.05-0.102 0.071-0.154c0.031-0.078 0.057-0.156 0.082-0.234c0.017-0.051 0.036-0.102 0.05-0.154 c0.023-0.088 0.04-0.178 0.056-0.268c0.008-0.045 0.02-0.092 0.026-0.137c0.018-0.139 0.028-0.277 0.028-0.418V48.735 C97.176 48.6 97.2 48.5 97.1 48.319z M63.238 32.073l25.001 16.666L77.072 56.21l-13.834-9.254V32.073z M56.856 32.1 v14.883L43.023 56.21l-11.168-7.471L56.856 32.073z M29.301 54.708l7.983 5.34l-7.983 5.34V54.708z M56.856 88.022L31.855 71.4 l11.168-7.469l13.833 9.252V88.022z M60.048 67.597l-11.286-7.549l11.286-7.549l11.285 7.549L60.048 67.597z M63.238 88.022V73.14 l13.834-9.252l11.167 7.469L63.238 88.022z M90.794 65.388l-7.982-5.34l7.982-5.34V65.388z"/>
                            </symbol>
                        </svg>

                        <svg class="logo_svg">
                          <use xlink:href="#codepen-logo"></use>
                        </svg>
                    </a>
                </li>

                <li class="npm">
                    <a href="https://www.npmjs.com/~webarranco" target="_blank" title="Voir mon profil sur NPM">
                        <svg class="logo_npm" height="195px" viewBox="0 0 500 195" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <title>npm-logo</title>
                            <description>Created with Sketch (http://www.bohemiancoding.com/sketch)</description>
                            <defs></defs>
                            <g id="Page 1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M0,0 L500,0 L500,168 L250,168 L250,195 L139,195 L139,168 L0,168 Z M28.304251,139.493165 L83.536238,139.49349 L83.5362388,55.5592922 L111.304251,55.5592922 L111.304251,139.493491 L138.822477,139.493491 L138.822477,28.4929443 L28.304251,28.4929443 Z M166.333333,28 L166.666667,168 L221.666667,168 L221.666667,140.067308 L277.345845,140.067308 L277.345845,28 Z M221,55 L250,55 L250,112 L221,112 Z M305.333333,28 L305.333333,139 L360.664651,139 L360.664651,55.666008 L388.33133,55.666008 L388.33133,139.000547 L415.967888,139.000547 L415.967888,56 L443.664659,56 L443.664659,139 L471.338699,139 L471.338699,28 Z M305.333333,28" id="Rectangle 1" fill="#CD3632"></path>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>

            <a href="img/build/CV.jpg" data-lightbox="roadtrip" title="Aperçu de mon CV" class="myCV">
                <img src="img/build/CV.jpg" width="100" alt="Miniature de mon CV"/>
            </a>

            <a class="download_CV" title="Télécharger mon CV" target="_blank" href="img/CV_Barranco_Guillaume.pdf">Télécharger mon CV</a>
        </div>

        <div class="bloc large-4 columns">
            <h2>Bonus</h2>
            <ul class="like">J'aime :
                <li>- Manger</li>
                <li>- Le chocolat</li>
                <li>- Les mangas</li>
                <li>- Les Quizz</li>
                <li>- Coder</li>
                <li>- Faire du sport</li>
                <li>- Ecrire</li>
                <li>- Le Coca Cherry</li>
                <li style="margin-bottom: 15px;">
                    <span style="font-size:10px; position: absolute;">- Utiliser un paramètre GET "micro" pour naviguer entre mes pages à la voix</span>
                </li>
            </ul>
            <ul class="dislike">Je n'aime pas :
                <li>- M'ennuyer</li>
            </ul>
            <p>
                Pour plus d'informations sur moi, mes passions, mes mangas favoris, je vous invite à regarder <a href="<?=$this->request->base?>/about">ma page perso</a>.
            </p>
            <div class="txt-cheat-code">Toujours plus marrant d'avoir un cheat code !</div>
            <div class="cheat-code">
                <div class="cheat-1 cheat"><div></div></div>
                <div class="cheat-2 cheat"><div></div></div>
                <div class="cheat-3 cheat"><div></div></div>
                <div class="cheat-4 cheat"><div></div></div>
                <div class="cheat-a cheat">A</div>
                <div class="cheat-b cheat">B</div>
            </div>
        </div>
    </div>
</section>
