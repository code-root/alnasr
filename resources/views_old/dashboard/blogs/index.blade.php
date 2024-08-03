@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">

@section('title') {{ 'Blog' }} @endsection
@section('page-title') Home Blog @endsection
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
                                        <th>User Add</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>name</th>
                                        <th>title</th>
                                        <th>views</th>
                                        <th>updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- PAID -->
                                    @isset($blog)
                                    @foreach ($blog as $cc )
                            <tr>
                            <td>@isset($cc['image'][0]['url'])<img src="/{{ $cc['image'][0]['url'] }}" alt="{{ $cc->name_ar }}" class="img-thumbnail" width="50">@endisset </td>
                            <td>{{ $cc->user->name ?? '' }}</td>
                            <td>{{ $cc->category->name ?? '' }}</td>
                            <td>{{ $cc->subCategory->name ?? '' }}</td>
                            <td>{{ $cc->name }}</td>
                            <td>{{ $cc->title }}</td>
                            <td>{{ $cc->views() }}</td>
                            <td>{{ $cc->updated_at }}</td>
                                        <td>
                                            <span class="dropdown">
                                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i
                                                        class="ft-settings"></i></button>
                                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                    @can('edit_blog')   <a href="{{ route('blog.edit', $cc->id) }}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit blog</a>  @endcan
                                                    @can('delete_blog') <a href="#" class="dropdown-item delete-blog" data-id="{{ $cc->id }}"><i class="fa fa-trash" data-id="{{ $cc->id }}" ></i> Delete</a> @endcan
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

    {{-- Modal for blog deletion confirmation --}}
    <div class="modal fade" id="deleteblogModal" tabindex="-1" role="dialog" aria-labelledby="deleteblogModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteblogModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this blog?
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
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        var categoryIdToDelete;
        $('.delete-blog').click(function() {
            var blogId = $(this).data('id');
            console.log(blogId)
            $('#deleteblogModal').modal('show');
            $('#confirmDelete').click(function() {
              $.ajax({
                                type: 'DELETE',
                                url: '/dashboard/blog/' + blogId,
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


