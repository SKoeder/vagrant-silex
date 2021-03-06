<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 * @var Doctrine\DBAL\Connection $dbConnection
 * @var $template Symfony\Component\Templating\DelegatingEngine
 */

$dbConnection = $app['db'];
$template = $app['templating'];

$app->get('/welcome/{name}', function ($name) use ($app, $template) {
    return $template->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/home', function () use ($app, $template, $dbConnection) {
    $posts = $dbConnection->fetchAll(
        "SELECT * FROM blog_post WHERE created_at = CURRENT_DATE "
    );
    return $template->render(
        'home.html.php',
        array('active' => 'home', 'title' => 'Home', 'posts' => $posts)
    );
});

$app->get('/blog', function () use ($app, $template, $dbConnection) {
    $posts = $dbConnection->fetchAll(
        'SELECT * FROM blog_post'
    );
    return $template->render(
        'blog.html.php',
        array('active' => 'blog', 'title' => 'Blog', 'posts' => $posts)
    );
});

$app->get('/fullpost/{id}', function ($id) use ($app, $template, $dbConnection) {
    $posts = $dbConnection->fetchAssoc(
        "SELECT * FROM blog_post WHERE id = $id"
    );
    return $template->render(
        'fullpost.html.php',
        array('active' => 'blog', 'title' => 'Blog', 'posts' => $posts)
    );
});

$app->match(
    '/newblog',
    function (Request $request) use ($app, $template, $dbConnection) {
        if (!$request->isMethod('post') && !$request->isMethod('get')) {
            $app->abort(405);
        }
        if (null === $user = $app['session']->get('user')) {
            return $app->redirect('/login');
        }
        $array = array(
            'active' => 'newblog', 'title' => 'New Blog Post', 'allCorrect' => false, 'comment' => '', 'posttitle' => '', 'username' => $user['username']
        );

        if ($request->isMethod('post')) {
            if (empty($request->get('posttitle', '')) || empty($request->get('comment', ''))) {
                $returnVal = false;
            } else {
                $returnVal = true;

                $dbConnection->insert(
                    'blog_post',
                    array(
                        'title' => $request->get('posttitle'),
                        'text' => $request->get('comment'),
                        'created_at' => date('c'),
                        'author' => $user['username']
                    )
                );
            }
            $array['comment'] = $request->get('comment');
            $array['posttitle'] = $request->get('posttitle');
            $array['allCorrect'] = $returnVal;
        }
        return $template->render(
            'newblog.html.php',
            $array
        );
    });

$app->get('/login', function () use ($app, $template) {
    return $template->render(
        'login.html.php',
        array('active' => 'login', 'title' => 'login')
    );
});

$app->post('/signin', function () use ($app) {

    $app['session']->set('user', array('username' => $_POST['username']));
    return $app->redirect('/newblog');
});

$app->get('/delete/{id}', function ($id) use ($app, $dbConnection) {
    $dbConnection->delete('blog_post', array('id' => $id));
    return $app->redirect('/blog');
});