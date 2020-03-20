<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <script src="//cdnjs.cloudflare.com/ajax/libs/sass.js/0.6.3/sass.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <title>Home</title>
</head>

<body>
    <div class="site">
        <div class="nav">
            <ul>
                <li>
                    <a href="<?= base_url('login') ?>">
                        <span>Login</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('login/signUpView') ?>">
                        <span>Sign Up</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Home</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="overlay"></div>
            <h2>Rayhan Rahmat Aziz Gamawanto <br> Politeknik LP3I Bandung</h2>
            <h1>Programming School Administration</h1>
            <h3>"We Cant Understand Everything, <br> But We Should Push Yourself To Understand The System"<br> - Ryan Dahl</h3>
            <a href="<?= base_url('login') ?>"><button>To Administrator Page</button></a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $('.nav').hover(function() {
            $(this).addClass('active');
        }, function() {
            $(this).removeClass('active');
        });

    </script>
</body>
