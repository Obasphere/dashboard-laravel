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
            $table->string('all_contacts');
            $table->string('all_items');
            $table->string('all_invoices');
            $table->string('all_opportunities');
            $table->string('unpaid_invoices');
            $table->string('paid_invoices');
            $table->string('lost_opportunities');
            $table->string('won_opportunities');
            $table->string('new_opportunities');
            $table->string('undeposited_funds');
            $table->string('deposited_funds');
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
