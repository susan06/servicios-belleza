<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateBannerTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('banners', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('priority');
                $table->boolean('status')->default(true);
                $table->text('details')->nullable(); //$table->text('details')->default(json_encode([]));
                $table->timestamps();
                
            });
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::drop('banner');
        }
    }
