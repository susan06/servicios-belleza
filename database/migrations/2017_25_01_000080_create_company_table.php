<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->integer('user_id')->unsigned()->index();
            $table->text('details')->nullable(); //->default(json_encode([]));
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
        
    }

    public function down()
    {
        Schema::drop('companies');
    }
}
