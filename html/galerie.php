<!-- Insertion de l'entete HTML -->
<?php include_once("commun/entete.php");?>
<body>

    <!-- Insertion de la bannière du site -->
    <?php include_once("commun/header.php");?>
    <main>

        <!-- Introduction -->
        <figure id="bg-intro">
            <section class="encadre">
                <h2 class="titreSection">Adopter un animal</h2>

                <div class="content-encadre">
                    <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error deleniti beatae qui autem voluptas
                        voluptatum aliquid nobis impedit pariatur alias Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quo doloremque explicabo a earum, fugiat vitae inventore eos nesciunt quos blanditiis sit labore,
                        aliquid quas est ab ipsam necessitatibus alias reiciendis!
                    </p>
                    <a class="btn" href="#chien">Les chiens</a>
                    <a class="btn" href="#chat">Les chats</a>
                </div>
                
            </section>
        </figure>

        


        <!-- Galerie -->

        <!-- Chiens -->
        <section id="chien">
            <h3 class="titre-galerie">Les chiens</h3>
            <div class="galerie chien">
            
                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_1/black_dog_s.jpeg" alt="chien noir">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_2/cute_dog_s.jpeg" alt="chien mignon">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_3/dog_s.jpeg" alt="chien">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_1/black_dog_s.jpeg" alt="chien noir">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_2/cute_dog_s.jpeg" alt="chien mignon">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chien_3/dog_s.jpeg" alt="chien">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

            </div>

        </section>
        

        <!-- Chats -->

        <section id="chats">

            <h3 class="titre-galerie">Les Chats</h3>
            <div class="galerie chat">
                
                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_1/black-cat_s.jpeg" alt="chat noir">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_2/pet_cat_s.jpeg" alt="chat qui se fait caresser">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_3/white_cat_s.jpeg" alt="chat blanc">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_1/black-cat_s.jpeg" alt="chat noir">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_2/pet_cat_s.jpeg" alt="chat qui se fait caresser">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

                <div class="grp-galerie">
                    <a class="lien_galerie" href="page_animal.php">
                        <figure>
                            <img src="../images/galerie/chat_3/white_cat_s.jpeg" alt="chat blanc">
                            <figcaption>Nom - Race</figcaption>
                        </figure>
                    </a>
                </div>

            </div>
        </section>

        <!-- Insertion des valeurs -->
        <?php include_once("commun/valeurs.php");?>

    </main>

    <!-- Insertion du pied de page -->
    <?php include_once("commun/footer.php");?>

</body>

</html>