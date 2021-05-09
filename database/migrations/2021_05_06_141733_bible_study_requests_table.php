<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BibleStudyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email');
            $table->bigInteger('contact_number');
            $table->date('birthdate');
            $table->string('religion');
            $table->date('bs_date');
            $table->time('bs_time');
            $table->string('bs_address');
            $table->timestamps();
        });
    }

    //     'name',
    //     'address',
    //     'contact_number',
    //     'birthdate',
    //     'bs_date',
    //     'bs_time',
    //     'bs_address'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_requests');
    }
}
