<?php

namespace Phantomdev\Contact\database\migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class create_contacts_table extends migration
{

    public function up()
    {
        Schema::create('phantom_contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('message');
            $table->string('email');
            $table->timestamps();
        });
    }

}
