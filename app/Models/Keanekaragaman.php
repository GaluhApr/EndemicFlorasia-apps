<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Keanekaragaman extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'keanekaragamans';
    protected $fillable = ['keanekaragaman', 'tahun'];
    public $timestamps = false;
}
