<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateController extends Controller
{
    public function index(Training $trainee)
    {


        $qrCodes['changeColor'] =
        QrCode::size(150)->color(255, 0, 0)->generate('https://oramexglobals.com/verify/{trainee}');

        $qrCodes = $qrCodes['changeColor'];
        $data = [
            'trainee'=> $trainee,
                    'changeColor'=> $qrCodes
            ];

        $pdf = Pdf::loadView('certificate.certificate', $data);
        return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->stream('certificate.pdf');

    }
    public function show(Training $trainee)
    {
        return view('certificate.show', [
            'trainee' => $trainee
        ]);
    }

}
