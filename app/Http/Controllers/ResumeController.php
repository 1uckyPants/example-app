<?php

namespace App\Http\Controllers;

use App\DataObjects\Resume;
use App\Services\ResumeServices;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function __construct(private readonly ResumeServices $resumeServices)
    {
    }

    public function index(Factory $view): View
    {
        return $view->make('resume', ['resume' => $this->resumeServices->getResume(), 'allowDownload' => true]);
    }

    public function download(): Response
    {
        $resume = $this->resumeServices->getResume();

        $pdf = Pdf::loadView('resume', ['resume' => $resume, 'allowDownload' => false]);

        return $pdf->download($resume->basics->name . ' Resume.pdf');
    }


}



