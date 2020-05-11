<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->nama = "Muhamad Albani Syahril";
        $administrator->email = "albanisyahril123@gmail.com";
        $administrator->telpon = "088214061482";
        $administrator->level = "admin";
        $administrator->password = \Hash::make("kepo");
 
        $administrator->save();
 
        $this->command->info("User Admin berhasil diinsert");
    }
}
