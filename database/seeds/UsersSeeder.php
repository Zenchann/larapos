<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();

		// Membuat role member
		$memberRole = new Role();
		$memberRole->name = "member";
		$memberRole->display_name = "Member";
		$memberRole->save();

		// Membuat role admin
		$karyawanRole = new Role();
		$karyawanRole->name = "karyawan";
		$karyawanRole->display_name = "Karyawan";
		$karyawanRole->save();
		
		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin Larapos';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->save();
		$admin->attachRole($adminRole);
		
		// Membuat sample member
		$member = new User();
		$member->name = "Sample Member";
		$member->email = 'member@gmail.com';
		$member->password = bcrypt('rahasia');
		$member->save();
		$member->attachRole($memberRole);

		$karyawan = new User();
		$karyawan->name = "Sample Karyawan";
		$karyawan->email = 'karyawan@gmail.com';
		$karyawan->password = bcrypt('rahasia');
		$karyawan->save();
		$karyawan->attachRole($karyawanRole);
    }
}
