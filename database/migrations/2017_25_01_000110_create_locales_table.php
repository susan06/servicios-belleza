<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateLocalesTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('locales', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('company_id')->unsigned()->index();
                $table->string('name', 60);
                $table->string('province', 60);
                $table->text('address');
                $table->text('location')->nullable(); //->default(json_encode([])); // direcciones longitud y latitud y mapa de google
                $table->text('packages')->nullable(); //->default(json_encode([]));
                $table->float('pryce', 10, 2);
                $table->text('phone')->nullable(); //->default(json_encode([]));
                $table->text('description');
                $table->string('domicile');
                $table->text('photos');
                $table->string('email');
                $table->string('reservation_web', 60); // (Campo privado, no visible en el front, ni para el mismo Propietario), Descuento para Reservas:
                $table->string('method_pay', 60);
                $table->boolean('status')->default(true);
                $table->text('details')->nullable(); //->default(json_encode([]));
                $table->timestamps();
                
                $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
                
            });
            
        }
        
        public function down() {
            Schema::drop('locales');
        }
    }
