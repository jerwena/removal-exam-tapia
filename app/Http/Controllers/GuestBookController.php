<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook;

class GuestBookController extends Controller
{
    public function gbform (Request $request)
    {
        $guestbook = new Guestbook;
        return view('gbform', compact('guestbook'));
    }

    public function gbcreateform (Request $request)
    {
        $guestbook = new Guestbook;
        $guestbook-> full_name = $request -> full_name;
        $guestbook-> email_address = $request -> email_address;
        $guestbook-> age = $request -> age;
        $guestbook-> message = $request -> message;
            if ($guestbook ->save()){
                 return redirect ('/thank-you');
                }
                return redirect('/thank-you');
            }
        
            public function gbtable (Request $request)
            {
                $guestbook = Guestbook::all();
                return view('gbtable', compact('guestbook'));
            }
            public function gbthankyou (Request $request)
            {
                $guestbook = new Guestbook;
                return view('gbthankyou');
            }
        } 
