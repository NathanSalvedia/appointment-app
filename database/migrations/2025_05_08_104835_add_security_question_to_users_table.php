<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_add_security_question_to_users_table.php

public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('security_question')->nullable();
        $table->string('security_answer')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['security_question', 'security_answer']);
    });
}

};
