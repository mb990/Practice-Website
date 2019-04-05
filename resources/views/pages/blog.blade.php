@extends ('layout.app')

@section ('title')
Read and post on our Blog
@endsection 

@section ('subtitle')
This is blog subtitle.
@endsection 

{{-- @foreach ($posts as $post)
<section id="blog" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card-columns">
          <div class="card blogcard">
            <div class="card-body">
              <h4 class="card-title">{{$post->title}}</h4>
              <small class="text-muted">{{$post->user_id}}</small>
              <hr>
              <p class="card-text">{{$post->content}}</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
</section>
@endforeach --}}

@section('content')

  @if (count($posts))

  @foreach ($posts as $post)
  <div class="container">
    <div class="card blogcard">
      <div class="card-body">
        <h4 class="card-title"><a href="/blog/posts/{{$post->id}}">{{$post->title}}</a></h4>
        <small class="text-muted">Written by {{$post->user['name']}}</small>
        <hr>
        <p class="card-text">{{$post->description}}
        </p>
      </div>
    </div>
  </div>
  @endforeach 
  
  @else 

  <p class="text-center">No New Posts.</p>

  @endif
  <div class="clr"></div>
  <div class="container"><ul class="pagination">
      {{ $posts->links() }}                    
   </ul>
  </div>
  
 {{-- <!-- BLOG SECTION -->
 <section id="blog" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-columns">
            <div class="card">
              <img src="https://source.unsplash.com/random/300x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post One</h4>
                <small class="text-muted">Written by Jeff on 05/20</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class="card">
              <img src="https://source.unsplash.com/random/301x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post Two</h4>
                <small class="text-muted">Written by Karen on 05/22</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3 bg-danger text-white">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-white">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>

            <div class="card">
              <img src="https://source.unsplash.com/random/302x200" alt="" class="img-fluid card-img-top">
              <div class="card-body">
                <h4 class="card-title">Blog Post Three</h4>
                <small class="text-muted">Written by Harry on 05/23</small>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facilis, sequi excepturi, quisquam, dignissimos
                  molestiae dicta dolore dolores quas vel sunt placeat tempora expedita suscipit. Magni vel iusto mollitia
                  exercitationem.
                </p>
              </div>
            </div>

            <div class="card p-3">
              <blockquote class="card-blockquote card-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident amet tenetur vel quam atque est?</p>
                <footer class="blockquote-footer">
                  <small class="text-muted">Someone Famous in
                    <cite title="Source Title">Source Title</cite>
                  </small>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

@endsection