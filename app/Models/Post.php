<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
    ];
    public static function find($id) {
      $post = Cache::remember('posts.'.$id, 3000, function () use ($id) {
        var_dump($id); // This lets us see when the cache comes into play
        return DB::table('posts')->where('id', $id)->first();
      });
      if(! $post) {
        throw new ModelNotFoundException();
      }
      return $post;
    }
}
