<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'username' => 'admin',
                'password' => bcrypt('Ngumoinoi1!'),
                'level' => 1,
                'name' => 'quản trị',
                'email' => 'quangduc284097@gmail.com',
                'sdt' => '0784456836',
                'img' => 'https://drive.google.com/file/d/1VpWWi1rHA-GZHQfZO9nHak_RMBvkiWv7/view?usp=sharing',
                'description' => 'Quản trị của cả website'
            ],
            [
                'username' => 'duc',
                'password' => bcrypt('ngumoinoi'),
                'level' => 0,
                'name' => 'Nguyễn Quang Đức',
                'email' => 'quangduc280497@gmail.com',
                'sdt' => '0784456836',
                'img' => 'https://drive.google.com/file/d/1ov2ObYizEf1XH1ahdBRexYdao_1t4xAn/view?usp=sharing',
                'description' => 'Quản trị của cả website'
            ],
        ];
        DB::table('users')->insert($data);
    }
}
