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

    public function roles(): HasOne
    {
        return $this->hasOne(RolesModel::class, 'id', 'roles_id');
    }

}
