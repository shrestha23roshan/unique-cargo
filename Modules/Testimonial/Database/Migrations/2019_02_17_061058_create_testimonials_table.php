<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('attachment')->nullable()->default(null);
            $table->enum('is_active', [0,1])->default(0);
            $table->integer('created_by')->unsigned()->nullable()->default(null);
            $table->integer('updated_by')->unsigned()->nullable()->default(null);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
