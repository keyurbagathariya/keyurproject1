@extends('Admin/master')

@section('main')


<main id="main" class="main">
    <div class="pagetitle">
       <h1>Product Table</h1>
       <nav>
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="{{route('Admin')}}">Home</a></li>
           <li class="breadcrumb-item">Tables</li>
           <li class="breadcrumb-item active">ProductTable</li>
         </ol>
       </nav>
     </div><!-- End Page Title -->
 
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
                     <th scope="row">{{$p->id }}</th>
                     <td>{{$p->productname}}</td>
                     <td>{{ $p->price}}</td>
                     <td><img src="{{url('upload/'.$p->img)}}" width="20px" hight="20px"/></td>
                     <td>{{ $p->descriptions }}</td>
                     <td> 
                         <a href="{{route('deleteproduct',$p->id)}}" class="btn btn-danger" name="delete">DELETE</a>
                     </td>
                     <td>
                         <a href="{{route('editproduct',$p->id)}}" class="btn btn-warning" name="update">UPDATE</a>
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