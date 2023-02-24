<!-- Insertion de l'entete HTML -->
<?php include_once("commun/entete.php");?>
<body>

    <!-- Insertion de la bannière du site -->
    <?php include_once("commun/header.php");?>
    <main>

        <figure id="bg-don">
            <section class="encadre">
                <h2 class="titreSection">Comment nous venir en aide ?</h2>
                <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam similique, repudiandae
                    aspernatur odio
                    possimus dolore nam est sapiente doloremque praesentium sint consequuntur suscipit placeat, iste,
                    sunt
                    incidunt vel itaque alias.
                    Dignissimos laudantium debitis porro nesciunt consequuntur excepturi corrupti vitae in optio,
                    repellendus
                    dolores iste fugit id placeat provident eligendi! Possimus corporis neque facere quidem? Voluptate
                    veniam
                    animi quaerat beatae quos?
                    Recusandae ea placeat laboriosam, omnis saepe optio esse. Nulla illum maiores illo, dolores iste
                    provident
                    molestias suscipit adipisci minima explicabo? Porro pariatur ullam provident animi aliquid,
                    perspiciatis
                    cumque ad nemo!
                </p>
            </section>
        </figure>



        <!-- - Bénévole -->
        <div class="sectionForm">
            <div class="form">

                <h3 class="titreForm">Devenir bénévole</h3>

                <form action="../config/formBenevole.php" method="post">

                    <div class="form-content">
                        <div class="gauche">

                            <div class="grp-input">
                                <label for="prenom_benevole">Prénom</label>
                                <input type="text" id="prenom_benevole" name="sPrenomBenevole">
                            </div>

                            <div class="grp-input">
                                <label for="nom_benevole">Nom</label>
                                <input type="text" id="nom_benevole" name="sNomBenevole">
                            </div>

                            <div class="grp-input">
                                <label for="email_benevole">Adresse e-mail</label>
                                <input type="email" name="sEmailBenevole" id="email_benevole">
                            </div>

                            <button type="submit" class="btn-validation">Valider</button>

                        </div>



                        <div class="droite">

                            <div class="grp-input">
                                <fieldset>
                                    <legend>Vos jours de disponibilités</legend>

                                    <div>
                                        <label for="lundi">Lundi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="lundi" value="Lundi">
                                    </div>
                                    <div>
                                        <label for="mardi">Mardi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="mardi" value="Mardi">
                                    </div>
                                    <div>
                                        <label for="mercredi">Mercredi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="mercredi" value="Mercredi">
                                    </div>
                                        <div><label for="jeudi">Jeudi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="jeudi" value="Jeudi">
                                    </div>
                                    <div>
                                        <label for="vendredi">Vendredi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="vendredi" value="Vendredi">
                                    </div>
                                    <div>
                                        <label for="samedi">Samedi</label>
                                        <input type="checkbox" name="sJourDispoBenevole" id="samedi" value="Samedi">
                                    </div>

                                </fieldset>
                            </div>

                            <div class="grp-input">
                                <label for="message"></label>
                                <textarea name="message" id="message" cols="30" rows="10"
                                    placeholder="Votre message"></textarea>
                            </div> .

                        </div>

                    </div>



                </form>
            </div>

            <div class="form">
                <h3 class="titreForm">Faire un don</h3>
                <form action="#" method="post">

                    <div class="form-content">
                        <div class="gauche">

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

                        </div>

                        <div class="droite">

                            <div class="grp-input">
                                <label for="don">Don</label>
                                <input type="number" name="don" id="don" value="10" min="1">
                            </div>

                            <div class="grp-input">
                                <label for="message_don"></label>
                                <textarea name="message" id="message_don" cols="30" rows="10"
                                    placeholder="Votre message"></textarea>
                            </div>

                        </div>

                    </div>

                    <button class="btn-validation">Valider</button>

                </form>
            </div>
        </div>


        <!-- Insertion des valeurs -->
        <?php include_once("commun/valeurs.php");?>

    </main>

    <!-- Insertion du pied de page -->
    <?php include_once("commun/footer.php");?>

</body>

</html>