<?php

use app\core\Application;
use app\core\Auth;
use app\controllers\AuthController;
use app\controllers\TeamController;
use app\controllers\UserController;
use app\controllers\AdminController;
use app\controllers\MatchController;
use app\controllers\HelperController;
use app\controllers\PlayerController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
        ]
    ];
    
$app = new Application(dirname(__DIR__), $config);

// standards routes
$app->router->get('/welcomeYoucode', 
    [HelperController::class, 'welcomeYoucode'
]);
$app->router->get('/', [
    HelperController::class, 'index'
]);
$app->router->get('/login', [
    AuthController::class, 'login'
]);
$app->router->post('/login', [
    AuthController::class, 'login'
]);
$app->router->get('/signup', [
    AuthController::class, 'signup'
]);
$app->router->post('/signup', [
    AuthController::class, 'signup'
]);


// Dashboard Routes
$app->router->get('/dashboard', [AdminController::class, 'dashboard']);
$app->router->get('/dashboard/findplayers', [AdminController::class, 'dashboardFindPlayer']);
$app->router->get('/dashboard/mymatches', [AdminController::class, 'myMAtches']);


// team routes
$app->router->get('/dashboard/teams', [
    TeamController::class, 'index'
]);
$app->router->get('/teamDetails', [
    TeamController::class, 'details'
]);
$app->router->get('/deleteTeam', [
    TeamController::class, 'destroy'
]);
$app->router->get('/dashboard/addTeam', [
    TeamController::class, 'create'
]);
$app->router->post('/addTeam', [
    TeamController::class, 'create'
]);

$app->router->get('/editTeam', [
    TeamController::class, 'edit'
]);
$app->router->post('/editTeam', [
    TeamController::class, 'edit'
]);
$app->router->post('/updateTeamImage', [
    TeamController::class, 'updateImage'
]);
$app->router->get('/teamJoinRequest', [
    TeamController::class, 'joinRequest'
]);

// player routes
$app->router->get('/players', [
    PlayerController::class, 'players'
]);
$app->router->get('/playerDetails', [
    PlayerController::class, 'playerDetails'
]);
$app->router->get('/matchs', [
    PlayerController::class, 'matchs'
]);
$app->router->get('/addPlayer', [
    PlayerController::class, 'addPlayer'
]);
$app->router->post('/addPlayer', [
    PlayerController::class, 'addPlayer'
]);


//user routes
$app->router->get('/profile', [
    UserController::class, 'profile'
]);
$app->router->post('/profile', [
    UserController::class, 'profile'
]);
$app->router->get('/editPassword', [
    UserController::class, 'editPassword'
]);

// match routes
$app->router->get('/mtachRequest', [
    MatchController::class, 'create'
]);
$app->router->post('/mtachRequest', [
    MatchController::class, 'create'
]);


// Authentication routes
$app->router->get('/logout', [
    AuthController::class, 'logout'
]);

$app->run();