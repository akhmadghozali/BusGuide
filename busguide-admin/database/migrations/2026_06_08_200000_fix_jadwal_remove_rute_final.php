<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Gunakan statement mentah agar tidak terkena error transaksi jika FK tidak ada
        // Ini lebih aman untuk membersihkan constraint
        DB::statement('ALTER TABLE jadwal DROP CONSTRAINT IF EXISTS jadwal_id_rute_foreign');
        DB::statement('ALTER TABLE jadwal DROP CONSTRAINT IF EXISTS jadwal_id_halte_foreign');

        // Sekarang hapus kolom
        Schema::table('jadwal', function (Blueprint $table) {
            if (Schema::hasColumn('jadwal', 'id_rute')) {
                $table->dropColumn('id_rute');
            }
            if (Schema::hasColumn('jadwal', 'id_halte')) {
                $table->dropColumn('id_halte');
            }
            if (!Schema::hasColumn('jadwal', 'halte_ids')) {
                $table->json('halte_ids')->nullable()->after('id_jadwal');
            }
        });

        Schema::dropIfExists('rute_halte');
        DB::statement('DROP TABLE IF EXISTS rute CASCADE');
    }
    public function down(): void
    {
        // Tidak perlu rollback untuk perubahan destruktif ini
    }
};
