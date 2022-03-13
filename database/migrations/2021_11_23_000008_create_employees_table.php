<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('gender_id')
                ->nullable()
                ->constrained('genders')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('religion_id')
                ->nullable()
                ->constrained('religions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('division_id')
                ->nullable()
                ->constrained('divisions')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('district_id')
                ->nullable()
                ->constrained('districts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('upazila_id')
                ->nullable()
                ->constrained('upazilas')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('contact_no')->nullable();
            $table->string('location')->nullable();
            $table->string('job_type')->nullable();
            $table->enum('skill_level', ['Mid Level', 'Beginner Level', 'Expert Level'])
                ->nullable();
                $table->double('minimum_cost')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
