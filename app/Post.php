<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'post',
        'parent_id',
        'published',
        'name_create'
         ];
         public function children() {
            return $this->hasMany(self::class, 'parent_id');
          }

}
