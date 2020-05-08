<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_id');
            $table->unsignedBigInteger('to_id');
            $table->float('amount');
            $table->string('comment')->nullable();
            $table->timestamps();
        });

        Schema::table('accounting_entries', function (Blueprint $table) {
            $table->foreign('from_id')
                ->references('id')
                ->on('accounts');

            $table->foreign('to_id')
                ->references('id')
                ->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounting_entries');
    }
}
