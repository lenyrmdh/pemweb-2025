<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
         Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('employee'); // nilai: super_admin, employee
    });
    
    Schema::table('employees', function (Blueprint $table) {
        $table->foreignId('user_id')->constrained()->after('id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('role');
    });
    
    Schema::table('employees', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
    }
};
