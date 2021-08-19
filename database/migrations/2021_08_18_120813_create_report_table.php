<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crs', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_missing_person');
            $table->string('phone_number');
            $table->string('your_name');
            $table->string('email');
            $table->string('age');
            $table->string('additional_info');
            $table->string('image_url')->nullable();
            $table->date('date_when_child_went_missing')->nullable();
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
        Schema::dropIfExists('report');
    }
}
