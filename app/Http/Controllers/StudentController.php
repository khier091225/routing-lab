<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): string
    {
        return 'Student list from StudentController';
    }
    public function show(string $id): string
    {
        return "student {$id} from StudentController";
    }
}
