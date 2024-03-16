@extends('layouts.master')

@section('content')

<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Edit Profile</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('user.profile') }}" class="btn btn-success mr-2">Cancel</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form" action="{{ url('api/user/' . $user->id) }}" method="POST">
            @method('PUT')
            @csrf

            <!--begin::Body-->
            <div class="card-body">
            
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg" type="text" name="name" value="{{ $user->name }}"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg" type="text" name="email" value="{{ $user->email }}" />
                    </div>
                </div>
              
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Phone</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg" type="text" name="phone" value="{{ $user->phone }}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Education</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="education" id="education" class="form-control form-control-lg">
                            <option value="PHD" {{ $user->education == "PHD" ? 'selected' : '' }}>PHD</option>
                            <option value="Master" {{ $user->education == "Master" ? 'selected' : '' }}>Master</option>
                            <option value="Degree" {{ $user->education == "Degree" ? 'selected' : '' }}>Degree</option>
                            <option value="Diploma" {{ $user->education == "Diploma" ? 'selected' : '' }}>Diploma</option>
                            <option value="School" {{ $user->education == "School" ? 'selected' : '' }}>School</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Year of experience</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg" type="number" name="experience" value="{{ $user->experience }}" />
                    </div>
                </div>
             
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Location</label>
                    <div class="col-lg-9 col-xl-6">
                        <select name="location" id="location" class="form-control form-control-lg">
                            <option value="" disabled>Please select</option>
                            <option value="Malaysia" {{ $user->location == "Malaysia" ? 'selected' : '' }}>Malaysia</option>
                            <option value="International" {{ $user->location == "International" ? 'selected' : '' }}>International</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Skills</label>
                    <div class="col-lg-9 col-xl-6">
                        <ul>
                            <li><input type="checkbox"  name="skill1" value="1" {{ $user->skill1 == '1' ? 'checked' : '' }}> ASP.NET</li>

                            <li><input type="checkbox"  name="skill2" value="1" {{ $user->skill2 == '1' ? 'checked' : '' }}> C#</li>

                            <li><input type="checkbox"  name="skill3" value="1" {{ $user->skill3 == '1' ? 'checked' : '' }}> JavaScript</li>

                            <li><input type="checkbox"  name="skill4" value="1" {{ $user->skill4 == '1' ? 'checked' : '' }}> CSS</li>

                            <li><input type="checkbox"  name="skill5" value="1" {{ $user->skill5 == '1' ? 'checked' : '' }}> SQL</li>                            
            
                          </ul>
                    </div>
                </div>
       
        
            </div>
            <!--end::Body-->
            <div class="card-footer">
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-block btn-success mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>

@endsection