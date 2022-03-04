@extends('admin.index')
@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('courseList.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/course/{{ $course->image }}" class="img-thumbnail" />
 <h3>Title - {{ $course->title }} </h3>
 <h3>Content - {{ $course->description }}</h3>
</div>
@endsection