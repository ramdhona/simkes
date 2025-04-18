<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Obat extends Model
{
    protected $table = 'obat'; // Tentukan nama tabel yang benar di sini

    // Definisikan kolom-kolom yang bisa diisi
    protected $fillable = [
        'nama_obat', 'kemasan', 'harga'
    ];
}