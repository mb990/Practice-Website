@extends ('layout.app')

@section ('title')
About Us
@endsection 

@section ('subtitle')
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Corporis repellendus at adipisci nostrum consequatur eius, quo pariatur hic sint culpa ad voluptate 
iusto impedit minus doloremque recusandae perferendis? Consequuntur, fugit?
@endsection 

@section ('content')
<!-- ABOUT SECTION -->
<section id="about" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>What We Do</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, fuga eaque. Amet, assumenda aliquid tempore dolorum
            error eveniet doloribus sed repellat quod, dolores fuga ipsam soluta. Aliquam accusantium pariatur aut sint deleniti
            laborum ducimus voluptatem? Architecto cumque quod suscipit officiis soluta, voluptate dicta blanditiis similique
            praesentium temporibus adipisci debitis labore!</p>
        </div>
        <div class="col-md-6">
          <img src="https://source.unsplash.com/random/700x700/?technology" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
        </div>
      </div>
    </div>
  </section>

  <!-- ICON BOXES -->
  <section id="icon-boxes" class="p-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-building fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white text-center">
            <div class="card-body">
              <i class="fas fa-bullhorn fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-comments fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card bg-dark text-white text-center">
            <div class="card-body">
              <i class="fas fa-box fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-credit-card fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white text-center">
            <div class="card-body">
              <i class="fas fa-coffee fa-3x"></i>
              <h3>Sample Heading</h3>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, adipisci.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" class="p-4 bg-dark text-white">
    <div class="container">
      <h2 class="text-center">testimonials</h2>
      <div class="row text-center">
        <div class="col">
          <div class="slider">
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class="blockquote-footer">John Doe From
                  <cite title="Company 1">Company 1</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class="blockquote-footer">Sam Smith From
                  <cite title="Company 2">Company 2</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, quaerat.
                </p>
                <footer class="blockquote-footer">Meghan Williams From
                  <cite title="Company 3">Company 3</cite>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

  {{-- <script>

    $('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });
  </script> --}}
@endsection