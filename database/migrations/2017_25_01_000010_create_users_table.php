<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->text('details')->nullable(); //->default(json_encode([]));
            $table->string('username', 30)->unique()->index();
            $table->string('email');
            $table->string('password', 60);
            $table->string('token')->unique()->index();
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();

        });
        
    }

    public function down()
    {
        Schema::drop('users');
    }
}
