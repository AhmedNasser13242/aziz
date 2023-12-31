@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">تقرير التجارة الإلكترونية</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">تقرير التجارة الإلكترونية</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <hr />




        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">


            <form method="post" action="{{ route('search-by-user') }}">
                @csrf
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">ابحث عن المستخدم</h5>


                            <label class="form-label">Select User:</label>
                            <select name="user" class="mb-3 form-select" aria-label="Default select example">
                                <option selected="">Open this select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>


                            <br>
                            <input type="submit" class="btn btn-rounded btn-primary" value="Search">
                        </div>


                    </div>
                </div>
            </form>



        </div>


    </div>
@endsection
