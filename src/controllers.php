<?php
/**
 * Routing and controllers.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */
use Model\Bookmarks\Arr\Bookmarks;

use Controller\HelloController;
use Controller\BookmarkController;


$bookmarksModel = new Bookmarks();

//$app->get(
//    '/hello/{name}',
//    function ($name) use ($app) {
//        return $app['twig']->render(
//            'hello/index.html.twig',
//            ['name' => $name]
//        );
//    }
//);

$app->mount('/hello', new HelloController());

$app->mount('/bookmark', new BookmarkController());

//$app->get(
//    '/bookmark',
//    function () use ($app, $bookmarksModel) {
//        return $app['twig']->render(
//            'bookmark/index.html.twig',
//            ['bookmarks' => $bookmarksModel->findAll()]
//        );
//    }
//);

//$app->get(
//    '/bookmark/{id}',
//    function ($id) use ($app, $bookmarksModel) {
//        return $app['twig']->render(
//            'bookmark/view.html.twig',
//            ['bookmark' => $bookmarksModel->findOneById($id)]
//        );
//    }
//);