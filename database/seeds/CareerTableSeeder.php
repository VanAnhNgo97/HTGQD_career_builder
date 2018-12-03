<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $queryString = "INSERT INTO `career` (`id`, `name`, `created_at`, `updated_at`) VALUES 
        (1, 'CNTT phần mềm', NULL, NULL), 
        (2, 'Bán hàng kinh doanh', NULL, NULL), 
        (3, 'Cơ khí, ô tô, tự động hóa', NULL, NULL), 
        (4, 'Quảng cáo, đối ngoại, truyền thông', NULL, NULL), 
        (5, 'Kế toán, kiểm toán', NULL, NULL), 
        (6, 'Thực phẩm và đồ uống', NULL, NULL), 
        (7, 'Tài chính, đầu tư', NULL, NULL), 
        (8, 'Ngân hàng', NULL, NULL), 
        (9, 'Y tế, sức khỏe', NULL, NULL), 
        (10, 'Giáo dục đào tạo', NULL, NULL);";
        // DB::table('career')->truncate();
        DB::statement($queryString);
    }
}
