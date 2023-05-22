<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\kunjungan;
use App\Models\layanan;
use App\Models\obat;
use App\Models\profil;
use App\Models\galeri;
use App\Models\urus;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        kunjungan::create([
            'nama' => 'Yoga Putra',
            'kelas' => 'XI TKR 1',
            'keperluan' => 'Meminta perban karena habis terjatuh',
            'masuk' => '2022-05-23 11:32:23',
            'keluar' => '2022-05-24 09:11:31'
        ]);
        
        kunjungan::create([
            'nama' => 'Dhaffa Rian',
            'kelas' => 'XII RPL 2',
            'keperluan' => 'Ukur tinggi dan timbang berat badan',
            'masuk' => '2022-05-23 12:41:11',
        ]);
        
        kunjungan::create([
            'nama' => 'Arif Fadhillah',
            'kelas' => 'X TKJ 1',
            'keperluan' => 'Istirahat karena pingsan saat upacara',
            'masuk' => '2022-05-23 14:21:43',
        ]);
        
        obat::create([
            'namaobat' => 'Betadine',
            'stok' => '10',
            'satuan' => 'botol'
        ]);

        obat::create([
            'namaobat' => 'Hansaplast',
            'stok' => '35',
            'satuan' => 'lembar'
        ]);

        obat::create([
            'namaobat' => 'Minyak Kayu Putih',
            'stok' => '10',
            'satuan' => 'botol'
        ]);

        obat::create([
            'namaobat' => 'Antangin',
            'stok' => '5',
            'satuan' => 'sachet'
        ]);

        profil::create([
            'deskripsi' => '<div><strong>Deskripsi UKS</strong><br>Usaha Kesehatan Sekolah disingkat UKS atau Unit Kesehatan Sekolah adalah program pemerintah untuk meningkatkan pelayanan kesehatan, pendidikan kesehatan dan pembinaan lingkungan sekolah sehat atau kemampuan hidup sehat bagi warga sekolah.</div>',
            'visi' => '<div><strong>Visi UKS</strong><br>Hidup sehat, tumbuh dan berkembang secara harmonis dan optimal.</div>',
            'misi' => '<div><strong>Misi UKS</strong></div><ol><li>Melaksanakan kebiasaan perilaku hidup sehat pada peserta didik secara menyeluruh dan terpadu.&nbsp;</li><li>Meningkatkan pelayanan kesehatan secara komprehensif dan terpadu meliputi promotif, preventif, kuratif dan rehabilitatif.&nbsp;</li><li>Melaksanakan kegiatan pembinaan di bidang fisik, mental dan sosial.</li></ol>'
        ]);

        layanan::create([         
            'jenis' => 'Live Report',
            'deskripsi' => 'Pelaporan informasi pengunjung secara real-time'
        ]);

        layanan::create([         
            'jenis' => 'Tempat Istirahat',
            'deskripsi' => 'Menyediakan tempat untuk beristirahat jika kurang enak badan'
        ]);

        layanan::create([         
            'jenis' => 'Pertolongan Pertama',
            'deskripsi' => 'Menyediakan obat yang umum seperti obat masuk angin secara gratis'
        ]);

        layanan::create([         
            'jenis' => 'Pengecekan Fisik',
            'deskripsi' => 'Timbang berat badan, ukur tinggi badan, dan cek suhu tubuh'
        ]);
        
        galeri::create([
            'title' => 'UKS umum',
            'image' => 'post-images/f1CAxn3ZIuSZOijCmZ2ug7DnOuvKw2AE6bGGnxAv.jpg'
        ]);

        galeri::create([
            'title' => 'Pemandangan UKS',
            'image' => 'post-images/zTf2oYi21xLBibXyuH4C5MhVrTdfpFDAcg4RpNn6.jpg'
        ]);

        urus::create([
            'nama' => 'Arif Fadhillah',
            'kelas' => 'X TKJ 1',
            'linkig' => 'https://www.instagram.com/arifdhlh/',
            'image' => 'post-images/zwebLFivBwqQYzbvgNFcGKlp1awBOv6C5lM0OTn8.png'
        ]);

        urus::create([
            'nama' => 'Dewa Akbar Arizona',
            'kelas' => 'X TKJ 3',
            'linkig' => 'https://www.instagram.com/dewarizona_/',
            'image' => 'post-images/MqirTBHYnpPsbWeoqfW5r5QivjIKlzEQYUCYIM4w.png'
        ]);

        urus::create([
            'nama' => 'Eka Widya Nurahman',
            'kelas' => 'XII RPL 2',
            'linkig' => 'https://www.instagram.com/ekawn21/',
            'image' => 'post-images/4KFXx6YrQ0nAymwwtDTbvktRCYvExCVXQzM0CtvS.png'
        ]);

        urus::create([
            'nama' => 'Devita Putri Natasya',
            'kelas' => 'XI MM 2',
            'linkig' => 'https://www.instagram.com/devitanatasya_/',
            'image' => 'post-images/o61t4XucTrl1dIy44kdRqFyBUPAjwkM3Sf99muM7.png'
        ]);

        urus::create([
            'nama' => 'Nur Azizah Devian Asroriah',
            'kelas' => 'XII TKR 3',
            'linkig' => 'https://www.instagram.com/nrazzhasr/',
            'image' => 'post-images/nnBto98S6xqX5d519MVrKhSSimZZ5ZKvGR9pG9O0.png'
        ]);

        urus::create([
            'nama' => 'Diva Ridha Fadillah',
            'kelas' => 'XI TSM 2',
            'linkig' => 'https://www.instagram.com/hansxxyn/',
            'image' => 'post-images/5TxH852gxrvXUSZFPItaN4ST2tQgyvHVQEc1F1MJ.jpg'
        ]);

    }
}
