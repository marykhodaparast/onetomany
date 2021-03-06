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
use App\User;
use App\Post;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',function(){
   $user = User::findOrFail(1);
   //$post = new Post(['title' => 'title', 'body' => 'body']);
   $user->posts()->save(new Post(['title' => 'title2', 'body' => 'body2']));
});
Route::get('/read',function(){
   $user = User::findOrFail(1);
   foreach($user->posts as $post){
       echo $post->title;
       echo "<br>";
   }
});
Route::get('/update',function(){
   $user = User::findOrFail(1);
   $user->posts()->whereId(1)->update(['title' => 'I love laravel','body' => 'This is awesome, thank you Edwin' ]);
   //or we can way where('id','=',1) or where('id',1)

});
Route::get('/delete',function(){
   $user = User::findOrFail(1);
   //$user->posts()->whereId(1)->delete();
   $user->posts()->delete();
});

