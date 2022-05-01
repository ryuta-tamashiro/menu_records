<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersAndMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members_and_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('member_id')->comment('会員ID');
            $table->unsignedInteger('m_menu_id')->comment('メニューマスタID');
            $table->date('date')->nullable()->comment('日付');
            $table->tinyInteger('time_type')->comment('時間帯種別 1:朝 2:昼 3:夜');
            $table->text('memo')->nullable()->comment('メモ');
            $table->integer('operation_user_id')->comment('操作ユーザーID');
            $table->dateTime('created_at')->comment('作成日時');
            $table->dateTime('updated_at')->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
        });

        DB::statement("ALTER TABLE members_and_menus COMMENT '会員・メニューマスタ中間テーブル'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members_and_menus');
    }
}
