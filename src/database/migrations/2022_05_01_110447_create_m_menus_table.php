<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('メニュー名');
            $table->tinyInteger('menu_type')->comment('メニュー種別 1:主食 2:主菜 3:副菜');
            $table->string('description', 100)->comment('詳細');
            $table->string('url', 100)->comment('URL');
            $table->tinyInteger('is_default')->comment('デフォルトフラグ');
            $table->integer('sort_no')->comment('並び順');
            $table->integer('operation_user_id')->comment('操作ユーザーID');
            $table->dateTime('created_at')->comment('作成日時');
            $table->dateTime('updated_at')->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
        });

        DB::statement("ALTER TABLE m_menus COMMENT 'メニューマスタ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_menus');
    }
}
