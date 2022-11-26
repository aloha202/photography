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
    $mj = new \Mailjet\Client('****************************1234','****************************abcd',true,['version' => 'v3.1']);
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "alexey.radyuk@gmail.com",
                    'Name' => "Alex"
                ],
                'To' => [
                    [
                        'Email' => "alexey.radyuk@gmail.com",
                        'Name' => "Alex"
                    ]
                ],
                'Subject' => "Greetings from Mailjet.",
                'TextPart' => "My first Mailjet email",
                'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
                'CustomID' => "AppGettingStartedTest"
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success() && var_dump($response->getData());
    die;
});


Route::get('/discount', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'discount']);
});

Route::get('/reserve', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'reserve']);
});

Route::get('/portfolio', function (){
    return view('app.comming', ['wrapper_class' => 'orb-contact-1', 'current' => 'portfolio']);
});
