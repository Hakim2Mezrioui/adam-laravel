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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("role_id")->constrained();
            
            // $table->unsignedBigInteger("user_id");
            // $table->unsignedBigInteger("role_id");
            // $table->foreign("user_id")->references("id")->on("users");
            // $table->foreign("role_id")->references("id")->on("roles");
            
            // $table->foreignId("u_id")->constrained('users', 'id');
            // $table->foreignId("r_id")->constrained('roles', 'id');

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
        Schema::dropIfExists('role_user');
    }
};
