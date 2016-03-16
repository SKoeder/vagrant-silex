<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= "$title" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles.css" type="text/css">
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">Mein Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?= $active == 'home' ? 'class="active"' : '' ?>><a href="/home">Home</a></li>
                <li <?= $active == 'blog' ? 'class="active"' : '' ?>><a href="/blog">Blog</a></li>
                <li <?= $active == 'newblog' ? 'class="active"' : '' ?>><a href="/newblog">New Blog Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li <?= $active == 'login' ? 'class="active"' : '' ?>><a href="/login"><span
                            class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php $view['slots']->output('_content') ?>


</body>
</html>
