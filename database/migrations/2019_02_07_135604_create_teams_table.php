<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('all_contacts');
            $table->integer('all_items');
            $table->integer('all_invoices');
            $table->integer('all_opportunities');
            $table->integer('unpaid_invoices');
            $table->integer('paid_invoices');
            $table->integer('lost_opportunities');
            $table->integer('won_opportunities');
            $table->integer('new_opportunities');
            $table->integer('undeposited_funds');
            $table->integer('deposited_funds');
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
        Schema::dropIfExists('teams');
    }
}
