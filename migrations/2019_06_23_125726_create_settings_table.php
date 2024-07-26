<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('logo_path', 500)->nullable();
            $table->string('favicon_path', 500)->nullable();
            $table->string('phone_one', 50)->nullable();
            $table->string('phone_two', 50)->nullable();
            $table->string('email_one')->nullable();
            $table->string('email_two')->nullable();
            $table->text('contact_address')->nullable();
            $table->string('contact_mail')->nullable();
            $table->text('office_hours')->nullable();
            $table->text('google_map')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('footer_text')->nullable();
            $table->text('custom_css')->nullable();
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('settings');
    }
}
