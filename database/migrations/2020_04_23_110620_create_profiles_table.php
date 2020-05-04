<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('image');
            $table->string('url')->nullable();
            $table->string('email')->nullable();
            $table->string('short_description')->nullable();
            $table->string('details')->nullable();
            $table->string('type')->nullable();
            $table->unsignedBigInteger('profileable_id');
            $table->string('profileable_type');
            $table->unique(['profileable_id','profileable_type']);

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
        Schema::dropIfExists('profiles');
    }
}
