@extends('admin.layouts.main')

@section('content')
<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5>Add Doctor</h5>
                            <span> </span>
                        </div>
                    </div>
                </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="col-md-10">

@if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
 @endif   
<div class="card">
    <div class="card-header"><h3>Add new specialist </h3></div>
    <div class="card-body">
        <form class="forms-sample" action="{{route('doctor.store')}}"enctype="multipart/form-data" method="post">@csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputName1">Full name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail3" placeholder="Email" name="email" value="{{old('email')}}">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail3">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="" placeholder="password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="exampleSelectGender">
                            <option value="">Please select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword4">Highest education</label>
                        <input type="text" class="form-control @error('education') is-invalid @enderror" id="exampleInputPassword4" name="education" placeholder="education" value="{{old('education')}}" >
                        @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword4">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="exampleInputPassword4" name="address" placeholder="address" value="{{old('address')}}" >
                        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Specialist</label>
                 
                        <select name="department" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\Department::all() as $d)
                                <option value="{{$d->department}}">{{$d->department}}</option>
                            @endforeach
                        </select>
                        
                        @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}" >
                        @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
            <div class="form-group">
                <label>File upload</label>
                
                    <input type="file" name="image" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image">
                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <span class="input-group-append">
                     
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                        <label>Role</label>
                       <select name="role_id" class="form-control @error('role_id') is-invalid @enderror"  >
                           <option value="">Please select role</option>
                           @foreach(App\Models\Role::where('name', '!=','patient')-> get() as $role)
                           <option value="{{$role->id}}">{{$role->name}}</option>
                           @endforeach
                       </select> 
                    </div>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">About</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4"name="description" value="{{old('description')}}"></textarea>
                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>
</div>
</div>

@endsection