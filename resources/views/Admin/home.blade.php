@extends('Admin/master')

@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('Admin')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

                    {{-- PRODUCTTABLE --}}
     <section class="section">
     <div class="row">
       <div class="col-lg-12">

         <div class="card">
           <div class="card-body">
             <h5 class="card-title">ProductTable</h5>
              <a href="{{route('addproduct')}}"class="btn btn-success" name="Add">ADD</a>
             <!-- Table with stripped rows -->
             <table class="table datatable">
               <thead>
                 <tr>
                   <th scope="col">id</th>
                   <th scope="col">ProductName</th>
                   <th scope="col">Price</th>
                   <th scope="col">image</th>
                   <th scope="col">Descriptions</th>
                   <th scope="col">action</th>
                 </tr>
               </thead>
               <tbody>
                  @foreach ($tbl_p as $p) 
                 <tr>
                   <th scope="row">{{$loop->index+1}}</th>
                   <td>{{$p->productname}}</td>
                   <td>{{ $p->price}}</td>
                   <td><img src="{{url('upload/'.$p->img)}}" width="80px" hight="80px"/></td>
                   <td>{{ $p->descriptions }}</td>
                   <td> 
                       <a href="{{route('deleteproduct',$p->id)}}" class="btn btn-danger bi-trash" name="delete">DELETE</a>
                   </td>
                   <td>
                       <a href="{{route('editproduct',$p->id)}}" class="btn btn-warning bi-pencil-square" name="update">UPDATE</a>
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
                        {{-- //PRODUCTTABLE --}}

                        
        {{-- USERTABLE --}}
    
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">UserTable</h5>
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
                   <th scope="row">{{$loop->index+1}} </th>
                  <td>{{$u->name }}</td>
                  <td>{{$u->email }}</td>
                  {{-- <td>{{$u->password }}</td> --}}
                  <td><img src="{{url('upload/'.$u->image)}}" width="80px" hight="80px"/></td>
                  <td>{{$u->roleid}}</td>
                  <td> 
                    <a href="{{route('deleteuser',$u->id)}}" class="btn btn-danger bi-trash" name="delete">DELETE</a>
                  </td>
                  <td>
                    <a href="{{route('edituser',$u->id)}}" class="btn btn-warning bi-pencil-square" name="update">UPDATE</a>
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
                    {{-- //USERTABLE --}}

  </main><!-- End #main -->

 @endsection
 