<?php
/*Tugas 3 
Ibu ingin mengambil uang tabungan sejumlah Rp. 1.575.250,- yang dimilikinya di sebuah 
bank. Misalkan pada saat itu uang pecahan yang berlaku adalah Rp. 100.000,-; Rp. 
50.000,-; Rp. 20.000,-; Rp. 5.000,-; Rp. 100,- dan Rp. 50. Dengan menggunakan script 
PHP, tentukan banyaknya masing-masing uang pecahan yang diperoleh ibu tadi! 
Lengkapi script berikut: 
 */
$jumlahUang = 1575250; 
$a2=$jumlahUang%100000;
$a1=$jumlahUang-$a2;
$a=$a1/100000;
$b2=$a2%50000;
$b1=$a2-$b2;
$b=$b1/50000;
$c2=$b2%20000;
$c1=$b2-$c2;
$c=$c1/20000;
$d2=$c2%5000;
$d1=$c2-$d2;
$d=$d1/5000;
$e2=$d2%100;
$e1=$d2-$e2;
$e=$e1/100;
$f2=$e2%50;
$f1=$e1-$f2;
$f=$f1/50; 
echo "Jumlah Rp. 100.000 : ".$a. "<br />";
echo "sisa dari 100.000 adalah :".$a2. "<br/>";  
echo "Jumlah Rp. 50.000 : ".$b. "<br />"; 
echo "sisa dari 50.000 adalah :".$b2. "<br/>";
echo "Jumlah Rp. 20.000 : ".$c. "<br />";
echo "sisa dari 20.000 adalah :".$c2. "<br/>"; 
echo "Jumlah Rp. 5.000 : ".$d. "<br />";
echo "sisa dari 5.000 adalah :".$d2. "<br/>"; 
echo "Jumlah Rp. 100 : ".$e. "<br />";
echo "sisa dari 100 adalah :".$e2. "<br/>"; 
echo "Jumlah Rp. 50 : ".$f. "<br />"; 
echo "sisa dari 50 adalah :".$f2. "<br/>";

/*
Ada seorang nasabah bank yang menabung di bank X dengan saldo awal Rp. 1.000.000,-. 
Bank X menerapkan kebijakan bunga 3% perbulan dari saldo awal tabungan. Hitunglah 
jumlah saldo akhir nasabah tersebut setelah 11 bulan. Lengkapilah script berikut ini 
untuk mengerjakan kasus ini! 

$saldoAwal=$_POST['firstDeposit']; 
$bunga = 0.03; 
$bulan=$_POST['month']; 
$saldoAkhir = ($saldoAwal*$bunga*$bulan)+$saldoAwal; 
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";  
 */
?>