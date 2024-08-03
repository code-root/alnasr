@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'services' }} @endsection
@section('page-title') services @endsection
@section('body')
<style>
    .error-message {
        color: red;
        font-weight: bold;
    }
</style>


<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                    @endif

                    <table id="invoices-list" class="table table-striped table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Features</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- PAID -->
                            @isset($data)
                            @foreach ($data as $cc)
                            <tr id="row-{{ $cc->id }}">
                                <td>{{ $cc->name }}</td>
                                <td>{{ $cc['category']['name'] ?? 'NA' }}</td>
                                <td>
                                    {{ $cc->price }}
                                    @if ($cc->price_before > 0 )
                                    <br>
                                    <span>Before {{ $cc->price_before }}</span>
                                    @endif
                                </td>
                                <td>{{ $cc->features }}</td>
                                <td>{{ $cc->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            Actions <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @can('edit_services')
                                            <a href="{{ route('services.edit', $cc->id) }}" class="dropdown-item">
                                                <i class="fa fa-pencil"></i> Edit Services
                                            </a>
                                            @endcan
                                            <a href="#" class="dropdown-item delete-services" data-id="{{ $cc->id }}">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>

                                        </div>
                                    </div>
                                    <div class="error-message" style="display: none;">لا يمكنك حذف الخدمة، يوجد طلبات مرتبطة بها</div>

                                </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>

                            </div>

                            <!--/ Invoices table -->
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </section>


    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
     $(document).ready(function() {
        $('.delete-services').click(function(e) {
            e.preventDefault();
            var serviceId = $(this).data('id');

            // إرسال طلب الحذف
            $.ajax({
                type: 'DELETE',
                url: '/dashboard/services/' + serviceId,
                data: {
                    '_token': '{{ csrf_token() }}',
                },
                success: function(data) {
                    // إزالة الصف (row) بعد الحذف بنجاح
                    $('#row-' + serviceId).remove();
                },
                error: function(xhr, status, error) {
                    // تعامل مع أي خطأ هنا
                    if (xhr.status === 500) {
                        // عرض رسالة الخطأ وتغيير لونها إلى الأحمر
                        var errorMessage = $('#row-' + serviceId).find('.error-message');
                        errorMessage.show().css('color', 'red');
                    } else {
                        console.error(xhr.responseText);
                    }
                }ء
            });
        });
    });
</script>
@endsection


