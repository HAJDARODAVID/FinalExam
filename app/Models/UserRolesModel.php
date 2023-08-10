<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRolesModel extends Model
{
    use HasFactory;
    protected $table = 'user_roles';
    protected $fillable = ['user_id', 'role_id'];
    public $timestamps = false;

    public function user(){
        return $this->hasMany(User::class);
    }

}
