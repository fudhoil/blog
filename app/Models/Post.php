<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Authenticatable
{
    public $table = "post";
    use Notifiable;
    
    protected $primaryKey =  'id_post';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'posted_by',
        'image',
        'image_name',
        'views',
    ];
}
