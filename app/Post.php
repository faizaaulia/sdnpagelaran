<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = [];

    public function getExcerptAttribute() {
        $stripped = strip_tags($this->desc);
        return Str::words($stripped, 30, ' ...');
    }

}
