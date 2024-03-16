@extends('layouts.master')

@section('content')

<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">{{ $user->name }}'s' Profile</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('user.edit') }}" class="btn btn-success mr-2">Edit User</a>


                <form class="form" action="{{ url('api/user/' . $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mr-2">Delete User</button>
                </form>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form">
            <!--begin::Body-->
            <div class="card-body">
            
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="{{ $user->name }}" disabled/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="email" value="{{ $user->email }}" disabled/>
                    </div>
                </div>
              
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Phone</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="phone" value="{{ $user->phone }}" disabled/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Education</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="education" value="{{ $user->education }}" disabled/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Year of experience</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="experience" value="{{ $user->experience }}" disabled/>
                    </div>
                </div>
             
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Location</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="location" value="{{ $user->location }}" disabled/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Skills</label>
                    <div class="col-lg-9 col-xl-6">
                        <ul>
                            @if ($user->skill1 == 1)
                                <li>ASP.NET</li>
                            @endif

                            @if ($user->skill2 == 1)
                                <li>C# </li>
                            @endif

                            @if ($user->skill3 == 1)
                                <li>JavaScript</li>
                            @endif

                            @if ($user->skill4 == 1)
                                <li>CSS</li>
                            @endif

                            @if ($user->skill5 == 1)
                                <li>SQL</li>
                            @endif
                            
            
                          </ul>
                    </div>
                </div>
       
        
            </div>
            <!--end::Body-->
        </form>
        <!--end::Form-->
    </div>
</div>

@endsection