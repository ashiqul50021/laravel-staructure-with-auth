@extends('admin.layouts.main')

@section('page-title')
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">Dashboard</h5>
        </li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home </a>
        </li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Users List</a></li>
    </ol>
@endsection

@section('admin-content')
    <div class="container-fluid">

        <!-- row -->
        <div class="element-area">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="accordion-one">
                            <div class="card-header flex-wrap">
                                <p>User ist</p>
                            </div>
                            <!--tab-content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table id="example3" class="display table" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        {{-- <th>Department</th> --}}
                                                        {{-- <th>Gender</th> --}}
                                                        {{-- <th>Education</th> --}}
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        {{-- <th>Joining Date</th> --}}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $key => $user)
                                                        <tr>
                                                            <td><img class="rounded-circle" width="35"
                                                                    src="images/profile/small/pic1.jpg" alt="">
                                                            </td>
                                                            <td>{{ $user->name ?? 'N/A' }}</td>
                                                            {{-- <td>Architect</td> --}}
                                                            {{-- <td>Male</td> --}}
                                                            {{-- <td>M.COM., P.H.D.</td> --}}
                                                            <td><a
                                                                    href="javascript:void(0);"><strong>{{ $user->phone ?? 'N/A' }}</strong></a>
                                                            </td>
                                                            <td><a
                                                                    href="javascript:void(0);"><strong>{{ $user->email ?? 'N/A' }}</strong></a>
                                                            </td>
                                                            {{-- <td>2011/04/25</td> --}}
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="#"
                                                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                            class="fas fa-pencil-alt"></i></a>
                                                                    <a href="#"
                                                                        class="btn btn-danger shadow btn-xs sharp"><i
                                                                            class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                            </div>
                            <!--/tab-content-->
                        </div>
                    </div>
                </div>
                <!-- Column ends -->
            </div>
        </div>
    </div>
@endsection
