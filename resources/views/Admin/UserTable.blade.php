@extends('Admin/master')

@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>User Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">UserTable</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Usertable</h5>
              <a href="{{route('users')}}"class="btn btn-success" name="Add">ADD</a>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    {{-- <th scope="col">password</th> --}}
                    <th scope="col">image</th>
                    <th scope="col">role_id</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($tbl_u as $u) 
                  <tr>
                     <th scope="row">{{$u->id }} </th>
                    <td>{{$u->name }}</td>
                    <td>{{$u->email }}</td>
                    {{-- <td>{{$u->password }}</td> --}}
                    <td><img src="{{url('/upload').$u->image}}" width="20px" hight="20px"/></td>
                    <td>{{$u->roleid}}</td>
                    <td> 
                      <a href="{{route('deleteuser',$u->id)}}" class="btn btn-danger" name="delete">DELETE</a>
                    </td>
                    <td>
                      <a href="{{route('edituser',$u->id)}}" class="btn btn-warning" name="update">UPDATE</a>
                    </td>
                  
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection