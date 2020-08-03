<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'coment',
        'parent_id',
        'id_parent',
        'name_create'
         ];
/*
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
      }
      */
}
