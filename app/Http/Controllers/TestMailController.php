<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\testMail;
use App\Models\Customer;
use App\Jobs\newUserJob;


class TestMailController extends Controller
{
    public function testMail()
    {
        
        return view('testmail');
    }
    public function sendMail(REQUEST $request)
    {
        
        $user = Customer::create($request->all());
        newUserJob::dispatch($user);
    }
}
