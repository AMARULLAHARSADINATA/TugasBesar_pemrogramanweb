<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * Kolom-kolom yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = ['email', 'username', 'password', 'role'];

    /**
     * Kolom yang harus disembunyikan saat serialisasi.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password'];

    /**
     * Tipe data atribut untuk casting.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'password' => 'hashed', // Otomatis hashing password
    ];

    /**
     * Memeriksa apakah pengguna adalah admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role === 'admin'; // Memastikan Anda memiliki field 'role' di tabel users
    }
}