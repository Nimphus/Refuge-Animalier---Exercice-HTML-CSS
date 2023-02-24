<!-- Insertion de l'entete HTML -->
<?php include_once("html/commun/entete.php");?>
<body>

    <!-- Insertion de la bannière du site -->
    <?php include_once("html/commun/header.php");?>
    <main>

        <!-- Section - Adoption -->

        <figure id="bg-adopt">
            <section class="encadre" id="adopt">

                <h2 class="titreSection">Adopter</h2>

                <div class="content-encadre">
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae et
                    tempora quod est eligendi rem optio, quidem quasi quas! Placeat repudiandae soluta
                    cupiditate quae totam tenetur.
                    </p>

                    <!-- Boutons adoption chiens | chats -->
                    <a class="btn-adopt" href="html/galerie.php#chien">Adopter un chien</a>
                    <a class="btn-adopt" href="html/galerie.php#chats">Adopter un chat</a>
                </div>

            </section>

        </figure>

        <!-- Section - Présentation du refuge -->
        <section id="presentation">

            <h2>Présentation</h2>

            <div id="content-presentation">

                <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, saepe assumenda! Cum amet
                    illum beatae
                    distinctio esse, dolor hic facilis possimus reiciendis fuga sequi fugiat nostrum cumque saepe? Vero,
                    obcaecati.
                    Mollitia ducimus consequatur illum error modi veritatis. Vero architecto harum molestiae nostrum
                    debitis
                    rem quisquam impedit ratione voluptate iusto! Ratione natus dolorem asperiores, animi quis
                    voluptatem
                    quisquam ipsam vel et?
                    Iusto inventore totam porro obcaecati nam facere, at iure ea dolorum impedit asperiores aut, animi
                    eius
                    id harum temporibus, optio adipisci ab fugiat enim minima error exercitationem hic. Soluta, porro.
                    Hic aliquid quas consectetur tempore consequuntur autem ducimus, cupiditate est recusandae omnis
                    animi
                    sunt earum libero quaerat obcaecati reprehenderit magnam quisquam. Aspernatur, qui possimus ullam
                    officiis pariatur maiores placeat consectetur.
                </p>

            </div>

            <figure class="img-presentation">
                <img src="images/index/presentation.jpeg" alt="Des visiteurs du refuge">
            </figure>

        </section>

        <!-- Insertion des valeurs -->
        <?php include_once("html/commun/valeurs.php");?>

        <!-- Section - Aide -->
        <section id="don">

            <h2>Comment nous soutenir ?</h2>

            <div id="content-don">

                <div class="widget w1">

                    <h3>Faire un don</h3>
                    <div class="separation"></div>
                    <form action="#" method="post">

                        <div class="form">

                            <div class="grp-input">
                                <label for="name">Prénom</label>
                                <input type="text" id="name">
                            </div>

                            <div class="grp-input">
                                <label for="surname">Nom</label>
                                <input type="text" id="surname">
                            </div>

                            <div class="grp-input">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" name="email-emmeteur" id="email">
                            </div>

                            <div class="grp-input">
                                <label for="donnation">Don</label>
                                <input type="number" name="don" id="donnation" value="10" min="1">
                            </div>

                            <div class="grp-input">
                                <label for="message"></label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Laissez nous un message"></textarea>
                            </div>

                            <button id="btn-validation">Valider</button>

                        </div>

                    </form>
                </div>


                <div class="widget w2">
                    <h3>Nous rendre visite</h3>
                    <div class="separation"></div>

                    <div id="horaire">
                        <span>Lundi
                            <time datetime="08:00">8:00</time>
                            <time datetime="16:00">16:00</time>
                        </span>

                        <span>Mardi
                            <time datetime="08:00">8:00</time>
                            <time datetime="16:00">16:00</time>
                        </span>

                        <span>Mercredi
                            <time datetime="08:00">8:00</time>
                            <time datetime="16:00">16:00</time>
                        </span>

                        <span>Jeudi
                            <time datetime="08:00">8:00</time>
                            <time datetime="16:00">16:00</time>
                        </span>

                        <span>Vendredi
                            <time datetime="08:00">8:00</time>
                            <time datetime="16:00">16:00</time>
                        </span>

                        <span>Samedi
                            <time datetime="08:00">8:00</time>
                            <time datetime="12:00">16:00</time>
                        </span>

                        <span>Dimanche</span>
                        <span class="no-padding">Fermé au public</span>
                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- Insertion du pied de page -->
    <?php include_once("html/commun/footer.php");?>

</body>

</html>