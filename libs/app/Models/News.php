<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    //
    protected $table = 'news';
    protected $primaryKey = 'news_id';
    protected $guarded = [];

    public function setEntryDateAttribute($input)
    {
        return Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
    }

    public function getEntryDateAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)
        ->format(config('app.date_format'));
    }
}
