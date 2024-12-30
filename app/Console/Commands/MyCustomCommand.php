<?php

// app/Console/Commands/HashUserPasswords.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MyCustomCommand extends Command
{
    /**
     * Nama dan signature perintah
     *
     * @var string
     */
    protected $signature = 'users:hash-passwords';

    /**
     * Deskripsi perintah
     *
     * @var string
     */
    protected $description = 'Hash all user passwords that are not hashed';

    public function handle()
    {
        // Logika untuk memhash password pengguna
    }
}
