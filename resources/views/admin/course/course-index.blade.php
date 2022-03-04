@extends('admin.index')
@section('content')

<style>
    .create {
        margin-bottom: 20px;
    }
    .create a button {
        font-size: 16px;
        border: 0px;
        background: #36ccba !important;
        text-align: center;
    }
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">courses</h1>
    </div>

    

    <!-- Content Row -->
    <div class="row">
        
        <div class="col-xl-12">
            <div class="create">
                <a href="{{route('course.create')}}" enctype="multipart/form-data">
                    <button type="button" class="btn btn-info btn-sm">Add course</button>
        
                </a>
            </div>
        
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
        
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th class="line" scope="col">Title</th>
                        <th class="line" scope="col">Description</th>
                        <th class="line" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-success">
        
                    @foreach ($course as $row)
                    <tr>
                        <td>{{str_limit($row->title,30)}}</td>
                        <td>{{str_limit($row->description,30)}}</td>
                        <td>
                            <a class=" btn-bg-dark" href="{{route('course.show', [$row->id,$row->slug])}}"> <button type="button" class="btn btn-info btn-sm">View</button>
                            </a>
                            <a class=" btn-bg-dark" href="{{route('course.edit',[$row->id])}}"> <button type="button" class="btn btn-info btn-sm">Edit</button>
                            </a>
                            <a href="{{route('course.delete',[$row->id])}}">
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$course->links()}}
        </div>
        
    </div>

</div>

@endsection