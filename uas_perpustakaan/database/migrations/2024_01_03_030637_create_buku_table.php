<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('kode_buku');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('pengarang');
            // $table->foreignId('category_id')->constrained(
            //     table: 'categories', indexName: 'buku_categories_id'
            // );
            $table->foreignId('category_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('sampul')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
