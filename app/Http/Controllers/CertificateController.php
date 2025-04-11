<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateController extends Controller
{
    public function index(Training $training)
    {

if($training['paid'] === 1 && $training['attendance'] === 1){

        $qrCodes=[];
        $qrCodes['changeColor'] =
        QrCode::size(100)->color(255, 0, 0)->generate('oramexglobals.com/verify/'.$training->id);

        $qrCodes = $qrCodes['changeColor'];
        $data = [
            'training'=> $training,
                    'qrCode'=> $qrCodes
            ];

        $pdf = Pdf::loadView('certificate.certificate', $data);
        return $pdf->setPaper('a4', 'landscape')->setWarnings(false)->stream('certificate.pdf');
        }else{
     return redirect('/')->with('status', 'You have not satisfied the requirements for obtaining a certificate');
        }
    }

    public function show(Training $training)
    {
        return view('certificate.qverify', [
            'training' => $training
        ]);
    }

}
