<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuanganModel extends Model
{
    use HasFactory;
    protected $table = "keuangan";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'jenis_iuran',
        'jenis_data',
        'jumlah',
        'nama',
        'rt'
    ];
    
}
