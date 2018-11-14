<!DOCTYPE html>
<?php include  'header.php'; ?>
<html>
<body>

  <nav class="navbar navbar-right">
  <div class="container-fluid">
      <li style="list-style-type:none;"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      &nbsp;
      &nbsp;
      &nbsp;
      <li style="list-style-type:none;"><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      &nbsp;
      &nbsp;
  </div>
</nav>

<div class="header">
  <img src="https://i.postimg.cc/9XvLppn4/Subsport3.png" style="width:240px;height:135px;" class="center">
</div>


 <div class="topnav">
  <a href="../index.php">HOME</a>
  <a href="../About.php">ABOUT</a>
  <a href="../ContactUs.php">CONTACT US</a>
  <a class="active" href="../help.php">HELP</a>
</div>

		<div class="tulisan">
        <h1>FAQ ( Pertanyaan yang sering ditanyakan)</h1>
          <h3>1. Berapa pesanan minimal?</h3>
            <p>Untuk pembelian retail tidak dikenakan minimum pemesanan, jadi 1pcs pun boleh.</p>
          <h3>2. Apakah barang sama persis dengan di foto?</h3>
            <p>Semua barang dijamin sama persis, karena foto diambil langsung dari produk, anda diperbolehkan untuk complain/tukar apabila barang yang diterima berbeda dengan foto atau cacat produksi.</p>
          <h3>3. Berapa lama barang disiapkan?</h3>
            <p>Dalam kondisi normal, kami akan mengkonfirmasi pesanan anda dalam waktu 1×24 jam setelah konfirmasi transfer kami terima. Pada jam kerja 09.00 – 16.00 Wib (Senin – Sabtu).</p>
          <h3>4. Bagaimana cara pembayaran sepatu yang di pesan?</h3>
            <p>Pembayaran dilakukan dengan transfer, melalui Bank BCA, MANDIRI, dan BRI. Setelah transfer selesai, konfirmasikan kembali kepada Kami via BBM, Whatsapp, Line, atau Telegram. Pembayaran bisa melalui online dengan mentransfer melalui bank. Batas konfirmasi pembayaran untuk pengiriman barang pada hari yang sama jam Senin-Kamis Jam 15.00 Wib dan Jum’at-Sabtu Jam 14.00 Wib. Jika konfirmasi setelah jam tersebut, maka barang akan kami kirim pada hari kerja berikutnya.</p>
          <h3>5. Bagaimana cara pengirimannya?</h3>
            <p>Kami akan langsung mengirimkan dalam waktu 1 (satu) hari kerja setelah konfirmasi kiriman transfer pembayaran.</p>
          <h3>6. Apakah barang yang sudah dikirim bisa dikembalikan?</h3>
            <p>Untuk Sepatu yang sudah sesuai dengan pemesanan tidak bisa dikembalikan kecuali jika terdapat kerusakan pada waktu penerimaan barang atau karena ukuran yang kurang pas (kebesaran/kekecilan), kami akan menggantinya dengan produk yang sejenis.
Barang yang di kembalikan harus memenuhi ketentuan sbb :
a.	Barang masih utuh belum pernah dipakai.
b.	Konfirmasi maksimal 1 (satu) hari setelah barang sampai.
c.	Hang Tag/label di barang masih utuh.
</p>
          <h3>7. Jasa pengiriman apa saja yang digunakan?</h3>
            <p>Kami akan menggunakan jasa pengiriman yang sudah menjadi rekanan kami yang sudah teruji kredibilitas kerjanya (JNE, Tiki, POS) tetapi kami tidak menutup kemungkinan jika pembeli menginginkan pengiriman melalui jasa pengiriman yang ditunjuk sendiri.</p>
          <h3>8. Apakah kiriman dijamin akan sampai di tempat pembeli pada waktu yang ditentukan?</h3>
            <p>Kami akan menggaransi 100% kiriman akan sampai ke tujuan tempat pembeli pada waktu yang ditentukan kecuali jika terjadi bencana alam yang tidak terduga, kesalahan pada ekspedisi pengiriman dan alamat tidak sesuai.</p>
          <h3>9. Berapa lama barang sampai?</h3>
           <p>Tergantung jenis layanan  pengiriman. Dalam kondisi normal lebih kurang 2-4 hari, paling lama 1 minggu, tergantung jarak.</p>
  </div>
    </div>


<div id="Home" class="tabcontent">
  <a href="subsport - Copy.html"></a>
</div>

<div style="padding-left:16px">
</div>

<div class="footer">
  <h3>Subsport Station</h3>
  <p>Universitas Pembangunan Nasional "Veteran" Jawa Timur</p>
</div>

<script>
function menu(evt, namamenu) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(namamenu).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>

</body>
</html>
