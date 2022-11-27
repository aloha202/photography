<?php

use Illuminate\Support\Facades\Route;
use Mailjet\Resources;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app.welcome', ['wrapper_class' => 'orb-home-1', 'current' => 'home']);
});

Route::get('/contacts', function () {
    return view('app.contacts', ['wrapper_class' => 'orb-contact-1', 'current' => 'contact']);
});

Route::post('/contacts', function () {
    $mj = new \Mailjet\Client('ec388abec814d4cd4bbb7278601baff3','b37786915dfb2dce118466d53fe90d51',true,['version' => 'v3.1']);
    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    $name = request()->get('name');
    $email = request()->get('email');
    $message = strip_tags(request()->get('message'));
    $mailBody = "
    <p><strong>Name: </strong>$name</p>
    <p><strong>Email: </strong>$email</p>
    <p><strong>Message: </strong>$message</p>
    ";

    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "alexey.radyuk@gmail.com",
                    'Name' => "VP Contacts"
                ],
                'To' => [
                    [
                        'Email' => "gitgittest@protonmail.com",
                        'Name' => "Alex"
                    ]
                ],
                'Subject' => "New message from `$name` on VP",
                'TextPart' => strip_tags($mailBody),
                'HTMLPart' => $mailBody,
                'CustomID' => "AppGettingStartedTest"
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    if($response->success()){
        return redirect('/message-sent')->with('result', true);
    }else{
        return redirect('/message-sent')->with('result', false);
    }
});


Route::get('/discount', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'discount']);
});

Route::get('/message-sent', function (){
    return view('app.message-sent', ['result' => session('result')]);
});

Route::get('/reserve', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'reserve']);
});

Route::get('/portfolio', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'portfolio']);
});
