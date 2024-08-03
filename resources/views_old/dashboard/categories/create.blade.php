@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Category' }} @endsection
@section('page-title') Category @endsection
@section('body')

<section class="row">
    {{-- <div class="col-md-6 offset-md-3">
        <h2>Add Category</h2>

    </div>


    </div> --}}
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Add Category</h4>
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
                <form action="{{ route('categories.store') }}" id="store-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >Name </label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>title </label>
                        <input type="text" id="token" name="token" value="{{ $token_image }}" style="display: none;">
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <button type="submit" class="btn btn-success  buttonAnimation" data-animation="flash">submit</button>

                </form>
              </div>
          </div>
        </div>
      </div>
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">Uplode Image </h4>
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
                <form id="uploadForm" enctype="multipart/form-data">
                    <!-- إضافة حقل تحميل الصور هنا -->
                    <input type="file" name="image[]" id="image" multiple accept=".jpg, .jpeg, .png, .gif, .mp4, .avi, .mov, .wmv">
                    <input type="text" id="token_image" name="token_image" value="{{ $token_image }}" style="display: none">
                    <br>
                    <button type="submit" class="btn btn-primary ">
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
</section>
@section('footer')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
<script>

$('.loder-image').hide();
var nameArField = $('#name');
var nameEnField = $('#title');
var submitButton = $('button[type="submit"]');
submitButton.prop('disabled', true);

nameArField.on('input', function () {
    if (nameArField.val() !== '' && nameEnField.val() !== '') {
        submitButton.prop('disabled', false);
    } else {
        submitButton.prop('disabled', true);
    }
});
nameEnField.on('input', function () {
    if (nameArField.val() !== '' && nameEnField.val() !== '') {
        submitButton.prop('disabled', false);
    } else {
        submitButton.prop('disabled', true);
    }
});


    function uplodeImage (csrfToken , formData) {
        $.ajax({
                url: "{{ route('image.upload') }}",
                data: formData,
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                headers: {'X-CSRF-TOKEN': csrfToken},
                beforeSend: function() {
                    $('.loder-image').show();
                    $('.ft-file').hide();
            },
                success: function (data) {
                    $('.loder-image').hide();
                    $('.ft-file').show();
                    var imageTableBody = $('#imageTableBody');
                    // imageTableBody.empty();
                    $.each(data.images, function (index, image) {
                        var newRow = `<label id="`+image.url+`" class="btn">
                            <img src="`+image.url+`" class="check img-thumbnail" style="width: 155px;height: 97px;"></label>`;
                        $('.add-image').append(newRow);
                    });

                    // إعادة تعيين الحقول بعد الرفع
                    $('#image').val('');
                },
                error: function (xhr, status, error) {
                    // معالجة الأخطاء هنا
                }
            });
    }

    function storeForm (csrfToken , formData) {
        $.ajax({
                url: "{{ route('categories.store') }}",
                data: formData,
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                headers: {'X-CSRF-TOKEN': csrfToken},
                success: function (data) {
                    swal({
            icon: 'success',
            title: 'تمت إضافة الفئة بنجاح',
            showCancelButton: true,
            confirmButtonText: 'إعادة التوجيه',
            cancelButtonText: 'إضافة فئة جديدة'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('categories.edit', ['id' => "+data+"]) }}";
            } else {
                $('#name_ar').val('');
                $('#name_en').val('');
                      }
             });
                },
                error: function (xhr, status, error) {
                    // معالجة الأخطاء هنا
                }
            });
    }

      $(document).ready(function () {
        $('#uploadForm').submit(function (e) {
        e.preventDefault(); // منع السلوك الافتراضي للزر
    var fileInput = document.getElementById('image');
    if (fileInput.files.length != 0) {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData(this);
            formData.append('token_image', '{{ $token_image }}');
            formData.append('table_name', 'category');
            uplodeImage (csrfToken , formData);
     }
        });

        $('#store-form').submit(function (e) {
        e.preventDefault(); // منع السلوك الافتراضي للزر
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData(this);
            formData.append('token', '{{ $token_image }}');
            formData.append('table_name', 'category');
            storeForm (csrfToken , formData);
        });

    })

</script>

@endsection
@endsection


