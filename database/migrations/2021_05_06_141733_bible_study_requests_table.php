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
            $table->string('name', 50)->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->bigInteger('contact_number')->nullable()->default(null);
            $table->date('birthdate')->nullable()->default(null);
            $table->string('religion')->nullable()->default(null);
            $table->date('bs_date')->nullable()->default(null);
            $table->time('bs_time')->nullable()->default(null);
            $table->string('bs_address')->nullable()->default(null);
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