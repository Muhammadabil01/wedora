@php
$templates = [
 ['slug'=>'amora','name'=>'Amora','category'=>'Romantic','price'=>299000,'rating'=>'4.9','image'=>'wedding-garden.jpg','label'=>'Paling diminati'],
 ['slug'=>'selene','name'=>'Selene','category'=>'Minimalist','price'=>199000,'rating'=>'4.8','image'=>'wedding-ivory.jpg','label'=>'Baru'],
 ['slug'=>'laras','name'=>'Laras','category'=>'Traditional','price'=>399000,'rating'=>'5.0','image'=>'wedding-traditional.jpg','label'=>null],
 ['slug'=>'noire','name'=>'Noire','category'=>'Luxury','price'=>499000,'rating'=>'4.9','image'=>'wedding-evening.jpg','label'=>null],
 ['slug'=>'alba','name'=>'Alba','category'=>'Modern','price'=>299000,'rating'=>'4.8','image'=>'wedding-ivory.jpg','label'=>null],
 ['slug'=>'florentina','name'=>'Florentina','category'=>'Floral','price'=>349000,'rating'=>'4.9','image'=>'wedding-garden.jpg','label'=>null],
 ['slug'=>'aksara','name'=>'Aksara','category'=>'Traditional','price'=>399000,'rating'=>'4.7','image'=>'wedding-traditional.jpg','label'=>null],
 ['slug'=>'celeste','name'=>'Celeste','category'=>'Luxury','price'=>599000,'rating'=>'5.0','image'=>'wedding-evening.jpg','label'=>null],
];
$packages = [
 ['name'=>'Basic','price'=>'Rp199.000','description'=>'Esensial untuk membagikan hari bahagia dengan indah.','featured'=>false,'features'=>['1 pilihan template','Profil pasangan','Informasi acara','Galeri foto','Google Maps','Kustomisasi dasar']],
 ['name'=>'Premium','price'=>'Rp399.000','description'=>'Pengalaman lengkap untuk pasangan dan para tamu.','featured'=>true,'features'=>['Semua fitur Basic','RSVP online','Buku tamu digital','Hitung mundur','Musik latar','Warna khusus','Galeri lebih banyak']],
 ['name'=>'Exclusive','price'=>'Rp699.000','description'=>'Kebebasan personalisasi untuk cerita yang istimewa.','featured'=>false,'features'=>['Semua fitur Premium','Kustomisasi lanjutan','Domain khusus','Dukungan prioritas','Revisi lebih banyak','Desain premium']],
];
$faqs = [
 ['Apakah foto di template bisa diganti?','Tentu. Semua foto contoh akan diganti dengan foto Anda. Tim kami juga membantu menata urutan foto agar ceritanya terasa lebih personal.'],
 ['Apakah warna website bisa disesuaikan?','Bisa. Paket Premium dan Exclusive menyediakan penyesuaian palet warna. Pada paket Basic tersedia pilihan warna bawaan template.'],
 ['Apakah saya mendapatkan domain?','Setiap paket mendapatkan tautan Wedora aktif. Domain khusus seperti namapasangan.com termasuk dalam paket Exclusive atau dapat ditambahkan terpisah.'],
 ['Berapa lama proses pembuatannya?','Rata-rata 3–5 hari kerja setelah seluruh data dan foto kami terima. Permintaan kompleks dapat memerlukan waktu tambahan.'],
 ['Apakah bisa meminta revisi?','Bisa. Jumlah revisi mengikuti paket yang dipilih. Sebelum tayang, Anda akan menerima tautan pratinjau untuk diperiksa.'],
 ['Apakah website dapat dibuka melalui HP?','Ya. Semua template Wedora dirancang responsif dan nyaman dibuka melalui ponsel, tablet, maupun komputer.'],
 ['Berapa lama website akan aktif?','Website aktif selama 12 bulan sejak tanggal publikasi dan dapat diperpanjang kapan saja.'],
 ['Apakah tamu perlu mengunduh aplikasi?','Tidak. Tamu cukup membuka tautan undangan melalui browser tanpa perlu memasang aplikasi apa pun.'],
 ['Bagaimana cara mengirim data pernikahan?','Setelah memesan, tim kami mengirim formulir khusus melalui WhatsApp untuk foto, lokasi, susunan acara, dan detail lainnya.'],
];
$formatPrice = fn($value) => 'Rp'.number_format($value, 0, ',', '.');
@endphp
