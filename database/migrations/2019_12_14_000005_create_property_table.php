<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'properties';

    /**
     * Run the migrations.
     * @table property
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('property_type')->nullable();
            $table->integer('owner')->nullable();
            $table->text('address')->nullable();
            $table->integer('price')->nullable();
            $table->integer('starting_price')->nullable();
            $table->integer('no_of_months')->nullable();
            $table->integer('available')->nullable()->default('0');

            $table->index(["property_type"], 'property_type_idx');

            $table->index(["owner"], 'owner_idx');


            $table->foreign('property_type', 'property_type_idx')
                ->references('id')->on('property_type')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('owner', 'owner_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
