<?php
use App\Models;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    // $files = File::files(resource_path("posts"));
    // $documents = [];
    // foreach ($files as $file){
    //  $documents[]=YamlFrontMatter::parseFile($file);
    // }
    // $document = YamlFrontMatter::parseFile(
    //     resource_path('posts/first-post.html')
    // );

    // ddd($document->matter('title'));
   
    // return view('posts', [
    //     'posts' => Post::all();
    // ]);
});

// Route::get('posts/{post}', function ($slug) {
//     // find post and pass to view 'post'
//     $post = Post::find($slug);

//     return view('post', [
//         'post' => Post::find($slug);
//     ]);
// });
