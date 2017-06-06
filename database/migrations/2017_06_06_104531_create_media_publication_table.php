<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_publication', function (Blueprint $table) {
            $table->increments('id');
            $table->string('media_id');
            $table->string('publication_id');
            $table->timestamps();
            $table->foreign('media_id')->references('id')->on('medias');
            $table->foreign('publication_id')->references('id')->on('publications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_publication');
    }
}
