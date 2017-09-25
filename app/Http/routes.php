<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// RAW SQL QUERY METHOD------------------------------------------------------------------------------------------------


//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is modern Framework of PHP']);
//
//});

//Route::get('/read', function(){
//   $results = DB::select('select * from posts WHERE id = ?', [1]);
//
//   foreach($results as $post) {
//       return $post->title;
//    }
//});

//Route::get('/update', function(){
//
//   $updated =  DB::update('update post set title = "Updated title" where id = ?', [1]);
//
//   return $updated;
//});


//Route::get('/delete', function(){
//
//    $deleted = DB::delete('DELETE FROM post WHERE id = ?', [1]);
//    return $deleted;
//
//});

// ELOQUENT METHOD ORM ------------------------------------------------------------------------------------------------

//use App\Post;
//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post){
//        return $post->title;
//
//    }
//});

//Route::get('/find', function(){
//
//    $post = Post::find(1);
//    return $post->title;
//});
//
//Route::get('/find_where', function(){
//
//    $post = Post::where('id', '1')->orderBy('id', 'desc')->take(1)->get();
//
//    return $post;
//});


//Route::get('/findmore', function(){
//
////    $posts = Post::findOrFail(1);
////    return $posts;
//
//    $posts = Post::where('user_count', '<', 50)->firstOrFail();
//
//});

Route::get('/basic_insert', function(){

    $post = new Post;

    $post->title = "hello Mack";
    $post->content = "Welcome to this world";

    $post->save();
});


Route::get('/update', function(){

    $post = Post::find(2);

    $post->title = "Mack is back";
    $post->content = "Mack is the Hero of the world";

    $post->save();
});






















Route::auth();

Route::get('/home', 'HomeController@index');
