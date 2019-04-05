<!-- PAGE HEADER -->
@include('inc.header')

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Glozzom') }}</title>
<header id="page-header">
    <div class="container">
      @include ('inc.messages')
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>@yield ('title')</h1>
          <p>@yield ('subtitle')</p>
        </div>
      </div>
    </div>
  </header>
@yield ('content')

@include ('inc.footer')