<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('e_wallet', function (Blueprint $table) {
            $table->unsignedBigInteger('pembayaran_id');
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('e_wallet', function (Blueprint $table) {
            $table->foreignId('e_wallet_pembayaran_id_foreign');
            $table->dropForeign('e_wallet_pembayaran_id_foreign');
        });
    }
};
