<?php

namespace Database\Seeders;

use App\Models\BukuModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $bukuData = [
            [
                'kode_buku' => 'BK001',
                'judul' => 'Komputer Cerdas',
                'deskripsi' => 'Komputer dapat melakukan pekerjaan yang menyerupai pekerjaan manusia, sehingga dapat membantu aktivitas manusia. Komputer tidak dapat menggantikan keahlian atau kepakaran manusia, akan tetapi membantu agar lebih efisien dan efektif. Persoalan-persoalan yang mula-mula ditangani oleh kecerdasan buatan adalah pembuktian teorema dan permainan (game). ',
                'pengarang' => 'Nur Nafiiyah',
                'category_id' => 1002,
                'sampul' => 'komputer.jpg',
            ],
            [
                'kode_buku' => 'BK002',
                'judul' => 'Teknik Pengolahan Audio & Video',
                'deskripsi' => 'Buku yang berjudul Teknik Pengolahan Audio Dan Video SMK/MAK Kelas XII ini dapat hadir sebagai penunjang pembelajaran pada Sekolah Menengah Kejuruan Kompetensi Keahlian Multimedia. Buku ini berisi materi pembelajaran yang membekali peserta didik dengan pengetahuan dan keterampilan dalam dunia Multimedia yang mengacu pada Kurikulum 2013 revisi tahun 2017.',
                'pengarang' => 'Johnie Rogers Swanda Pasaribu, S.Kom., M.Kom.',
                'category_id' => 1002,
                'sampul' => 'multimedia.jpg',
            ],
            [
                'kode_buku' => 'BK003',
                'judul' => 'Aplikasi Komputer',
                'deskripsi' => 'Perkembangan teknologi informasi yang semakin pesat dan selalu
                berkembang menunut kita untuk terus mengikutinya sehingga kita
                tidak ketinggalan oleh zaman. Oleh karena itu pemanfaatan
                komputer sudah menjadi suatu kebutuhan utama. ',
                'pengarang' => 'Dwi Krisbiantoro, M.Kom.',
                'category_id' => 1002,
                'sampul' => 'aplikasi-komputer.jpg',
            ],
            [
                'kode_buku' => 'BK004',
                'judul' => 'Dasar-Dasar Teknik Informatika',
                'deskripsi' => 'Teknologi informatika merupakan teknologi yang digunakan untuk mengolah data, termasuk memproses, mendapatkan, menyusun, menyimpan, memanipulasi data dalam berbagai cara untuk menghasilkan informasi yang berkualitas, yaitu informasi yang relevan, akurat dan tepat waktu.',
                'pengarang' => 'Novega Pratama Adiputra',
                'category_id' => 1002,
                'sampul' => 'dasar-informatika.jpg',
            ],
            [
                'kode_buku' => 'BK005',
                'judul' => 'Pengantar Teknologi Informatika dan Komunikasi Data',
                'deskripsi' => 'Buku ini menulis sejarah teknologi informatika dari sejak zaman prasejarah bagaimana manusia zaman dulu saling berbagi informasi hingga masa kini. Kemudian pada bagian selanjutnya diberikan berbagai fungsi teknologi untuk memberikan pemahaman mengapa peserta didik harus mengetahui atau bahkan menguasai teknologi informasi dalam kehidupannya agar mampu memanfaatkan teknologi informasi untuk menyesuaikan diri dan meraih kehidupan yang lebih baik.',
                'pengarang' => 'Bagaskoro',
                'category_id' => 1002,
                'sampul' => 'pengantar-ti.jpg',
            ],
            [
                'kode_buku' => 'BK006',
                'judul' => 'One Punch Man Volume 22',
                'deskripsi' => 'One Punch Man adalah manga Jepang karya ONE. Manga ini menceritakan kisah seorang pria biasa bernama Saitama yang merasa jenuh dan bosan karena kekuatannya yang luar biasa, yaitu bisa mengalahkan musuh hanya dengan satu pukulan, karena itu dia dikenal sebagai "One Punch Man". Meskipun memiliki kekuatan super, ia sering kali merasa tidak puas dan terus mencari lawan yang lebih kuat yang dapat menguji kemampuannya. Manga ini penuh dengan aksi dan humor, dan itulah yang membuatnya unik dan menarik bagi banyak pembaca.',
                'pengarang' => 'ONE',
                'category_id' => 1003,
                'sampul' => 'One-Punch-Man.jpg',
            ],
            [
                'kode_buku' => 'BK007',
                'judul' => 'Kekuatan Passion dan Kegigihan',
                'deskripsi' => 'Buku ini membahas secara mendalam tentang kekuatan tekad dan ketekunan. Duckworth berpendapat bahwa grit, atau ketekunan, bukanlah bakat yang kita lahirkan, melainkan kualitas yang kita kembangkan seiring waktu. Buku ini mengeksplorasi bagaimana kita dapat membangun dan mempertahankan grit dalam diri kita sendiri dan orang lain.',
                'pengarang' => 'Angela Duckworth',
                'category_id' => 1004,
                'sampul' => 'kegigihan.jpg',
            ],
            [
                'kode_buku' => 'BK008',
                'judul' => 'Jujutsu Kaisen 11',
                'deskripsi' => 'Jujutsu Kaisen adalah serial manga Jepang yang ditulis dan diilustrasikan oleh Gege Akutami. Ini telah diserialkan di majalah manga shōnen Shueisha Weekly Shonen Jump sejak Maret 2018, dengan bab-babnya dikumpulkan dan diterbitkan dalam 20 volume tankōbon per Agustus 2022. Ceritanya mengikuti siswa sekolah menengah Yuji Itadori saat ia bergabung dengan organisasi rahasia Penyihir Jujutsu untuk menghilangkan Kutukan yang kuat bernama Ryomen Sukuna, di mana Yuji menjadi inangnya.',
                'pengarang' => 'Gege Akutami',
                'category_id' => 1003,
                'sampul' => 'jujutsu1.jpg',
            ],
        ];

        // Sisipkan data buku ke dalam tabel
        foreach ($bukuData as $buku) {
            BukuModel::create($buku);
        }
    }
}
