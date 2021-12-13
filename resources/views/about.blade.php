@extends('layout.main')

@section('navbarku')
    
@foreach ($posts as $post)
<article class="article" style="margin-bottom: 30px">
<h2>{{ $post["title"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<p>{{ $post["body"] }}</p>    
@endforeach
</article>  
@endsection
