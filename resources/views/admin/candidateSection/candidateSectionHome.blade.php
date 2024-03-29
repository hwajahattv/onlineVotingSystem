@extends('admin.parent.master')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                <div class="card card-bd dashboard-card">
                    <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                    <div class="card-body box-style">
                        <div class="media align-items-center">
                            <div class="media-body me-3">
                                <h2 class="count num-text text-black font-w700">{{ $candidateCount }}</h2>
                                <ul>
                                    <li class="fs-14">
                                        <a href="{{ route('addCandidate') }}">
                                            Add new candidate
                                        </a>
                                    </li>
                                    <li class="fs-14">
                                        <a href="{{ route('showCandidates') }}">
                                            View all candidates
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.422 13.9831C34.3341 13.721 34.1756 13.4884 33.9638 13.3108C33.7521 13.1332 33.4954 13.0175 33.222 12.9766L23.649 11.5141L19.353 2.36408C19.2319 2.10638 19.0399 1.88849 18.7995 1.73587C18.5591 1.58325 18.2803 1.5022 17.9955 1.5022C17.7108 1.5022 17.4319 1.58325 17.1915 1.73587C16.9511 1.88849 16.7592 2.10638 16.638 2.36408L12.342 11.5141L2.76902 12.9766C2.49635 13.0181 2.24042 13.1341 2.02937 13.3117C1.81831 13.4892 1.6603 13.7215 1.57271 13.9831C1.48511 14.2446 1.47133 14.5253 1.53287 14.7941C1.59441 15.063 1.72889 15.3097 1.92152 15.5071L8.89802 22.6501L7.24802 32.7571C7.20299 33.0345 7.23679 33.3189 7.34555 33.578C7.45431 33.8371 7.63367 34.0605 7.86319 34.2226C8.09271 34.3847 8.36315 34.4791 8.64371 34.495C8.92426 34.5109 9.20365 34.4477 9.45002 34.3126L18 29.5906L26.55 34.3126C26.7964 34.4489 27.0761 34.5131 27.3573 34.4978C27.6384 34.4826 27.9096 34.3885 28.1398 34.2264C28.37 34.0643 28.5499 33.8406 28.659 33.5811C28.768 33.3215 28.8018 33.0365 28.7565 32.7586L27.1065 22.6516L34.0785 15.5071C34.2703 15.3091 34.4037 15.0622 34.4643 14.7933C34.5249 14.5245 34.5103 14.2441 34.422 13.9831Z" fill="#864AD1" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- *******************Party table****************************          --}}
        <div class="table-responsive">
            <table class="table tabl1 user-list">
                <thead>
                    <tr>
                        <th><span>Party</span></th>
                        <th><span>Candidate Count</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidateInEachParty as $party)
                    <tr>
                        <td>
                            <img class="userImage" src="{{ url('/img/uploads/partyFlags/' . $party->politicalParty->flagImage) }}" alt="">
                            {{ $party->politicalParty->name }}
                        </td>
                        <td>
                            {{$party->c}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--**********************************
                                                                                        Content body end
                                                                                    ***********************************-->
@endsection
