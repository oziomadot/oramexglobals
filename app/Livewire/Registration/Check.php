<?php

namespace App\Livewire\Registration;

use App\Models\Currentstatus;
use App\Models\StateOfResident;
use App\Models\Training;
use App\Models\Tribe;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class Check extends Component
{

#[Validate()]
    public $email;
    public $emailExist = false;

    // #[Validate()]
    public $password;
    public $confirmPassword;
    public $showPasswordField = false;
    public $showForm = false;
    public $showEmail = true;
    public $stateOfResidence;
    public $tribe;
    public $surname;
    public $firstname;
    #[Validate( as: 'date of birth')]
    public $dob;
    public $gender;
    public $phonenumber;
    public $whatsapp;
    public $currentstatus;
    public $stateOfResidence1;
    public $currentstatus1;
    public $tribe1;



    public $message;

public function mount()
{
    $this->stateOfResidence1 = StateOfResident::query()->get();
    $this->tribe1 = Tribe::query()->get();
    $this->currentstatus1 = Currentstatus::query()->get();
}


    public function rules()
    {
        return [
            'email' =>'required',
            'password' => ['sometimes', 'required',  'string',
            Password::min(8) // Minimum 8 characters
                ->mixedCase() // At least one uppercase and one lowercase letter
                ->letters() // At least one letter
                ->numbers() // At least one number
                ->symbols(),'' // At least one symbol
                ],
            'confirmPassword' => 'same:password',
            'stateOfResidence' => 'sometimes|required',
            'tribe' => 'sometimes|required',
            'surname' => 'sometimes|required|string',
            'firstname' => 'sometimes|required|string',
            'dob' => 'sometimes|required|date',
            'gender' => 'sometimes|required',
            'phonenumber' => 'sometimes|required',
            'whatsapp' => 'sometimes|required',
            'currentstatus' => 'sometimes|required',



        ];

        event(new Registered($user));

        session()->flash('message', 'Registration successful! Please check your email to verify your account.');

        // Reset form
        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }
    public function checkregistrations()
    {

        $validatedData = $this->validate(['email' => 'required|email']);


        $this->emailExist = Training::where('email', $this->email)->exists();

        if($this->emailExist){
            $this->showPasswordField = true;
            $this->showEmail = false;

        }else{

            $this->emailExist= User::where('email', $this->email)->exists();

            if($this->emailExist){

                return redirect('login');

            }else{

            $this->showPasswordField = false;
            $this->showEmail = false;
            $this->showForm = true;
            }
        }
    }



    public function addNew()
    {
        $validatedData = $this->validate([
            'password' => ['required', 'string',
            Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols(),''
                ],
            'confirmPassword' => 'same:password',
            'stateOfResidence' => ['required', 'exists:state_of_residents,id'],
            'tribe' => ['required', 'exists:tribes,id'],
        ]);

        $updateData = Training::where('email', $this->email)->first();

        $user=User::create([
            'surname' => $updateData['surname'],
            'firstname'=> $updateData['firstname'],
            'email'=> $updateData['email'],
           'password'=> Hash::make($validatedData['password']),
           'dob'=> $updateData['dob'],
            'gender' => $updateData['gender'],
            'phonenumber' => $updateData['phonenumber'],
            'whatsapp' => $updateData['whatsapp'],
            'currentstatus_id'=> $updateData['currentstatus'],
            'tribe_id'=>$validatedData['tribe'],
            'state_of_resident_id' => $validatedData['stateOfResidence']

        ]);

        event(new Registered($user));

        session()->flash('message', 'Registration successful! Please check your email to verify your account.');

        // Reset form
        $this->reset();

    }

    public function save()
    {



        $validatedData = $this->validate([
            'email'=>['required', 'string', 'email','unique:users,email'],
            'surname' =>['required', 'string'],
            'firstname' =>['required', 'string'],
            'dob' =>['required', 'date'],
            'gender' =>['required', 'boolean'],
            'phonenumber' =>['required', 'string'],
            'whatsapp' =>['required', 'string'],
            'currentstatus'=>['required', 'exists:currentstatuses,id'],
            'password' => ['required', 'string',
            Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols(),''
                ],
            'confirmPassword' => 'same:password',
            'stateOfResidence' => ['required', 'exists:state_of_residents,id'],
            'tribe' => ['required', 'exists:tribes,id'],
        ]);



        $user=User::create([
            'surname'=> $validatedData['surname'],
            'firstname'=> $validatedData['firstname'],
            'email'=> $validatedData['email'],
           'password'=> Hash::make($validatedData['password']),
           'dob'=> $validatedData['dob'],
            'gender' => $validatedData['gender'],
            'phonenumber' => $validatedData['phonenumber'],
            'whatsapp' => $validatedData['whatsapp'],
            'currentstatus_id'=> $validatedData['currentstatus'],
            'tribe_id'=>$validatedData['tribe'],
            'state_of_resident_id' => $validatedData['stateOfResidence']

        ]);

        event(new Registered($user));

        session()->flash('message', 'Registration successful! Please check your email to verify your account.');

        // Reset form
        $this->reset();

    }
    // public function updating($property, $value)
    // {
    //     if($property === 'email' && $value === 'christ.stephaug@gmail.com'){
    //         throw new \Exception("Age must be at least 18.");
    //     }
    // }

    // public function mount(){
    //    $this->email;

    // }
    public function render()
    {
        return view('livewire.registration.check');
    }

}
