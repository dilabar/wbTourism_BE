@extends('layouts.myapp')
@section('content')
    <div class="container pt-100">
        <div class="section-title">
            <h2>Image Gallery</h2>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="media-gallery" id="imageList">
                  
                </div>
            </div>
            <div class="col-md-3">
                <ul>
                    @foreach ($gallery_list_db as $gallery_list)
                    <a href="javascript:void(0)" id="gallery_category_id" title="{{ $gallery_list->id }}"><li >{{ $gallery_list->name }}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $(document).on("click", "#gallery_category_id", function(){
        var gallery_category_id = $(this).attr('title')
        $.ajax({
            url:"{{ url('/gallery/image_gallery_byId') }}",
            type:"GET",
            cache:false,
            data:{
                'id': $(this).attr('title'),
                _token: '{{ csrf_token() }}'
            },
            dataType:'json',
            success:function(data){
                $('#imageList').html(data.html);
                console.log(data);
            }
        });
        
 
        // console.log(gallery_category_id);
    })
})
</script>
@endsection
