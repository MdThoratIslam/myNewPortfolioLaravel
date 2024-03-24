<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_describe extends Model
{
    use HasFactory;
    /*
     * Schema::create('portfolio_describes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->constrained('portfolios')->cascadeOnDelete();
            $table->string('portfolio_name');
            $table->string('client')->nullable();
            $table->string('project_url')->nullable();
            $table->date('project_date')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->json('image')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
     * */
    protected $fillable = [
        'portfolio_id',
        'portfolio_name',
        'client',
        'project_url',
        'project_date',
        'title',
        'description',
        'image',
        'status_active',
        'is_delete',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id');
    }
}
