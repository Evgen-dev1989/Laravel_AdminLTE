<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     ;

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->default();
            $table->string('name');
            $table->LONGTEXT('employmentDate');
            $table->LONGTEXT('phoneNubmer');
            $table->string('email');
            $table->integer('salary');
            $table->unsignedBigInteger('position_id')->default();
            //$table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('admin_created_id')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('admin_updated_id')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
