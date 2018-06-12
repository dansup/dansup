<?php

namespace App;

use Illuminate\Support\Facades\Storage;

class Post extends \TCG\Voyager\Models\Post {
    
    protected $fillable = ['*'];

    public function url()
    {
      $year = $this->created_at->format('Y');
      $month = $this->created_at->format('m');
      $slug = $this->slug;
      return url("/blog/$year/$month/$slug");
    }
}