<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;

class Post
{
  public static function all()
  {
    // $files = File::files(resource_path("posts/"));
    
    // return array_map(function ($file){
    //     return $file->getContents();
    // }, $files);
    return collect(File:files(resource_path("posts")))
      ->map(fn($file) => YamlFrontMatter::parseFile($file))
      ->map(fn($document) => new Post(
        $document->title,
        $document->excerpt,
        $document->date,
        $document->body(),
        $document->slug
      ))
      ->sortByDesc('date');
  }
  public static function find($slug)
  {
    // if(!file_exists($path = resource_path("posts/{$slug}.html"))) {
    //   // this is an error 
    // }

    /*return Cache::remember("posts.{$slug}", 1200, fn() => file_get_contents($path));*/
    // $posts = static::all();

    // return $posts->firstWhere('slug',$slug);
    $posts = static::all()->firstWhere('slug, $slug');
    if(! $post){
      throw new ModelNotFoundException();
    }
    return $post;

  }
}