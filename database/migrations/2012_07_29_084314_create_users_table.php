<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('name', 50);
            $table->string('email', 32)->unique();
            $table->string('username', 50);
            $table->string('password', 200);
            $table->string('phone', 100);
            $table->string('address');
            $table->bigInteger('school_id')->nullable();
            $table->tinyInteger('type');
            $table->integer('parent_id');
            $table->timestamp('verified_at');
            $table->boolean('closed')->default(0);
            $table->string('code')->unique()->nullable();
            $table->tinyInteger('social_type');
            $table->string('social_id')->unique()->nullable();
            $table->string('social_name');
            $table->string('social_nickname');
            $table->string('social_avatar');
            $table->text('description');
            $table->foreign('school_id')
                ->references('id')->on('schools')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
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
};
