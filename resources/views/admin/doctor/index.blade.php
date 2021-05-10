@extends('admin.layouts.main')

@section('content')

<div class="row" id="app">
    <div class="col-xs-12">
        <div class="box">

            <div class="box-header">
                <h3 class="box-title">All Specialists</h3>
                <span>Detailed information</span>
 
            </div>


            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <th class="nosort">Avatar</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>department</th>
                            <th>edit</th>



                        </tr>

                        <tr>
                            @if(count($doctors)>0)
                            @foreach($doctors as $doctor)
                            <td>{{$doctor->name}}</td>
                            <td><img src="{{asset('images')}}/{{$doctor->image}}" width="100" alt=""></td>
                            <td>{{$doctor->email}}</td>
                            <td>{{$doctor->address}}<i class="ik ik-eye table-actions "></i> </td>
                            <td>{{$doctor->phone_number}}</td>
                            <td>{{$doctor->department}}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{route('doctor.show',[$doctor->id])}}"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('doctor.edit',[$doctor->id])}}"><i class="far fa-edit"></i></a>
                                    <a href="#"> 
                                     <form class="forms-sample" action="{{route('doctor.destroy',[$doctor->id])}}"  
                                     method="post">@csrf
                                     @method('DELETE') 
                                     <button class="text-red-500 pr-3" type="submit"><i class="far fa-trash-alt"></i>
                     </button>          
                                     </form> </a>
                                </div>
                            </td>
                        </tr>
                   
                        @endforeach

                        @else
                        <td>No doctors to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection