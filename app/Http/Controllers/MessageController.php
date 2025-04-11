<?php

namespace App\Http\Controllers;

use App\Mail\MessageEmail;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\Training;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MessageController extends Controller
{
    public function email(){
        $studentstatus = Interest::all();

        return view('messages.email', compact([
            'studentstatus'
        ]));

    }

    public function sendemail(Request $request){



 $request->validate([
        "coursestatus" => ['nullable'],
      "search" => [ 'required_without:coursestatus'],
      "message" => ['required', 'string'],
      "title" => ['required']
]);



if ($request->coursestatus == null)
    {$queryTable =
    Training::where('firstname', $request->search )
    ->orWhere('surname', $request->search)
    ->orWhere('email', $request->search)
    ->orWhere('phonenumber', $request->search)
    ->orWhere('trainingId', $request->search)
    ->get();
}elseif($request->coursestatus == 'all'){
    $queryTable =
    Training::all();
}else{
    $queryTable =
    Training::where('interest_id', $request->coursestatus);
}

$messages = $request->all();

$query =$queryTable->pluck('email');
$nquery = $query->all();






foreach($nquery as $reciepiant){

    // try{

Mail::to($reciepiant)->send(new MessageEmail($messages));
    // }catch(\Exception $e){
    //     return $e->getMessage();
    // }


}

return redirect('/message/email')->with('status', 'email sent successfully');

    }
}
