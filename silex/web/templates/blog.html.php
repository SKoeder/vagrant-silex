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
                    <h3 class="panel-title">Übersicht</h3>
                </div>
                <div class="panel-body">
                    <?php foreach ($posts as $entry) { ?>
                        <p>
                           <strong><?= substr($entry["title"], 0, 80); ?></strong>
                            am <?= $entry["created_at"]; ?>
                            <br>
                            <?= $entry["text"]; ?>
                            <a href="/fullpost/<?= $entry["id"]; ?>">[...]</a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
