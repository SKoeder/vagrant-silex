<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<?php $view->extend('layout.html.php') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $posts["title"] ?> am <?= $posts["created_at"] ?></h3>
                </div>
                <div class="panel-body">
                    <?= $posts["text"] ?><hr>
                    von <?= $posts["author"] ?>
                    <hr>
                    <a href="/blog">zurück</a>
                </div>
            </div>
        </div>
    </div>
</div>