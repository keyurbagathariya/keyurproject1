  @extends('userside/master')

  @section('main')
  <div class="container">
      <h1>Edit Profile</h1>
      <hr>
    <div class="row" >
        <!-- left column -->
        
         <h3><b>Personal info</b></h3>
          
          <form class="form-horizontal " enctype="multipart/form-data" role="form" action="">
          @csrf

          <div class="col-md-3 ">
          <div class="text-center">
            <img src="{{url('upload/'.$user->image)}}" height="200px" width="350px" class="avatar img-circle" alt=""/>
            <h6>Upload a different photo...</h6>
            <input type="file"  name="image" class="form-control">
          </div>
        </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Name:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text"  name="name" value="{{$user->name}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="email" value="{{$user->email}}">
              </div>
            </div>
           
            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div class="col-md-8">
                <input class="form-control" type="password" name="password" value="{{$user->password}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit"  name="save" class="btn btn-primary" value="Save Changes">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  <hr>
  @endsection