<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Project extends Authenticatable
{
    public $table = "project";
    public $timestamps = true;
    use Notifiable;
    
    protected $primaryKey =  'id_project';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_project',
        'description_project',
        // 'image',
    ];
}
