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
    <h1>Payment Options</h1>
      <h3>1. System Online Payment Point atau (SOPP)</h3>
        <p>Payment Point Konvensional atau dapat diartikan (SOPP) adalah salah satu mekanisme Mode pembayaran tagihan dengan cara konvensional dimana cara proses pelimpahan dana pembayaran ke rekening recieved PLN dilakukan dengan cara melakukan penyetoran dana melalui Bank secara cash tunai</p>
      <h3>2. Payment Point Online Bank</h3>
        <p>Adalah salah satu system dimana mekanisme pembayaran tagihan yang sangat lebih aman, mudah dan murah serta proses yang tidak rumit. Payment Point Online Bank Atua singkat PPOB ini merupakan layanan pembayaran tagihan secara online real time 24 jam sehingga proses rekonsiliasi data dan dana bisa lebih cepat dan akurat serta aman.
PPOB yang diselenggarakan di perusahaan-perusahaan seperti PLN, PDAM, Telkom, dll yang  bekerjasama dengan hampir semua perbankan. Pelanggan konsumen dapat membayar di mana saja dan kapan saja dan dengan cara apa saja melalui Delivery Channel atau sistem Aplikasi yang dikembangkan perusahaan penyelenggara PPOB dan Delivery channel seperti (ATM, Teller, Autodebit, Internet Banking dll.
Berbeda dengan Semi Online Payment Point Atau singkat SOPP, yang melakukan penyetoran dana ke rekening receipt yang bersangkutan dengan membawa uang cash tunai secara langsung langsung, SOPP ada delay waktu dalam proses rekonsiliasi data dan dana sehingga pada tingkat keamanan nya tidak seakurasi PPOB.
PPOB tidak hanya cuma lebih memudahkan layanan bagi pelanggan yang menggunakannya, namun juga memiliki multiflier effect yang luar biasa bagi masyarakat Indonesia, dengan membuka peluang wirausaha baru dan pemberdayaan ekonomi kecil menengah. Kedepannya PPOB berlomba-lomba menjadi yang terlengkap fitur pelayanannya, produk dan termudah dalam pengoperasiannya termasuk menerapkan sistem aplikasi Platfrom pada Smartphone.
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
