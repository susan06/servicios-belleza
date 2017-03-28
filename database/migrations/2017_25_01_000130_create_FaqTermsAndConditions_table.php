<?php
    
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;
    
    class CreateFaqTermsAndConditionsTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('FaqTermsAndConditions', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('local_id')->unsigned()->index();
                $table->text('faq');
                $table->text('terms_and_conditions');
                $table->timestamps();
                
                $table->foreign('local_id')->references('id')->on('locales')->onUpdate('cascade')->onDelete('cascade');
            });
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::drop('FaqTermsAndConditions');
        }
    }
