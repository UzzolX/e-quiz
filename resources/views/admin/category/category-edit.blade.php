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
            Add New category
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
    <form action="{{route('category.update',[$category->id])}}" enctype="multipart/form-data"  method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Category Title</label>
                <input type="text" name="title"  class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                    value="{{$category->title}}" placeholder="title" />
                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="content">Category Content<span class="text-danger">*</span></label>
                <textarea name="content"  class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
                     rows="10">{{$category->content}}</textarea>
                @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('content') }}</strong>
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
