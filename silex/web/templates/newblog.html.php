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
                    <h3 class="panel-title">New Blog Post</h3>
                </div>
                <div class="panel-body">
                    <div>
                        <?php if ($allCorrect == 'success')  : ?>
                            <div class="panel panel-success">
                                <div class="panel-heading">Erfolgreich Veröffentlicht</div>
                                <div class="panel-body">
                                    <p><?= $posttitle ?></p>
                                    <p><?= $comment ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php if ($allCorrect == false) : ?>
                            <div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen</div>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php if ($allCorrect != 'success') : ?>
                            <form name="newpost" method="post" action="/newblog">

                                <div class="form-group">
                                    <input type="text" name="posttitle" class="form-control"
                                           placeholder="Gib einen Titel an" value="<?= $posttitle ?>">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="comment"
                                              placeholder="Gib einen Text an"><?= $comment ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Absenden</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>