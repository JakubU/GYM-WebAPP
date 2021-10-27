<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContactMessageController extends Controller
{
         public  function create()
         {
	    return view ('kontakt');
	    }

	    public function store(Request $request)
	    {
	    	$this->validate($request, [
			    'name' => 'required|max:60|alpha',
	    		'email' => 'required|email',
	    		'message' => 'required',
		    ]);

	    	Mail::send('email.kontakt-message', [
	    		'bodyMessage' => $request->message,
			    'Email' => $request->email,
		    ], function ($mail) use($request){
				$mail -> from($request -> email, $request ->name );
				$mail -> to('valibukfitnesss@gmail.com') ->subject('Contact Message');
		    });

	    	return redirect() ->back() -> with('flash_message', 'Ďakujeme za Vašu reakciu! Čo najskôr dostanete odpoveď.');
	    }
}
