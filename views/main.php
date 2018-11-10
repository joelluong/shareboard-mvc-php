<html>
<head>
    <title>Shareboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/logo.ico">
</head>
<body>
<header class="bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">
                <img src="../assets/img/share.png" width="48" height="48" />
                <strong>Share Board</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['is_logged_in'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Log out</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            /**
             * Created by IntelliJ IDEA.
             * User: JoelLuong
             * Date: 8/11/2018
             * Time: 11:05 AM
             */
            Messages::display();
            require ($view);
            ?>
        </div>
    </div>
</main>

<footer class="text-muted">
    <div class="container text-center">
        <p> &copy;  CopyRight Duong Luong 2018</p>
    </div>
</footer>
</body>
</html>

