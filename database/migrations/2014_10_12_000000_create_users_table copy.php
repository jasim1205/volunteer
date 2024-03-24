<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->integer('status')->default(1)->comment('1=>active 2=>inactive');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
        DB::table('users')->insert([
            'name' => '',
            'email' => 'jannat@gmail.com',
            'contact_no' => '1',
            'password' => Hash::make(1),
            'status' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
