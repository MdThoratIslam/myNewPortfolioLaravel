<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    /*
     *  $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('route')->nullable();
            $table->integer('route_type')->default(0);
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();*/
    protected $fillable = [
        'name',
        'description',
        'icon',
        'route',
        'route_type',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by'
    ];
    // now i want to join the module table with sub_module table
    public function subModules()
    {
        return $this->hasMany(SubModule::class, 'module_id', 'id')->where('status_active','=',1)->where('is_delete','=',0);
    }
}
