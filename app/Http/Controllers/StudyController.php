<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{
    public function index(Study $study)
    {
        return view('Study/index')->with(['studies' => $study->get()]);  
    }
}
