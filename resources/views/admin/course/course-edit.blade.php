@extends('admin.index')
@section('content')
<style>
    input.blogupimage.form-control {
	padding: 22px 15px;
	background: #36ccba;
	height: 70px;
	cursor: pointer;
}
</style>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Add New course
        </h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{route('course.update',[$course->id])}}" enctype="multipart/form-data"  method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>course Title</label>
                <input type="text" name="title"  class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                    value="{{$course->title}}" placeholder="title" />
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">course Description<span class="text-danger">*</span></label>
                <textarea name="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                     rows="10">{{$course->description}}</textarea>
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label >Category</label>
                <div class="select">
                <select name="category" required>
                    <option value="" disabled selected>Select category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{ old('category') === 'html' ? 'selected' : null }}>{{$category->title}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group mb-1">
                <label for="image">course image &nbsp;<span class="text-danger">(image size = 1920 x 1080 )</span></label>
                <input type="file" title="click to image upload" name="image" class="blogupimage form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                    value="{{ old('image') }}" /> </br>
                <img src="{{asset('images/course/'.$course->image)}}" width="70" height="60"> 
                @if ($errors->has('image'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
