<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::insert("INSERT INTO users values (1,'Chi Lap','h.lap96@googlemail.com','1121212223',NOW(),NOW())");
        DB::insert("INSERT INTO users values (2,'Alex','alex@web.de','1212121',NOW(),NOW())");
        DB::insert("INSERT INTO users values (3,'Sebastian','seb@googlemail.com','121212456',NOW(),NOW())");
        DB::insert("INSERT INTO users values (4,'Thomas','thomas@googlemail.com','6121121278',NOW(),NOW())");
        DB::insert("INSERT INTO users values (5,'Hans','hans@googlemail.com','121213789',NOW(),NOW())");

    }
}
