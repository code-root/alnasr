@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Edit '.$service->name  }} @endsection
@section('page-title') Edit Service {{ $service->name }}  @endsection
@section('body')

<section class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h2>Edit Service {{ $service->name }}</h2>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
          </div>
            <div class="card-content">
              <div class="card-body">
                <div class="container">
                    <form action="{{ route('services.update', $service->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $service->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Service Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="name">price:</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $service->price }}">
                        </div>

                        <div class="form-group">
                            <label for="name">price before</label>
                            <input type="number" name="price_before" id="price_before" class="form-control" value="{{ $service->price_before }}">
                        </div>
                        <div class="form-group">
                            <label for="features">Features:</label>
                            <textarea name="features" id="features" class="form-control" rows="5" required>{{ $service->features }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </form>
                </div>
          </div>
        </div>
      </div>

</section>
@section('footer')


@endsection
@endsection


