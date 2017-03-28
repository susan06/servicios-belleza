<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateConfigTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('config', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('company_id')->unsigned()->index();
                $table->text('details')->nullable(); //->default(json_encode([]));
                $table->timestamps();
                
                $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
                
            });
            
        }
        
        public function down() {
            Schema::drop('config');
        }
    }
