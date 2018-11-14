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
        <h1>Term of conditional</h1>
          <h3>1. Keamanan dan Kata Sandi</h3>
            <p>Anda sepenuhnya bertanggung jawab untuk menjaga kerahasiaan kata sandi dan akun Anda dan untuk setiap dan semua pernyataan yang dibuat dan bertindak atau kelalaian yang terjadi melalui penggunaan kata sandi dan akun Anda. Oleh karena itu, Anda harus mengambil langkah-langkah untuk memastikan bahwa orang lain tidak mendapatkan akses ke kata sandi dan akun Anda. Personil kami tidak akan pernah meminta kata sandi Anda. Anda tidak boleh mentransfer atau membagi akun Anda dengan siapa pun, dan kami berhak untuk segera mengakhiri akun Anda jika Anda mentransfer atau membagikan akun Anda.</p>
          <h3>2. Partisipasi dalam Promosi</h3>
            <p>Dari waktu ke waktu, situs ini dapat mencakup iklan yang ditawarkan oleh pihak ketiga. Anda dapat melakukan korespondensi dengan atau berpartisipasi dalam promosi dari pengiklan yang menunjukkan produk mereka di situs ini. Korespondensi atau promosi semacam itu, termasuk pengiriman dan pembayaran untuk barang dan jasa, dan persyaratan, ketentuan, jaminan, atau pernyataan lain yang terkait dengan korespondensi atau promosi semacam itu, semata-mata antara Anda dan pengiklan. Kami menganggap tidak ada kewajiban, kewajiban atau tanggung jawab untuk setiap bagian dari korespondensi atau promosi semacam itu.</p>
          <h3>3. Deskripsi Layanan</h3>
            <p>Kami membuat berbagai layanan yang tersedia di situs ini termasuk, namun tidak terbatas pada, Desain Web, Pengembangan Web, Pengembangan E-Commerce, Desain Grafis, Desain Logo, Pemasaran Media Sosial, Optimasi Mesin Pencari, Desain Grafis Facebook, Identitas Merek, Cetak Grafis, Desain Logo, Desain Minisite, Grafik Media Sosial., Dan layanan sejenis lainnya. Anda bertanggung jawab untuk menyediakan, dengan biaya sendiri, semua peralatan yang diperlukan untuk menggunakan layanan, termasuk komputer, modem, dan akses Internet (termasuk pembayaran semua biaya yang terkait dengan akses tersebut). Kami berhak satu-satunya untuk memodifikasi atau menghentikan situs, termasuk salah satu fitur situs, kapan saja dengan atau tanpa pemberitahuan kepada Anda. Kami tidak akan bertanggung jawab kepada Anda atau pihak ketiga mana pun kami harus melaksanakan hak tersebut. Setiap fitur baru yang menambah atau meningkatkan layanan yang berlaku pada situs ini juga harus tunduk pada Ketentuan Penggunaan ini.
            </p>
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
