<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function (Blueprint $table) {
			$table->increments('id')->index();
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->dateTime('deleted_at');
			$table->string('comment');
			$table->tinyInteger('is_deleted');

			$table->string('name');
			$table->string('text', 10240)->index();
			$table->integer('progress');
			$table->integer('priority');
			$table->dateTime('due_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('tasks');
	}
}
