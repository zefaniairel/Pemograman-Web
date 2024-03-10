<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai Huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai Huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai Huruf: C";
}elseif ($nilaiNumerik < 70){
    echo "Nilai Huruf: D";
}
// Menggunakan if else memberikan sebuah kondisi untuk menentukan nilai huruf apa yang dihasilkan dari variabel yang ditentukan. 
// Ketika variabel tersebut memenuhi kondisi pertama maka akan langsung ditampilkan output yang diberikan jika memenuhi kondisi tersebut. 
// Jika tidak akan dilakukan pengecekan dengan kondisi selanjutnya dan jika sesuai maka akan menampilkan output sesuai pada kondisinya.

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
// while diatas tersebut merupakan perulangan untuk penambahan per hari dan akan menghitung berapa hari yang diperlukan. 
// Sehingga untuk mempermudah maka digunakan perulangan untuk menghemat baris pada program. 

echo "<br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
//  jika variabel i masih memiliki nilai dibawah atau sama dengan variabel jumlahLahan perulangan akan terus dilakukan 
// dan akan melakukan proses statement yang telah dibuat. Jika, perulangan itu telah selesai maka, akan 
// langsung menjalankan kode program selanjutnya yaitu menampilkan hasil jumlah yang dilakukan pada perulangan. 

echo "<br>";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";
// ketika kita ingin mengetahui berapa jumlah angka yang 
// berada pada suatu array kita bisa menggunakan perulangan. 
// Perulangan yang dilakukan ini adalah dengan menggunakan foreach yang dimana penulisannya lebih singkat jika dibanding dengan perulangan lainnya 
//dan perulangan ini memang lebih disarankan jika menggunakan array sebagai penentu kondisi. 
// Perulangan foreach akan langsung mendeteksi berapa kali 
// perulangan dilakukan dengan melihat ada berapa data yang ada didalam array tersebut.

$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}
// Dari hasil kode program berikut, kita ingin memfilter nilai berapa yang lolos ataupun yang tidak lolos berdasarkan nilai. 

echo "<br>";
echo "Pertanyaan 1 <br>";
echo "Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>";
$nilai10Siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
// Urutkan nilai siswa dari terkecil ke terbesar
for ($i = 0; $i < count($nilai10Siswa) - 1; $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < count($nilai10Siswa); $j++) {
        if ($nilai10Siswa[$j] < $nilai10Siswa[$minIndex]) {
            $minIndex = $j;
        }
    }
    // Tukar nilai
    $temp = $nilai10Siswa[$minIndex];
    $nilai10Siswa[$minIndex] = $nilai10Siswa[$i];
    $nilai10Siswa[$i] = $temp;
}
// Hitung total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi
for ($i = 0; $i < count($nilai10Siswa) - 1; $i++) {
    if($i == 0 || $i == count($nilai10Siswa)-1){
        continue;
    }
    $totalNilai += $nilai10Siswa[$i];
}
echo "=> Total nilai 10 siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai<br>";
// Hitung rata-rata nilai
$jumlahSiswa = count($nilai10Siswa) - 2; // Mengurangi 2 nilai terendah dan 2 nilai tertinggi
$rataRata = $totalNilai / $jumlahSiswa;
echo "=> Rata-rata nilainya adalah: $rataRata";

echo "<br>";
echo "<br>";
echo "<br>";
echo "Pertanyaan 2 <br>";
echo "Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. <br>";
$hargaBayar = 120000;
if($hargaBayar > 100000){
    $diskon = $hargaBayar * 0.20;
    $hargaBayar -= $diskon;
}
echo "=> Besar Diskon : Rp. $diskon,00<br>";
echo "=> Harga yang perlu dibayar setelah Diskon: Rp. $hargaBayar,00 <br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "Pertanyaan 3 <br>";
echo "Seorang pemain game ingin menghitung total skor mereka dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” <br>";
$poin = 700;
echo "=> Total Skor pemain adalah: $poin <br>";
$status = ($poin > 500) ? 'YA' : 'TIDAK';
echo "=> Apakah pemain mendapatkan hadiah tambahan? ($status) <br>";

?>