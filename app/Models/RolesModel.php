<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RolesModel extends Model
{
    use HasFactory;
    protected $table = 'roles';
    public $timestamps = false;

    protected $fillable = ['sort_text', 'long_text', 'description'];

    public const USR = 1;
    public const EDITOR = 2;

    public function users(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function roles(): HasOne
    {
        return $this->hasOne(RolesModel::class,'id','role_id');
    }

    


}
