<?php

namespace Database\Factories\Service;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service\Service>
 */
class ServiceFactory extends Factory
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
             * Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('route')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });*/
            [
                'name'                  => 'Agile Development',
                'description'           => 'Work with Scrum teams using agile methodologies to bring transparency and flexibility to product development. Toptal can help your company easily build a new Scrum team or bring additional talent to an existing one.',
                'icon'                  => 'mdi mdi-powershell',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ],
            [
                'name'                  => 'Tailored Web Development',
                'description'           => 'Having an intuitive and responsive website is the difference between hitting goals and losing engagement. Top developers allow you to effectively improve your performance and scalability by building additional functionalities, integrating APIs, and increasing engagement on site.',
                'icon'                  => 'mdi mdi-xml',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
            ],
            [
                'name'                  => 'Customized Solutions',
                'description'           => 'From requirements review to development, Toptal’s full-stack experts ensure your team will employ the latest technologies in Javascript frameworks (e.g. React.js, Ember.js, Node.js, Backbone.js), mean stack, and database technologies such as MySQL, NoSQL, PostgreSQL, and Mongo DB.',
                'icon'                  => 'mdi mdi-desktop-mac',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
                ],
            [
                'name'                  => 'Database & API Development',
                'description'           => 'This term can be interpreted as an API (Application Programming Interface) that is used to interact with a database. Database APIs provide a set of functions, methods, or protocols that allow developers to access and manipulate data stored in a database.',
                'icon'                  => 'mdi mdi-cellphone-iphone',
                'route'                 => null,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_at'            => UseHelpers::currentDateTime(),
                'created_by'            => 1
                ]
        ];
    }
}
