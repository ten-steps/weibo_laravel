<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
        $users = User::find(1);
        $users->name = '十步';
        $users->email = '1085530400@qq.com';
        $users->password = bcrypt(123456);
        $users->is_admin = true;
        $users->save();
    }
}
