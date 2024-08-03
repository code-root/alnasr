@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'orders' }} @endsection
@section('page-title')  @endsection
@section('body')


<section class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                            {{-- <div class="table-responsive"> --}}
                  <table id="invoices-list" class="table table-white-space table-bordered display no-wrap icheck table-middle">
                                <thead>
                                    <tr>
                                <th>رقم الطلب</th>
                                <th>الخدمة</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>السعر</th>
                                <th>العنوان</th>
                                <th>الجهاز</th>
                                <th>عنوان IP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->service->name }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->number }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->device }}</td>
                                        <td>{{ $order->ip_address }}</td>
                                        <!-- يمكنك عرض قيم أعمدة إضافية هنا -->
                                    </tr>
                                @endforeach
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

    {{-- Modal for orders deletion confirmation --}}
    <div class="modal fade" id="deleteordersModal" tabindex="-1" role="dialog" aria-labelledby="deleteordersModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteordersModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this orders?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>



    </div>
    </div>
</div>

<script>
    // JavaScript code for handling orders deletion with AJAX
    $(document).ready(function() {
        $('.delete-orders').click(function() {
            var ordersId = $(this).data('id');
            $('#deleteordersModal').modal('show');

            $('#confirmDelete').click(function() {
                $.ajax({
                    type: 'DELETE',
                    url: '/admin/ourClient/' + ordersId,
                    data: {
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        // Reload the page or update the table as needed
                        location.reload();
                    }
                });
            });
        });
    });
</script>
@endsection


