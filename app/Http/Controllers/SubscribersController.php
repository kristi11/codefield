<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subscriber;
use Newsletter;
use App\User;
use App\App_color;
use App\PaginationCounter;


class SubscribersController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }

    public function store(){

    	// $this->validate(request(), [
     //        'first_name'    => 'required|max:255',
     //        'last_name'     => 'required|max:255',
     //        'email'         => 'required|email|max:255|unique:subscribers',
     //    ]);

    	// $subscriber = new Subscriber;
    	// $subscriber -> first_name = request('first_name');
    	// $subscriber -> last_name  = request('last_name');
    	// $subscriber -> email      = request('email');
    	// $subscriber -> save();

    	// \Mail::to($subscriber)->send(new ThankYouForSubscribing($subscriber));
     //    session()->flash('message','Thank You for Subscribing');
    	// return redirect()->back();
        // return config('laravel-newsletter');
        // Newsletter::subscribe('rincewind@discworld.com');
    }
// ->latest()->get()
    public function show(){
        $title = 'Subscribers';
        $paginationNr = PaginationCounter::first();
        $subscribersNr = $paginationNr->subscribers;
        $subscribers = User::role('user')->latest()->Paginate($subscribersNr);
        if (count($subscribers)<=0)
        {
            return view('admin.empty_trash',compact('title'));
        }
        else
            // dd($subscribers);
        return view('admin.Subscribers',compact('subscribers','title','item'));
    }

    public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        session()->flash('message','Sorry to see you go');
        return redirect('http://localhost/rekstudio/');
    }

    // public function create_campaign(){
    //     $subscribers = Subscriber::all();
    //     // dd($subscribers);
    //     foreach($subscribers as $subscriber){
    //     \Mail::to($subscriber)->bcc(new ThankYouForSubscribing($subscriber));
    //     session()->flash('message','Thank You for Subscribing');
    //     return redirect()->back();}
        
    // }


}
