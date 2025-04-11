<?php

namespace App\Http\Controllers;

use App\Mail\NewTraining;
use App\Mail\TrainingRegistration;
use App\Models\Currentstatus;
use App\Models\Interest;
use App\Models\Training;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\support\Str;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;
use Netflie\WhatsAppCloudApi\Message\Template\Component;

use Netflie\WhatsAppCloudApi\Message\Template\ComponentParameter;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('training.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registerednumber = Cache::rememberForever('registerednumber', function () {
            return Training::all()->count();
          });

        $currentstatus = Cache::rememberForever('currentstatus', function () {
            return Currentstatus::all();
          });
          $interest = Cache::rememberForever('interest', function () {
            return Interest::all();
          });
        return view('training.create',compact([
'currentstatus',
'interest',
'registerednumber'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {





         $request->validate([

            'surname' => ['string', 'required'],
      'firstname' => ['string', 'required'],
      'dob' => ['date', 'required'],
      'phonenumber' => ['string', 'required', 'unique:trainings'],
      'whatsapp' => ['string', 'required'],
      'email' => ['email', 'required', 'unique:trainings'],
      'currentstatus' => ['required', Rule::exists('currentstatuses', 'id')],
      'interest' => ['required', Rule::exists('interests', 'id')],
        'gender' => ['required', 'boolean'],
        'certificate' =>['nullable', 'boolean'],

        ]);









    function generateTrainingId() {
        $newtraining='OrA'.mt_rand(1000000, 9999999); // better than rand()

        // call the same function if the id exists already
        if (TrainingIdExists($newtraining)) {
            return generateTrainingId();
        }

        // otherwise, it's valid and can be used
        return $newtraining;
    }

    function TrainingIdExists($newtraining) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Training::where('trainingId', $newtraining)->exists();
    }


    $training= Training::create([

        'trainingId' =>generateTrainingId(),
        'surname' => $request->surname,
        'firstname' => $request->firstname,
        'dob' => $request->dob,
        'phonenumber' => $request->phonenumber,
        'whatsapp' => $request->whatsapp,
        'email' => $request->email,
        'currentstatus_id' => $request->currentstatus,
        'interest_id' => $request->interest,
          'gender' => $request->gender,
          'certificate' =>$request->certificate,

    ]);


    $registerednumber = Training::count();
    $traineeE = $training->email;

     //Whatsapp api

$whatsapp_cloud_api = new WhatsAppCloudApi([
    'from_phone_number_id' => '426455123886133',
    'access_token' => 'EAAUm666ervkBOyHlZAYBbip5VmP0pqZChmtqpQtJRENZA3sgv4RvoQaoFaa2sINYLsVMLVEc0W8LV6JWbsr0ZCZCrPCPK5gVoQmhThzvnKCurgAZABvwCrzs8N8ZCobYfvjNJU2CKv6sf1JXBqP7UWSnfjL71WvGDqV1xSft8wHB1aY0SIdjfyAffNviMskAPUTNAZDZD',
]);

$whatsapp = $training->whatsapp;

// checking the number of registered trainee

    if($registerednumber > 50){

        Mail::to($traineeE)->send(new NewTraining($training));


        $whatsapp_cloud_api->sendTemplate($whatsapp, 'new_registration', 'en');

    return redirect()->route('home')->with('status', 'Thank you for registering for this training.
    It is unfortunate that you will not participate in this present ongoing training.
    We will keep you informed for other subsequent training. ');
    }
    else
    {

        Mail::to($traineeE)->send(new TrainingRegistration($training));



//Create component for succeful registeration

$component_header = [];

$component_body = [

        [
            'type' => 'text',
            'text' => $training->interest['name'],

        ],

         [
           'type' => 'text',
           'text' => $training->trainingId,
        ]


];

$components = new Component($component_header, $component_body);



$whatsapp_cloud_api->sendTemplate($whatsapp, 'training_registeration_successful', 'en', $components);


// create for those who want certificate

if($training->certificate == 1) {

    $component_header = [];

    $component_body = [



        [
           'type' => 'text',
           'text' => $training->trainingId,
        ],

        [
            'type' => 'text',
            'text' => $training->interest['name'],

        ]

];

$components = new Component($component_header, $component_body);


    $whatsapp_cloud_api->sendTemplate($whatsapp, 'certificate', 'en', $components);
}



    return redirect()->route('home')->with('status', 'Your registration is successful. Keep an eye on your email and whatsapp');

 }
}

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {

        $training->update(['subscription' => $request->subscription]);

        return redirect()->route('subscription', $training);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        //
    }
}
