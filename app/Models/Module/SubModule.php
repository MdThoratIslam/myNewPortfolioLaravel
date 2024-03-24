<?php

namespace App\Models\Module;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    use HasFactory;
    /*
     * Schema::create('sub_modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('route')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('module_id')->nullable()->constrained('modules');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });*/
    protected $fillable = [
        'name',
        'icon',
        'route',
        'status_active',
        'is_delete',
        'module_id',
        'created_by',
        'updated_by'
    ];
    // now i want to join the module table with sub_module table
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
