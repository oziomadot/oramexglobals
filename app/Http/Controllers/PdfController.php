<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function traininglist(){
        // $traininglist = [];
        // $traininglist = Training::all();
$data = ['traininglist' => Training::all()
// $traininglist
];
        // dd($traininglist);

        $pdf = Pdf::loadView('pdf.traininglist', $data);
        // dd($pdf);
        return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->stream('traininglist.pdf');

    }
}
