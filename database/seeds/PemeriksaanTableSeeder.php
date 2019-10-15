<?php

use Illuminate\Database\Seeder;

class PemeriksaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	DB::table('pemeriksaan')->insert([
      		'kode_pemeriksaan' 		=> 'FD',
      		'nama_pemeriksaan' 		=> 'FOOD DETECTIVE',
      		'harga_normal' 			=> '0',
      		'description' 			=> '
Food Detective mengukur IgG antibodi yang mungkin terkait dengan kondisi peradangan dalam tubuh, mewujudkan dalam berbagai masalah kesehatan.
Wadah reaksi terlihat pada ekstrak protein makanan. Pada Sampel darah yang berukuran kecil diambil dari tusukan-jari dan kemudian diencerkan dan ditambahkan ke wadah reaksi.

Dalam langkah selanjutnya penggunaan detector solutions dan developer solutions mengidentifikasi adanya antibodi makanan melalui munculnya satu atau lebih bintik-bintik biru di atas wadah. Mengacu pada rencana susunan makanan memungkinkan makanan menyebabkan produksi antibodi untuk diidentifikasi. Setelah diidentifikasi, makanan yang dapat memicu respon anti bodi dapat dihilangkan dari diet Anda.

Food Detective™

Telah dirancang untuk digunakan oleh individu dan praktisi kesehatan. Tes ini aman dan mudah digunakan. Tes ini memakan waktu 40 menit untuk pengujian dan tidak ada peralatan khusus yang diperlukan, segala sesuatu yang disediakan untuk proses pengujian anda terdapat didalam test kit ini. Jika setelah pengambilan tes Detektif Makanan anda memerlukan bantuan untuk pembacaan hasil atau tes anda positif untuk satu atau lebih jenis makanan, anda dapat menghubungi kami untuk lebih banyak membantu dan memberikan saran. Lines terbuka pukul 9:00 pagi-05:00 sore lima hari dalam seminggu dan kami dapat dihubungi di 021-22708191',
      		'created_at' 			=> '2019-01-08 13:08:25',
      		'updated_at' 			=> '2019-01-08 13:08:25'
      	]);
    }
}
