@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Blog' }} @endsection
@section('page-title') Blog @endsection
@section('body')

<section class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header"><h4 class="card-title">edit {{ $blog->name }}</h4></div>
          <div class="card-content">
            <div class="card-body">
                  <div class="form-group">
                      <label >Name </label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $blog->name }}" required>
                  </div>
                  <div class="form-group">
                      <label>title </label>
                       <input type="text" id="token" name="token" value="{{ $blog->token }}" style="display: none;">
                      <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
                  </div>
                  <div class="form-group">
                      <label>select Categories</label>
                      <select class="form-select custom-select" id="category_id" name="category_id"  required="true" aria-required="true">
                          @isset($category)
                          @foreach ($category as $ca  )
                          <option value="{{ $ca->id }}" @if ($ca->id == $blog->category_id) selected @endif >{{ $ca->name }}</option>
                          @endforeach
                          @endisset
                      </select>
                  </div>

                  <form id="uploadForm" enctype="multipart/form-data">
                      <!-- إضافة حقل تحميل الصور هنا -->
                      <input type="file" name="image[]" id="image" multiple accept=".jpg, .jpeg, .png, .gif, .mp4, .avi, .mov, .wmv">
                      <input type="text" id="token_image" name="token_image" value="{{ $blog->token }}" style="display: none">
                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary Upload-image ">
                          <i class="ft-file "></i>
                          <i class="fa fa-circle-o-notch spinner loder-image" ></i> Upload Image </button>
              </form>
            </div>
        </div>
        </div>
      </div>

      <div class="col-xl-12 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Description</h4>
          </div>
            <div class="card-content">
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control tinymce-classic" id="description" name="description" required>{!! $blog->description !!}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success  buttonAnimation" data-animation="flash">submit</button>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-12 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Image</h4>
          </div>
            <div class="card-content">
              <div class="card-body">
                <div class="card-body">
                    <fieldset class="form-group add-image">
                            @isset($blog['image'][0])
                            @foreach ( $blog['image'] as $im)
                            <label id="img-{{$im->id}}" class="btn"><p><i onclick="deleteImage ({{$im->id}} , '{{  route('image.delete') }}')" style="color: red" class="fa fa-trash" data-id="{{ $im->id }}" ></i> </p>
                            <img src="/{{ $im->url }}" class="check img-thumbnail" style="width: 155px;height: 97px;"></label>
                            @endforeach
                            @endisset
                    </fieldset>our_clients
                  </div>
              </div>
          </div>
        </div>
      </div>
</section>
@section('footer')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
<script src="{{asset('assets')}}/dashboard/js/app.js"></script>
<script src="https://demos.pixinvent.com/robust-html-admin-template/app-assets/vendors/js/editors/tinymce/tinymce.js"></script>
<script src="https://demos.pixinvent.com/robust-html-admin-template/app-assets/js/scripts/editors/editor-tinymce.min.js"></script>

<script>
      $(document).ready(function () {
        $('#uploadForm').submit(function (e) {
        e.preventDefault();
        var fileInput = document.getElementById('image');
        if (fileInput.files.length != 0) {
            var formData = new FormData(this);
            formData.append('token_image', '{{ $blog->token }}');
            formData.append('table_name', 'blog');
            uplodeImage (formData , "{{ route('image.upload') }}");
            }
        });

        $('.buttonAnimation').click(function (e) {
             e.preventDefault();
            tinymce.activeEditor.setProgressState(true);
            tinymce.triggerSave();
            var formData = {
                'title' : $('#title').val() ,
                'name' : $('#name').val() ,
                'description':  $('#description').val() ,
                'category_id':  $('#category_id').val() ,
                'id':  '{{  $blog->id }}' ,
            }
          var jsonData = JSON.stringify(formData);
            var url = "{{ route('blog.update', ['id' => $blog->id ]) }}";
            var redirect = "{{ route('blog.edit', ['id' => $blog->token ]) }}";
            storeForm(jsonData, url , redirect , 'blog' ,'PUT')
        });

    })

</script>

@endsection
@endsection


