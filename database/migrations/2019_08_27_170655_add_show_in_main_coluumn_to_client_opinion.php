<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShowInMainColuumnToClientOpinion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_opinions', function (Blueprint $table) {
            $table->boolean('show_in_main');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_coluumn_to_client_opinion', function (Blueprint $table) {
            $table->dropColumn('show_in_main');
        });
    }
}
