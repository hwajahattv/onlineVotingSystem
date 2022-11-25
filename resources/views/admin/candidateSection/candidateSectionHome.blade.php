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
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M34.422 13.9831C34.3341 13.721 34.1756 13.4884 33.9638 13.3108C33.7521 13.1332 33.4954 13.0175 33.222 12.9766L23.649 11.5141L19.353 2.36408C19.2319 2.10638 19.0399 1.88849 18.7995 1.73587C18.5591 1.58325 18.2803 1.5022 17.9955 1.5022C17.7108 1.5022 17.4319 1.58325 17.1915 1.73587C16.9511 1.88849 16.7592 2.10638 16.638 2.36408L12.342 11.5141L2.76902 12.9766C2.49635 13.0181 2.24042 13.1341 2.02937 13.3117C1.81831 13.4892 1.6603 13.7215 1.57271 13.9831C1.48511 14.2446 1.47133 14.5253 1.53287 14.7941C1.59441 15.063 1.72889 15.3097 1.92152 15.5071L8.89802 22.6501L7.24802 32.7571C7.20299 33.0345 7.23679 33.3189 7.34555 33.578C7.45431 33.8371 7.63367 34.0605 7.86319 34.2226C8.09271 34.3847 8.36315 34.4791 8.64371 34.495C8.92426 34.5109 9.20365 34.4477 9.45002 34.3126L18 29.5906L26.55 34.3126C26.7964 34.4489 27.0761 34.5131 27.3573 34.4978C27.6384 34.4826 27.9096 34.3885 28.1398 34.2264C28.37 34.0643 28.5499 33.8406 28.659 33.5811C28.768 33.3215 28.8018 33.0365 28.7565 32.7586L27.1065 22.6516L34.0785 15.5071C34.2703 15.3091 34.4037 15.0622 34.4643 14.7933C34.5249 14.5245 34.5103 14.2441 34.422 13.9831Z"
                                        fill="#864AD1" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            *******************Party table****************************          --}}
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
                                <img class="userImage"
                                     src="{{ url('/img/uploads/partyFlags/' . $party->politicalParty->flagImage) }}"
                                     alt="">
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

            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header d-block border-0 pb-0">
                            <div class="d-flex justify-content-between pb-3">
                                <h4 class="mb-0 text-black fs-20">Project Created</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="fs-36 text-black font-w600 me-4">25%</span>
{{--                                <span class="fs-36 text-black font-w600 me-4">25%</span>--}}
                                <div>
                                    <svg class="me-2" width="27" height="14" viewBox="0 0 27 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 13.435L13.435 0L26.8701 13.435H0Z" fill="#665A48"></path>
                                    </svg>
                                    <span>last month $563,443</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0 px-2 pt-2">
                            <div id="chartTimeline" class="timeline-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">New Clients</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pb-0 px-2 pt-2">
                            <div id="widgetChart1" class="widgetChart1 dashboard-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Monthly Target</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChart" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5">100 Projects/ month</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="fs-16 text-black font-w500">Project Released</h4>
                                    <div class="d-flex align-items-center">
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.90735e-06 0.499999L7 7.5L14 0.5" fill="#FF6746" />
                                        </svg>
                                        <span class="fs-28 font-w600 ms-2 text-black">4%</span>
                                    </div>
                                </div>
                                <div class="card-body text-center pb-0 p-0">
                                    <div id="widgetChart2" class="dashboard-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body text-center d-flex align-items-center justify-content-between">
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1"
                                            data-peity='{ "fill": ["#665A48", "rgba(241, 241, 241,1)"],   "innerRadius": 33, "radius": 10}'>3/8</span>
                                        <small class="text-primary">29%</small>
                                    </div>
                                    <div>
                                        <h2 class="fs-28 font-w600 mb-0 text-end text-black">567</h2>
                                        <p class="mb-0 fs-14 font-w400 text-black">Contacts Added</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="img/man.png" width="100" class="img-fluid rounded-circle"
                                                alt="">
                                        </div>
                                        <h3 class="mt-4 mb-1">Mangoo</h3>
                                        <p class="text-muted">Youtuber</p>
                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-5"
                                            href="javascript:void(0)">Folllow</a>
                                    </div>
                                </div>

                                <div class="card-footer pt-0 pb-0 text-center">
                                    <div class="row">
                                        <div class="col-4 pt-3 pb-3 border-right">
                                            <h3 class="mb-1">150</h3><span>Follower</span>
                                        </div>
                                        <div class="col-4 pt-3 pb-3 border-right">
                                            <h3 class="mb-1">140</h3><span>Place Stay</span>
                                        </div>
                                        <div class="col-4 pt-3 pb-3">
                                            <h3 class="mb-1">45</h3><span>Reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card message-bx">
                                <div class="card-header border-0 d-sm-flex d-block pb-0">
                                    <div>
                                        <h4 class="fs-20 mb-0  text-black mb-sm-0 mb-2">Recent Messages</h4>
                                    </div>
                                    <a href="contacts.html"
                                        class="btn btn-primary shadow-primary btn-rounded text-white">+
                                        New Message</a>
                                </div>
                                <div class="card-body">
                                    <div class="media mb-3 pb-3 border-bottom">
                                        <div class="image-bx me-sm-4 me-2">
                                            <img src="img/hacker.png" alt="" class="rounded-circle img-1">
                                            <span class="active"></span>
                                        </div>
                                        <div
                                            class="media-body d-sm-flex justify-content-between d-block align-items-center">
                                            <div class="me-sm-3 me-0">
                                                <h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html"
                                                        class="text-black">Laura Chyan</a></h6>
                                                <p class="text-black mb-1">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                                <span class="fs-14">5m ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media mb-3 pb-3 border-bottom">
                                        <div class="image-bx me-sm-4 me-2">
                                            <img src="img/gamer.png" alt="" class="rounded-circle img-1">
                                        </div>
                                        <div
                                            class="media-body d-sm-flex justify-content-between d-block align-items-center">
                                            <div class="me-sm-3 me-0">
                                                <h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html"
                                                        class="text-black">Olivia Rellaq</a></h6>
                                                <p class="text-black mb-1">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                                <span class="fs-14">41m ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="image-bx me-sm-4 me-2">
                                            <img src="img/man (1).png" alt="" class="rounded-circle img-1">
                                            <span class="active"></span>
                                        </div>
                                        <div
                                            class="media-body d-sm-flex justify-content-between d-block align-items-center">
                                            <div class="me-sm-3 me-0">
                                                <h6 class="fs-16 font-w600 mb-sm-2 mb-0"><a href="messages.html"
                                                        class="text-black">Keanu Tipes</a></h6>
                                                <p class="text-black mb-1">Nisi ut aliquip ex ea commodo consequat. Duis
                                                    aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                                                <span class="fs-14">25m ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <div class="me-2">
                                        <h4 class="fs-20 mb-0 font-w500 text-black">Upcoming Projects</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="border-bottom up-project-bx pb-4 mb-4">
                                        <span class="fs-16 text-primary mb-2 d-block sub-title font-w500">Yoast Esac</span>
                                        <div class="d-flex">
                                            <p class="font-w500 me-auto mb-2 title fs-20"><a href="post-details.html"
                                                    class="text-black">Redesign Kripton Mobile App</a></p>
                                            <div class="dropdown mb-3">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><i class="far fa-calendar me-3"
                                                aria-hidden="true"></i>Created on
                                            Sep 8th, 2020</div>
                                        <div class="media align-items-center">
                                            <div class="power-ic me-3">
                                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-1">Deadline</p>
                                                <span class="text-black font-w600">Tuesday, Sep 29th 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom up-project-bx pb-4 mb-4">
                                        <span class="fs-16 text-primary mb-2 d-block sub-title font-w500">Yoast Esac</span>
                                        <div class="d-flex">
                                            <p class="font-w500 me-auto title mb-2 fs-20"><a href="post-details.html"
                                                    class="text-black">Build Branding Persona for Etza.id</a></p>
                                            <div class="dropdown mb-3">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><i class="far fa-calendar me-3"
                                                aria-hidden="true"></i>Created on
                                            Sep 8th, 2020</div>
                                        <div class="media align-items-center">
                                            <div class="power-ic me-3">
                                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-1">Deadline</p>
                                                <span class="text-black font-w600">Tuesday, Sep 29th 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="up-project-bx">
                                        <span class="fs-16 text-primary sub-title mb-2 d-block font-w500">Yoast Esac</span>
                                        <div class="d-flex">
                                            <p class="font-w500 me-auto title mb-2 fs-20"><a href="post-details.html"
                                                    class="text-black">Manage SEO for Eclan Company Profile</a></p>
                                            <div class="dropdown mb-3">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 	6Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3"><i class="far fa-calendar me-3"
                                                aria-hidden="true"></i>Created on
                                            Sep 8th, 2020</div>
                                        <div class="media align-items-center">
                                            <div class="power-ic me-3">
                                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="mb-1">Deadline</p>
                                                <span class="text-black font-w600">Tuesday, Sep 29th 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card kanbanPreview-bx">
                                <div class="card-body">
                                    <div class="sub-card bg-secondary d-flex text-white">
                                        <div class="me-auto pe-2">
                                            <h4 class="fs-20 mb-0 font-w600 text-white">Quick To-Do List</h4>
                                            <span class="fs-14 op6 font-w200">Lorem ipsum dolor sit amet</span>
                                        </div>
                                        <a href="contacts.html" class="plus-icon"><i class="fa fa-plus"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="sub-card">
                                        <span class="text-warning sub-title fs-14">Graphic Deisgner</span>
                                        <p class="font-w500"><a href="post-details.html" class="text-black">Visual
                                                Graphic
                                                for Presentation to Client</a></p>
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6">
                                                <span>Aug 4, 2021</span>
                                            </div>
                                            <ul class="users col-6">
                                                <li><img src="img/man (1).png" alt=""></li>
                                                <li><img src="https://cdn-icons-png.flaticon.com/512/921/921071.png"></li>
                                                <li><img src="https://cdn-icons-png.flaticon.com/512/921/921071.png"></li>
                                                <li><img src="https://cdn-icons-png.flaticon.com/512/1154/1154448.png"
                                                        alt=""></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="sub-card">
                                        <span class="text-primary sub-title fs-14">Database Engineer</span>
                                        <p class="font-w500"><a href="post-details.html" class="text-black">Build
                                                Database
                                                Design for Fasto Admin v2</a></p>
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-6">
                                                <span>Aug 4, 2021</span>
                                            </div>
                                            <ul class="users col-6">
                                                <li><img src="img/man (1).png" alt=""></li>
                                                <li><img src="https://cdn-icons-png.flaticon.com/512/921/921071.png"></li>
                                                <li><img src="img/man (1).png" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sub-card">
                                        <span class="text-secondary sub-title fs-14">Digital Marketing</span>
                                        <p class="font-w500"><a href="post-details.html" class="text-black">Make
                                                Promotional
                                                Ads for Instagram Fasto’s</a></p>
                                        <div class="row justify-content-between align-items-center mb-4">
                                            <div class="col-6">
                                                <span>Aug 4, 2021</span>
                                            </div>
                                            <ul class="users col-6">
                                                <li><img src="img/man (1).png" alt=""></li>
                                                <li><img src="https://cdn-icons-png.flaticon.com/512/921/921071.png"></li>
                                                <li><img src="img/man (1).png" alt=""></li>
                                            </ul>
                                        </div>
                                        <span><i class="far fa-comment me-2"></i>2 Comment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="card-title">Timeline</h4>
                                </div>
                                <div class="card-body">
                                    <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370 ps ps--active-y">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong
                                                            class="text-primary">$500</strong>.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">New order placed <strong
                                                            class="text-info">#XF-2356.</strong></h6>
                                                    <p class="mb-0">Quisque a consequat ante Sit amet magna at
                                                        volutapt...
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">john just buy your product <strong
                                                            class="text-warning">Sell $250</strong></h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>15 minutes ago</span>
                                                    <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge primary"></div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>10 minutes ago</span>
                                                    <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong
                                                            class="text-primary">$500</strong>.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge info">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">New order placed <strong
                                                            class="text-info">#XF-2356.</strong></h6>
                                                    <p class="mb-0">Quisque a consequat ante Sit amet magna at
                                                        volutapt...
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge danger">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>30 minutes ago</span>
                                                    <h6 class="mb-0">john just buy your product <strong
                                                            class="text-warning">Sell $250</strong></h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge success">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>15 minutes ago</span>
                                                    <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge warning">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="timeline-badge dark">
                                                </div>
                                                <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                    <span>20 minutes ago</span>
                                                    <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; height: 370px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 229px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="display: grid; align-content: center;">
                                <div class="card-body text-center ai-icon  text-primary">
                                    <svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80"
                                        height="80" stroke="currentColor" stroke-width="1" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                    <h4 class="my-2">You don’t have badges yet</h4>
                                    <a href="javascript:void(0);" class="btn my-2 btn-primary btn-lg px-4"><i
                                            class="fa fa-usd"></i> Earn Budges</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-facebook">
                            <span class="s-icon"><i class="fab fa-facebook-f"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-linkedin">
                            <span class="s-icon"><i class="fab fa-linkedin-in"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-googleplus">
                            <span class="s-icon"><i class="fab fa-google-plus-g"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-sm-6">
                    <div class="card">
                        <div class="social-graph-wrapper widget-twitter">
                            <span class="s-icon"><i class="fab fa-twitter"></i></span>
                        </div>
                        <div class="row">
                            <div class="col-6 border-end">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">89</span> k</h4>
                                    <p class="m-0">Friends</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                    <h4 class="m-1"><span class="count counter">119</span> k</h4>
                                    <p class="m-0">Followers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                                                                                        Content body end
                                                                                    ***********************************-->
@endsection
