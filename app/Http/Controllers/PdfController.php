<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{


    public function index()
    {
        $schedules = Schedule::all();

        return view('pdfschedule', compact('schedules'));
    }



    
    public function exportpdf()
    {

        $schedules = Schedule::all();

        $pdf = Pdf::loadView('pdfschedule', compact('schedules'));
        return $pdf->download('schedule.pdf');

    }
}
