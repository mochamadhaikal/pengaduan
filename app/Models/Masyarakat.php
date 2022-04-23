<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

// class Masyarakat extends Model
// {
//     use HasFactory;

//     protected $table = 'masyarakat';
//     protected $primaryKey = 'nik';
//     protected $fillable = [
//         'nik', 'nama', 'username', 'password', 'telp'
//     ];
// }

class Masyarakat extends Authenticable
{
    use HasFactory;

    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik', 'nama', 'username', 'password', 'telp'
    ];
}
