@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center display-3">List of all Political Parties</h3>
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table tabl1 user-list">
                                <thead>
                                <tr>
                                    <th><span>Name</span></th>
                                    <th><span>Working Since</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($partiesData as $party)
                                    <tr>
                                        <td>
                                            <img class="userImage"
                                                 src="{{ url('/img/uploads/partyFlags/' . $party->flagImage) }}"
                                                 alt="">
                                            {{ $party->name }}
                                        </td>
                                        <td>{{$party->since}}
                                        </td>
                                        <td>
                                        <a href="{{ url('/editParty/' . $party->id) }}" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x "></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                        </a>
                                        <a href="{{route('deleteParty', ['id' => $party->id])}}"
                                           class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                        </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pull-right">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

