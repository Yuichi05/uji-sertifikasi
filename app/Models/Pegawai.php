<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departemen;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "peserta";

    // public $timestamps = false;

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departement_id',  'id');
    }
}
