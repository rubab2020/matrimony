<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_for');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('gender');
            $table->string('dob');
            $table->rememberToken();
            $table->string('profile_picture')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('intro')->nullable();
            $table->string('languages')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('no_of_children')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('complexion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('body_type')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('highest_education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('present_address')->nullable();
            $table->string('present_city')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_postal_code')->nullable();
            $table->string('present_country')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_postal_code')->nullable();
            $table->string('permanent_country')->nullable();
            $table->string('family_info')->nullable();
            $table->string('hobby')->nullable();
            $table->string('interest')->nullable();
            $table->string('expect_age_start')->nullable();
            $table->string('expect_age_end')->nullable();
            $table->string('expect_district')->nullable();
            $table->string('expect_profession')->nullable();
            $table->string('expect_education')->nullable();
            $table->string('expect_height_start')->nullable();
            $table->string('expect_height_end')->nullable();
            $table->string('expect_special_preference')->nullable();
            $table->string('expect_keywords')->nullable();
            $table->string('otp')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
