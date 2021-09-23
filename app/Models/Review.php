<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Review
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
      return collect(File::files(resource_path("reviews")))
            ->map(function ($file){
                return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
            })
            ->map(function ($document){
                return new \App\Models\Review(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            });
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug',$slug);
//        base_path();
//    if (! file_exists($path = resource_path("reviews/{$slug}.html"))) {
//        throw new ModelNotFoundException();
////        return redirect('/');
////        abort(404);
//    }
//
//    return cache()->remember("reviews.{$slug}", 1200, function () use ($path) {
////        var_dump('file_get_contents');
//        return file_get_contents($path); // $review
//    });

    }
}
