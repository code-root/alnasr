@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Category' }} @endsection
@section('page-title') Category @endsection
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
                                        <th>name</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- PAID -->
                                    @isset($category)
                                    @foreach ($category as $item )
                            <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>@isset($item['image'][0]['url'])<img src="/{{ $item['image'][0]['url'] }}" alt="{{ $item->name_ar }}" class="img-thumbnail" width="50">@endisset </td>
                            <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                        class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    @can('edit_categories') <a href="{{ route('categories.edit', $item->id) }}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit category</a> @endcan
                                                    @can('delete_categories')
                                                    <a href="#" class="dropdown-item delete-category" data-id="{{ $item->id }}" data-toggle="modal" data-target="#deleteCategoryModal">
                                                        <i class="fa fa-trash" data-id="{{ $item->id }}"></i> Delete
                                                    </a>
                                                @endcan
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

        <div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteCategoryModalLabel">Confirm Deletion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this category?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="associationModal" tabindex="-1" role="dialog" aria-labelledby="associationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="associationModalLabel">Associated Records</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        توجد سجلات مرتبطة بهذه الفئة. يرجى حذفها أو إلغاء ربطها أولاً
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/extensions/sweetalert.min.js"></script>
<script>

$(document).ready(function() {
    var categoryIdToDelete;

    $('.delete-category').click(function() {
        categoryIdToDelete = $(this).data('id');
    });

    $('#confirmDelete').click(function() {
        // Check if there are associated records before deletion
        $.ajax({
            type: 'GET',
            url: '/dashboard/categories/' + categoryIdToDelete + '/check-association',
            success: function(data) {
                if (data.has_subcategories == true || data.has_services == true) {
                    $('#deleteCategoryModal').modal('hide'); // Hide the modal
                    $('#associationModal').modal('show'); // Show association modal
                } else {
                    // If no associated records, proceed with deletion
                    $.ajax({
                        type: 'DELETE',
                        url: '/dashboard/categories/' + categoryIdToDelete,
                        data: {
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function(data) {
                            // Reload the page or update the table as needed
                            location.reload();
                        }
                    });
                }
            }
        });
    });
});

</script>
@endsection


