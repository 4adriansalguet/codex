<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_firstname');
            $table->string('model_lastname');
            $table->string('model_email');
            $table->string('model_phone');
            $table->string('model_country');
            $table->text('model_projectType');
            $table->text('model_attachment_name')->nullable();
            $table->text('model_message');
            $table->text('model_price_img_url')->nullable();
            $table->text('model_price')->nullable();
            $table->text('model_pricing_name')->nullable();
            $table->string('model_reference_id');
            $table->integer('model_status')->default(0);
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
        Schema::dropIfExists('quote_requests');
    }
}
