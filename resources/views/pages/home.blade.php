@extends('layouts.app')
@section('content')
<main role="main" class="inner cover">
        <h1 class="cover-heading">Welcome to my page.</h1>
        <p class="lead">No, Kiril isn't a relative of mine.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Download my CV</a>
        </p>
      </main>
      <div id="splash"  class="flex-container" style ="background: steelblue ; display: none"  >
       <div id="flex-item" >
         <h1 style ="color: ghostwhite;  font-weight: italic; font-family: Great Vibes, Helvetica, sans-serif; margin-top: 15rem">"A Kiril sho ti e?"<h1>
                <h2 style ="color: ghostwhite;  font-weight:italic ; font-family: Arial, Helvetica, sans-serif; margin-top: 2rem">-Everyone.<h2>
                        <h5 style ="color: ghostwhite;  font-weight:italic ; font-family: Arial, Helvetica, sans-serif; margin-top: 2rem">1996 - <h5>
        </div>
   </div>
@endsection
<script src="{{ asset('js/extra.js')}}" defer></script>