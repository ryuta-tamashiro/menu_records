<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->date('birth')->nullable()->comment('誕生日');
            $table->integer('operation_user_id')->comment('操作ユーザーID');
            $table->dateTime('created_at')->comment('作成日時');
            $table->dateTime('updated_at')->comment('更新日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
        });

        DB::statement("ALTER TABLE members COMMENT '会員'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
