<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Schema::create('post',function(Blueprint $table){
		$table->increment('id');
		$table->timestamps();
		$table->text('body');
		$table-integer('user_id');
	});
}





public function down()
{
	Schema::drop('post');
}
}