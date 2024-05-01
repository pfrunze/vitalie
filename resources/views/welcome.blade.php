<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    .bg-red {
    background-color: #fcb3ae; /* Yellow */
}
</style>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="/css/style.css" rel="stylesheet">

</head>
<body>
    <header class="bg-light">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <div class="logo">Your Logo</div>
            <div class="language-selector">
                <a class="mx-2" href="{{ route('language.change', 'ro') }}">RO</a>
                <a class="mx-2" href="{{ route('language.change', 'ru') }}">RU</a>
            </div>
        </div>
    </header>
    <section id="hero">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <div>
              <h1>We design digital products that help grow businesses</h1>
              <h2>We are team of talented designers making websites with Bootstrap</h2>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="/images/header.jpeg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  
    </section>
    <main>
        <div class="row justify-content-center">
            <div class="col-md-8">

                  <section id="about" class="about">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6" data-aos="zoom-in">
                          <img src="/images/section.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                          <div class="content pt-4 pt-lg-0">
                            <h3>@lang('info.section1.title')</h3>
                            <p class="fst-italic">
                                @lang('info.section1.info')
                            </p>
                          </div>
                        </div>
                      </div>
              
                    </div>
                </section>
                <section id="about" class="about">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6" data-aos="zoom-in">
                          <img src="/images/section1.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                          <div class="content pt-4 pt-lg-0">
                            <h3>@lang('info.section2.title')</h3>
                            <p class="fst-italic">
                                @lang('info.section2.info')
                            </p>
                            <p class="fst-italic">
                              @lang('info.section2.info2')
                            </p>
                            <ul>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info3')</li>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info4')</li>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info5')</li>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info6')</li>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info7')</li>
                              <li><i class="bi bi-check-circle"></i> @lang('info.section2.info8')</li>
                            </ul>
                            <p>
                              @lang('info.section2.info9')
                            </p>
                            <p>
                              @lang('info.section2.info10')
                            </p>
                          </div>
                        </div>
                      </div>
              
                    </div>
                </section>
                
                <section id="about" class="about">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6" data-aos="zoom-in">
                        <img src="/images/section3.jpeg" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                          <h3>@lang('info.section3.title')</h3>
                          <p class="fst-italic">
                              @lang('info.section3.info')
                          </p>
                          <p class="fst-italic">
                            @lang('info.section3.info2')
                          </p>
                          <ul>
                            <li><i class="bi bi-check-circle"></i> @lang('info.section3.info3')</li>
                            <li><i class="bi bi-check-circle"></i> @lang('info.section3.info4')</li>
                          </ul>
                          <p>
                            @lang('info.section3.info5')
                          </p>
                        </div>
                      </div>
                    </div>
            
                  </div>
              </section>

              <section id="about" class="about">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                      <img src="/images/section4.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                      <div class="content pt-4 pt-lg-0">
                        <h3>@lang('info.section4.title')</h3>
                        <p class="fst-italic">
                            @lang('info.section4.info')
                        </p>
                        <p class="fst-italic">
                          @lang('info.section4.info2')
                        </p>
                        <ul>
                          <li><i class="bi bi-check-circle"></i> @lang('info.section4.info3')</li>
                          <li><i class="bi bi-check-circle"></i> @lang('info.section4.info4')</li>
                          <li><i class="bi bi-check-circle"></i> @lang('info.section4.info5')</li>
                        </ul>
                        <p>
                          @lang('info.section2.info9')
                        </p>
                      </div>
                    </div>
                  </div>
          
                </div>
            </section>

            <section id="about" class="about">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6" data-aos="zoom-in">
                    <img src="/images/section5.jpeg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0">
                      <h3>@lang('info.section5.title')</h3>
                      {{-- <p class="fst-italic">
                          @lang('info.section5.info')
                      </p> --}}
                      <p class="fst-italic">
                        @lang('info.section5.info2')
                      </p>
                      <ul>
                        <li><i class="bi bi-check-circle"></i> @lang('info.section5.info3')</li>
                        <li><i class="bi bi-check-circle"></i> @lang('info.section5.info4')</li>
                      </ul>
                      <p>
                        @lang('info.section5.info5')
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </section>
          
          <section id="about" class="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6" data-aos="zoom-in">
                  <img src="/images/section6.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0">
                    <h3>@lang('info.section6.title')</h3>
                    <p class="fst-italic">
                        @lang('info.section6.info')
                    </p>
                    <p class="fst-italic">
                      @lang('info.section6.info2')
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> @lang('info.section6.info3')</li>
                      <li><i class="bi bi-check-circle"></i> @lang('info.section6.info4')</li>
                    </ul>
                    <p>
                      @lang('info.section6.info5')
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-6" data-aos="zoom-in">
                  <img src="/images/section7.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                  <div class="content pt-4 pt-lg-0">
                    <h3>@lang('info.section7.title')</h3>
                    <p class="fst-italic">
                        @lang('info.section7.info')
                    </p>
                    {{-- <p class="fst-italic">
                      @lang('info.section6.info2')
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> @lang('info.section6.info3')</li>
                      <li><i class="bi bi-check-circle"></i> @lang('info.section6.info4')</li>
                    </ul> --}}
                    <p>
                      @lang('info.section6.info5')
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section id="about" class="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" data-aos="zoom-in">
                <img src="/images/section8.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0">
                  <h3>@lang('info.section8.title')</h3>
                  <p class="fst-italic">
                      @lang('info.section8.info')
                  </p>
                  <p class="fst-italic">
                    @lang('info.section8.info2')
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> @lang('info.section8.info3')</li>
                    <li><i class="bi bi-check-circle"></i> @lang('info.section8.info4')</li>
                    <li><i class="bi bi-check-circle"></i> @lang('info.section8.info5')</li>
                  </ul>
                  <p>
                    @lang('info.section6.info5')
                  </p>
                </div>
              </div>
            </div>
          </div>
      </section>

      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
              <img src="/images/section9.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
              <div class="content pt-4 pt-lg-0">
                <h3>@lang('info.section9.title')</h3>
                <p class="fst-italic">
                    @lang('info.section9.info')
                </p>
                <p class="fst-italic">
                  @lang('info.section9.info2')
                </p>
                <ul>
                  <li><i class="bi bi-check-circle"></i> @lang('info.section9.info3')</li>
                  <li><i class="bi bi-check-circle"></i> @lang('info.section9.info4')</li>
                  <li><i class="bi bi-check-circle"></i> @lang('info.section9.info5')</li>
                </ul>
                {{-- <p>
                  @lang('info.section6.info5')
                </p> --}}
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="/images/section10.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>@lang('info.section10.title')</h3>
              <p class="fst-italic">
                  @lang('info.section10.info')
              </p>
              {{-- <p class="fst-italic">
                @lang('info.section1.info2')
              </p> --}}
              <ul>
                <li><i class="bi bi-check-circle"></i> @lang('info.section10.info3')</li>
                <li><i class="bi bi-check-circle"></i> @lang('info.section10.info4')</li>
                <li><i class="bi bi-check-circle"></i> @lang('info.section10.info5')</li>
              </ul>
              {{-- <p>
                @lang('info.section6.info5')
              </p> --}}
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" data-aos="zoom-in">
          <img src="/images/section11.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0">
            <h3>@lang('info.section11.title')</h3>
            <p class="fst-italic">
                @lang('info.section11.info')
            </p>
            <p class="fst-italic">
              @lang('info.section11.info2')
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> @lang('info.section11.info3')</li>
              <li><i class="bi bi-check-circle"></i> @lang('info.section11.info4')</li>
              {{-- <li><i class="bi bi-check-circle"></i> @lang('info.section11.info5')</li> --}}
            </ul>
            {{-- <p>
              @lang('info.section6.info5')
            </p> --}}
          </div>
        </div>
      </div>
    </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="/images/section12.webp" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
          <h3>@lang('info.section12.title')</h3>
          <p class="fst-italic">
              @lang('info.section12.info')
          </p>
          <p class="fst-italic">
            @lang('info.section12.info2')
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> @lang('info.section12.info3')</li>
            <li><i class="bi bi-check-circle"></i> @lang('info.section12.info4')</li>
            {{-- <li><i class="bi bi-check-circle"></i> @lang('info.section11.info5')</li> --}}
          </ul>
          {{-- <p>
            @lang('info.section6.info5')
          </p> --}}
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="/images/section13.webp" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
          <h3>@lang('info.section13.title')</h3>
          <p class="fst-italic">
              @lang('info.section13.info')
          </p>
          <p class="fst-italic">
            @lang('info.section13.info2')
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> @lang('info.section13.info3')</li>
            <li><i class="bi bi-check-circle"></i> @lang('info.section13.info4')</li>
            <li><i class="bi bi-check-circle"></i> @lang('info.section13.info5')</li>
          </ul>
          {{-- <p>
            @lang('info.section6.info5')
          </p> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6" data-aos="zoom-in">
        <img src="/images/section14.jpeg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0">
          <h3>@lang('info.section14.title')</h3>
          {{-- <p class="fst-italic">
              @lang('info.section14.info')
          </p>
          <p class="fst-italic">
            @lang('info.section14.info2')
          </p> --}}
          <ul>
            <li><i class="bi bi-check-circle"></i> @lang('info.section14.info3')</li>
            <li><i class="bi bi-check-circle"></i> @lang('info.section14.info4')</li>
            <li><i class="bi bi-check-circle"></i> @lang('info.section14.info5')</li>
          </ul>
          {{-- <p>
            @lang('info.section6.info5')
          </p> --}}
        </div>
      </div>
    </div>
  </div>
</section>
            </div>
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} Folieagropack
    </footer>
    <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/js/main.js"></script>

</body>
</html>
