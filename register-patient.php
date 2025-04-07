<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscription au site</title>
    <link rel="stylesheet" href="./styles/style.css">
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
    <div class="page-inscription">
        <div class="fond"></div>
        <form action="#">
            <div class="content">
                <h2>INSCRIPTION</h2>
                <div id="contenaire">
                    <label for="nom">Votre nom et prenom</label>
                    <input type="text" name="nom">
                    <label for="email">Votre email</label>
                    <input type="email" name="email">
                    <label for="pwd">Votre mot de passe</label>
                    <input type="password" name="pwd">
                    <button type="submit">S'inscrire</button>
                </div>
                <div class="second">
                    <span>OU</span>
                </div>
                <div class="compte">
                    <a href="" class="google"><i class="fa-brands fa-google fa-2xl"></i></i></a>
                    <a href="" class="apple"><i class="fa-brands fa-apple fa-2xl"></i></a>
                </div>
                <div class="connexion">
                    Vous avez déjà un compte <a href="login-patient.php">se connecter</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>