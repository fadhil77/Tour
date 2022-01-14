<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'wisatas';

    protected $fillable = [
        'nama_tempat',
        'image',
        'harga_tiket',
        'jam_buka',
        'konten'
    ];
}
