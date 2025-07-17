<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Books::create([
            'judul' => 'IT',
            'penulis' => 'Stephen King',
            'harga' => 160000,
            'jumlah stok' => 9,
            'deskripsi' => 'Sekelompok anak menghadapi makhluk jahat yang menyerupai badut bernama Pennywise.',
            'cover' => 'buku/cover/horror/1.jpg',
            'kategori' => 'horror',
            'slug' => 'it'
]);

        Books::create([
            'judul' => 'PET SEMATARY',
            'penulis' => 'Stephen King',
            'harga' => 140000,
            'jumlah stok' => 6,
            'deskripsi' => 'Kuburan hewan peliharaan di belakang rumah menyimpan rahasia gelap kebangkitan.',
            'cover' => 'buku/cover/horror/2.jpg',
            'kategori' => 'horror',
            'slug' => 'pet-sematary'
        ]);

        Books::create([
            'judul' => 'THE SHINING',
            'penulis' => 'Stephen King',
            'harga' => 150000,
            'jumlah stok' => 27,
            'deskripsi' => 'Teror psikologis di hotel Overlook yang terisolasi dan berhantu',
            'cover' => 'buku/cover/horror/3.jpg',
            'kategori' => 'horror',
            'slug' => 'the-shining'
        ]);

        Books::create([
            'judul' => 'BIRD BOX',
            'penulis' => 'JOSH MALERMAN',
            'harga' => 125000,
            'jumlah stok' => 42,
            'deskripsi' => 'Dunia dilanda kegilaan oleh makhluk tak terlihat—siapa pun yang melihatnya akan bunuh diri.',
            'cover' => 'buku/cover/horror/4.jpg',
            'kategori' => 'horror',
            'slug' => 'bird-box'
        ]);

        Books::create([
            'judul' => 'MEXICAN GOTHIC',
            'penulis' => 'SILVIA MORENO GARCIA',
            'harga' => 130000,
            'jumlah stok' => 25,
            'deskripsi' => 'Kisah horor gothic di sebuah rumah tua di Meksiko dengan misteri keluarga kelam.',
            'cover' => 'buku/cover/horror/5.jpg',
            'kategori' => 'horror',
            'slug' => 'mexican-gothic'
        ]);

        Books::create([
            'judul' => 'THE HAUNTING OFHILL HOUSE',
            'penulis' => 'SHIRLEY JACKSON',
            'harga' => 120000,
            'jumlah stok' => 46,
            'deskripsi' => 'Sebuah eksperimen ilmiah di rumah berhantu berubah menjadi mimpi buruk',
            'cover' => 'buku/cover/horror/6.jpg',
            'kategori' => 'horror',
            'slug' => 'the-haunting-ofhill-house'
        ]);

        Books::create([
            'judul' => 'HOUSE OF LEAVES',
            'penulis' => 'MARK Z.DANIELEWSKI',
            'harga' => 180000,
            'jumlah stok' => 36,
            'deskripsi' => 'Buku misterius yang menceritakan rumah yang lebih besar di dalam daripada di luar',
            'cover' => 'buku/cover/horror/7.jpg',
            'kategori' => 'horror',
            'slug' => 'house-of-leaves'
        ]);

        Books::create([
            'judul' => 'SOMETHING WICKED THIS WAY COMES',
            'penulis' => 'RAY BRADBURY',
            'harga' => 110000,
            'jumlah stok' => 20,
            'deskripsi' => 'Dua anak laki-laki menghadapi sirkus menyeramkan yang datang ke kota mereka.',
            'cover' => 'buku/cover/horror/8.jpg',
            'kategori' => 'horror',
            'slug' => 'something-wicked-this-way-comes'
        ]);

        Books::create([
            'judul' => 'CAROLINE',
            'penulis' => 'NEIL GAIMAN',
            'harga' => 115000,
            'jumlah stok' => 25,
            'deskripsi' => 'Coraline menemukan dunia paralel di balik pintu rumahnya, namun penuh bahaya.',
            'cover' => 'buku/cover/horror/9.jpg',
            'kategori' => 'horror',
            'slug' => 'caroline'
        ]);

        Books::create([
            'judul' => 'DRACULA',
            'penulis' => 'BRAM STOKER',
            'harga' => 100000,
            'jumlah stok' => 5,
            'deskripsi' => 'Novel klasik tentang vampir Transilvania yang ingin menguasai Inggris',
            'cover' => 'buku/cover/horror/10.jpg',
            'kategori' => 'horror',
            'slug' => 'dracula'
        ]);
        Books::create([
            'judul' => 'FRANKENSTEIN',
            'penulis' => 'MARY SHELLEY',
            'harga' => 95000,
            'jumlah stok' => 5,
            'deskripsi' => 'Seorang ilmuwan menciptakan makhluk hidup dari tubuh mayat.',
            'cover' => 'buku/cover/horror/11.jpg',
            'kategori' => 'horror',
            'slug' => 'frankenstein'
        ]);

        Books::create([
            'judul' => 'PENANGGAL',
            'penulis' => 'EQBAL MOHAYDEEN',
            'harga' => 88000,
            'jumlah stok' => 40,
            'deskripsi' => 'Kisah horor urban legenda penanggal yang mengganggu kehidupan seorang gadis.',
            'cover' => 'buku/cover/horror/12.jpg',
            'kategori' => 'horror',
            'slug' => 'penanggal'
        ]);

        Books::create([
            'judul' => 'DANUR',
            'penulis' => 'RISA SARASWATI',
            'harga' => 95000,
            'jumlah stok' => 35,
            'deskripsi' => 'Kisah nyata penulis yang berteman dengan makhluk tak kasat mata sejak kecil.',
            'cover' => 'buku/cover/horror/13.jpg',
            'kategori' => 'horror',
            'slug' => 'danur'
        ]);

        Books::create([
            'judul' => 'SEWU DINO',
            'penulis' => 'SIMPLEMAN',
            'harga' => 99000,
            'jumlah stok' => 9,
            'deskripsi' => 'Teror ilmu hitam dan kutukan ribuan hari yang menimpa keluarga sederhana.',
            'cover' => 'buku/cover/horror/14.jpg',
            'kategori' => 'horror',
            'slug' => 'sewu-dino'
        ]);

        Books::create([
            'judul' => 'KKN DI DESA PENARI',
            'penulis' => 'SIMPLEMAN',
            'harga' => 98000,
            'jumlah stok' => 31,
            'deskripsi' => 'Cerita mahasiswa KKN yang diganggu makhluk gaib di desa terpencil.',
            'cover' => 'buku/cover/horror/15.jpg',
            'kategori' => 'horror',
            'slug' => 'kkn-di-desa-penari'
        ]);

        Books::create([
            'judul' => 'KISAH TANAH JAWA',
            'penulis' => 'Bonaventura Genta',
            'harga' => 95000,
            'jumlah stok' => 2,
            'deskripsi' => ' volume kelima dari seri Kisah Tanah Jawa, yang mengangkat kisah horor dan misteri berdasarkan urban legend lokal dan investigasi supranatural',
            'cover' => 'buku/cover/horror/16.jpg',
            'kategori' => 'horror',
            'slug' => 'kisah-tanah-jawa'
        ]);

        Books::create([
            'judul' => 'RONGGENG DUKUH PARUK',
            'penulis' => 'AHMAD TOHARI',
            'harga' => 85000,
            'jumlah stok' => 42,
            'deskripsi' => 'Meski bukan horor murni, ada unsur mistis kuat dari budaya dan ritual Jawa.',
            'cover' => 'buku/cover/horror/17.jpg',
            'kategori' => 'horror',
            'slug' => 'ronggeng-dukuh-paruk'
        ]);

        Books::create([
            'judul' => 'THE EXORICST',
            'penulis' => 'WILLIAM PETER BLATTY',
            'harga' => 145000,
            'jumlah stok' => 47,
            'deskripsi' => 'Pengusiran setan pada seorang gadis kecil yang kerasukan entitas jahat',
            'cover' => 'buku/cover/horror/18.jpg',
            'kategori' => 'horror',
            'slug' => 'the-exoricst'
        ]);

        Books::create([
            'judul' => 'HELL HOUSE ',
            'penulis' => 'RICHARD MATHESON',
            'harga' => 120000,
            'jumlah stok' => 38,
            'deskripsi' => 'Sebuah rumah berhantu yang terkenal karena sejarah kematian dan kegilaan.',
            'cover' => 'buku/cover/horror/19.jpg',
            'kategori' => 'horror',
            'slug' => 'hell-house'
        ]);

        Books::create([
            'judul' => 'THE SILENCE',
            'penulis' => 'TIM LEBBON',
            'harga' => 110000,
            'jumlah stok' => 17,
            'deskripsi' => 'Makhluk buta menyerang manusia yang bersuara—teror sunyi pun dimulai.',
            'cover' => 'buku/cover/horror/20.jpg',
            'kategori' => 'horror',
            'slug' => 'the-silence'
        ]);

        //FANTASY
        Books::create([
            'judul' => 'THE NAME OF THE WIND',
            'penulis' => 'Patrick Rothfuss',
            'harga' => 135000,
            'jumlah stok' => 12,
            'deskripsi' => 'Kisah Kvothe, seorang penyihir jenius dan musisi legendaris yang menceritakan kehidupannya.',
            'cover' => 'buku/cover/fantasy/21.jpg',
            'kategori' => 'fantasy',
            'slug' => 'the-name-of-the-wind'
        ]);

        Books::create([
            'judul' => 'MISTBORN:THE FINAL EMPIRE',
            'penulis' => 'Brandon Sanderson',
            'harga' => 145000,
            'jumlah stok' => 48,
            'deskripsi' => 'Dunia yang diperintah oleh penguasa abadi, dan seorang gadis pencuri menemukan bahwa ia punya kekuatan untuk mengubah semuanya.',
            'cover' => 'buku/cover/fantasy/22.jpg',
            'kategori' => 'fantasy',
            'slug' => 'mistborn-the-final-empire'
        ]);

        Books::create([
            'judul' => 'A GAME OF THRONES',
            'penulis' => 'George R. R. Martin',
            'harga' => 160000,
            'jumlah stok' => 13,
            'deskripsi' => 'Persaingan antar keluarga bangsawan di dunia Westeros yang penuh sihir dan pengkhianatan.',
            'cover' => 'buku/cover/fantasy/23.jpg',
            'kategori' => 'fantasy',
            'slug' => 'a-game-of-thrones'
        ]);

        Books::create([
            'judul' => 'THE HOBBIT',
            'penulis' => 'J.R.R. Tolkien',
            'harga' => 120000,
            'jumlah stok' => 47,
            'deskripsi' => 'Perjalanan Bilbo Baggins, hobbit sederhana, dalam petualangan besar melawan naga.',
            'cover' => 'buku/cover/fantasy/24.jpg',
            'kategori' => 'fantasy',
            'slug' => 'the-hobbit'
        ]);

        Books::create([
            'judul' => 'THE WAY OF KINGS',
            'penulis' => 'Brandon Sanderson',
            'harga' => 175000,
            'jumlah stok' => 32,
            'deskripsi' => 'Epik fantasi tentang peperangan, kehormatan, dan sihir di dunia Roshar.',
            'cover' => 'buku/cover/fantasy/25.jpg',
            'kategori' => 'fantasy',
            'slug' => 'the-way-of-kings'
        ]);

        Books::create([
            'judul' => 'HARRY POTTER AND THE SORCERER\'S STONE',
            'penulis' => 'J.K. Rowling',
            'harga' => 125000,
            'jumlah stok' => 37,
            'deskripsi' => 'Anak yatim piatu menemukan bahwa dia adalah penyihir dan diterima di sekolah sihir.',
            'cover' => 'buku/cover/fantasy/26.jpg',
            'kategori' => 'fantasy',
            'slug' => 'harry-potter-and-the-sorcerers-stone'
        ]);

        Books::create([
            'judul' => 'ERAGON',
            'penulis' => 'Christopher Paolini',
            'harga' => 130000,
            'jumlah stok' => 48,
            'deskripsi' => 'Seorang pemuda menemukan telur naga dan menjadi penunggang naga terakhir.',
            'cover' => 'buku/cover/fantasy/27.jpg',
            'kategori' => 'fantasy',
            'slug' => 'eragon'
        ]);

        Books::create([
            'judul' => 'THRONE OF GLASS',
            'penulis' => 'Sarah J. Maas',
            'harga' => 135000,
            'jumlah stok' => 22,
            'deskripsi' => 'Seorang pembunuh wanita diadu dalam kontes untuk menjadi juara kerajaan.',
            'cover' => 'buku/cover/fantasy/28.jpg',
            'kategori' => 'fantasy',
            'slug' => 'throne-of-glass'
        ]);

        Books::create([
            'judul' => 'THE LIES OF LOCKE LAMORA',
            'penulis' => 'Scott Lynch',
            'harga' => 145000,
            'jumlah stok' => 27,
            'deskripsi' => 'Penipuan dan sihir dalam dunia kriminal penuh intrik.',
            'cover' => 'buku/cover/fantasy/29.jpg',
            'kategori' => 'fantasy',
            'slug' => 'the-lies-of-locke-lamora'
        ]);

        Books::create([
            'judul' => 'AN EMBER IN THE ASHES',
            'penulis' => 'Sabaa Tahir',
            'harga' => 130000,
            'jumlah stok' => 10,
            'deskripsi' => 'Roman dan pemberontakan di dunia yang mirip Kekaisaran Romawi kuno.',
            'cover' => 'buku/cover/fantasy/30.jpg',
            'kategori' => 'fantasy',
            'slug' => 'an-ember-in-the-ashes'
        ]);

    }
}
