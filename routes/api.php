<?php

use App\Jobs\envioEmailTeste;
use App\Mail\envioEmailTeste as MailEnvioEmailTeste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::post('envio_email', [envioEmailTeste::class, 'build']);
Route::get('envio_email', function(){


    //envioEmailTeste::dispatch($user)->delay(now()->addSeconds('10'));
    //Mail::queue(new MailEnvioEmailTeste($user));
    return "Teste";
});
