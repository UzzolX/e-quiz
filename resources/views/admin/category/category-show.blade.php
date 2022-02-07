@extends('admin.index')
@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('blogs.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/blogs/{{ $blog->image }}" class="img-thumbnail" />
 <h3>Title - {{ $blog->title }} </h3>
 <h3>Content - {{ $blog->content }}</h3>
</div>
@endsection