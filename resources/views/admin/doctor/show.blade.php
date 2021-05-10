@extends('admin.layouts.main')

@section('content')
<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5>Edit Dentist Information</h5>
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
                    <li class="breadcrumb-item"><a href="#">Dentists</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="col-md-10">
<p>
            <img src="{{asset('images')}}/{{$doctor->image}}" width="200" alt="">
        </p>
        <p class="badge badge-pill badge-dark">
            Role:{{$doctor->role->name}}
        </p>
        <p>Name:{{$doctor->name}}</p>
        <p>Email:{{$doctor->email}}</p>
        <p>Address:{{$doctor->address}}</p>
        <p>Phone:{{$doctor->phone_number}}</p>
        <p>Department:{{$doctor->department}}</p>
        <p>Education:{{$doctor->education}}</p>
        <p>Description:{{$doctor->description}}</p>


      </div>
      <div >
        
        <a href="{{route('doctor.index')}}" class="btn btn-primary">Close</a>
       
      </div>

      @endsection