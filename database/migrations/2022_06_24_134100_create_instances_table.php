<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instances', function (Blueprint $table) {
            $table->id();

            $table->string('subdomain')->unique();
            $table->string('hash');
            $table->string('name');
            $table->string('email');
            $table->string('status');
            $table->string('database')->nullable();
            $table->string('custom_domain')->nullable();
            $table->string('quick_login_hash')->nullable();

            $table->unsignedInteger('progress')->default(0);
            $table->text('message')->nullable();

            $table->text('password')->nullable();
            $table->string('verification_code')->nullable();

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
        Schema::dropIfExists('instances');
    }
}
