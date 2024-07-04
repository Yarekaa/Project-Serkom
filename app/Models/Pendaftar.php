<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    // menambahkan relasi dengan model Semester
    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    // menambahkan relasi dengan model Beasiswa
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }
}
