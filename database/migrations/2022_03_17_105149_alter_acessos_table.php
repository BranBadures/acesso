<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Predio;

class AlterAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acessos', function (Blueprint $table) {
            $table->dropColumn('predio');
            $table->dropColumn('vacina');
        });

        Schema::table('acessos', function (Blueprint $table) {
            $table->integer('predio')->default(Predio::find(1)); # TODO pega o primeiro prédio cadastrado (melhorar)
            $table->string('vacina');
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
