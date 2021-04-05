<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function getExcerptAttribute() {
        $stripped = strip_tags($this->desc);
        return $excerpt = str_replace('&nbsp;', '', $stripped);
    }

    public function getFormatedDateAttribute() {
        return Carbon::parse($this->updated_at)->translatedFormat('d F Y');
    }

}
