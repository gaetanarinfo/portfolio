<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="separator"></div>
        </div>
    </div>
</div>

<!-- Section 7 -->
<div class="w-100 p-4" id="contact">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <p class="title-h">Pour me contacter</p>
            <hr class="h-2 bg-light">
        </div>
    </div>
</div>
<!-- Section 7 -->

<!-- Réseaux sociaux -->
<div class="container mt-n4">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle-h">Retrouvez moi sur les réseaux sociaux</p>

            <div class="text-center mt-4">
                <a class="social-icon-1 ml-3" href="#" target="_blank" title="Facebook"></a>
                <a class="social-icon-2 ml-3" href="#" target="_blank" title="Twitter"></a>
                <a class="social-icon-3 ml-3" href="#" target="_blank" title="Instagram"></a>
                <a class="social-icon-4" href="#" target="_blank" title="Snapchat"></a>
            </div>
        </div>
    </div>
</div>
<!-- Réseaux sociaux -->

<div class="w-100 p-4">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <hr class="h-2 bg-light">
        </div>
    </div>
</div>

<!-- Contact -->
<div class="container mt-n8">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-4">
                <form class="text-center" method="POST" action="/">
                    <div class="form-row">
                        <div class="form-group col-md-3 d-inline-block ml-3">
                            <label for="inputEmail" class="mb-3">Votre adresse email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Adresse email">
                        </div>
                        <div class="form-group col-md-3 d-inline-block ml-3 mt-3">
                            <label for="inputNom" class="mb-3">Votre nom et prénom</label>
                            <input type="text" class="form-control" id="inputNom" placeholder="Nom et Prénom">
                        </div>
                        <div class="form-group col-md-3 d-inline-block mt-3">
                            <label for="inputSujet" class="mb-3">Votre sujet</label>
                            <select id="inputSujet" class="form-control">
                                <option selected="">Choissisez un sujet...</option>
                                <option disabled>---------</option>
                                <option value="Bug">Bug</option>
                                <option disabled>---------</option>
                                <option value="Theme">Thème sur le site</option>
                                <option disabled>---------</option>
                                <option value="Autres">Autres sujet</option>
                            </select>
                        </div>

                        <div class="form-group col-md-8 m-auto mt-4">
                            <label for="inputMessage" class="mb-3">Votre message</label>
                            <textarea id="inputMessage" class="form-control" rows="12"
                                placeholder="Ici commence le message"></textarea>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-form-send ml-5">Envoyer le message</button> <button type="reset"
                            class="btn btn-form-reset">Effacer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->

<a onclick="topFunction()" class="btn_top" title="Retour en haut"><i class="fas fa-angle-up"></i></a>

<!-- Footer -->
<footer class="page-footer mt-15 pt-4">

    <!-- Footer widget -->
    <div class="container-fluid m-auto text-center">

        <!-- Grid ligne -->
        <div class="row">

            <!-- Grid colonne -->
            <div class="col-md-3 mb-md-0 mt-n2">

                <!-- Links -->
                <h5 class="text-uppercase">Facebook</h5>

                <div id="fb-root" class="mt-2"></div>
                <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0" nonce="eU3vt2d2"></script>

                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="452"
                    data-height="400" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/facebook">Facebook</a></blockquote>
                </div>
            </div>
            <!-- Grid colonne -->

            <!-- Grid colonne -->
            <div class="col-md-3 mb-md-0 mt-n2 widget">

                <!-- Lien -->
                <h5 class="text-uppercase">Twitter</h5>

                <a class="twitter-timeline mt-2" data-width="476" data-height="400" data-dnt="true" data-theme="dark"
                    href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
                <script async defer crossorigin="anonymous" src="https://platform.twitter.com/widgets.js"></script>

            </div>
            <!-- Grid colonne -->

            <!-- Grid colonne -->
            <div class="col-md-3 mb-md-0 mt-n2 widget">
                <!-- Lien -->
                <h5 class="text-uppercase">Meilleurs rubrique</h5>

                <ul class="list-unstyled mt-14 widget-link">
                    <li class="mb-3">
                        <a href="#accueil" class="a-f"><i class="fas fa-home ml-1" aria-hidden="true"></i> Accueil</a>
                    </li>
                    <li class="mb-3">
                        <a href="#projet" class="a-f"><i class="fas fa-tag ml-1" aria-hidden="true"></i> Projet</a>
                    </li>
                    <li class="mb-3">
                        <a href="#language" class="a-f"><i class="fab fa-html5 ml-1" aria-hidden="true"></i>
                            Language</a>
                    </li>
                    <li class="mb-3">
                        <a href="#galerie" class="a-f"><i class="far fa-image ml-1" aria-hidden="true"></i> Galerie</a>
                    </li>
                    <li class="mb-3">
                        <a href="#tuto" class="a-f"><i class="fab fa-youtube ml-1" aria-hidden="true"></i> Tuto</a>
                    </li>
                    <li class="mb-3">
                        <a href="#article" class="a-f"><i class="far fa-newspaper ml-1" aria-hidden="true"></i> Actu &
                            Dev</a>
                    </li>
                    <li class="mb-3">
                        <a href="#contact" class="a-f"><i class="fas fa-reply ml-1" aria-hidden="true"></i> Contact</a>
                    </li>
                </ul>
            </div>
            <!-- Grid colonne -->

            <!-- Grid colonne -->
            <div class="col-md-3 mb-md-0 mt-n2 widget">
                <!-- Commentaire récent -->
                <h5 class="text-uppercase">Commentaire récent</h5>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-md-12">
                        <div class="card comment">
                            <div class="comment-widgets">
                                <!-- Commentaire -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2">
                                        <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/SA/en/999/EP0001-CUSA02376_00-AV00000000000011/1601165358000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000"
                                            alt="Gaëtan Seigneur" width="50" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6>Gaëtan Seigneur</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has</span>
                                        <div class="comment-footer mt-1">
                                            <span class="text-muted float-right"><i
                                                    class="fas fa-pencil-alt ml-2"></i>Posté le Lundi 14 avril
                                                2020</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Commentaire -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2">
                                        <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/SA/en/999/EP0001-CUSA02376_00-AV00000000000011/1601165358000/image?w=240&h=240&bg_color=000000&opacity=100&_version=00_09_000"
                                            alt="Gaëtan Seigneur" width="50" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6>Gaëtan Seigneur</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has</span>
                                        <div class="comment-footer mt-1">
                                            <span class="text-muted float-right"><i
                                                    class="fas fa-pencil-alt ml-2"></i>Posté le Lundi 14 avril
                                                2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Grid colonne -->

        </div>
        <!-- Grid ligne -->

    </div>
    <!-- Footer widget -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright
        <a href="#"> Gaëtan Seigneur</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->