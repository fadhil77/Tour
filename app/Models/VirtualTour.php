<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualTour extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "virtual_tours";
    protected $fillable = [
        'nama',
        'image',
        'link',
    ];
}
