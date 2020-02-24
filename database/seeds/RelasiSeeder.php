<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobi;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menghapus Semua Sample Data
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        //Membuat data Dosen
        $dosen = Dosen::create([
            'nama' => 'Abdul Musthofa',
            'nipd' => '227356223'
        ]);
        $this->command->info('Data Dosen Berhasil diBikin');

        //Membuat data Mahasiswa
        $mamat = Mahasiswa::create([
            'nama' => 'Mamat Maung',
            'nim'  => '01010101',
            'id_dosen' => $dosen->id
        ]);

        $dadang = Mahasiswa::create([
            'nama' => 'dadang amloy',
            'nim'  => '01010102',
            'id_dosen' => $dosen->id
        ]);
        $this->command->info('Data Mahasiswa Berhasil diBuat');

        // Membuat Data Wali
        $acun = Wali::create([
            'nama' => 'Acun',
            'id_mahasiswa' => $mamat->id
        ]);

        $maruli = Wali::create([
            'nama' => 'Maruli',
            'id_mahasiswa' => $dadang->id
        ]);
        $this->command->info('Data Wali Berhasil diBuat');

        // Membuat Data Hobi
        $mancing = Hobi::create([
            'hobi' => 'Mancing Keributan'
        ]);

        $tidur = Hobi::create([
            'hobi' => 'Tidur Pulas'
        ]);

        // Manempilkan Hobi ke Mahasiswa
        $mamat->hobi()->attach($mancing->id);
        $dadang->hobi()->attach($tidur->id);

        $this->command->info('Data HObi Mahasiswa Berhasil di BUat');
    }
}
