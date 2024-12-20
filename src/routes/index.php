<?php
require_once '../controllers/StudentController.php';

use FastRoute\RouteCollector;

return function (RouteCollector $r) {
    $r->addRoute('GET', '/students', 'StudentController::getAll');
    $r->addRoute('GET', '/students/{id:\d+}', 'StudentController::getById');
    $r->addRoute('POST', '/students', 'StudentController::addStudent');
    $r->addRoute('PUT', '/students/{id:\d+}', 'StudentController::updateStudent');
    $r->addRoute('DELETE', '/students/{id:\d+}', 'StudentController::deleteStudent');
};