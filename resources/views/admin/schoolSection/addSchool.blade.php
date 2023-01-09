@extends('admin.parent.master')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="jumbotron m-2 mx-5">
                    <ol class="alert alert-danger alert-dismissible">
                        @foreach ($errors->all() as $error)
                            <li style="height: 14px; font-size: 12px"
                                class=" fade show">
                                * &nbsp; {{ $error }}
                            </li>
                        @endforeach
                    </ol>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <h3 class="text-center display-3">Add school details</h3>
                            <form method="post" enctype="multipart/form-data" action="{{ route('school.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="text-black">Education level <i
                                                        class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                <select class="form-control" name="education_level"
                                                        value="{{ old('education_level') }}" id="educationLevelSelect">
                                                    <option selected value="1">Primary</option>
                                                    <option value="2">Secondary</option>
                                                    <option value="3">Tertiary</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="text-black">Select province <i
                                                        class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                <select class="form-control" name="province"
                                                        value="{{ old('province_id') }}">
                                                    <option selected disabled>--select--</option>
                                                    @foreach($provinces as $province)
                                                        <option value="{{$province->id}}">{{$province->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text-black" >School name <i
                                                            class="fa-solid fa-asterisk fa-2xs "></i></label>
                                                    <input type="text" class="form-control addInput" name="name"
                                                           id="" aria-describedby="" placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    ***********************************-->
@endsection


