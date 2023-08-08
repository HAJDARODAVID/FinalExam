<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admModuleItemsModel extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_module_menu_items';

    protected $fillable = [
        'name', 
        'route',
        'order', 
        'active'
    ];

    public $timestamps = false;
    
}
