<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fols', function (Blueprint $table) {
            $table->id();
            $table->string('code_name')->unique();
            $table->string('fullname');
            $table->string('position');
            $table->string('dept');
            $table->enum('requestFor', ['W/Pay', 'W/OPay']);
            $table->set('natures_of_leave', ['Sick Leave', 'Accident Leave', 'Bereavement Leave', 'Maternity Leave', 'Vacation Leave', 'Paternity Leave', 'Seminar Leave', 'Union Leave']);
            $table->date('periodFrom');
            $table->date('periodTo');
            $table->integer('days');
            $table->text('reason');
            $table->string('certified');
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
        Schema::dropIfExists('fols');
    }
}
