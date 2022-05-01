<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 50)->comment('姓');
            $table->string('given_name', 50)->comment('名');
            $table->string('surname_kana', 50)->comment('姓(カナ)');
            $table->string('given_name_kana', 50)->comment('名(カナ)');
            $table->string('email', 100)->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->tinyInteger('user_type')->comment('ユーザー種別 1:管理者 2:会員');
            $table->integer('operation_user_id')->comment('操作ユーザーID');
            $table->dateTime('created_at')->comment('作成日時');
            $table->dateTime('updated_at')->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
        });

        DB::statement("ALTER TABLE users COMMENT 'ユーザー'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
