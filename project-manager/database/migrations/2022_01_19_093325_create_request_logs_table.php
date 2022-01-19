<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable("request_logs")) return;

        Schema::create('request_logs', function (Blueprint $table) {
            $table->id();
            $table->string("path");
            $table->string("method")->default("POST");
            $table->string("body");
            $table->boolean("done")->default(true);
            $table->bigInteger("user_id")->default(0);
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
        \App\Models\RequestLog::query()->update(["done" => false]);
    }
}
