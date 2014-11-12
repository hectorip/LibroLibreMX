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
            $table->int('book_id')->unsigned();
            $table->int('user_id')->unsigned();
            $table->text('comments');
            $table->bool('fulfilled');
            $table->date('fulfilled_date');
            $table->foreign('user_id')->references('id')->on('librolibre_users_users');
            $table->foreign('book_id')->references('id')->on('hecotrip_book_book');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hectorip_books_orders');
    }

}
