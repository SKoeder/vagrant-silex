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
            <h1>Bootstrap Tutorial</h1>      
            <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
            <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-search"></span> Search</button>
        </div>
    </header>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                  <li class="list-group-item list-group-item-success">First item</li>
                  <li class="list-group-item list-group-item-info">Second item</li>
                  <li class="list-group-item list-group-item-warning">Third item</li>
                  <li class="list-group-item list-group-item-danger">Fourth item</li>
            </ul>                
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">Lorem ipsum dolor sit amet, facete docendi nec te. Molestiae abhorreant suscipiantur cum in, no per suscipit lobortis consequat. Mei an cibo lorem definitiones. Homero facilisis vel ea, te est liber viris partiendo. An modo praesent consulatu quo.</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">Lorem ipsum dolor sit amet, facete docendi nec te. Molestiae abhorreant suscipiantur cum in, no per suscipit lobortis consequat. Mei an cibo lorem definitiones. Homero facilisis vel ea, te est liber viris partiendo. An modo praesent consulatu quo.</div>
            </div>     
        </div>
    </div>
</div>