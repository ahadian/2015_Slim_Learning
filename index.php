<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader with:
*/
require 'Slim/Autoloader.php';
\Slim\Autoloader::register();
require 'vendor/autoload.php';
$app = new \Slim\App();

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

// GET route


// POST route
// $app->post(
//     '/post',
//     function () {
//         echo 'This is a POST route';
//     }
// );

// PUT route
// $app->put(
//     '/put',
//     function () {
//         echo 'This is a PUT route';
//     }
// );

// PATCH route
// $app->patch('/patch', function () {
//     echo 'This is a PATCH route';
// });

// DELETE route
// $app->delete(
//     '/delete',
//     function () {
//         echo 'This is a DELETE route';
//     }
// );

$app->run();
