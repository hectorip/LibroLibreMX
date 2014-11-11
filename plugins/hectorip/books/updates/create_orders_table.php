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
            $table->int('book_id');
            $table->int('user_to');
            $table->text('comments');
            $table->bool('fulfilled');
            $table->date('fulfilled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hectorip_books_orders');
    }

}
