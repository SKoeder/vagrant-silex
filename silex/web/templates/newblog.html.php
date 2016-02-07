<?php $view->extend('layout.html.php') ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">New Blogpost</h3>
                </div>
                <div class="panel-body">
                    <form name="newpost" method="post" action="/newblog">
                        <div>
                            <?= $allCorrect== false ? '<div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen</div>' :'' ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="posttitle" class="form-control" placeholder="Gib einen Titel an" value="<?= $posttitle?>">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="comment" placeholder="Gib einen Text an"><?= $comment?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Absenden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>