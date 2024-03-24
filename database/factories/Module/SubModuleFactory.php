<?php

namespace Database\Factories\Module;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module\SubModule>
 */
class SubModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
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
            [
                'name'                  => 'Create User',
                'icon'                  => 'fas fa-users',
                'route'                 => 'create-user',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => UseHelpers::currentDateTime()
            ],
            [
                'name'                  => 'User List',
                'icon'                  => 'fas fa-users',
                'route'                 => 'user-list',
                'status_active'         => 1,
                'is_delete'             => 0,
                'module_id'             => 3,
                'created_at'            => UseHelpers::currentDateTime()
            ]
        ];
    }
}
