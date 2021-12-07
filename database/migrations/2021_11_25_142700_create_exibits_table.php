<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExibitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exibits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('detail');
            $table->string('image');
            $table->string('entites_id')->constrained('entities');
            $table->string('partner_id')->constrained('partners');
            $table->string('date'); //karena pelaksanaan pameran berupa tgl (2 des 2020 - 5 des 2020)
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
        Schema::dropIfExists('exibits');
    }
}
