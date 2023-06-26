<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeToForeignKeys extends Migration
{
    public function up()
    {
        // Thêm ON DELETE CASCADE cho bảng 'products'
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_store_id_foreign');
            $table->foreign('store_id')
                ->references('id')
                ->on('stores')
                ->onDelete('cascade');
        });

        // Thêm ON DELETE CASCADE cho bảng 'stores'
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_user_id_foreign');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        // Sử dụng phương thức dropForeign để xóa các foreign key
        // hoặc thực hiện các thay đổi phù hợp trong phương thức down()
    }
}
