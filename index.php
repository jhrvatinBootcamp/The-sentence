<?php

include 'header.php';

?>

<body>
    <nav id="main-nav">
        <div id="nav-wrapper">
            <div id="menuIcon">
                <a> <!-- Menu icon made of three divs -->
                    <div class="menuIconLine"></div>
                    <div class="menuIconLine"></div>
                    <div class="menuIconLine"></div>
                </a>
            </div>

            <ul id="list-nav">
                <li><a class="nav-link" href="/index.php">Home</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
            </ul>
                <div class="nav-login-container">

                    <?php
                    if(isset($_SESSION['user'])){
                           echo $_SESSION['user'] ;
                             echo"  <a href='change.php'><button type='button' class='nav-button' >Change password</button></a>
                                    <a href='include/logout.include.php'><button type='button' class='nav-button'>Logout</button></a>";

                          }
                          else{
                                  echo"  <a href='login.php'><button type='button' class='nav-button' >Login</button></a>
                                    <a href='register.php'><button type='button' class='nav-button'>Register</button></a>";
                                }
                        ?>

            </div>
        </div>
    </nav>

    <main>
        <div class="main-article-container">
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1083">
                    <h4>travel</h4>
                </div>
                <h3>Najljepše destinacije</h3>
                <p>Minim eirmod his an. Per in copiosae efficiantur, cu consul quaerendum eum, qui quis dolore integre ad. Regione reformidans id pro, fastidii placerat tincidunt id vis, te alterum quaerendum qui. Nulla aperiam sed an, mea soleat diceret efficiendi an. Congue voluptua cu ius.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=491">
                    <h4>hobi</h4>
                </div>
                <h3>Od hobija do obrta</h3>
                <p>Mel reque putent eu, mel et movet discere deterruisset. At sea autem dicant adipiscing, id augue nostro his. In invidunt maluisset per, mea ea percipit adolescens. Commodo offendit perpetua vix no, illum assueverit in per. Et libris mandamus efficiendi mea, pri justo fastidii id.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1059">
                    <h4>dom</h4>
                </div>
                <h3>Retro kuće</h3>
                <p>Quo id quis iisque dolorem. His laoreet vituperatoribus et, quo doming salutandi at, ferri efficiantur nam et. Vel impedit civibus copiosae ei, quo ut quem assueverit. Ea suas illum atqui mei, etiam praesent iudicabit sea at. Expetenda molestiae disputando duo no, sit ea munere meliore.</p>
            </div>
        
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1043">
                    <h4>travel</h4>
                </div>
                <h3>Galerija veličanstvene prirode</h3>
                <p>Ludus utroque gubergren est ex, mel detracto scribentur ut, cum ludus accusam ad. Nec postea laoreet definitionem at, ius id explicari interesset. Mutat nostrum ei vim. Te ius vidisse nostrud quaestio. Nam esse etiam id. Melius iisque prodesset te vix, eu duo possim omnesque.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1024">
                    <h4>životinje</h4>
                </div>
                <h3>Vrsta pred izumiranjem?</h3>
                <p>Fuisset persequeris cu has, no sed modo justo concludaturque, viris dignissim vel ex. Timeam dolorum pertinax duo ut. Sea elit rationibus mnesarchum et, populo torquatos ei has. Usu oratio constituto ea. Modo interesset an sea, et nostro referrentur voluptatibus duo.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1002">
                    <h4>ekologija</h4>
                </div>
                <h3>Ekološka katastrofa kod Meksika</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consectetur diam ac ipsum ultrices euismod. 
    This keyword value indicates to display an ellipsis ('…', U+2026 Horizontal Ellipsis) to represent clipped text. The ellipsis is displayed inside the content area, decreasing the amount of text displayed. If there is not enough space to display the ellipsis, it is clipped.</p>
            </div>     

            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=967">
                    <h4>znanost</h4>
                </div>
                <h3>NASA otkrila novi planet</h3>
                <p>Ex noster aliquid omnesque vim. Ea usu virtute detracto. Modo congue ad pro. Ne ius movet fabellas insolens. Quod labore sed ex. Pro quot idque mentitum ex. Est verterem intellegam in, affert corpora iracundia id qui.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1013">
                    <h4>obitelj</h4>
                </div>
                <h3>Vjenčanje iz snova</h3>
                <p>Error iusto pertinax ne sed, putant denique sed id. Soluta oblique meliore ei eum. Per omnes noster accumsan eu, vix maiorum contentiones no. Melius contentiones his ne, ex omnis laboramus cum, ad aperiri patrioque mei. Nostrum menandri ut vis, epicurei salutandi an eos. Mucius melius ius in.</p>
            </div>
            <div class="article-container">
                <div class="article-image-container">
                    <img class="article-image" src="https://unsplash.it/460/280?image=1001">
                    <h4>obitelj</h4>
                </div>
                <h3>Što čini dobrog roditelja?</h3>
                <p>Ne munere probatus eam, modo utamur constituam ea qui. Vel omnes omnium nostrud eu, mel te dicat cotidieque, vim et dolorem honestatis. Vim ea dolore detracto. Cu eos salutatus voluptatibus, ei erat dolore quo.</p>
            </div>
        </div>



    </main>










<!-- ................ LOGIN FORMAAAAAAAA ..................

    <div id="login-container">
        <form id="form-container">

            <div class="input-wrapper">
                <div class="icon-wrapper">
                    <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                </div>
                
                    <input type="text" class="input-login" name="username" placeholder="Username" autofocus>    
                
            </div>
            
            <div class="input-wrapper">
                <div class="icon-wrapper">
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <input type="password" class="input-login" name="password" placeholder="Password">
            </div>

            <div class="remember-container">
                <label class="switch">
                  <input type="checkbox">
                  <div class="slider round"></div>
                </label>
                <span class="remember-login-text">Remember login?</span>
            </div>

            <button type="button" id="submit-button">Login</button>
        </form>
    </div>
-->


    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="js/script.js"></script>

</body>
</html>