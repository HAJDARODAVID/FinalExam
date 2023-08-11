<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MainMenuModel extends Model
{
    use HasFactory;
    protected $table = 'main_menu_items';
    protected $primeryKey = 'id';

    protected $fillable = [
        'name', 
        'route',
        'order', 
        'active',
        'role_id'
    ];

    public $timestamps = false;

    public function roles(): hasMany
    {
        return $this->hasMany(RolesModel::class, 'id', 'role_id');
    }

}
