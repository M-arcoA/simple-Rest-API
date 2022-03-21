<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){

        $tasks = [
            [
                "id" => 1,
                "name" => "Estudar PHP 7",
                "complete" => false
            ],
            [
                "id" => 2,
                "name" => "Estudar laravel 6",
                "complete" => true
            ],
            [
                "id" => 3,
                "name" => "Estudar JavaScript",
                "complete" => true
            ],
        ];
    
        return $tasks;
    }

    public function store(){
        return 'Test Post Method';
    }
}
