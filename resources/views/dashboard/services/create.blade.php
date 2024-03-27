@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Service' }} @endsection
@section('page-title') Service @endsection
@section('body')

<section class="row">
    <div class="col-xl-6 col-lg-12">
        <div class="card" >
          <div class="card-header">
            <h2>Add New Service</h2>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif
            <div class="card-content">
              <div class="card-body">
                <form action="{{ route('services.c') }}" id="store-form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label >Name </label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label >description </label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>

                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select name="category_id" id="category" class="form-control">
                                    <!-- Populate categories dropdown from database -->
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">price:</label>
                                <input type="number" name="price" id="price" class="form-control" value="0">
                            </div>

                            <div class="form-group">
                                <label for="name">price before</label>
                                <input type="number" name="price_before" id="price_before" class="form-control" value="0">
                            </div>


                            <div class="form-group">
                                <label for="features">Features:</label>
                                <textarea name="features" id="features" class="form-control" rows="5" required></textarea>
                            </div>
                            
                            <input type="submit" class="btn btn-primary">Add Service</input>
                        </form>
                    </div>

                </form>
              </div>
          </div>
        </div>
      </div>

</section>
@section('footer')

@endsection
@endsection


