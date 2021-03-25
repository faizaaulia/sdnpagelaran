<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = [];

    public function getExcerptAttribute() {
        $stripped = strip_tags($this->desc);
        return Str::words($stripped, 30, ' . . .');
    }

    public function getFormatedDateAttribute() {
        return Carbon::parse($this->updated_at)->translatedFormat('d F Y');
    }

}
