<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveFieldsFromServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['sku', 'materials', 'size', 'shipping', 'setup', 'waranty', 'brand']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('sku')->nullable();
            $table->string('materials')->nullable();
            $table->string('size')->nullable();
            $table->string('shipping')->nullable();
            $table->string('setup')->nullable();
            $table->string('waranty')->nullable();
            $table->string('brand')->nullable();
        });
    }
}