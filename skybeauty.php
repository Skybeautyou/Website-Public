<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

if($insert){
      $message[] = 'successfully!';
}else{
      $message[] = 'failed';
}
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <title>Welcome to Sky Beauty</title>
    <link rel="stylesheet" href="SkyBeauty.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   </head>

  <body>
    <nav>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@500&display=swap" rel="stylesheet">
    <div class="logo"> 
      <img src="./sblogo.png" alt="">
    </div>
     <ul>
      <li><a href="#beranda">BERANDA</a></li> 
      <li><a href="#produk">PRODUK</a></li> 
      <li><a href="#artikel">ARTIKEL</a></li> 
      <li><a href="#about">TENTANG KAMI</a></li> 
      <button class="popup-login">Login</button>
    </ul>
    </nav>
    
    
    <div class="wrapper">
      <span class="close"><i class="fa-solid fa-xmark"></i></span>
      <div class="form-box login">
          <h2>Login</h2>
          <form action="#" method="post">
              <div class="form-input">
                  <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                  <input type="email" name="email" required>
                  <label>Email</label>
              </div>
              <div class="form-input">
                  <span class="icon"><i class="fa-solid fa-lock"></i></span>
                  <input type="password" name="password" required>
                  <label>Password</label>
              </div>
              <div class="remember-forgot">
                  <label><input type="checkbox" name="remember">Remember me</label>
                  <a href="#">Forgot Password?</a>
              </div>
              <button type="submit" class="btnlog">Login</button>
              <div class="login-register">
                  <p>Don't have an account? <a href="#" class="register-link">Register</a></p>

              </div>
          </form>
      </div>
      <div class="form-box register">
          <h2>Registration</h2>
          <form action="#" method="post">
              <div class="form-input">
                  <span class="icon"><i class="fa-solid fa-user"></i></span>
                  <input type="text" name="username" required>
                  <label>Username</label>
              </div>
              <div class="form-input">
                  <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                  <input type="email" name="email" required>
                  <label>Email</label>
              </div>
              <div class="form-input">
                  <span class="icon"><i class="fa-solid fa-lock"></i></span>
                  <input type="password" name="password" required>
                  <label>Password</label>
              </div>
              <div class="remember-forgot">
                  <label><input type="checkbox">I agree to terms & conditions</label>
              </div>
              <button type="submit" class="btnlog">Register</button>
              <div class="login-register">
                  <p>Already have an account? <a href="#" class="login-link">Log In</a></p>

              </div>
          </form>
      </div>
  </div>
  <script type="text/javascript">
      const wrapper = document.querySelector('.wrapper');
      const loginlink = document.querySelector('.login-link');
      const registerlink = document.querySelector('.register-link');
      const btnpopup = document.querySelector('.popup-login');
      const iconclose = document.querySelector('.close');

      registerlink.addEventListener('click', ()=> {
          wrapper.classList.add('active');
      });
      loginlink.addEventListener('click', ()=> {
          wrapper.classList.remove('active');
      });
      btnpopup.addEventListener('click', ()=> {
          wrapper.classList.add('active-popup');
      });
      iconclose.addEventListener('click', ()=> {
          wrapper.classList.remove('active-popup');
      });
  </script>

  
    <section class="section" id="beranda">
      <div class="slider">
        <div class="slide">
         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
         <input type="radio" name="radio-btn" id="radio4">

         <div class="st first">
          <img src="b1.jpg" alt="">
         </div>
         <div class="st">
          <img src="b2.jpg" alt="">
         </div>
         <div class="st">
          <img src="b3.jpg" alt="">
         </div>
         <div class="st">
          <img src="b4.jpg" alt="">
         </div>

         <div class="nav-auto">
          <div class="a-b1"></div>
          <div class="a-b2"></div>
          <div class="a-b3"></div>
          <div class="a-b4"></div>
         </div>
        </div>
       
        <div class="nav-m">
          <label for="radio1" class="m-b1"></label>
          <label for="radio1" class="m-b2"></label>
          <label for="radio1" class="m-b3"></label>
          <label for="radio1" class="m-b4"></label>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      var counter=1;
      setInterval(function(){
            document.getElementById('radio' + counter).checked=true;
            counter++;
            if(counter > 4){
              counter = 1;
            }
      },5000);

    </script>

<div class="tjdul" id="about">
  <img src="sblogo.png" class="tjdul-img">
  <div class="tjdul-text">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <h1>About Us</h1>
  </div>
  </div>
    <div class="hero">
      <div class="content">
        <h1>"Healthy skin start with you.<br>Discover our revolutionary skincare line."</h1>
        <p>Di Sky Beauty, kami percaya bahwa untuk mencapai kulit sehat dan bercahaya adalah sebuah perjuangan, dan semua itu berawal dari Anda. Misi kami adalah memberi Anda produk perawatan kulit terbaik, dan saran untuk membantu Anda mendapatkan kulit yang lebih sehat dan bercahaya. Walaupun Anda baru memulai perjalanan perawatan kulit ataupun ingin membawanya ke Langkah selanjutnya. Kami siap membantu. Jelajahi koleksi produk kami hari ini dan biarkan kami menjadi panduan Anda menuju kulit yang sehat dan bercahaya.</p>
        <a href="#" class="btn ">Join Now</a>
      </div>
        <img src="content.png" class="feature-img">
    </div>

    <div class="tjdul" id="produk">
      <img src="sblogo.png" class="tjdul-img">
      <div class="tjdul-text">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       <h1>Perawatan Apa yang Kamu Inginkan?</h1>
      </div>
    </div>
    
    <div class="produk-box">
      <div class="produk-box">
        <div class="single-produk">
            <img src="produk/p1.jpeg">
            <div class="overlay">
              <a href="skyin.html">
                <div class="produk-desc">
                  <h2>Cleanser</h2>
                  <hr>
                </div>
                </a>
            </div>
        </div>
        <div class="single-produk">
            <img src="produk/p2.jpg">
            <div class="overlay">
            <div class="produk-desc">
            <h2>Toner</h2>
            <hr>
          </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p3.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Serum</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p4.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Lip Care</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p5.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Moisturizer</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p6.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Eye Care</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p7.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Mask</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p8.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Sunscreen</h2>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-produk">
          <img src="produk/p9.jpg">
          <div class="overlay"> 
          <div class="produk-desc">
          <h2>Bundle Package</h2>
          <hr>
        </div>
        </div>
      </div>
    </div>

    <div class="tjdul">
      <img src="sblogo.png" class="tjdul-img">
      <div class="tjdul-text">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       <h1>Kenali Jenis Kulitmu</h1>
      </div>
    </div>
    <div class="skin-box">
      <div class="skin-box">
        <div class="single-skin">
            <img src="skin/s1.jpg">
            <div class="overlayski">
            <div class="skin-desc">
              <h2>Kulit Wajah Normal</h2>
              <br>
              <p>Jenis kulit ini cenderung memiliki keseimbangan antara jumlah kandungan air dan minyak, sehingga tidak terlalu kering tapi juga tidak terlalu berminyak.</p>
              <hr>
            </div>
            </div>
        </div>
        <div class="single-skin">
            <img src="skin/s2.jpg">
            <div class="overlayski">
            <div class="skin-desc">
            <h2>Kulit Wajah Kering</h2>
            <br>
            <p>Kulit wajah kering umumnya terjadi akibat rendahnya tingkat kelembapan pada lapisan kulit terluar. Hal ini mengakibatkan kulit kering mudah pecah-pecah dan mengalami keretakan pada permukaan kulit.</p>
            <hr>
          </div>
        </div>
        </div>
        <div class="single-skin">
          <img src="skin/s3.jpg">
          <div class="overlayski"> 
          <div class="skin-desc">
          <h2>Kulit Wajah Berminyak</h2>
          <br>
          <p>Jenis kulit wajah berminyak cenderung licin dan mengkilap karena produksi minyak atau sebum yang berlebih. Sebum dihasilkan secara alami oleh kelenjar minyak atau kelenjar sebaceous di bawah permukaan kulit.</p>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-skin">
          <img src="skin/s4.jpg">
          <div class="overlayski"> 
          <div class="skin-desc">
          <h2>Kulit Wajah Sensitive</h2>
          <br>
          <p>Jenis kulit sensitif umumnya sangat peka dan mudah sekali mengalami alergi atau iritasi dan ruam sebagai reaksi terhadap faktor tertentu, seperti lingkungan, makanan, atau penggunaan produk kosmetik.</p>
          <hr>
        </div>
        </div>
        </div>
        <div class="single-skin">
          <img src="skin/s5.jpg">
          <div class="overlayski"> 
          <div class="skin-desc">
          <h2>Kulit Wajah Kombinasi</h2>
          <br>
          <p>Jenis kulit wajah kombinasi adalah perpaduan antara kulit berminyak dan kulit kering. Seseorang dengan jenis kulit wajah ini memiliki kulit berminyak di zona T, yaitu area dagu, hidung, dan dahi, serta kulit kering di area pipi.</p>
          <hr>
        </div>
        </div>
      </div>
    </div>


    <div class="tjdul" id="artikel">
      <img src="sblogo.png" class="tjdul-img">
      <div class="tjdul-text">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       <h1>Blog Beauty</h1>
      </div>
    </div>
      <div class="blog">
      <div class="box-container">
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>12 Macam Masalah Kulit Wajah yang Paling Sering Dialami</h3>
                  <p>Paparan sinar matahari, polusi, hingga penggunaan produk skincare yang tidak tepat bisa menimbulkan berbagai macam masalah kulit wajah.
                    Hal ini tentu dapat membuat seseorang menjadi menjadi tidak percaya diri. Lalu, apa saja masalah kulit pada wajah yang paling sering terjadi? Berikut jawabannya.</p>
                  <a href="https://www.beautyhaul.com/blog/12-macam-masalah-kulit-wajah-yang-paling-sering-dialami" class="bbtn"> read more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
          <br>
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>Kulit Kusam, Begini Ciri-Ciri, Penyebab, dan Cara Mengatasinya</h3>
                  <p>Kulit kusam menjadi masalah bagi banyak orang, baik yang memiliki kulit kering, berminyak, hingga kombinasi sekalipun. Guna mencerahkan kulit, Anda tentu perlu memahami ciri-ciri dan penyebab kulit kusam untuk membasmi masalah ini hingga ke akarnya.</p>
                  <a href="https://hellosehat.com/penyakit-kulit/perawatan-kulit/kulit-kusam/" class="bbtn"> read more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
          <br>
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>Skin Care untuk Kulit Kombinasi, Ketahui Rangkaian dan Bahan Terbaiknya</h3>
                  <p>Skin care untuk kulit kombinasi dapat menangani kulit berminyak sekaligus kulit kering. Selain cara atau urutan penggunaannya, kandungan skin care pun harus diperhatikan. Pasalnya, kesehatan kulit akan tetap terjaga jika skin care digunakan dengan tepat.</p>
                  <a href="https://www.alodokter.com/skin-care-untuk-kulit-kombinasi-ketahui-rangkaian-dan-bahan-terbaiknya" class="bbtn"> learn more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
          <br>
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>Sering Dikira Sama, Ini Beda Mata Panda dan Kantung Mata</h3>
                  <p>Anda mungkin sudah tidak asing dengan istilah mata panda dan kantung mata. Tahukah Anda bahwa ternyata keduanya berbeda?
                    Meskipun sekilas terlihat mirip, kantung mata dan mata panda memerlukan penanganan berbeda.</p>
                  <a href="https://hellosehat.com/penyakit-kulit/perawatan-kulit/mata-panda-dan-kantung-mata/" class="bbtn"> read more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
          <br>
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>Mengenal Milia atau Kista Milium di Wajah: Gejala hingga Pengobatan</h3>
                  <p>Jika Anda pernah mengalami atau melihat bintil-bintil berisi cairan berwarna putih atau kuning yang muncul di wajah biasanya terjadi pada pipi dan di bawah kelopak mata, itu bukanlah jerawat atau pun komedo. Orang sering sekali keliru dengan kondisi ini.</p>
                  <a href="https://tirto.id/mengenal-milia-atau-kista-milium-di-wajah-gejala-hingga-pengobatan-efwk" class="bbtn"> read more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
          <br>
          <div class="box">
              <div class="bcontent">
                  <div class="icon">
                      <a href="#"> <i class="fas fa-calendar"></i> 19 January, 2024 </a>
                      <a href="#"> <i class="fas fa-user"></i> by HAF </a>
                  </div>
                  <h3>4 Jenis Flek di Wajah dan Cara Menghilangkannya</h3>
                  <p>Flek adalah bercak berwarna kecokelatan atau kehitaman yang dapat muncul di kulit wajah atau daerah lain pada tubuh karena meningkatnya produksi melanin terutama setelah terpapar sinar matahari atau sinar ultraviolet (UV).</p>
                  <a href="https://health.kompas.com/read/2020/09/23/103100268/4-jenis-flek-di-wajah-dan-cara-menghilangkannya" class="bbtn"> read more <span class="fas fa-chevron-right"></span> </a>
              </div>
          </div>
      </div>
    </div>

    <div class="tjdul">
      <img src="sblogo.png" class="tjdul-img">
      <div class="tjdul-text">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       <h1>Di Sponsori Oleh :</h1>
      </div>
    </div>
   
    <div class="brand-box">
      <div class="single-brand">
        <img src="brand/br1.jpg">
      </div>
      <div class="single-brand">
          <img src="brand/br2.jpg">
      </div>
      <div class="single-brand">
          <img src="brand/br3.jpg">
      </div>
      <div class="single-brand">
          <img src="brand/br4.jpg">
      </div>
      <div class="single-brand">
          <img src="brand/br5.jpg">
      </div>
      <div class="single-brand">
        <img src="brand/br6.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br7.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br8.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br9.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br10.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br11.jpg">
    </div>
    <div class="single-brand">
      <img src="brand/br12.jpg">
    </div>
  </div>

    <footer>
      <div class="footer-content">
        <h3>SKY BEAUTY</h3>
        <P>"Healthy skin start with you.<br>Discover our revolutionary skincare line."</P>
        <br>
        <div class ="socials">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-whatsapp"></i></a>
      </div>
      <div class="footerNav">
        <ul>
          <li><a href="">Beranda</a></li>
          <li><a href="">Produk</a></li>
          <li><a href="">Artikel</a></li>
          <li><a href="">Tentang Kami</a></li>
        </ul>
      </div>
      <br>
      <div class="footer-bottom">
        <p>copyright &copy;2020. designed by <span>SkyBeauty</span></p>
      </div>
      </div>
    </footer>

  </body>
</html>
