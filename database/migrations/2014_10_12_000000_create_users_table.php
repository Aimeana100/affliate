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
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('country_id');
            $table->string('referee_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('has_paid_package')->default('no')->comment('do user has paid for any package');
            $table->string('has_free_package')->default('no')->comment('do user allowed a free package');
            $table->string('utype')->default('USR')->comment('ADM for admin and USR for user or customer');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
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
}
