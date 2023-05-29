<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    protected $table = 'tanamans';
    protected $fillable = ['nama_tanaman', 'jenis', 'deskripsi', 'famili', 'gambar', 'habitat_id'];
    public $timestamps = false;

    public function habitat()
    {

        return $this->belongsTo(Habitat::class);
    }
}
