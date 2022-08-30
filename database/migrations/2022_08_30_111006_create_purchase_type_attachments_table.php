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
        Schema::create('purchase_type_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_type_id');
            $table->unsignedBigInteger('attachment_id');
            $table->boolean('is_mandatory');
            $table->string('notes');
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
        Schema::dropIfExists('purchase_type_attachments');
    }
};
