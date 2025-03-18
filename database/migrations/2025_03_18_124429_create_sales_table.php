<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('order_code', 50);
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('discounted_total');
            $table->timestamps();

            // 外部キー制約（必要に応じて）
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};

