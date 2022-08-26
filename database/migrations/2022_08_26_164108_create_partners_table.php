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
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partner_company_logo');
            $table->string('partner_company_name');
            $table->string('partner_company_link');
            $table->string('partner_company_contact_email');
            $table->string('partner_company_tag1');
            $table->string('partner_company_tag2');
            $table->longText('partner_company_description1');
            $table->longText('partner_company_description2');
            $table->string('partner_role_image');
            $table->string('partner_role_name');
            $table->string('partner_role_fb');
            $table->string('partner_role_linkedin');
            $table->string('partner_role_ytube');
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
        Schema::dropIfExists('partners');
    }
};
