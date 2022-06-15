<?php

use app\controllers\SharedController;
use app\core\Application;
use app\controllers\AuthController;
use app\controllers\AdminController;
use app\controllers\HelperController;
use app\controllers\TeamController;
use app\controllers\PlayerController;
use app\controllers\UserController;


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

$app->router->get('/welcomeYoucode', [HelperController::class, 'welcomeYoucode']);

$app->router->get('/', [HelperController::class, 'index']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/signup', [AuthController::class, 'signup']);
$app->router->post('/signup', [AuthController::class, 'signup']);

$app->router->get('/dashboard', [AdminController::class, 'dashboard']);

$app->router->get('/teams', [SharedController::class, 'teams']);
$app->router->get('/teamDetails', [TeamController::class, 'details']);
$app->router->get('/players', [PlayerController::class, 'players']);
$app->router->get('/playerDetails', [PlayerController::class, 'playerDetails']);
$app->router->get('/matchs', [PlayerController::class, 'matchs']);
$app->router->get('/profile', [UserController::class, 'profile']);
$app->router->post('/profile', [UserController::class, 'profile']);

$app->router->get('/addPlayer', [PlayerController::class, 'addPlayer']);
$app->router->post('/addPlayer', [PlayerController::class, 'addPlayer']);

$app->router->get('/editPassword', [UserController::class, 'editPassword']);

//Team routes
$app->router->get('/addTeam', [TeamController::class, 'create']);
$app->router->post('/addTeam', [TeamController::class, 'create']);

$app->router->get('/editTeam', [TeamController::class, 'edit']);
$app->router->post('/editTeam', [TeamController::class, 'edit']);

$app->router->get('/logout', [AuthController::class, 'logout']);



// $app->router->post('/dashboard', [AdminController::class, 'dashboard']);
// $app->router->get('/login', [AuthController::class, 'login']);
// $app->router->post('/login', [AuthController::class, 'login']);

// $app->router->get('/register', [AuthController::class, 'register']);
// $app->router->post('/register', [AuthController::class, 'register']);

// $app->router->get('/updateUser', [UserController::class, 'updateUser']);
// $app->router->post('/updateUser', [UserController::class, 'updateUser']);

// $app->router->get('/userList', [UserController::class, 'userList']);
// $app->router->get('/user', [UserController::class, 'getUser']);

// $app->router->get('/deleteUser', [UserController::class, 'delete']);
// // -------- Student 
// $app->router->get('/student', [StudentController::class, 'studentList']);

// $app->router->get('/addStudent', [StudentController::class, 'add']);
// $app->router->post('/addStudent', [StudentController::class, 'add']);

// $app->router->get('/updateStudent', [StudentController::class, 'update']);
// $app->router->post('/updateStudent', [StudentController::class, 'update']);
// $app->router->get('/deleteStudent', [StudentController::class, 'delete']);


// // -------- Parent 
// $app->router->get('/addParent', [ParentController::class, 'add']);
// $app->router->post('/addParent', [ParentController::class, 'add']);


// --------Teacher
// $app->router->post('/updateTeacher', [TeacherController::class, 'updateTeacher']);
// $app->router->get('/updateTeacher', [TeacherController::class, 'updateTeacher']);

// $app->router->post('/addTeacher', [TeacherController::class, 'addTeacher']);
// $app->router->get('/addTeacher', [TeacherController::class, 'addTeacher']);

// $app->router->post('/teacher', [TeacherController::class, 'teacherList']);
// $app->router->get('/teacher', [TeacherController::class, 'teacherList']);

// $app->router->get('/deleteTeacher', [TeacherController::class, 'deleteTeacher']);

// ------end Teacher

// ------ class
// $app->router->get('/class', [ClassController::class, 'classList']);

// $app->router->get('/addClass', [ClassController::class, 'add']);
// $app->router->post('/addClass', [ClassController::class, 'add']);

// $app->router->get('/updateClass', [ClassController::class, 'update']);
// $app->router->post('/updateClass', [ClassController::class, 'update']);
// $app->router->get('/deleteClass', [ClassController::class, 'delete']);


$app->run();