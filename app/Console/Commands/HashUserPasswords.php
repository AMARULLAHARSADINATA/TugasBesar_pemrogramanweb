<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HashUserPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:hash-passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hash all user passwords that are not hashed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Ambil semua pengguna dari tabel users
        $users = User::all();

        $updatedCount = 0;

        foreach ($users as $user) {
            // Periksa apakah password belum di-hash (contoh: panjang hash bcrypt adalah 60 karakter)
            if (strlen($user->password) !== 60) {
                // Hash password dan simpan
                $user->password = Hash::make($user->password);
                $user->save();

                $updatedCount++;
            }
        }

        $this->info("$updatedCount password berhasil di-hash!");
    }
}
