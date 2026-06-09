<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateHariOperasiInJadwalTable extends Migration
{
    public function up()
    {
        DB::statement('ALTER TABLE jadwal ALTER COLUMN hari_operasi TYPE jsonb USING hari_operasi::jsonb');
    }

    public function down()
    {
        DB::statement('ALTER TABLE jadwal ALTER COLUMN hari_operasi TYPE varchar USING hari_operasi::text');
    }
}