<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ResumeController extends Controller
{
    public function index(Factory $view)
    {
        $resume = Storage::get('resume.json');

        dd($resume);

        return $view->make('resume');
    }
}
