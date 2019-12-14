<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname', 64)->nullable();
            $table->string('middlename', 64)->nullable();
            $table->string('lastname', 64)->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->integer('mode_of_id')->nullable();
            $table->string('id_no')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('role')->nullable();

            $table->index(["role"], 'role_idx');

            $table->index(["mode_of_id"], 'mode_of_id_idx');


            $table->foreign('role', 'role_idx')
                ->references('id')->on('roles')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('mode_of_id', 'mode_of_id_idx')
                ->references('id')->on('mode_of_id')
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
