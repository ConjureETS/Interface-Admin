<?php

namespace App\Http\Controllers;

use App\Models\CommunicationMethod;
use App\Models\Interest;
use App\Models\Member;
use App\Models\Program;
use App\Rules\PhoneRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){ }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getInscription()
    {
        return view('inscription')->with([
            "programs" => Program::all(),
            "interests" => Interest::all(),
            "communicationMethods" => CommunicationMethod::all()
        ]);
    }

    public function postInscription(Request $request)
    {
        $this->validator($request->all())->validate();

        $member = $this->create($request->all());

        return view('inscription')->with([
            'member' => $member
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'universal_code' => ['required', 'string', 'max:255'],
            'phone' => ['sometimes', new PhoneRule],
            'program_id' => ['required', 'integer']
        ]);
    }

    protected function create(array $data)
    {
        return Member::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'universal_code' => $data['universal_code'],
            'start_semester' => Member::getSemesterLetter().date("Y"),
            'activity' => Member::ACTIVITY[0],
            'phone' => $data['phone'],
            'program_id' => $data['program_id']
        ]);
    }
}
