<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<?php $view->extend('layout.html.php') ?>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Anmelden</h3>
                </div>
                <div class="panel-body">
                    <form name="login" method="post" action="/signin">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control"
                                   placeholder="Benutzername eingeben" required autofocus>
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