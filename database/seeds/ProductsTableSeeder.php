<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'HPAM Ultima Ekuitas 1',
            'slug'=>'hpam',
            'ytd' => '18.3',
            'kategori'=>'campuran',
            'deskripsi'=>'Wisma GKBI Lt.38 Suite 3805,
            Jl. Jend. Sudirman No.28 ,Jakarta 10210
            Phone: +62 21 5790 7500
            Fax: +62 21 5790 4227 ',
            'rating'=>3,
            'price'=>1000000,
            'image'=>('products/dummy/hpam.jpg'),
        ])->categories()->attach(3);

        // 1 produk bisa memiliki 2 kategori menggunakan code di bawah
        // $product = Product::find(1);
        // $product->categories()->attach(2);

        Product::create([
            'name'=>'BNI-AM Dana Berkembang',
            'slug'=>'bni',
            'ytd' => '7.2',
            'kategori'=>'syariah',
            'deskripsi'=>'BNI Asset Management merupakan anak perusahaan PT BNI Securities, dimana pada pertengahan tahun 2011, BNI Securities melakukan pemisahan kegiatan usaha Divisi Manajemen Investasi (Asset Management). BNI Securities sendiri berdiri pada tanggal 12 April 1995 sebagai anak perusahaan dari PT Bank Negara Indonesia (Persero) Tbk dengan kepemilikan sebesar 75% dan sisanya sebesar 25% dimiliki oleh SBI Securities Japan.  Sejak tahun 1996, BNI Securities memulai usaha sebagai Manajer Investasi. Saat ini mengelola beberapa reksa dana yang berbasis efek saham, efek pendapatan tetap dan efek campuran baik yang konvensional maupun syariah. Perusahaan memiliki ijin sebagai Manajer Investasi dengan NoKEP-05/BL/MI/2011   tanggal   7 Jul 2011.',
            'rating'=>3,
            'price'=>2000000,
            'image'=>('products/dummy/bni.png'),
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Manulife Obligasi Unggulan',
            'slug'=>'manulife',
            'ytd' => '22.3',
            'kategori'=>'saham',
            'deskripsi'=>'PT Manulife Aset Manajemen Indonesia (“MAMI”) merupakan salah satu perusahaan manajemen investasi terbesar di Indonesia yang telah berdiri sejak tahun 1996. MAMI adalah bagian dari Manulife Asset Management, perusahaan manajemen investasi global grup Manulife yang menawarkan beragam jasa manajemen investasi dan reksa dana di Indonesia.  Didukung oleh tim pengelola investasi yang profesional dan berpengalaman, MAMI mengelola produk reksa dana pendapatan tetap (termasuk reksa dana syariah sukuk), saham (termasuk reksa dana saham syariah), campuran, pasar uang, dan terproteksi. MAMI telah meraih beragam penghargaan dari industri.Pada tahun 2017, MAMI kembali meraih penghargaan Top Investment House in Asian Local Currency Bonds dari The Asset Benchmark Research. Penghargaan ini telah diraih selama 3 tahun berturut-turut. Sementara pada tahun 2016, MAMI meraih penghargaan Best Fund House dari Asia Asset Management (selama dua tahun berturut-turut). MAMI memiliki izin usaha sebagai Manajer Investasi dengan Surat Keputusan Ketua Bapepam No. KEP-07/PM/MI/1997 tanggal 21 Agustus 1997.',
            'rating'=>3,
            'price'=>4000000,
            'image'=>('products/dummy/manulife.png'),
        ])->categories()->attach(1);
        Product::create([
            'name'=>'Dana Pratama Ekuitas',
            'slug'=>'pratama',
            'ytd' => '29.4',
            'kategori'=>'saham',
            'deskripsi'=>'Wisma GKBI Lt.38 Suite 3805,
            Jl. Jend. Sudirman No.28 ,Jakarta 10210
            Phone: +62 21 5790 7500
            Fax: +62 21 5790 4227 ',
            'rating'=>4,
            'price'=>5000000,
            'image'=>('products/dummy/majoris.jpg'),
        ])->categories()->attach(1);
        Product::create([
            'name'=>'Mega Asset Maxima',
            'slug'=>'mega',
            'ytd' => '17.1',
            'kategori'=>'campuran',
            'deskripsi'=>'PT Mega Asset Management didirikan pada tanggal 10 Februari 2011. Perusahaan mempunyai visi menjadi pengelola investasi yang terpercaya dan menjadi pilihan masyarakat. Sementara misi perusahaan adalah menyediakan produk-produk investasi dengan kualitas layanan terbaik serta memberikan imbal hasil investasi yang baik kepada nasabah dengan meningkatkan sumber daya manusia, memperluas jaringan pemasaran serta meningkatkan dana kelolaan. Perusahaan memiliki ijin sebagai Manajer Investasi dengan No. KEP-07/BL/MI/2011 tanggal 19 Oktober 2011. Beberapa penghargaan yang telah diterima pada  tahun 2015 dari Investor - Infovesta Awards dan APRDI-Bloomberg Indonesia Fund Awards untuk Reksa Dana yang dikelola, diantaranya adalah :
 
            1.    Majalah Investor – Infovesta Best Mutual Fund Awards 2015
            Best Mutual Fund Awards 2015 Kategori Reksa Dana Pendapatan Tetap Periode 1 Tahun Aset di atas Rp 25 Miliar - Rp 100 Miliar: Mega Asset Mantap Plus by PT Mega Asset Management
             
            2.    APRDI – Bloomberg Indonesia Fund Awards
            Best Thematic Fund: Mega Asset Greater Infrastructure by PT Mega Asset Management',
            'rating'=>5,
            'price'=>3000000,
            'image'=>('products/dummy/mega.png'),
        ])->categories()->attach(3);
        Product::create([
            'name'=>'Manulife Dana Stabil Berimbang',
            'slug'=>'manulifes',
            'ytd' => '14.9',
            'kategori'=>'syariah',
            'deskripsi'=>'PT Manulife Aset Manajemen Indonesia (“MAMI”) merupakan salah satu perusahaan manajemen investasi terbesar di Indonesia yang telah berdiri sejak tahun 1996. MAMI adalah bagian dari Manulife Asset Management, perusahaan manajemen investasi global grup Manulife yang menawarkan beragam jasa manajemen investasi dan reksa dana di Indonesia.  Didukung oleh tim pengelola investasi yang profesional dan berpengalaman, MAMI mengelola produk reksa dana pendapatan tetap (termasuk reksa dana syariah sukuk), saham (termasuk reksa dana saham syariah), campuran, pasar uang, dan terproteksi. MAMI telah meraih beragam penghargaan dari industri.Pada tahun 2017, MAMI kembali meraih penghargaan Top Investment House in Asian Local Currency Bonds dari The Asset Benchmark Research. Penghargaan ini telah diraih selama 3 tahun berturut-turut. Sementara pada tahun 2016, MAMI meraih penghargaan Best Fund House dari Asia Asset Management (selama dua tahun berturut-turut). MAMI memiliki izin usaha sebagai Manajer Investasi dengan Surat Keputusan Ketua Bapepam No. KEP-07/PM/MI/1997 tanggal 21 Agustus 1997.',
            'rating'=>5,
            'price'=>1500000,
            'image'=>('products/dummy/manulife.png'),
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Sucorinvest Bond Fund',
            'slug'=>'bond',
            'ytd' => '6.8',
            'kategori'=>'syariah',
            'deskripsi'=>'PT Sucorinvest Asset Management merupakan anak perusahaan dari Sucorinvest Group yang merupakan perusahaan penyedia produk dan layanan sekuritas, manajemen aset serta brokerage yang telah beroperasi selama lebih dari 20 tahun. Jenis reksa dana yang dikelola mencakup reksa dana campuran, saham, pendapatan tetap serta penyertaan terbatas baik untuk nasabah individu maupun perusahaan. Kinerja Sucorinvest tercermin dari pencapaian Sucorinvest Flexi Fund yang ditetapkan majalah investor sebagai salah satu dari tiga besar untuk kategori Balanced Fund tahun 2010 dan 2011. Perusahaan memiliki ijin sebagai Manajer Investasi dari Bapepam-LK dengan No KEP-01/PM/MI/1999   tanggal 1 Juni 1999.',
            'rating'=>4,
            'price'=>1100000,
            'image'=>('products/dummy/scro.png'),
        ])->categories()->attach(2);
        Product::create([
            'name'=>'Avrist Prime Bond Fund',
            'slug'=>'avrist',
            'ytd' => '5.5',
            'kategori'=>'saham',
            'deskripsi'=>'PT. Avrist Asset Management (Avrist-AM) didirikan pada tahun 2011 yang merupakan anak perusahaan dari PT Avrist Assurance. PT Avrist Assurance merupakan perusahaan asuransi jiwa di Indonesia yang didirikan sejak tahun 1975. Salah satu mitra Avrist adalah DEG (Deutsche Investitions-und Entwicklungsgesellschaft), perusahaan yang terafiliasi dengan KfW Bankengruppe, salah satu institusi keuangan di Eropa, serta Meiji Yasuda Life (Meiji Yasuda Life Insurance Company), pelaku  industri asuransi jiwa di Jepang dengan pengalaman lebih dari 130 tahun. Perusahaan mengelola reksadana baik saham ataupun campuran. Sebagai pengelola reksa dana, perusaaan memiliki Ijin sebagai Manajer Investasi dengan No.KEP-07/BL/MI/2012   tanggal   18 Jun 2012.',
            'rating'=>5,
            'price'=>2250000,
            'image'=>('products/dummy/avrist.png'),
        ])->categories()->attach(1);
        Product::create([
            'name'=>'RHB SRI KEHATI Index Fund',
            'slug'=>'rhb',
            'ytd' => '9.3',
            'kategori'=>'campuran',
            'deskripsi'=>'Wisma GKBI Lt.38 Suite 3805,
            Jl. Jend. Sudirman No.28 ,Jakarta 10210
            Phone: +62 21 5790 7500
            Fax: +62 21 5790 4227 ',
            'rating'=>2,
            'price'=>5500000,
            'image'=>('products/dummy/rhb.jpg'),
        ])->categories()->attach(3);
        Product::create([
            'name'=>'BNP Paribas Omega',
            'slug'=>'bnp',
            'ytd' => '11.3',
            'kategori'=>'syariah',
            'deskripsi'=>'PT. BNP Paribas Investment Partners sebelumnya dikenal sebagai PT Fortis Investment yang didirikan pada tahun 1992. Perusahaan ini, pada bulan Mei 2009 bergabung dengan BNP Paribas Investment Partners yang  merupakan bagian dari BNP Paribas Group . Menawarkan keahlian dibidang pengelolaan dana (asset management) baik reksa dana pendapatan tetap, reksa dana saham, reksa dana campura, discretionary fund serta pelatihan.  Sebagai pengelola keuangan, perusahaan memiliki ijin sebagai 
            Manajer Investasi dari Bapepam-LK dengan Nomor KEP-21/PM/MI/1992   tanggal   13 Juli 1992.',
            'rating'=>5,
            'price'=>6700000,
            'image'=>('products/dummy/bnp.jpg'),
        ])->categories()->attach(2);
        Product::create([
            'name'=>'CIMB-Principal Balanced',
            'slug'=>'cimb',
            'ytd' => '12.2',
            'kategori'=>'campuran',
            'deskripsi'=>'PT CIMB Principal Asset Management dimiliki oleh CIMB-Principal Asset Management Berhad dari Malaysia, sebuah perusahaan Manajer Investasi yang 60% dimiliki oleh CIMB Group dan 40% oleh Principal Financial Group. CIMB Group di Malaysia memberikan layanan jasa keuangan dan pasar modal antara lain Corporate Finance, Debt Markets and Derivatives, Equity Market and Derivatives, Islamic Capital Markets, Private Banking, Private Equity and Research serta Asset Management.  CIMB Principal Asset Management saat ini mengelola reksa dana konvensional ataupun reksa dana syariah. Penghargaan yang diraih perusahaan diantaranya adalah “Reksa Dana Pendapatan Tetap Terbaik” dari Majalah Investor pada tahun2013 untuk CIMB-Principal Dollar Fund. Perusahaan memiliki ijin sebagai Manajer Investasi dari Bapepam-LK dengan No. KEP-05/PM/MI/1997   tanggal   7 Mei 1997.',
            'rating'=>2,
            'price'=>1160000,
            'image'=>('products/dummy/cimb.png'),
        ])->categories()->attach(3);
        Product::create([
            'name'=>'BNP Paribas Prima II',
            'slug'=>'paribas',
            'ytd' => '20.5',
            'kategori'=>'saham',
            'deskripsi'=>'PT. BNP Paribas Investment Partners sebelumnya dikenal sebagai PT Fortis Investment yang didirikan pada tahun 1992. Perusahaan ini, pada bulan Mei 2009 bergabung dengan BNP Paribas Investment Partners yang  merupakan bagian dari BNP Paribas Group . Menawarkan keahlian dibidang pengelolaan dana (asset management) baik reksa dana pendapatan tetap, reksa dana saham, reksa dana campura, discretionary fund serta pelatihan.  Sebagai pengelola keuangan, perusahaan memiliki ijin sebagai Manajer Investasi dari Bapepam-LK dengan 
            Nomor KEP-21/PM/MI/1992   tanggal   13 Juli 1992.',
            'rating'=>1,
            'price'=>1799000,
            'image'=>('products/dummy/bnp.jpg'),
        ])->categories()->attach(1);
    }
}
