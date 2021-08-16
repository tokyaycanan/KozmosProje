<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siparis extends Migration
{

    public function up()
    {
        Schema::create('siparis', function (Blueprint $table) {
            $table->increments('SiparisNo');
            $table->integer('UrunKodu');
            $table->integer('Adet');
            $table->integer('MusteriId');

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
        Schema::dropIfExists('siparis');
    }
}
