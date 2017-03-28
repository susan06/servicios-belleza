<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->date('date_birth');
            $table->string('gender');
            $table->text('phone');
            $table->text('address')->nullable(); //->default(json_encode([]));
            $table->text('details')->nullable(); //->default(json_encode([]));
            $table->boolean('status')->default(true);
            $table->timestamps();
    

        });
        
    }

    public function down()
    {
        Schema::drop('clients');
    }
}
