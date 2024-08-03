@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'OurClient' }} @endsection
@section('page-title') edit Our Client @endsection
@section('body')

<section class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h4 class="card-title">edit Our Client</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          </div>
            <div class="card-content">
              <div class="card-body">
                <form action="{{ route('categories.store') }}" id="store-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $OurClient->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>select country</label>
                        <select class="form-select custom-select" id="categories_id" name="categories_id"  required="true" aria-required="true">
                            @isset($category)
                            @foreach ($category as $item  )
                            <option value="{{ $item->id }}"@if ($item->id == $OurClient->categories_id) selected @endif >{{ $item->name }}</option>
                            @endforeach
                            @endisset
                        </select>
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
                    <input type="text" id="token_image" name="token_image" value="{{ $OurClient->token }}" style="display: none">
                    <div class="form-group">
                    <br>
                    <br>
                        <button type="submit" class="btn btn-primary ">
                            <i class="ft-file "></i>
                            <i class="fa fa-circle-o-notch spinner loder-image" ></i> Upload Image </button>
                    </div>
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
                    <fieldset class="form-group add-image">
                            @isset($OurClient['image'][0])
                            @foreach ( $OurClient['image'] as $im)
                            <label id="img-{{$im->id}}" class="btn"><p><i onclick="deleteImage ({{$im->id}} , '{{  route('image.delete') }}')" style="color: red" class="fa fa-trash" data-id="{{ $im->id }}" ></i> </p>
                            <img src="/{{ $im->url }}" class="check img-thumbnail" style="width: 155px;height: 97px;"></label>
                            @endforeach
                            @endisset
                    </fieldset>
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
<script>

      $(document).ready(function () {
        $('#uploadForm').submit(function (e) {
        e.preventDefault();
    var fileInput = document.getElementById('image');
    if (fileInput.files.length != 0) {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
            var formData = new FormData(this);
            formData.append('token_image', '{{ $OurClient->token }}');
            formData.append('table_name', 'OurClient');
            uplodeImage (formData , "{{ route('image.upload') }}");
            }
        });

        $('#store-form').submit(function (e) {
             e.preventDefault();
             var formData = {
                'categories_id' : $('#categories_id').val(),
                'name' : $('#name').val() ,
                'id':  '{{  $OurClient->id }}' ,
            }
            var jsonData = JSON.stringify(formData);
            var url = "{{ route('ourClient.update', ['id' => $OurClient->token]) }}";
            var redirect = "{{ route('ourClient.edit', ['id' => $OurClient->token]) }}";
            storeForm(jsonData, url , redirect , 'OurClient' , 'put')
        });

    })

</script>

@endsection
@endsection


