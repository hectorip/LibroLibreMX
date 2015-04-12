<?php namespace Hectorip\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('hectorip_books_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('comments');
            $table->boolean('fulfilled');
            $table->date('fulfilled_date');
            $table->foreign('user_id')->references('id')->on('librolibre_users_users');
            $table->foreign('book_id')->references('id')->on('hectorip_books_books');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hectorip_books_orders');
    }

}
