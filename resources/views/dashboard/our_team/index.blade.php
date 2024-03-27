@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'ourTeam' }} @endsection
@section('page-title') ourTeam @endsection
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
                                        <th>image</th>
                                        <th>name</th>
                                        <th>job name</th>
                                        <th>category</th>
                                        <th>updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- PAID -->
                                    @isset($ourTeam)
                                    @foreach ($ourTeam as $cc )
                            <tr>
                            <td>@isset($cc['image'][0]['url'])<img src="/{{ $cc['image'][0]['url'] }}" alt="{{ $cc->name_ar }}" class="img-thumbnail" width="50">@endisset </td>
                            <td>{{ $cc->name }}</td>
                            <td>{{ $cc->job_name }}</td>
                            <td>{{ $cc['category']['name'] ?? 'NA' }}</td>
                            <td>{{ $cc->updated_at }}</td>
                                        <td>
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                        class="ft-settings"></i></button>
                                                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                            {{-- @can('edit_ourTeam') --}}
                                                            <a href="{{ route('ourTeam.edit', $cc->id) }}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit ourTeam</a>
                                                             {{-- @endcan --}}
                                                            {{-- @can('delete_ourTeam') --}}
                                                            <a href="#" class="dropdown-item delete-ourTeam"><i class="fa fa-trash" data-id="{{ $cc->id }}" ></i> Delete</a>
                                                            {{-- @endcan --}}
                                                            </span>
                                            </span>
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

    {{-- Modal for ourTeam deletion confirmation --}}
    <div class="modal fade" id="deleteourTeamModal" tabindex="-1" role="dialog" aria-labelledby="deleteourTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteourTeamModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this ourTeam?
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
    // JavaScript code for handling ourTeam deletion with AJAX
    $(document).ready(function() {
        $('.delete-ourTeam').click(function() {
            var ourTeamId = $(this).data('id');
            $('#deleteourTeamModal').modal('show');

            $('#confirmDelete').click(function() {
                $.ajax({
                    type: 'DELETE',
                    url: '/admin/ourTeam/' + ourTeamId,
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


