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
        Schema::create('org_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->boolean('hide')->default(false);
            $table->boolean('thumbnail')->default(false);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('birthday', 10)->nullable();
            $table->string('email')->nullable();
            $table->string('cn')->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('description')->nullable();
            $table->string('title')->nullable();
            $table->string('department')->nullable();
            $table->string('company')->nullable();
            $table->timestamps();
            // indexes
            $table->index('email');
            $table->index('cn');
            $table->index('telephone');
            $table->index('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('org_users');
    }
};
