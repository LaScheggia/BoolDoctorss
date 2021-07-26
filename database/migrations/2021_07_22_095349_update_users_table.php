<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname', 100)->after('name');
            $table->string('address', 100)->after('surname')->nullable();
            $table->text('bio')->nullable();
            $table->string('propic', 250)->after('bio')->nullable();
            $table->string('services')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('address');
            $table->dropColumn('bio');
            $table->dropColumn('propic');
            $table->dropColumn('services');
        });
    }
}
