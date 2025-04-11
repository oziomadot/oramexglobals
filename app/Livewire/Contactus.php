<?php

namespace App\Livewire;

use App\Models\AppDevs;
use App\Models\ContactUs as ModelsContactUs;
use App\Models\Customer;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

class Contactus extends Component
{
    use UsesSpamProtection;


    public $message;
    public $whatsapp;
    public $phonenumber;
    public $email;
    public $gender;
    public $address;
    public $dob;
    public $lastname;
    public $firstname;
    public $service;
    public $choice;
    public $emailExist = false;
    public $customerId;
    public ?HoneypotData $honeypotData = null;


    public function mount()
    {
         // ✅ Initialize honeypotData with default values
         $this->honeypotData = app(HoneypotData::class);


        $this->service = AppDevs::all();
    }

    public function render()
    {
        return view('livewire.contantus')->layout('layouts.app');
    }

    public function save()
    {
        $this->protectAgainstSpam();


        $validated = $this->validate($this->rules());


        if($this->emailExist){

            ModelsContactUs::firstOrCreate([
                'customer_id' =>$this->customerId,
                'app_dev_id' => $validated['choice'],
              'description' => $validated['message']
            ]);

        }else{



        $newCustomer = Customer::firstOrCreate([

            'whatsapp' => $validated['whatsapp']?:$validated['phonenumber'],
            'phonenumber' => $validated['phonenumber'],
            'email' => $validated['email'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
            'dob' => $validated['dob'],
            'surname' => $validated['lastname'],
            'firstname' => $validated['firstname'],
        ]);

        ModelsContactUs::create([
            'customer_id' => $newCustomer->id,
            'app_dev_id' => $validated['choice'],
          'description' => $validated['message']
        ]);
    }

        $this->reset();

        return redirect()->to('/appservice')->with('status', 'Thank you for contacting us. We will get back to you soon.');
    }

    public function updatedEmail($value)
    {


        $customerExist = Customer::where('email', $value)->first();
        if($customerExist){
            $this->emailExist = true;
            $this->customerId = $customerExist->id;
            }

    }

    public function rules()
    {
        if($this->emailExist){
            return[
            'choice' => 'required',
            'message' => 'required|min:3',
            ];
        }else{
            return[
                'choice' => 'required',

            'message' => 'required|min:3',
            'whatsapp' => 'nullable|string',
            'phonenumber' => 'sometimes|required',
            'email' => 'required|email',
            'gender' => 'sometimes|required',
            'address' => 'sometimes|required',
            'dob' => 'sometimes|required',
            'lastname' => 'sometimes|required|string',
            'firstname' => 'sometimes|required|string',
            ];
        }
    }
}
