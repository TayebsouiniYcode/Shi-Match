<?php
use app\core\Application;
use app\controllers\WelcomeController;


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
    
    $app->router->get('/', [WelcomeController::class, 'index']);
    
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