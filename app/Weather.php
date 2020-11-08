<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Weather extends Model
{
    use HasTranslations;
    public $timestamps = false;
    protected $table = "weather";
    protected $locales = ['en','ka'];
    protected $translatable  = ['georgia_country'];
    protected $guarded = [];
}
