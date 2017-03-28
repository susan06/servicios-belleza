<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateReservationsTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('reservation', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('client_id')->unsigned()->index();
                $table->integer('local_id')->unsigned()->index();
                $table->string('date');
                $table->enum('status', [
                    'pendient',
                    'approved',
                    'rejected',
                ])->default('pendient');
                $table->text('details')->nullable(); //->default(json_encode([]));
                
                $table->timestamps();
                
                $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
                $table->foreign('local_id')->references('id')->on('locales')->onUpdate('cascade')->onDelete('cascade');
            });
            
        }
        
        public function down() {
            Schema::drop('reservation');
        }
    }
