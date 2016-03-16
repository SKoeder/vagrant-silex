<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<?php $view->extend('layout.html.php') ?>

<div class="container">
    <header>
        <div class="jumbotron">
            <h1>Mein eigener Blog</h1>
            <p>Diesen Blog habe ich im Rahmen der Web Engeniering erstellt.
                Bitte melden Sie sich doch an und verfassen Ihren eigenen Blogeintrag.
                Sie können natürlich auch nur die anderen Beiträge anschauen</p>
        </div>
    </header>
    <div class="row">
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="/blog">Blog</a></li>
                <li class="list-group-item"><a href="/newblog">Blogeintrag verfassen</a></li>
                <li class="list-group-item"><a href="/login">Einloggen</a></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Heutige Posts</h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($posts as $entry) { ?>
                        <p>
                            <strong><?= $entry["title"]; ?></strong>
                            von <?= $entry["author"]; ?>
                            <br>
                            <?= substr($entry["text"], 0, strpos($entry["text"], '.')); ?>
                            <a href="/fullpost/<?= $entry["id"]; ?>">[...]</a>
                        </p>
                        <hr>
                    <?php } ?>
                    <a href="/blog">Ältere Blogeinträge</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Anmelden</h3>
                </div>
                <div class="panel-body">
                    <form name="login" method="post" action="/signin">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control"
                                   placeholder="Benutzername eingeben" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>