<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
      }
}
