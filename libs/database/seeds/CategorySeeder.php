<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'cate_name' => 'Tin tức',
                'cate_slug' => 'tin-tuc',
                'cate_priority' => 1
            ],
            [
                'cate_name' => 'Lập trình',
                'cate_slug' => 'lap-trinh',
                'cate_priority' => 2
            ],
            [
                'cate_name' => 'Phần cứng',
                'cate_slug' => 'phan-cung',
                'cate_priority' => 3
            ],
            [
                'cate_name' => 'Phần mềm',
                'cate_slug' => 'phan-mem',
                'cate_priority' => 4
            ],
            [
                'cate_name' => 'Bảo mật',
                'cate_slug' => 'bao-mat',
                'cate_priority' => 5
            ],
            [
                'cate_name' => 'Khác',
                'cate_slug' => 'khac',
                'cate_priority' => 6
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
