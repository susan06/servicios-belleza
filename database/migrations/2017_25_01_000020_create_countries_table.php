<?php
    
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateCountriesTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('countries', function (Blueprint $table) {
                $table->char('iso',2)->primary();
                $table->string('name');
                $table->text('details')->nullable(); //->default(json_encode([]));
            });
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::drop('countries');
        }
    }
