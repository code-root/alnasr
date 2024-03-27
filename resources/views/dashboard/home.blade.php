@extends('dashboard.layouts.footer')

@extends('dashboard.layouts.navbar')
@section('title') {{ 'Home' }} @endsection
@section('page-title')
Dashboard
@endsection
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fas fa-star font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right">{{ $blogsCount }}</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Blogs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fas fa-th font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right">{{ $categoriesCount }}</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Categories</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="pb-1">
                                <div class="clearfix mb-1">
                                    <i class="fas fa-users font-large-1 blue-grey float-left mt-1"></i>
                                    <span class="font-large-2 text-bold-300 info float-right">{{ $ourClientsCount }}</span>
                                </div>
                                <div class="clearfix">
                                    <span class="text-muted">Our Clients</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">contact Form</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="invoices-list" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>subject</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>message</th>
                                    <th>ip</th>
                                    <th>updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contactForm as $blog)
                                    <tr>
                                        <td class="text-truncate">{{ $blog->name }}</td>
                                        <td class="text-truncate">{{ $blog->subject }}</td>
                                        <td class="text-truncate">{{ $blog->email }}</td>
                                        <td class="text-truncate">{{ $blog->phone }}</td>
                                        <td class="text-truncate">{{ $blog->message }}</td>
                                        <td class="text-truncate">{{ $blog->ip }}</td>
                                        <td class="text-truncate">{{ $blog->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Latest Blogs</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>Title</th>
                                    <th>type</th>
                                    <th>Date</th>
                                    <th>edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestBlogs as $blog)
                                    <tr>
                                        <td class="text-truncate">{{ $blog->name }}</td>
                                        <td class="text-truncate">{{ $blog->title }}</td>
                                        <td class="text-truncate">{{ $blog->type }}</td>
                                        <td class="text-truncate">{{ $blog->updated_at }}</td>
                                        <td>
                                            @can('edit_blog')   <a href="{{ route('blog.edit', $blog->id) }}" class="dropdown-item"><i class="fa fa-pencil"></i> Edit blog</a>  @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Our Clients -->
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Subscriber</h4>
            </div>

            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="invoices-list" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscriber as $client)
                                    <tr>
                                        <td class="text-truncate">{{ $client->name }}</td>
                                        <td class="text-truncate">{{ $client->email }}</td>
                                        <td class="text-truncate">{{ $client->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Latest Our Clients</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestOurClients as $client)
                                    <tr>
                                        <td class="text-truncate">{{ $client->name }}</td>
                                        <td class="text-truncate">{{ $client->updated_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Our Team Members -->
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Latest Our Team Members</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>job name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestOurTeamMembers as $member)
                                    <tr>
                                        <td class="text-truncate">{{ $member->name }}</td>
                                        <td class="text-truncate">{{ $member->job_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    </div>
    </div>
</div>


@endsection


