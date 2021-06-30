<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekaman extends Model
{
    use HasFactory;
    protected $table= 'rekaman';

    public $incrementing = false;

    protected $fillable = ['id','nama','judul','matkul','kelas','dosen','link','created_at','updated_at'];
    
}
