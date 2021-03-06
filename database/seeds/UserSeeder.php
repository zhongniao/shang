<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(50)->create();

        $user = User::find(1);
        $user->name = 'Spring';
        $user->email = 'spring@emt.com';
        $user->is_admin = true;
        $user->activation_token = null;
        $user->activated = true;
        $user->remember_token = null;
        $user->save();
    }
}
