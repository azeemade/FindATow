<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;
use Mail;
use App\Mail\sendMail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class MainController extends Controller
{

    protected $users;
    protected $requests;

    public function __construct(User $users, Request $requests)
    {
        $this->users = $users;
        $this->requests = $requests;    

    }

    public function index()
    {
        $arealist1 = \DB::table('tow_Estimators')->pluck('towFrom', 'tow_id');        
        $arealist1 = ['#' => 'Select a location'] + collect($arealist1) -> toArray();
        $arealist2 = \DB::table('tow_Estimators')->pluck('towTo', 'tow_id');        
        $arealist2 = ['#' => 'Select a location'] + collect($arealist2) -> toArray();
        return view('pages.index')->with(array('arealist1' => $arealist1, 'arealist2' => $arealist2 ));
    }

    public function showEstimator()
    {
        
    }

    public function account()
    {
        return view('pages.account');
    }

    protected function validatorcontactSaveData(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'subject' =>['required', 'string'],
            'message' => ['required', 'string'],
        ]);
    }

    public function homepageContact()
    {
        $message = new Contact;
        $message->name = Input::get('name');
        $message->email = Input::get('email');
        $message->subject = Input::get('subject');
        $message->message = Input::get('message');        
        $message->save();

        $to_name = "FindATow";
        $to_email = "findatowng@gmail.com";
        $from_email= Input::get('email');
        $email_subject = Input::get('subject');
        $data = array('name' => Input::get('name'),'email'=> Input::get('email'), 'body' => Input::get('message'));
        Mail::send('loginPages.mailContact', $data, function($message) use ($to_name, $to_email, $from_email, $email_subject){
            $message->to($to_email)->subject($email_subject);
            $message->from($from_email);
        });
        return redirect('confirmationPageMain');
    }

    public function Confirmation()
    {
        return view('pages.confirmation');
    }  

    public function about_us()
    {
        return view('pages.about-us');
    }  

    public function careers()
    {
        return view('pages.careers');
    }

    public function investorRelations()
    {
        return view('pages.investorrelations');
    }

    public function termsCondition()
    {
        return view('pages.tandc');
    }
}
