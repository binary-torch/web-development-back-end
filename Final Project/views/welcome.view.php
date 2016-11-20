<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panda</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="<?= assets("css/app.css") ?>">
        <link rel="stylesheet" href="<?= assets("css/global.css") ?>">
    </head>
    <body class="centerContent">
        <div class="ui top fixed menu">
            <a class="item" href="index.html">
                <img src="<?= assets("images/logo.png") ?>" alt="logo">
            </a>
            <a class="item" href="#">
                <i class="search icon"></i>
                Discover
            </a>
            <a class="item" href="#">
                <i class="info icon"></i>
                About
            </a>
            <a class="item" href="#">
                <i class="flag outline icon"></i>
                Support Center
            </a>
            <div class="item right">
                <button class="ui button blue">
                    <i class="sign in icon"></i>
                    Sign In
                </button>
            </div>
        </div>
        <div class="ui grid stackable two columns">
            <div class="column animated fadeIn">
                <img class="ui image" id="homeLogo" src="<?= assets("images/homeLogo.png") ?>" alt="logo">
            </div>
            <div class="column animated fadeInUp">
                <h1 class="text-center tc-white">Panda is Simple, Fun!<br>Make your world smaller!</h1>
                <form class="ui form segment fluid" id="signUp" method="get" action="/add-user">
                    <h1 class="tc-blue">Create an account</h1>
                    <div class="ui divider"></div>
                    <div class="field required">
                        <label>
                            <i class="user icon"></i>
                            Full Name
                        </label>
                        <input type="text" name="name" placeholder="Your name..">
                    </div>
                    <div class="field required">
                        <label>
                            <i class="mail icon"></i>
                            E-mail Address
                        </label>
                        <input type="email" name="email" placeholder="Your E-mail Address..">
                    </div>
                    <div class="field required">
                        <label>
                            <i class="lock icon"></i>
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="Choose a password..">
                    </div>
                    <button class="ui green button" name="submit" type="submit">
                        <i class="signup icon"></i>
                        Create an account
                    </button>
                    <span>or</span>
                    <a href="#">Login</a>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.js"></script>
<!--        <script src="--><?//= assets("js/app.js") ?><!--"></script>-->
    </body>
</html>