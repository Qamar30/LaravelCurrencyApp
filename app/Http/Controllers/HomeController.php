<?php

namespace App\Http\Controllers;
use App\Mail\PurchaseSuccessful;
use Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('home');
    }

    public function mail()

{

    
   $name = 'Siphiwe';
   Mail::to('qamarkhoza@gmail.com')->send(new  PurchaseSuccessful);
   return redirect('products.index')
                     ->with(['success'=>'Payment successful. Confirmation email will be sent.']);

}
}
