@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
                <div style="margin-top:-30px;">
                <p class="breadcrumb-item active" style="padding-left:900px;">Employee Management</p>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">{{ __('Add New Employee') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form action="{{url('employee')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="FirstName" placeholder="Enter first name" value="{{old('FirstName')}}" >
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="LastName" placeholder="Enter last name" value="{{old('LastName')}}" >
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" name="DateofBirth" value="{{old('DateofBirth')}}"  >
                            </div>
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="int" class="form-control" name="Phone" value="{{old('Phone')}}" >
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container-fluid p-5">
            <div class="d-flex justify-content-end mb-2 mr-3">
                <a class="fa fa-plus btn-danger btn-sm" href="#">
                    ADD
                </a>
            </div>        

            <table class="table table-bordered table-danger text-center">
                <thead>

                    <tr>
                      <th scope="col">#Id</th>
                      <th scope="col">FirstName</th>
                      <th scope="col">LastName</th>
                      <th scope="col">DateofBirth</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($employee as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->FirstName}}</td>
                        <td>{{$item->LastName}}</td>
                        <td>{{$item->DateofBirth}}</td>
                        <td>{{$item->Phone}}</td>

                        <td>
                            <a class="btn btn-info btn-sm btn-block" href="{{url('employee/'.$item->id.'/update')}}">
                                     Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>



@endsection