<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('periksas', function (Blueprint $table) {
            // Menambahkan kolom id_obat
            $table->unsignedBigInteger('id_obat')->nullable()->after('catatan');
    
            // Menambahkan foreign key yang mengarah ke tabel obat
            $table->foreign('id_obat')->references('id')->on('obat')->onDelete('set null');
        });
    }
    
    
    public function down()
    {
        Schema::table('periksas', function (Blueprint $table) {
            $table->dropForeign(['id_obat']);
            $table->dropColumn('id_obat');
        });
    }
    
    
};
