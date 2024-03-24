<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    /*
     *  Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('code');
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
     * */
    protected $fillable = [
        'name',
        'code',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'];
    public function portfolio_describe()
    {
        return $this->hasMany(Portfolio_describe::class, 'portfolio_id');
    }
}
