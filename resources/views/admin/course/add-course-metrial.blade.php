@extends('admin.index')
@section('content')

<div class="jumbotron text-center">
 <div align="right">
     <a href="javascript:" class="btn btn-primary add_course_metrial">Add Course Metrial</a>
  <a href="{{ route('courseList.index') }}" class="btn btn-default">Back</a>
 </div>

 <h3>Title - {{ $course->title }} </h3>



</div>
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>sl</th>
            <th>Topic</th>
            <th>Thumbnails</th>
            <th>Video</th>
            <th>Action</th>
        </tr>
        @foreach ($courseMetrials as $k =>  $metrial)
            <tr>
                <td>{{ ++$k }}</td>
                <td>{{ $metrial->topic }}</td>
                <td>Thumbnails</td>
                <td><iframe width="150" height="150" src="https://www.youtube.com/embed/{{ $metrial->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                <td><a href="javascript:" data-id="{{ $metrial->id }}" class="btn btn-warning edit_button">Edit</a></td>
            </tr>
        @endforeach

     </table>
</div>


  <!-- Modal -->
<div class="modal fade" id="add_metrial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content ">
            <form method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Course Metrial Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <input type="hidden" class="id" name="id">

                    <div class="form-group">
                        <label for="topic">Topic</label>
                        <input type="text" name="topic" class="form-control topic" id="topic" placeholder="Enter topic">
                    </div>
                    <div class="form-group">
                        <label for="video_link">Video Link</label>
                        <input type="text" name="video_link" class="form-control video_link" id="video_link" placeholder="Video Link">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="1"> Active</option>
                            <option value="0"> Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control description" cols="30" rows="5" placeholder="Description"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="thumbnails">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnails" class="custom-file-input" id="thumbnails">
                                <label class="custom-file-label" for="thumbnails">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input type" name="type" value="1" checked id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Free Course</label>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        // Add Metrail Course
        $('.add_course_metrial').on('click', function(){
            $('#add_metrial').modal('show');
        })

        // Edit function goes here

        $(document).on('click', '.edit_button', function(){

            var url = "{{ url('/dashboard/metrials/course') }}/"+$(this).data('id');
            $.ajax({
                mehtod: "get",
                url: url,
                success: function(res){
                    console.table(res);
                    $('.id').val(res.id);
                    $('.topic').val(res.topic);
                    $('.video_link').val(res.link);
                    $('.description').val(res.description);
                    if(res.type == 1 ){
                        $('.type').attr('checked', true);
                    }else{
                        $('.type').attr('checked', false);
                    }
                    $('.status option').find(res.status).attr('selected', true);



                    $('#add_metrial').modal('show');
                },
                error:function(xhr){
                    console.log(xhr);
                }

            });
        })
    </script>
@endpush

@endsection
