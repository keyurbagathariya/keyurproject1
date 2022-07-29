@extends('Admin/master')

@section('main')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Menu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Menu</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
             @if(isset($_GET['id'])){
              <h5><b>UPDATE</b></h5>
             }
             @else
              <h5><b>ADD</b></h5>
            @endif

              <!-- General Form Elements -->
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$product->productname}}" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label" >Price</label>
                  <div class="col-sm-10">
                    <input type="number" name="price" class="form-control" value="{{$product->price}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputfile" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" value="{{$product->img}}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputtext" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="description" style="height: 60px" value="{{$product->descriptions}}">
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="submit" name="save"  value="Save" class="btn btn-primary">
                  </div>
                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection