<?php

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
    return view('welcome');
});

Route::get('/page1', function () {
    return view('page1');
});

Route::get('page2', function () {
    return 'hello world';
});

Route::get('page3/{id}', function ($id) {
    return view('page3',['id' => $id]);
});


Route::get('mjml', function () {
    $mjml = '/home/vagrant/code/essai/node_modules/.bin/mjml';

    $mjmlComplet = view('mjml/test', [
        'produit' => 'Araignée de mer cuite base 1.2 kg : ',
        'prix' => '15 € pièce',
        'accroche' => '"On entre dans la pleine saison ! "']);

    file_put_contents('temp.mjml', $mjmlComplet);
    shell_exec($mjml . ' temp.mjml -o sortie.html');
    return shell_exec('cat sortie.html');
    });


// Toute les routes précédente ne doivent pas être prise en compte, c'est mon sandbox.
//      |
//      V

Route::get('challenge', function () {
    return view('challenge');
});

