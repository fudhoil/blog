<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Authenticatable
{
    public $table = "product";
    public $timestamps = true;
    use Notifiable;
    
    protected $primaryKey =  'id_product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_product',
        'description_product',
        'image',
        'image_name',
    ];
}
