<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\SubmitRequest;
use Auth;
use App\Notifications\SubmitRequestSent;
// use Zttp\Zttp;
use Illuminate\Support\Facades\Input;


class SubmitRequestController extends Controller
{
	public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index(){
    	$title = 'Submit Project';
    	return view('client.submit_request',compact('title'));
    }

    public function store(Request $request){
    	 $this->validate(request(), [
            'name'        => 'required',
            // 'description' => 'required',
            'github_repo' => 'required',
        ]);

    	 // Zttp::asFormParams()->post('https://www.google.com/recaptcha/api/siteverify',[
    	 // 	'secret' => config('services.recaptcha.secret'),
    	 // 	'response' => $request->input('g-recaptcha-response'),
    	 // 	'remoteip' => $_SERVER['REMOTE_ADDR']
    	 // ]);

    	 // if (! $response->json()['success']) {
    	 // 	 //    session()->flash('message','Recaptcha failed! Try again');
    	 // 		// return back();
    	 // 	throw new \Exception("recaptcha failed");
    	 		
    	 // 	}	

        $project =  new SubmitRequest;
        $project -> user_id = auth()->id();
        $project -> author_name = auth()->user()->name;
        $project -> name = request('name');
        // $project -> description = request('description');
        $project -> github_repo = request('github_repo');
        $project -> status = 'pending';
        $project -> save();
        Auth::user()->notify(new SubmitRequestSent($project));
        session()->flash('message','Project submitted');
    	return back();
    }

    public function show(){
        $title = 'Submitted Projects';
        $projects = SubmitRequest::latest()->paginate(25);
        if (count($projects)<=0) {
            return view('client.empty',compact('title'));
        }
        return view('client.submits',compact('title','projects'));
    }

}
