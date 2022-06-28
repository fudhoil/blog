<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Galery extends Authenticatable
{
    public $table = "galery";
    public $timestamps = true;
    use Notifiable;

    protected $primaryKey =  'id_galery';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'image_name',
        'posted_by',
    ];
}
