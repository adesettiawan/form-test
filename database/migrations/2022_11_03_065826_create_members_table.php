<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('telp')->notNull();
            $table->string('nama')->notNull();
            $table->text('alamat')->notNull();
            $table->string('agama')->notNull();
            $table->string('hobi')->notNull();
            $table->string('tahun_lahir')->notNull();
            $table->integer('umur')->notNull();
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
        Schema::dropIfExists('members');
    }
};
