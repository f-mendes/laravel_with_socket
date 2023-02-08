<?php

use App\Events\PostCreated;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


Route::get('/create-post', function () {
    $user = User::first();

    $post = $user->posts()->create([
        'title'=> Str::random(150),
        'body' => Str::random(400),
    ]);

    //Poderia executar o evento assim, mas vou criar um observer
    //event(new PostCreated($post));
    return 'tudo certo!';
});

Route::get('/', function () {
    return view('welcome');
});
