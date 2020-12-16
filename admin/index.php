<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administration du site internet</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">

</head>

<body>

    <div class="w-100">
        <div class="cont">
            <div class="row justify-content-left">
                <div class="container container-center">

                    <div class="row justify-content-center" id="membres">
                        <div>
                            <p class="text-center">Liste des membres du site internet</p>
                        </div>

                        <div class="col-md-8 table-responsive">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nom et Prénom</th>
                                        <th scope="col">Adresse email</th>
                                        <th scope="col">Rang</th>
                                        <th scope="col">Date d'inscription</th>
                                        <th scope="col">Gestion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="th-perso">1</th>
                                        <td class="th-perso">Seigneur Gaëtan</td>
                                        <td class="th-perso">gaetanarinfo@gmail.com</td>
                                        <td class="th-perso">Administrateur</td>
                                        <td class="th-perso">23/11/2020</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_membre"><i class="fas fa-user-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer le membre"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer un membre"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">2</th>
                                        <td class="th-perso">Seigneur Gaëtan</td>
                                        <td class="th-perso">gaetanarinfo@gmail.com</td>
                                        <td class="th-perso">Administrateur</td>
                                        <td class="th-perso">23/11/2020</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_membre"><i class="fas fa-user-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer le membre"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer un membre"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">3</th>
                                        <td class="th-perso">Seigneur Gaëtan</td>
                                        <td class="th-perso">gaetanarinfo@gmail.com</td>
                                        <td class="th-perso">Administrateur</td>
                                        <td class="th-perso">23/11/2020</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_membre"><i class="fas fa-user-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer le membre"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer un membre"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">4</th>
                                        <td class="th-perso">Seigneur Gaëtan</td>
                                        <td class="th-perso">gaetanarinfo@gmail.com</td>
                                        <td class="th-perso">Administrateur</td>
                                        <td class="th-perso">23/11/2020</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_membre"><i class="fas fa-user-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer le membre"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer un membre"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="row justify-content-center" style="display: none;" id="blog">

                        <div>
                            <p class="text-center">Liste des articles blog du site internet</p>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col" style="width: 28%;">Titre</th>
                                        <th scope="col" style="width: 15%;">Date de création</th>
                                        <th scope="col" style="width: 11%;">Commentaire</th>
                                        <th scope="col" style="width: 30%">Description de l'article</th>
                                        <th scope="col" style="width: 10%;">Gestion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="th-perso">1</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="th-perso">0</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_article"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer l'article"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer l'article"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">2</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="th-perso">0</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_article"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer l'article"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer l'article"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">3</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="th-perso">0</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_article"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer l'article"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer l'article"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">4</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="th-perso">0</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_article"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer l'article"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer l'article"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row justify-content-center" id="youtube" style="display: none;">

                        <div>
                            <p class="text-center">Vidéos YouTube</p>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col" style="width: 28%;">Titre</th>
                                        <th scope="col" style="width: 25%;">Lien vidéo</th>
                                        <th scope="col" style="width: 30%">Description de la vidéo</th>
                                        <th scope="col" style="width: 10%;">Gestion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="th-perso">1</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_video"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer la vidéo"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">2</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_video"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer la vidéo"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">3</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_video"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer la vidéo"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">4</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_video"><i class="fas fa-edit ml-2" data-toggle="tooltip" data-placement="top" title="Editer la vidéo"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row justify-content-center" style="display: none;" id="galerie">

                        <div>
                            <p class="text-center">Galerie du site internet</p>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 3%;">id</th>
                                        <th scope="col" style="width: 28%;">Titre</th>
                                        <th scope="col" style="width: 25%;">Lien image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="th-perso">1</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">2</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">3</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">4</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">http://blbla</td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row justify-content-center" style="display: none;" id="projet">

                        <div>
                            <p class="text-center">Projet réaliser</p>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-hover table-dark text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 6%;">id</th>
                                        <th scope="col" style="width: 18%;">Titre</th>
                                        <th scope="col" style="width: 15%;">Projet privé</th>
                                        <th scope="col" style="width: 11%;">Lien image du projet</th>
                                        <th scope="col" style="width: 11%;">Date du projet</th>
                                        <th scope="col" style="width: 30%">Description du projet</th>
                                        <th scope="col" style="width: 10%;">Gestion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="th-perso">1</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">non</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_projet"><i class="fas fa-edit ml-2"  data-toggle="tooltip" data-placement="top" title="Editer le projet"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer le projet"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">2</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">non</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_projet"><i class="fas fa-edit ml-2"  data-toggle="tooltip" data-placement="top" title="Editer le projet"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer le projet"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">3</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">non</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_projet"><i class="fas fa-edit ml-2"  data-toggle="tooltip" data-placement="top" title="Editer le projet"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer le projet"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="th-perso">4</th>
                                        <td class="th-perso">Le super titre</td>
                                        <td class="th-perso">non</td>
                                        <td class="th-perso">http://blbla</td>
                                        <td class="th-perso">23/02/2020</td>
                                        <td class="table-content th-perso">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</td>
                                        <td class="th-perso"><a href="" data-toggle="modal" data-target="#modif_projet"><i class="fas fa-edit ml-2"  data-toggle="tooltip" data-placement="top" title="Editer le projet"></i></a>
                                            <a href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer le projet"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <div class="container-menu-left fixed-top">

        <div class="card-profil">
            <div class="m-auto text-center">
                <img src="https://store.playstation.com/store/api/chihiro/00_09_000/container/SA/en/999/EP0001-CUSA02376_00-AV00000000000011/1601165358000/image?w=240&amp;h=240&amp;bg_color=000000&amp;opacity=100&amp;_version=00_09_000" alt="Gaëtan Seigneur" width="117"
                    class="rounded-circle mt-4">
            </div>

            <div class="m-auto text-center mt-3">
                <p><i class="fas fa-user-cog ml-1" aria-hidden="true"></i>Seigneur Gaëtan</p>
                <p><i class="fas fa-random ml-1" aria-hidden="true"></i>Administrateur</p>
                <p><i class="fas fa-sign-out-alt ml-1" aria-hidden="true"></i>Inscrit le : 20/11/2020</p>

                <hr>
            </div>

            <div class="m-auto text-center mt-3 menu-1">
                <div class="title-profil">Menu de configuration</div>
            </div>

            <div class="m-auto mt-3 menu-profil menu-1">
                <ul class="list-unstyled text-center">
                    <li class="pb-2"><a href="#" id="Membres"><i class="fas fa-users ml-2" aria-hidden="true"></i>Liste des membres</a></li>
                    <li class="pb-2"><a href="#" id="Blog"><i class="fas fa-pen-square ml-2" aria-hidden="true"></i>Mon blog personnel</a></li>
                    <li class="pb-2"><a href="#" id="Youtube"><i class="fab fa-youtube ml-2" aria-hidden="true"></i>Vidéos youtube</a></li>
                    <li class="pb-2"><a href="#" id="Galerie"><i class="far fa-image ml-2" aria-hidden="true"></i>Ma galerie</a></li>
                    <li class="pb-2"><a href="#" id="Projet"><i class="fas fa-project-diagram ml-2" aria-hidden="true"></i>Mes projets</a></li>
                </ul>
            </div>

            <hr>

            <div class="m-auto text-center mt-3">
                <div class="title-profil">Une idée un ajout, c'est ici.</div>
            </div>

            <div class="m-auto mt-3 menu-profil">
                <ul class="list-unstyled text-center">
                    <li class="pb-2"><a href="" data-toggle="modal" data-target="#add_projet"><i class="fas fa-pencil-alt ml-2" aria-hidden="true"></i>Ajouter un projet</a></li>
                    <li class="pb-2"><a href="" data-toggle="modal" data-target="#add_article"><i class="fas fa-tag ml-2" aria-hidden="true"></i>Ajouter un article blog</a></li>
                    <li class="pb-2"><a href="" data-toggle="modal" data-target="#add_membres"><i class="fas fa-star ml-2" aria-hidden="true"></i>Ajouter un nouveau membre</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Menu -->

    <!-- Mobile -->
    <div class="list">

        <div class="m-auto text-center mt-3 mb-3 container-list">
            <p class="text-center">Liste des membres du site internet</p>
        </div>

        <div class="list-group m-auto">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Nom & Prénom</h5>
                </div>
                <p class="mb-1">Adresse email : gaetanarinfo@gmail.com</p>
                <p class="mb-1">Rang : Administrateur</p>
                <p class="mb-1">Date d'inscription : 23/02/2020</p>
                <p class="mb-1">
                    <a href="" data-toggle="modal" data-target="#modif_membre" data-original-title="Editer le membre"><i class="fas fa-user-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer un membre"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Nom & Prénom</h5>
                </div>
                <p class="mb-1">Adresse email : gaetanarinfo@gmail.com</p>
                <p class="mb-1">Rang : Administrateur</p>
                <p class="mb-1">Date d'inscription : 23/02/2020</p>
                <p class="mb-1">
                    <a href="" data-toggle="modal" data-target="#modif_membre" data-original-title="Editer le membre"><i class="fas fa-user-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" id="user_delete_2" data-original-title="Supprimer un membre"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Nom & Prénom</h5>
                </div>
                <p class="mb-1">Adresse email : gaetanarinfo@gmail.com</p>
                <p class="mb-1">Rang : Administrateur</p>
                <p class="mb-1">Date d'inscription : 23/02/2020</p>
                <p class="mb-1">
                    <a href="" data-toggle="modal" data-target="#modif_membre" data-original-title="Editer le membre"><i class="fas fa-user-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" id="user_delete_3" data-original-title="Supprimer un membre"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Nom & Prénom</h5>
                </div>
                <p class="mb-1">Adresse email : gaetanarinfo@gmail.com</p>
                <p class="mb-1">Rang : Administrateur</p>
                <p class="mb-1">Date d'inscription : 23/02/2020</p>
                <p class="mb-1">
                    <a href="" data-toggle="modal" data-target="#modif_membre" data-original-title="Editer le membre"><i class="fas fa-user-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer un membre"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>

        <hr class="separateur">

        <div class="m-auto text-center mt-3 container-list">
            <p class="text-center">LISTE DES ARTICLES BLOG DU SITE INTERNET</p>
        </div>

        <div class="list-group m-auto">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Titre</h5>
                </div>
                <p class="mb-1">Date de création : 23/02/2020</p>
                <p class="mb-1">Commentaire : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_article" data-original-title="Editer l'article"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer l'article"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Titre</h5>
                </div>
                <p class="mb-1">Date de création : 23/02/2020</p>
                <p class="mb-1">Commentaire : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_article" data-original-title="Editer l'article"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer l'article"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Titre</h5>
                </div>
                <p class="mb-1">Date de création : 23/02/2020</p>
                <p class="mb-1">Commentaire : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_article" data-original-title="Editer l'article"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer l'article"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="m-auto mt-1 mb-1">Titre</h5>
                </div>
                <p class="mb-1">Date de création : 23/02/2020</p>
                <p class="mb-1">Commentaire : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_article" data-original-title="Editer l'article"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer l'article"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>

        <hr class="separateur">

        <div class="m-auto text-center mt-3 container-list">
            <p class="text-center">VIDÉOS YOUTUBE</p>
        </div>

        <div class="list-group m-auto">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><iframe class="card-img-top card-yt" src="https://www.youtube.com/embed/Y80juYcu3ZI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1">Date : 18 déc. 2015</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_video" data-original-title="Editer la vidéo"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><iframe class="card-img-top card-yt" src="https://www.youtube.com/embed/Y80juYcu3ZI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1">Date : 18 déc. 2015</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_video" data-original-title="Editer la vidéo"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><iframe class="card-img-top card-yt" src="https://www.youtube.com/embed/Y80juYcu3ZI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1">Date : 18 déc. 2015</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_video" data-original-title="Editer la vidéo"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><iframe class="card-img-top card-yt" src="https://www.youtube.com/embed/Y80juYcu3ZI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1">Date 18 déc. 2015</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_video" data-original-title="Editer la vidéo"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>

        <hr class="separateur">

        <div class="m-auto text-center mt-3 container-list">
            <p class="text-center">GALERIE DU SITE INTERNET</p>
        </div>

        <div class="list-group m-auto">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/galerie/image-1.jpeg" alt="image1"></p>
                <p class="mb-1">Titre</p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/galerie/image-2.jpeg" alt="image2"></p>
                <p class="mb-1">Titre</p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/galerie/image-3.jpeg" alt="image3"></p>
                <p class="mb-1">Titre</p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/galerie/image-4.jpeg" alt="image4"></p>
                <p class="mb-1">Titre</p>
            </div>
        </div>

        <div class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>

        <hr class="separateur">

        <div class="m-auto text-center mt-3 container-list">
            <p class="text-center">PROJET REALISER</p>
        </div>

        <div class="list-group m-auto">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/over-games.png" alt="Over-Games"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 15/02/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/games-actus.png" alt="Games-Actus"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 10/05/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/assassin-creed.png" alt="ASSASSIN CREED VALHALLA"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 15/08/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-placement="top" title="" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/over-games-news.png" alt="OVER GAMES NEWS"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 15/08/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/chat.png" alt="PROGRAMME CHAT SUR LINUX"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 25/11/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="list-group m-auto mt-2">
            <div class="list-group-item list-group-item-action flex-column align-items-start text-center">
                <p class="mb-1"><img class="w-100" src="../assets/images/projets/flex-site.png" alt="FLEX SITE"></p>
                <p class="mb-1">Titre</p>
                <p class="mb-1">Projet privé : non</p>
                <p class="mb-1">Date de création : 25/10/2020</p>
                <p class="mb-1">Utilisateurs qui aime : 0</p>
                <p class="mb-1">Description : Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quae, quas deleniti at sequi explicabo</p>
                <p class="mb-1"><a href="" data-toggle="modal" data-target="#modif_projet" data-original-title="Editer le projet"><i class="fas fa-edit ml-2" aria-hidden="true"></i></a>
                    <a href="" data-toggle="modal" data-target="#deleteModal" data-original-title="Supprimer le projet"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </p>
            </div>
        </div>

        <div class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- Mobile -->

    <!-- Modal Admin Ajout Projet -->
    <div class="modal fade" id="add_projet" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelAddProjet">Ajouter un projet réalisé</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="imageProjetB" class="text-dark mb-2">Image du projet</label>
                            <input type="text" class="form-control mb-2" name="imageProjetB" id="imageProjetB" placeholder="Image du projet">
                        </div>

                        <div class="form-group">
                            <label for="titreProjetB" class="text-dark mb-2">Titre du projet</label>
                            <input type="text" class="form-control mb-2" name="titreProjetB" id="titreProjetB" placeholder="Titre du projet">
                        </div>

                        <div class="form-group">
                            <label for="dateProjetA" class="text-dark mb-2">Date du projet</label>
                            <input type="date" class="form-control mb-2" name="dateProjetA" id="dateProjetA">
                        </div>

                        <div class="form-group">
                            <label for="contentProjetA" class="text-dark mb-2">Description du projet</label>
                            <textarea rows="10" class="form-control mb-2" name="contentProjetA" id="contentProjetA" placeholder="Description du projet"></textarea>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <label class="text-dark mb-2">Projet privé ?</label>
                        </div>

                        <div class="form-group mb-1 text-center">
                            <input type="checkbox" id="checkBoxConfirmOuiB" value="oui">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmOui">Oui</label>

                            <input class="mr-2" type="checkbox" id="checkBoxConfirmNonB" value="non">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmNon">Non</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Ajout Projet -->

    <!-- Modal Admin Ajout Article Blog -->
    <div class="modal fade" id="add_article" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelAddArticle">Ajouter un article au blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="imageArticleB" class="text-dark mb-2">Image de l'article</label>
                            <input type="text" class="form-control mb-2" name="imageArticleB" id="imageArticleB" placeholder="Image de l'article">
                        </div>

                        <div class="form-group">
                            <label for="titreArticleB" class="text-dark mb-2">Titre de l'article</label>
                            <input type="text" class="form-control mb-2" name="titreArticleB" id="titreArticleB" placeholder="Titre de l'article">
                        </div>

                        <div class="form-group">
                            <label for="dateProjetB" class="text-dark mb-2">Date de l'article</label>
                            <input type="date" class="form-control mb-2" name="dateProjetB" id="dateProjetB">
                        </div>

                        <div class="form-group">
                            <label for="contentProjet" class="text-dark mb-2">Description de l'article</label>
                            <textarea rows="10" class="form-control mb-2" name="contentProjetB" id="contentProjetB" placeholder="Description de l'article"></textarea>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <label class="text-dark mb-2">Article privé ?</label>
                        </div>

                        <div class="form-group mb-1 text-center">
                            <input type="checkbox" id="checkBoxConfirmArticle" value="oui">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmArticle">Oui</label>

                            <input class="mr-2" type="checkbox" id="checkBoxConfirmNonA" value="non">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmNon">Non</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Ajout Article Blog -->

    <!-- Modal Admin Ajout Membres -->
    <div class="modal fade" id="add_membres" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelAddMembres">Ajouter un nouveau membre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nomB" class="text-dark mb-2">Nom du membre</label>
                            <input type="text" class="form-control mb-2" name="nomB" id="nomB" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <label for="prenomB" class="text-dark mb-2">Prénom du membre</label>
                            <input type="text" class="form-control mb-2" name="prenomB" id="prenomB" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <label for="emailB" class="text-dark mb-2">Email du membre</label>
                            <input type="text" class="form-control mb-2" name="emailB" id="emailB" placeholder="Adresse email">
                        </div>

                        <div class="form-group">
                            <label for="passwordB" class="text-dark mb-2">Mot de passe du membre</label>
                            <input type="password" class="form-control mb-2" name="passwordB" id="passwordB" placeholder="Mot de passe">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Ajout Article Blog -->

    <!-- Modal Admin Modifier un projet -->
    <div class="modal fade" id="modif_projet" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelModifProjet">Modifier le projet XXXX</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="imageProjet" class="text-dark mb-2">Image du projet</label>
                            <input type="text" class="form-control mb-2" name="imageProjet" id="imageProjet" placeholder="Image du projet">
                        </div>

                        <div class="form-group">
                            <label for="titreProjet" class="text-dark mb-2">Titre du projet</label>
                            <input type="text" class="form-control mb-2" name="titreProjet" id="titreProjet" placeholder="Titre du projet">
                        </div>

                        <div class="form-group">
                            <label for="dateProjet" class="text-dark mb-2">Date du projet</label>
                            <input type="date" class="form-control mb-2" name="dateProjet" id="dateProjet">
                        </div>

                        <div class="form-group">
                            <label for="contentProjetC" class="text-dark mb-2">Description du projet</label>
                            <textarea rows="10" class="form-control mb-2" name="contentProjetC" id="contentProjetC" placeholder="Description du projet"></textarea>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <label class="text-dark mb-2">Projet privé ?</label>
                        </div>

                        <div class="form-group mb-1 text-center">
                            <input type="checkbox" id="checkBoxConfirmOuiC" value="oui">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmOuiC">Oui</label>

                            <input class="mr-2" type="checkbox" id="checkBoxConfirmNonC" value="non">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmNonC">Non</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Modifier un projet -->

    <!-- Modal Admin Modifier Article Blog -->
    <div class="modal fade" id="modif_article" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelModifArticle">Modifier l'article XXXX</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="imageArticle" class="text-dark mb-2">Image de l'article</label>
                            <input type="text" class="form-control mb-2" name="imageArticle" id="imageArticle" placeholder="Image de l'article">
                        </div>

                        <div class="form-group">
                            <label for="titreArticle" class="text-dark mb-2">Titre de l'article</label>
                            <input type="text" class="form-control mb-2" name="titreArticle" id="titreArticle" placeholder="Titre de l'article">
                        </div>

                        <div class="form-group">
                            <label for="dateProjetC" class="text-dark mb-2">Date de l'article</label>
                            <input type="date" class="form-control mb-2" name="dateProjetC" id="dateProjetC">
                        </div>

                        <div class="form-group">
                            <label for="contentProjet" class="text-dark mb-2">Description de l'article</label>
                            <textarea rows="10" class="form-control mb-2" name="contentProjet" id="contentProjet" placeholder="Description de l'article"></textarea>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <label class="text-dark mb-2">Article privé ?</label>
                        </div>

                        <div class="form-group mb-1 text-center">
                            <input type="checkbox" id="checkBoxConfirmOui" value="oui">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmOui">Oui</label>

                            <input class="mr-2" type="checkbox" id="checkBoxConfirmNon" value="non">
                            <label class="form-check-label text-dark mr-2 mt-3" for="checkBoxConfirmNon">Non</label>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Ajout Article Blog -->

    <!-- Modal Admin Modif Membres -->
    <div class="modal fade" id="modif_membre" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelModifMembre">Modifier un membre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nomA" class="text-dark mb-2">Nom du membre</label>
                            <input type="text" class="form-control mb-2" name="nomA" id="nomA" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <label for="prenomA" class="text-dark mb-2">Prénom du membre</label>
                            <input type="text" class="form-control mb-2" name="prenomA" id="prenomA" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <label for="emailA" class="text-dark mb-2">Email du membre</label>
                            <input type="text" class="form-control mb-2" name="emailA" id="emailA" placeholder="Adresse email">
                        </div>

                        <div class="form-group">
                            <label class="text-dark mb-2">Mot de passe du membre</label>
                            <input type="password" class="form-control mb-2" name="passwordA" id="passwordA" placeholder="Mot de passe">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Ajout Article Blog -->

    <!-- Modal Admin Modifier une vidéo  -->
    <div class="modal fade" id="modif_video" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelLogin">Modifier une vidéo Youtube</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="lienVideo" class="text-dark mb-2">Lien de la vidéo</label>
                            <input type="text" class="form-control mb-2" name="lienVideo" id="lienVideo" placeholder="Lien de la vidéo">
                        </div>

                        <div class="form-group">
                            <label for="titreVideo" class="text-dark mb-2">Titre de la vidéo</label>
                            <input type="text" class="form-control mb-2" name="titreVideo" id="titreVideo" placeholder="Titre de le vidéo">
                        </div>

                        <div class="form-group">
                            <label for="dateVideo" class="text-dark mb-2">Date de la vidéo</label>
                            <input type="date" class="form-control mb-2" name="dateVideo" id="dateVideo">
                        </div>

                        <div class="form-group">
                            <label for="contentProjet" class="text-dark mb-2">Description de la vidéo</label>
                            <textarea rows="10" class="form-control mb-2" name="contentVideo" id="contentVideo" placeholder="Description de la vidéo"></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-form-send">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Admin Modifier un projet -->

    <!-- Modal Admin Supression -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabelDelete">Confirmer la suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>

                <div class="modal-body">
                    <p class="mt-1">Êtes-vous sur de vouloirs supprimer ?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-form-reset" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-form-send">Valider</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Admin Modifier un projet -->

    <!-- js icons -->
    <script src="../assets/vendor/icons/9d1d83a1dd.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/vendor/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Js perso -->
    <script src="assets/js/index.js"></script>

</body>

</html>