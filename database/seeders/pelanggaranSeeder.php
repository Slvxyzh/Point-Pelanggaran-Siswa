<?php

namespace Database\Seeders;

use App\Models\pelanggaran;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        //keterlambatan
       ['jenispelanggaran'=>'Terlambat masuk sekolah','tindakan'=>'Pengecekan tas dan mendapatkan teguran serta sanksi','jmlh_point'=>5],
       ['jenispelanggaran'=>'Keluar sekolah saat jam istirahat tanpa seizin guru piket/walikelas','tindakan'=>'Siswa dimintai keterangan dan surat pembinaan','jmlh_point'=>10],
       //kehadiran
       ['jenispelanggaran'=>'Tidak masuk sekolah tanpa keterangan selama 3 kali','tindakan'=>'Siswa dimintai keterangan dan membuat keterangan dan membuat surat perjanjian serta diberikan surat pemanggilan untuk orang tua','jmlh_point'=>25],
       ['jenispelanggaran'=>'Siswa meninggalkan KBM tanpa seizin guru mapel dan guru piket','tindakan'=>'Siswa dimintai keterangan dan surat pembinaan','jmlh_point'=>10],
       //pelanggaranrandom
       ['jenispelanggaran'=>'Mengeluarkan kata-kata tidak sopan','tindakan'=>'Siswa dipanggil untuk diberi pembinaan moral, dan mengatakan istigfar 10x (islam), doa permohonan maaf(agama lain)','jmlh_point'=>10],
       ['jenispelanggaran'=>'Menyakiti perasaan orang lain: menghina, memperolok, memfitnah (bullying)','tindakan'=>'Siswa dipanggil untuk diberi pembinaan dan diberi surat panggilan orang tua','jmlh_point'=>50],
       ['jenispelanggaran'=>'Melakukan perjudian dan sejenisnya','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100],
       ['jenispelanggaran'=>'Berbohong/membuat kesaksian palsu','tindakan'=>'Teguran dan pembinaan, surat pernyataan serta pemanggilan orang tua','jmlh_point'=>50],
       ['jenispelanggaran'=>'Melakukan pemalakan terhadap sesama siswa didalam/diluar sekolah baik berupa uang ataupun barang','tindakan'=>'Teguran dan pembinaan, surat pernyataan serta pemanggilan orang tua','jmlh_point'=>75],
       ['jenispelanggaran'=>'Melakukan pencurian disekolah maupun diluar sekolah','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100],
       ['jenispelanggaran'=>'Menikah, menghamili/ hamil selama menjadi siswa','tindakan'=>'Siswa dikembalikan ke orang tua','jmlh_point'=>100],
       ['jenispelanggaran'=>'Berkumpul diluar sekolah memakai seragam sekolah saat KBM','tindakan'=>'Siswa dipanggil keesokan harinya untuk diarahkan dan diberikan pembinaan','jmlh_point'=>20],
       ['jenispelanggaran'=>'Membuat kegaduhan didalam/diluar sekolah','tindakan'=>'Siswa diberikan peringatan','jmlh_point'=>10],
       ['jenispelanggaran'=>'Tidur dan makan dalam kelas saat KBM tanpa seizin guru','tindakan'=>'Siswa diberikan teguran dan wajib membersihkan ruangan tersebut','jmlh_point'=>5],
       ['jenispelanggaran'=>'Mabuk disekolah/ lingkungan sekolah akibat narkoba/miras','tindakan'=>'Siswa dikembalikan ke orang tua dan proses hukum diserahkan kepada pihak kepolisian','jmlh_point'=>100],
       ];
       foreach ($data as $item) {
       pelanggaran::insert([
        'jenispelanggaran' => $item['jenispelanggaran'],
        'tindakan' => $item['tindakan'],
        'jmlh_point' => $item['jmlh_point'],
        'created_at' =>Carbon::now(),
        'updated_at' =>Carbon::now()
       ]);
       }
    }
}
