<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Bóng đá',
                'description' => 'ten danh muc',
                'slug' => 'alias',
                'cate_parent_id'=>1,
            ],
            [
                'name' => 'Văn nghệ',
                'description' => 'ten danh muc',
                'slug' => 'alias',
                'cate_parent_id'=>1,
            ],
            [
                'name' => 'Ngoại hạng anh',
                'description' => 'con bóng đá',
                'slug' => 'alias',
                'cate_parent_id'=>2,
            ],
            [
                'name' => 'văng nghệ 26-2',
                'description' => 'ten danh muc',
                'slug' => 'alias',
                'cate_parent_id'=>2,
            ],
            [
                'name' => 'Tây ban nha',
                'description' => 'Con bóng đá',
                'slug' => 'alias',
                'cate_parent_id'=>2,
            ],


        ]);
    }
}
