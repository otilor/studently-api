<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveForeignKeyConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign('users_department_id_foreign');
            // $table->dropColumn('department_id');
        });

        Schema::table('departments', function (Blueprint $table){
            $table->dropForeign('departments_faculty_id_foreign');
            // $table->dropColumn('faculty_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
