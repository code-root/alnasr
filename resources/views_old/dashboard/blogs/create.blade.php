@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'blog' }} @endsection
@section('page-title') blog @endsection
@section('body')

<section class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Add blog</h4>
          </div>
            <div class="card-content">
              <div class="card-body">
                    <div class="form-group">
                        <label >Name </label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>title </label>
                         <input type="text" id="token" name="token" value="{{ $token_image }}" style="display: none;">
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label>select Categories</label>
                        <select class="form-select custom-select" id="category_id" name="category_id"  required="true" aria-required="true">
                            <option value="0">Empty</option>
                            @isset($category)
                            @foreach ($category as $ca  )
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="form-group">
                        <label>select sub category</label>
                        <select class="form-select custom-select" id="sub_category_id" name="sub_category_id"  required="true" aria-required="true">
                            <option value="0">Empty</option>
                            @isset($sub_category)
                            @foreach ($sub_category as $ca  )
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                            @endisset
                        </select>
                    </div>

                    <form id="uploadForm" enctype="multipart/form-data">
                        <!-- إضافة حقل تحميل الصور هنا -->
                        <input type="file" name="image[]" id="image" multiple accept=".jpg, .jpeg, .png, .gif, .mp4, .avi, .mov, .wmv">
                        <input type="text" id="token_image" name="token_image" value="{{ $token_image }}" style="display: none">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary ">
                            <i class="ft-file "></i>
                            <i class="fa fa-circle-o-notch spinner loder-image" ></i> Upload Image </button>
                </form>
              </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Image</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>

              </ul>
            </div>
          </div>
            <div class="card-content">
              <div class="card-body">
                <div class="card-body">
                    <fieldset class="form-group add-image"></fieldset>
                  </div>
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
                    <textarea class="form-control tinymce-classic" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success  buttonAnimation" data-animation="flash">submit</button>
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
        e.preventDefault(); // منع السلوك الافتراضي للزر
    var fileInput = document.getElementById('image');
    if (fileInput.files.length != 0) {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData(this);
            formData.append('token_image', '{{ $token_image }}');
            formData.append('table_name', 'blog');
            uplodeImage (formData , "{{ route('image.upload') }}");
     }
        });

        $('.buttonAnimation').click(function (e) {
            // var myContent =  $('#' + 'description').html( tinymce.get('description').getContent() );
            tinymce.activeEditor.setProgressState(true);
            tinymce.triggerSave();
            e.preventDefault(); // منع السلوك الافتراضي للزر
        var formData = {
            'title' : $('#title').val() ,
            'name' : $('#name').val() ,
            'description':  $('#description').val() ,
            'category_id':  $('#category_id').val() ,
            'sub_category_id':  $('#sub_category_id').val() ,
            'token':  $('#token').val() ,

        }
           var jsonData = JSON.stringify(formData);
            var url ="{{ route('blog.store') }}" ;
            var redirect = "{{ route('blog.index') }}";
            storeForm(jsonData, url , redirect , 'تم الاضافه بنجاح' ,'POST' ,false)
        });

    })

</script>

@endsection
@endsection


