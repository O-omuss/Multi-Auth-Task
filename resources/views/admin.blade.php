@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h3 class="card-title">Pending Clients</h3>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                        
                        <div class="content">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Dob</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Active on Social</th>
                                    <th>Currently</th>
                                    {{-- <th>Profile Image</th> --}}
                                    <th>Status</th>
                                    <th>Change Status</th>
                                </tr>
                                </thead>
                                @foreach($pending_clients as $pc)
                                    <tbody>
                    
                                    <tr>
                                        <td class="text-center">{{$pc->client_id}}</td>
                                        <td>{{$pc->name}}</td>
                                        <td>{{$pc->email}}</td>
                                        <td>{{$pc->number}}</td>
                                        <td>{{$pc->dob}}</td>
                                        <td>{{$pc->address}}</td>
                                        <td>{{$pc->gender}}</td>
                                        <td>@if($pc->active_on_social) Yes @else No @endif</td>
                                        
                                        <td>{{$pc->currently}}</td>
                                        {{-- <td>@if (isset($pc->profile_image))
                                            <img src="{{ asset($pc->profile_image) }}" style="width:10%">
                                            @else
                                            N/A
                                            @endif</td> --}}
                                        <td>@if($pc->status == 0) Pending  @endif</td>
                                        <td>
                                            <a href="{{url('admin/approve',$pc->client_id)}}" class="btn btn-success">Approve</a>
                                            <a href="{{url('admin/decline',$pc->client_id)}}" class="btn btn-danger">Decline</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                                {{$pending_clients->links()}}
                            </table>
                            
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
            
</div>

<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h3 class="card-title">Approved Clients</h3>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                        
                        <div class="content">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Dob</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Active on Social</th>
                                    <th>Currently</th>
                                    {{-- <th>Profile Image</th> --}}
                                    <th>Status</th>
                                </tr>
                                </thead>
                                @foreach($approved_clients as $ac)
                                    <tbody>
                    
                                    <tr>
                                        <td class="text-center">{{$ac->client_id}}</td>
                                        <td>{{$ac->name}}</td>
                                        <td>{{$ac->email}}</td>
                                        <td>{{$ac->number}}</td>
                                        <td>{{$ac->dob}}</td>
                                        <td>{{$ac->address}}</td>
                                        <td>{{$ac->gender}}</td>
                                        <td>@if($ac->active_on_social) Yes @else No @endif</td>
                                        
                                        <td>{{$ac->currently}}</td>
                                        {{-- <td>@if (isset($ac->profile_image))
                                            <img src="{{ asset($ac->profile_image) }}" style="width:10%">
                                            @else
                                            N/A
                                            @endif</td> --}}
                                        <td>@if($ac->status == 1) Approved  @endif</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                                {{$approved_clients->links()}}
                            </table>
                            
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
            
</div>


<hr>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h3 class="card-title">Rejected Clients</h3>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        
                        
                        <div class="content">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Dob</th>
                                    <th>Address</th>
                                    <th>Gender</th>
                                    <th>Active on Social</th>
                                    <th>Currently</th>
                                    {{-- <th>Profile Image</th> --}}
                                    <th>Status</th>
                                </tr>
                                </thead>
                                @foreach($rejected_clients as $rc)
                                    <tbody>
                    
                                    <tr>
                                        <td class="text-center">{{$rc->client_id}}</td>
                                        <td>{{$rc->name}}</td>
                                        <td>{{$rc->email}}</td>
                                        <td>{{$rc->number}}</td>
                                        <td>{{$rc->dob}}</td>
                                        <td>{{$rc->address}}</td>
                                        <td>{{$rc->gender}}</td>
                                        <td>@if($rc->active_on_social) Yes @else No @endif</td>
                                        
                                        <td>{{$rc->currently}}</td>
                                        {{-- <td>@if (isset($rc->profile_image))
                                            <img src="{{ asset($rc->profile_image) }}" style="width:10%">
                                            @else
                                            N/A
                                            @endif</td> --}}
                                        <td>@if($rc->status == 2) Rejected  @endif</td>
                                    </tr>
                                    </tbody>
                                @endforeach
                                {{$rejected_clients->links()}}
                            </table>
                            
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
            
</div>
@endsection

@section('scripts')

    <script>
        


    </script>

@endsection