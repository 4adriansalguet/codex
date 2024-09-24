<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteRequestRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_request_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ref_id')->unsigned()->index();
            $table->foreign('ref_id')->references('id')->on('quote_requests')->onDelete('cascade');
            $table->string('name');
            $table->string('avatar_url')->nullable();
            $table->string('receiver_email');
            $table->string('sender_email');
            $table->string('reference_id');
            $table->text('message');
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
        Schema::dropIfExists('quote_request_replies');
    }
}
