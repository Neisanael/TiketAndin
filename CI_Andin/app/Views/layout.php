<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link<?= (current_url(true)->getSegment(1) == '') ? ' active bg-secondary rounded ' : '' ?> text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= (current_url(true)->getSegment(1) == 'Home' && current_url(true)->getSegment(2) == 'about') ? ' active bg-secondary rounded ' : '' ?> text-white" href="/Home/about">About</a>
                    </li>
                    <?php if (session()->has('logged_in') && session()->get('logged_in') === true) : ?>
                        <li class="nav-item">
                            <a class="nav-link<?= (current_url(true)->getSegment(1) == 'User' && current_url(true)->getSegment(2) == 'logout') ? ' active bg-secondary rounded ' : '' ?> text-white" href="/User/logout">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link<?= (current_url(true)->getSegment(1) == 'Home' && current_url(true)->getSegment(2) == 'login') ? ' active bg-secondary rounded ' : '' ?> text-white" href="/Home/login">Login</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link<?= (current_url(true)->getSegment(1) == 'Home' && current_url(true)->getSegment(2) == 'register') ? ' active bg-secondary rounded ' : '' ?> text-white" href="/Home/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>