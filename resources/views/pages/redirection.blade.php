@extends ('layout.app')

@section ('content')
<p class="lead text-center">You are logged in! You will be redirected to your home page in 5 seconds.</p>
<script>setTimeout(function () {
        window.location.href= '/home'; // the redirect goes here
     
     },5000);</script>
@endsection