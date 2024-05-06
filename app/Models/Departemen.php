<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Departemen extends Model
{
    use HasFactory;

    protected $table = "departemen";

    // public $timestamps = false;

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'departement_id',  'id');
    }
}
