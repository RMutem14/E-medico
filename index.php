<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE HOPITAL</title>
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav>
            <div class="navigation">
                <ul>
                    <li><a href="index.php" class="liens active"><i class="fa-solid fa-house fa-lg"></i>
                            <p>MENU PRINCIPALE</p>
                        </a></li>
                    <li><a href="rdv.php" class="liens"><i class="fa-solid fa-hospital-user fa-lg"></i>
                            <p>CRÉER UN RENDEZ-VOUS</p>
                        </a></li>
                    <li><a href="" class="liens"><i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            <p>VOIR MES RENDEZ-VOUS</p>
                        </a></li>
                    <li><a href="consultation.php" class="liens"><i class="fa-solid fa-stethoscope fa-lg"></i>
                            <p>MES CONSULTATIONS</p>
                        </a></li>
                    <li><a href="" class="liens"><i class="fa-solid fa-message fa-lg"></i>
                            <p>MES MESSAGES</p>
                            <div class="number"><i class="fa-solid fa-0 fa-xs left"></i></div>
                        </a></li>
                    <li><a href="" class="liens"><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                            <p>SE DECONNECTER</p>
                        </a></li>
                    <br>
                    <br>
                    <hr>
                </ul>
                <a href="" class="ct">VOTRE HISTORIQUE</a>
            </div>
            <div class="profil-buger">
                <div class="burger"><i class="fa-solid fa-bars fa-2xl"></i></div>
            </div>
        </nav>
    </header>
    <section>
        <div class="baniere">
            <h1>E-MEDICO</h1>
            <div class="contenaire">
                <div class="content">
                    <div class="details">
                        <h2>Un Médecin Disponible, Quand Vous en Avez Besoin !</h2>
                        <p>Consultez un médecin en quelques clics, où que vous soyez et à tout moment. Bénéficiez d’un
                            suivi
                            rapide, sécurisé et sans contraintes. Votre santé, notre priorité !</p>
                        <a href="" class="ct">CRÉER VOTRE RENDEZ-VOUS</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-block">
                <div class="card-content">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="card-content">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
                <div class="card-content">
                    <div class="details">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <span class="fleche"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
        </div>
    </section>
    <footer>
        <nav>
            <div class="profil">
                <ul>
                    <li>
                        <h3>Emmanuel Mutombo</h3>
                    </li>
                    <li>
                        <p>Patient</p>
                    </li>
                </ul>
                <span class="user"><i class="fa-solid fa-user fa-2xl"></i></span>
            </div>

            <div class="navigation">
                <ul>
                    <li>
                        <div class="card-contents">
                            <div class="details">
                                <div class="para">
                                    <h4>
                                        Examen à faire
                                    </h4>
                                    <p>Jettez un coup d'oeil</p>
                                </div>
                                <span class="fleche"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-contents">
                            <div class="details">
                                <div class="para">
                                    <h4>
                                        Votre ordonnance
                                    </h4>
                                    <p>Listes des médicaments à payer</p>
                                </div>
                                <span class="fleche"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-contents">
                            <div class="details">
                                <div class="para">
                                    <h4>
                                        Vos resultats
                                    </h4>
                                    <p>Information santé</p>
                                </div>
                                <span class="fleche"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
                            </div>
                        </div>
                    </li>
                    <hr>
                    <a href="" class="ct">NOUS CONTACTEZ</a>
                </ul>
            </div>
        </nav>
    </footer>
    <script src="./js/helper.js"></script>
</body>

</html>