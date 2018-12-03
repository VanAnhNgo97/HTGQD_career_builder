<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryString = "INSERT INTO `position` (`id`, `name`, `created_at`, `updated_at`) VALUES 
        (1, 'Sinh viên thực tập', NULL, NULL),
		(2, 'Mới tốt nghiệp', NULL, NULL),
		(3, 'Nhân viên', NULL, NULL),
		(4, 'Trưởng nhóm, giám sát', NULL, NULL),
		(5, 'Quản lý', NULL, NULL),
		(6, 'Quản lý cấp cao', NULL, NULL),
		(7, 'Điều hành cấp cao', NULL, NULL);";
        // DB::table('position')->truncate();
        DB::statement($queryString);
    }
}
