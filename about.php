<div id="aboutbureau">



        <div id="aboutbureauinterne">


            <div id="aboutbureauinterne_texte">
            <p class="about2">Je suis Mickael CECEN développeur web/mobile français.</p>
            <p class="about2">Apprenant à l'Access Code School j'ai, au cours de ces derniers mois acquis des compétences en HTML5, CSS3, JS et PHP7, contactez moi via mes réseaux sociaux et découvrez mon <a href ="cv/Mickael_CECEN">CV</a>.</p>


            <nav>
                <ul id ="reseauxall">
                    <li class ="reseaux4"><a href="form.php" id="manual-ajax"><i class="fas fa-envelope-square fa-3x " style="color: #BA3500;" ></i></a></li>
                    <li class ="reseaux3"><a href="https://github.com/MickaelCe" target="_blank"><i class="fab fa-github-square fa-3x" style="color: #BA3500;"></i></a></li>
                    <li class ="reseaux5"><a href="https://www.linkedin.com/in/mickaelcecen/" target="_blank"><i class="fab fa-linkedin fa-3x" style="color: #BA3500;"></i></a></li>
                </ul>
            </nav>

        </div>

        <div class="formulaire">

                    <form action="contact.php" method="post" id="formulaire" >


                        <h1>Contactez-moi</h1>

                        <input name ="Name" id="name" value="" type="text" maxlength="10" placeholder="Nom" >


                        <input name ="Email" id="mail" value="" type="text" placeholder="Email" >


                        <input name ="Subject" id="sujet" value="" type="subject" maxlength="10" placeholder="Sujet" >
                        <textarea name ="Message" id="mess" value="" maxlength="250" placeholder="Message"></textarea>


                        <button type="submit" name="submit" class="button" id="submit">Envoyer</button>
                        <p1 class="form-message"></p1>

                    </form>

        </div>

     </div>

        <h2 id="aboutmeh2">À&#8209PROPOS<span class="underline2"></span></h2>
</div>
<script src="js/form.js"></script>
