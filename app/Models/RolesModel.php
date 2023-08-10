<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    use HasFactory;
    protected $table = 'roles';
    public $timestamps = false;

    protected $fillable = ['sort_text', 'long_text', 'description'];

    public const USR = 1;
    public const EDITOR = 2;

}
