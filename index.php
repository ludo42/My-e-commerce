<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Ecommerce projet</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container-fluid">
        <header class="col-lg-12 col-md-12 col-12">
            <div class="top-bar col-lg-12 col-md-12 col-12">
                <a class="logo-bar" href="index.html">(Owl Art)</a>
                <a href="compte.html"><button type="button" class="btn col-lg-1 col-md-2 col-2 offset-lg-5 btn-success">Mon compte</button></a>
                <button type="button" class="btn btn-primary col-lg-2 col-md-3 col-4" data-toggle="modal" data-target="#exampleModal">
                    Inscription / Connexion
                </button>
                <a class="col-lg-2 col-md-4 col-1 panier" href="panier.html">
                    <img src="030-shopping-bag.png">Panier
                </a>
            </div>

            <div class="nav color border col-md-12 col-12 col-lg-12">
                <div class="logo">
                    <img src="chouette.png">
                    <h3>(Owl Art)</h3>
                </div>
                <div class="voir col-md-12 col-12 col-lg-12">
                    <a>Home</a>
                    <a>Nouveautés</a>
                    <a>Oeuvres</a>
                    <a href="filtre.html">Peinture</a>
                    <a>Sculpture</a>
                    <a>Photographie</a>
                    <a>Dessin</a>
                    <a>Artistes</a>
                </div>
            </div>
        </header>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Inscription / Connexion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <h3>Bienvenue chez (Owl Art) inscrivez vous ou bien connectez vous !</h3>
                                <label for="exampleInputEmail1">Adresse email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
                                <small id="emailHelp" class="form-text text-muted">Nous n'echangerons pas vos email</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                            <button type="submit" class="btn btn-warning">Mot de passe perdu</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <aside>

                <div class="row menu">



                    <div class="card test" style="width: 18rem;">
                        <img class="card-img-top" src="julie.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <p class="card-text">ART ABSTRAIT</p>
                        </div>
                    </div>

                    <div class="card test" style="width: 18rem;">
                        <img class="card-img-top" src="rey.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <p class="card-text">CONTEMPORAIN</p>
                        </div>
                    </div>

                    <div class="card test" style="width: 18rem;">
                        <img class="card-img-top" src="henrik.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <p class="card-text">TABLEAU</p>
                        </div>
                    </div>

                    <div class="card test" style="width: 18rem;">
                        <img class="card-img-top" src="florian-klauer-489-unsplash.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <p class="card-text">OBJET DESIGN</p>
                        </div>
                    </div>

                </div>




            </aside>

        </div>



        <main>


            <div class="enorme col-lg-12 col-md-12 col-12">
                <H1>NOUVEAUTES</H1>
            </div>

            <div class="container">


                <div class="card-columns">



                    <div class="card move">
                        <img class="card-img-top" src="visage.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Mr Cenz</h5>
                            <p class="card-text">Technique : Peinture aérosol sur toile<br>Taille : 60x60cm<br>500 €</p>
                            <a class="btn btn-outline-primary" href="description.html" role="button">Description</a>
                            <a class="btn btn-outline-warning" href="panier.html" role="button">Panier</a>
                        </div>
                    </div>

                    <div class="card p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>"La peinture, ce n'est pas copier la nature mais c'est apprendre à travailler comme elle."</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">
                                    Pablo Picasso Artiste, Peintre (1881 - 1973).
                                </small>
                            </footer>
                        </blockquote>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="10665-DSC_0002.JPG" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">la femme moderne assise endormie</h5>
                            <p class="card-text">Technique : Huile ou acrylique<br>Taille : 100x100cm<br>500 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="11328-IMG_2153_1.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Symphonie en jaune</h5>
                            <p class="card-text">peinture abstraite<br>toile 80x80<br>technique mixte: coulures collage encre de chine <br>400 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>"La peinture est la face visible de l'iceberg de ma pensée."</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">
                                    Salvador Dali Artiste, Peintre (1904 - 1989)
                                </small>
                            </footer>
                        </blockquote>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="rattanachai-singtrangarn-1054936-unsplash.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Julien Lenotre</h5>
                            <p class="card-text">Lampe angulaire<br>Taille : 115 x 80 cm<br>2 200 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="abstract-art-artistic-990824.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Fred Boutet</h5>
                            <p class="card-text">Abstract 10 2018<br>Taille : 100 x 100 x 3 cm<br>1 000 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>


                    <div class="card move">
                        <img class="card-img-top" src="photo-1467840125074-ab6ec13ef683.jpeg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Stoz</h5>
                            <p class="card-text">WW45H 2018<br>Taille : 102 x 40 x 20 cm<br>660 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="428484_1_original.webp" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Milburn-Foster</h5>
                            <p class="card-text">Men fighting 2017<br>Taille : 130 x 97 x 2 cm<br>3 400 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="abstract-art-board-889839.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Marie Tissot</h5>
                            <p class="card-text">La colombe 2018<br>Taille : 54 x 73 x 2 cm<br>4 600 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                    <div class="card p-3">
                        <blockquote class="blockquote mb-0 card-body">
                            <p>"La peinture est une poésie qui se voit au lieu de se sentir et la poésie est une peinture qui se sent au lieu de se voir."</p>
                            <footer class="blockquote-footer">
                                <small class="text-muted">
                                    Léonard De Vinci Artiste, Peintre, (1452 - 1519).
                                </small>
                            </footer>
                        </blockquote>
                    </div>

                    <div class="card move">
                        <img class="card-img-top" src="413107_1_original.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Roland Ferrari</h5>
                            <p class="card-text">Bleu 2018<br>Taille : 92 x 73 cm<br>Peinture<br>1 000 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>


                    <div class="card move">
                        <img class="card-img-top" src="rey.jpg" alt="Card image cap">
                        <div class="card-body cat">
                            <h5 class="card-title">Tic</h5>
                            <p class="card-text">The laughing heart 2018<br>Taille : 135 x 80 x 1 cm<br>1 450 €</p>
                            <button type="button" class="btn btn-outline-primary">Description</button>
                            <button type="button" class="btn btn-outline-warning">Panier</button>
                        </div>
                    </div>

                </div>

            </div>

        </main>



        <div class="container blog">
            <div class="enorme event col-lg-12 col-md-12 col-12">
                <H1>EVENEMENT</H1>
            </div>
            <div class="row">


                <!--1. The <iframe> (and video player) will replace this <div> tag. -->
                <div class="actu col-lg-6">
                    <div id="player"></div>

                    <script>
                        // 2. This code loads the IFrame Player API code asynchronously.
                        var tag = document.createElement('script');

                        tag.src = "https://www.youtube.com/iframe_api";
                        var firstScriptTag = document.getElementsByTagName('script')[0];
                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                        // 3. This function creates an <iframe> (and YouTube player)
                        //    after the API code downloads.
                        var player;

                        function onYouTubeIframeAPIReady() {
                            player = new YT.Player('player', {
                                height: '360',
                                width: '640',
                                videoId: 'vMNJqz2AupU',
                                events: {
                                    'onReady': onPlayerReady,
                                    'onStateChange': onPlayerStateChange
                                }
                            });
                        }

                        // 4. The API will call this function when the video player is ready.
                        function onPlayerReady(event) {
                            event.target.playVideo();
                        }

                        // 5. The API calls this function when the player's state changes.
                        //    The function indicates that when playing a video (state=1),
                        //    the player should play for six seconds and then stop.
                        var done = false;

                        function onPlayerStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING && !done) {
                                setTimeout(stopVideo, 6000);
                                done = true;
                            }
                        }

                        function stopVideo() {
                            player.stopVideo();
                        }

                    </script>
                </div>


                <div class="card text-event col-lg-4 col-md-4 col-4">
                    <div class="card-body">
                        <h3>ROCK</h3>
                        <p>15 novembre au 29 novembre 2018</p>
                        <h5>Galerie PERAHIA (Paris, FRANCE)</h5>
                        <p><em>La nouvelle exposition Street Art à ne pas rater à la galerie PERAHIA. Tous les grands noms réunis autour d'un même thème : ROCK! Jonone, L'atlas, Tanc, Onemizer, M. Chat, Jerome Mesnager, Rubinstein, Orlinski, Revon, Miss Tic, Combas.</em></p>
                    </div>
                </div>

            </div>
        </div>








        <section>
            <div class="container-fluid">
                <div class="row modalite col-lg-12">

                    <div class="mod bord col-lg-3">
                        <img src="box-4.png">
                        <p>Livraison soigné</p>
                    </div>

                    <div class="mod bord col-lg-3">
                        <img src="truck.png">
                        <p>Livraison 24Hr</p>
                    </div>

                    <div class="mod bord col-lg-3">
                        <img src="credit-card.png">
                        <p>Paiment sécurisé</p>
                    </div>

                    <div class="mod col-lg-3">
                        <img src="conversation.png">
                        <p>Service Client</p>
                    </div>

                </div>
            </div>
        </section>





        <footer class="page-footer font-small unique-color-dark">

            <div class="fond">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">RESTEZ CONNECTE AVEC NOUS SUR LES RESEAUX SOCIAUX !</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="ic">
                                <img src="facebook.png">
                            </a>
                            <!-- Twitter -->
                            <a class="ic">
                                <img src="twitter.png">
                            </a>
                            <!-- Google +-->
                            <a class="ic">
                                <img src="pinterest.png">
                            </a>
                            <!--Linkedin -->
                            <a class="ic">
                                <img src="deviantart.png">
                            </a>
                            <!--Instagram-->
                            <a class="ic">
                                <img src="flickr.png">
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>

            <!-- Footer Links -->
            <div class="container fond2 text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">(Owl Art)</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p style="justify-content: center;">À travers notre plateforme, nous vous donnons accès au plus vaste catalogue d’oeuvres d’art contemporain, <strong>(Owl Art)</strong> rassemble des oeuvres d’artistes mondialement reconnus et de jeunes talents sur tous les supports.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Catégories</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Art abstrait</a>
                        </p>
                        <p>
                            <a href="#!">Contemporain</a>
                        </p>
                        <p>
                            <a href="#!">Tableau</a>
                        </p>
                        <p>
                            <a href="#!">Objet design</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Mon compte</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Mes commandes</a>
                        </p>
                        <p>
                            <a href="#!">Mes informations</a>
                        </p>
                        <p>
                            <a href="#!">Mes réductions</a>
                        </p>
                        <p>
                            <a href="#!">Mes adresses</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Saint-Etienne 42, Telecom, FR</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> owlART@entreprise.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> Design Tech Academy</a>
            </div>
            <!-- Copyright -->

        </footer>

        <div class="container logo-pied">
            <div class="row">
                <img src="chouette.png">
            </div>
        </div>
        <!-- Footer -->


    </div>

</body>

<script type="text/javascript" src="main.js"></script>

</html>