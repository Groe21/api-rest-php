<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController
{
    private $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
    }

    public function obtenerTodos()
    {
        return $this->studentModel->obtenerTodos();
    }

    public function obtenerPorId($id)
    {
        return $this->studentModel->obtenerPorId($id);
    }

    public function agregarEstudiante($data)
    {
        return $this->studentModel->agregar($data);
    }

    public function actualizarEstudiante($id, $data)
    {
        return $this->studentModel->actualizar($id, $data);
    }

    public function eliminarEstudiante($id)
    {
        return $this->studentModel->eliminar($id);
    }
}