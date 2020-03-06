<?php

namespace App\Http\Controllers;

use App\towOrder;
use App\Contact;
use App\User;
use App\tow_Estimator;
use DB;
use Mail;
use App\towmen;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $reviews;
    protected $requests;

    public function __construct(User $users, Request $requests)
    {
        $this->middleware(['auth', 'verified']);
        $this->users = $users;
        $this->requests = $requests;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homeOrderTow()
    {   
        return redirect()->route('orderTow', auth()->user()->id); 
    }

    public function getOrderTow($id)
    {
        $tfl = \DB::table('tow_Estimators')->pluck('towFrom', 'tow_id');        
        $tfl = ['#' => 'Select a location'] + collect($tfl) -> toArray();
        $ttl = \DB::table('tow_Estimators')->pluck('towTo', 'tow_id');        
        $ttl = ['#' => 'Select a location'] + collect($ttl) -> toArray();
        $users= User::findorFail($id); 
        return view('loginPages.home')->with(array('tfl' => $tfl, 'ttl' => $ttl, 'users' => $users));   
    }

    protected function validatorOrderTow(array $data)
    {
        return Validator::make($data, [
            'carModel' => ['required', 'string'],
            'licensePlateNumber' => ['required', 'string', 'max:9'],
            'towFromAddress' =>['required', 'string'],
            'towToAddress' => ['required', 'string'],
        ]);
    }

    public function postOrderTow()
    {
        $order = new towOrder;
        $order->id =Input::get('id');
        $order->carModel = Input::get('carModel');
        $order->licensePlateNumber = Input::get('licensePlateNumber');
        $order->towFrom = Input::get('towFrom');
        $order->towFromAddress = Input::get('towFromAddress');;
        $order->towTo = Input::get('towTo');
        $order->towToAddress = Input::get('towToAddress');
        $order->save();

        $to_name = "FindATow";
        $to_email = "findatowng@gmail.com";      
        $from_email = Input::get('email');
        $data = array(
        'from_email' => Input::get('email'),
        'name' => Input::get('username'),
        'phnum' => Input::get('phnum'),
        'carModel' => Input::get('carModel'),
        'licensePlateNumber' => Input::get('licensePlateNumber'),
        'towFrom' => Input::get('towFrom'),
        'towFromAddress' => Input::get('towFromAddress'),
        'towTo' => Input::get('towTo'),
        'towToAddress' => Input::get('towToAddress'));
       # Mail::send('loginPages.mailOrder', $data, function($message) use ($to_name,$to_email, $from_email){
          #  $message->to($to_email)->subject('These are my credential for tow order.');
           # $message->from($from_email);
       # });

        $info = array(Input::get('towFrom'));
        $tower = DB::table('towmens')->where('location', $info)->first();
            
            $twName = $tower->name;
            $twPhnum = $tower->phnum;
            $twLocation = $tower->location;
            $twUnit = $tower->towUnit;

        $to_name2 = Input::get('username');
        $to_email2 = Input::get('email');      
        $from_email2 = "findatowng@gmail.com";
        $data = array(
        'from_email' => "findatowng@gmail.com",
        'name' => "FindATow",
        'carModel' => Input::get('carModel'),
        'licensePlateNumber' => Input::get('licensePlateNumber'),
        'towFrom' => Input::get('towFrom'),
        'towFromAddress' => Input::get('towFromAddress'),
        'towTo' => Input::get('towTo'),
        'towToAddress' => Input::get('towToAddress'),
        'towmanName' => $twName,
        'towmanPhnum' => $twPhnum,
        'towmanLocation' => $twLocation,
        'towmanUnit' => $twUnit);
        
        Mail::send('loginPages.userMail', $data, function($message) use ($to_name2,$to_email2, $from_email2){
            $message->to($to_email2)->subject('You placed an order for a tow.');
            $message->from($from_email2);
        });
        return redirect()->action('HomeController@Confirmation');
    }

    public function profile($id)
    {
        $users = User::findOrFail($id);
        return view('loginPages.profile', compact('users'));
    }

    public function update($id, Request $requests)
    {
        $user = $this->users->find($id);
        $request = $this->requests;
        $user->username = $request->username;
        $user->phnum = $request->phnum;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile', auth()->user()->id)->with("Profile successfully updated");
    }

    public function estimateDashboard($id)
    {
        $arealist1 = tow_Estimator::pluck('towFrom', 'tow_id');        
        $arealist1 = ['#' => 'Select a location'] + collect($arealist1) -> toArray();
        $arealist2 = tow_Estimator::pluck('towTo', 'tow_id');        
        $arealist2 = ['#' => 'Select a location'] + collect($arealist2) -> toArray();
        $users = User::findOrFail($id);
        return view('loginPages.estimateDashboard')->with(array('arealist1' => $arealist1, 'arealist2' => $arealist2, 'users' => $users));
    }

    public function estimator()
    {
        $arealist = tow_Estimator::pluck('towFrom', 'tow_id');
        return view('loginPages.estimateDashboard', compact('arealist'));
    }


    public function showPrice()
    {
        $estPrice = "SELECT `price` FROM `tow_estimators` WHERE `towFrom` = 'Amuwo-Odofin' AND `towTo` = 'Amuwo-Odofin'";
        DB::select($estPrice);
        $arealist1 = \DB::table('tow_Estimators')->pluck('towFrom', 'tow_id');        
        $arealist1 = ['#' => 'Select a location'] + collect($arealist1) -> toArray();
        $arealist2 = \DB::table('tow_Estimators')->pluck('towTo', 'tow_id');        
        $arealist2 = ['#' => 'Select a location'] + collect($arealist2) -> toArray();
        $users =$this->users->get();
        return view('loginPages.estimateDashboard')->with(array('estPrice' => $estPrice, 'arealist1' => $arealist1, 'arealist2' => $arealist2,'users' => $users ))->json(array('estPrice' =>$estPrice), 200);
    }


    public function contactDashboard($id)
    {
       $users = User::findOrFail($id);
        return view('loginPages.contactDashboard', compact('users'));
    }

    protected function validatorpostcontact(array $data)
    {
        return Validator::make($data, [
            'subject' =>['required', 'string'],
            'message' => ['required', 'string'],
        ]);
    }

    public function postcontact()
    {
        $user = new Contact;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->subject = Input::get('subject');
        $user->message = Input::get('message');       
        $user->save();

        $to_name = "FindATow";
        $to_email = "findatowng@gmail.com";
        $from_email= Input::get('email');
        $email_subject = Input::get('subject');
        $data = array('name' => Input::get('name'),'email'=> Input::get('email'), 'body' => Input::get('message'));
        Mail::send('loginPages.mailContact', $data, function($message) use ($to_name, $to_email, $from_email, $email_subject){
            $message->to($to_email)->subject($email_subject);
            $message->from($from_email);
        });
        return redirect()->action('HomeController@Confirmation');
    }

    public function Confirmation($id)
    {
        $users = User::findOrFail($id);
        return view('pages.confirmation', compact($users));
    }


}
