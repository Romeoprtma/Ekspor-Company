    @extends('layouts.main')

    @section('home')   
      <!-- START SCOPE DEVELOPMENT CATEGORIES -->
      <section class="development-categories bg-gray">
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-black bdr-btm-gray">
                <span class="bg-section">Selamat datang di Suka Ekspor</span>
              </div>
              <div class="desc color-black">
                Sebuah Inovasi dalam Ekspor Kami, di Suka Ekspor, telah berkomitmen untuk menjadi pelopor dalam industri ekspor. Dengan pengalaman lebih dari 10 tahun, kami telah berhasil membangun jejak yang solid dalam menyediakan solusi ekspor yang inovatif dan handal.
              </div>
            </div>
          </div>

          <div class="col-md-15">
            <div class="row">
              <div class="box-categories">
                <div class="col-md-4">
                  <div class="list-categories">
                    {{-- <div class="box-icon">
                      <div class="icon bg-red-light">
                        <i class="fa fa-desktop"></i>
                      </div>
                    </div> --}}
                    <div class="title color-black bdr-btm-gray">
                      <span class="bg-section">Visi</span>
                    </div>
                    <div class="description">
                      <p>
                        Visi kami adalah menjadi pusat utama bagi keanekaragaman produk UMKM lokal yang mendunia. Kami bermimpi tentang sebuah dunia di mana setiap UMKM memiliki kesempatan untuk bersinar dan produk lokal berkualitas tinggi dapat diakses oleh pelanggan di seluruh penjuru dunia.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="title color-black bdr-btm-gray">
                      <span class="bg-section">Misi</span>
                    </div>
                    <div class="description">
                      <p>
                        Misi kami adalah menciptakan jembatan global yang menghubungkan dan memajukan Usaha Mikro, Kecil, dan Menengah (UMKM) dengan pasar internasional. Melalui dedikasi kami terhadap pertumbuhan ekonomi lokal dan keberlanjutan, kami bertujuan untuk merangsang perkembangan UMKM dan mengangkat potensi produk lokal ke panggung internasional.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="list-categories">
                    <div class="title color-black bdr-btm-gray">
                      <span class="bg-section">Tujuan</span>
                    </div>
                    <div class="description">
                      <p>
                        kami menetapkan tujuan yang ambisius dan inspiratif yang mencerminkan visi dan misi kami dalam membawa dampak positif bagi UMKM lokal dan pasar ekspor.
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE DEVELOPMENT CATEGORIES -->

      <!-- START SCOPE INTRODUCE CONTACT US -->
      <section class="parallax-apecsa bg-img-2  introduce-wrapper contact-us" id="ContactUs">
        <div class="bg-overlay-full"></div>
        <div class="container">
          <div class="col-md-12">
            <div class="box-title-desc">
              <div class="title color-white">
                <span>Contact Us</span>
              </div>
              <div class="desc color-white">
                Kami sangat menghargai setiap bentuk pertanyaan, umpan balik, atau kerjasama potensial dari Anda. Kami percaya bahwa komunikasi yang terbuka dan transparan adalah kunci keberhasilan, dan kami selalu siap mendengarkan dan memberikan dukungan yang Anda butuhkan.
              </div>
              <a href="" class="btn btn-apecsa-red btn-lg">
                <i class="fa fa-envelope"></i>
                Hubungi Kami
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- END SCOPE INTRODUCE CONTACT US -->

      <!-- START SCOPE FOOTER -->
      <footer class="footer-wrapper diagonal-shadow">
        <div class="container">
          <div class="col-md-12">
            <div class="box-footer">
              <div class="image w-4">
                <img src="assets2/images/logo/logo_ekspor.png" alt="">
              </div>
              <div class="social-media">
                <a href="http://facebook.com" class="btn btn-default btn-social-media facebook">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="http://twitter.com" class="btn btn-default btn-social-media twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="http://linkedin.com" class="btn btn-default btn-social-media linkedin">
                  <i class="fa fa-linkedin"></i>
                </a>
                <a href="http://instagram.com" class="btn btn-default btn-social-media instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
              <div class="corpyright">
                <span>&copy; Corpytight 2016 Suka Ekspor</span><br>
                <span>Anything Is Possible</span>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- END SCOPE FOOTER -->

@endsection