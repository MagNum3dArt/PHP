<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello', function () {
    return 'Hello!';
});
$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app['debug'] = true;

//Example GET Route

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Using Silex',
        'body'      => '...gjhgj...',
    ),
    2 => array(
        'date'      => '2011-03-30',
        'author'    => 'igorw',
        'title'     => 'Using Silex Part2',
        'body'      => '...456440...',
    ),
);

$app->get('/blog', function () use ($blogPosts) {
    $output = '';
    foreach ($blogPosts as $post) {
        $output .= $post['title'];
        $output .= '<br />';
    }

    return $output;
});

//Dynamic Routing

$app->get('/blog/{id}', function (Silex\Application $app, $id) use ($blogPosts) {
    if (!isset($blogPosts[$id])) {
        $app->abort(404, "Post $id does not exist.");
    }

    $post = $blogPosts[$id];

    return  "<h1>{$post['title']}</h1>".
    "<p>{$post['body']}</p>";
});

//----------------Example POST Route --- Not Work Yet


//
//
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
//
//$app->post('/feedback', function (Request $request) {
//    $message = $request->get('message');
//    mail('3.d@ukr.net', 'Home Site Feedback', $message);
//
//    return new Response('Thank you for your feedback!', 201);
//});

//------------Error Handlers --- Not Work Yet
//
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Request;
//
//$app->error(function (\Exception $e, Request $request, $code) {
//    switch ($code) {
//        case 404:
//            $message = 'The requested page could not be found.gfhjgjghj';
//            break;
//        default:
//            $message = 'We are sorry, but something went terribly wrong.';
//    }
//
//    return new Response($message);
//});

//---------------Redirects-- Works
//
//$app->get('/', function () use ($app) {
//    return $app->redirect('./hello');
//});

//---------------Forwards -- Works

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

$app->get('/', function () use ($app) {
    // forward to /hello
    $subRequest = Request::create('/hello', 'GET');

    return $app->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
});


$app->run();
