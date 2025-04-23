<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link rel="icon" type="image/jpg" href='icon.jpg'>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .e-mail,
        .color-list,
        .contact-link,
        .e-mail:hover {
            color: gray;
            text-decoration: none;
        }

        .color-list:hover {
            text-decoration: none;
            color: #C3C3C3;
        }

        footer .e-mail {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <!-- Remove the container if you want to extend the Footer to full width. -->


    <!-- Footer -->
    <footer id="contact" class="text-center text-lg-start text-white"
        style="background-color: #1c2331; color: #8F8F8F; padding-top: 20px;">

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Mon site web</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #8F8F8F; height: 2px" />
                        <p style="color: gray;">
                            Vous pouvez vous incrire ou vous connecter à un compte
                            grâce aux différents formulaires qui vous sont proposés.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">À Propos</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #8F8F8F; height: 2px" />
                        <p>
                            <a href="index.php" class="color-list">Accueil</a>
                        </p>
                        <p>
                            <a href="connexion.php" class="color-list">Inscription / Connexion</a>
                        </p>
                        <p>
                            <a href="liste.php" class="color-list">Liste des inscrits</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #8F8F8F; height: 2px" />
                        <p class="contact-link"><i class="fas fa-home mr-3"></i> Cotonou, Fifadji, BENIN</p>
                        <p class="color-list"><i class="fas fa-envelope mr-3"></i> <a href="mailto:"
                                class="e-mail">nascimentozachario@gmail.com</a></p>
                        <p class="contact-link"><i class="fas fa-phone mr-3"></i> + 229 01 46 62 03 46</p>
                        <p class="contact-link"><i class="fas fa-phone mr-3"></i> + 229 01 44 59 89 49</p>
                    </div>
                    <!-- Grid column -->


                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Suivez-nous</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #8F8F8F; height: 2px" />
                        <p>
                            <a href="https://www.facebook.com/zachario.nascimento.9" class="btn btn-dark mx-2"
                                target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </p>
                        <p>
                            <a href="https://www.instagram.com/zacknsm?igsh=dTg1dDYyZGk2MTIw" class="btn btn-dark mx-2"
                                target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </p>
                        <p>
                            <a href="https://zachariomcarthur.github.io" class="btn btn-dark mx-2" target="_blank" title="GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                        </p>
                        <p>
                            <a href="https://wa.me/22946620346" class="btn btn-dark mx-2" target="_blank"
                                title="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: #abb2bf;">
            Copyright © 2025 - Tous les droits sont réservés.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>