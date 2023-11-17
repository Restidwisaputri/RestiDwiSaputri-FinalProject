<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Restoran;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $crud_daftar_makanan = Permission::create(['name' => 'crud_daftar_makanan']);
        $edit_restoran = Permission::create(['name' => 'edit_restoran']);
        $transaksi = Permission::create(['name' => 'transaksi']);


        $role_superadmin = Role::create(['name' => 'Superadmin']);
        $role_superadmin->syncPermissions(['crud_daftar_makanan','edit_restoran','transaksi']);
        $role_admin = Role::create(['name' => 'Admin']);
        $role_admin->syncPermissions(['transaksi']);

        
        $akun_superadmin = new User();
        $akun_superadmin->fill([
            'name' => 'superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("123456"),
            
            
        ]);
        $akun_superadmin->save();
        $akun_superadmin->assignRole($role_superadmin);
        
        $akun_admin = new User();
        $akun_admin->fill([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("123456"),
            
            
        ]);
        $akun_admin->save();
        $akun_admin->assignRole($role_admin);

        $this->call(DaftarMakananMinumanSeeder::class);
        $this->call(RestoranSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
