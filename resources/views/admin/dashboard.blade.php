@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <h3 class="text-black text-center display-3">Welcome to the Online Voting System Dashboard</h3>
            <h4>Select an option from sidebar.</h4>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
        </div>
    </div>
@endsection
