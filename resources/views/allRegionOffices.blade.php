@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/NCD.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">NCD</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Kila Ralai</li>
                                            <li class="fs-14">emncd@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Roselyn Tabogani</li>
                                            <li class="fs-14">aemncd@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 3212051</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/gulf.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Gulf</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: KTore Poevare</li>
                                            <li class="fs-14">emgulf@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Roney Hawengao</li>
                                            <li class="fs-14">aemgulf@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 6481074</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="36.6px" src="{{asset('/icons/flags/milne.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Milne bay</h2>
                                        </div>
                                        <ul style="padding: 0px 5px">
                                            <li class="fs-14">EM: Dadu Daga</li>
                                            <li class="fs-14">emmilnebay@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Roselyn Tabogani</li>
                                            <li class="fs-14">aemmilnebay@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 6410355</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/central.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Central</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Peter Malaifeope</li>
                                            <li class="fs-14">emcentral@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: lan Karo</li>
                                            <li class="fs-14">aemcentral@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 3211303</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/western.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.575rem;">Western</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Max Paul</li>
                                            <li class="fs-14">emwestern@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Vetari lamo</li>
                                            <li class="fs-14">aemwestern@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 6491155</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/gulf.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Gulf</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: KTore Poevare</li>
                                            <li class="fs-14">emgulf@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Roney Hawengao</li>
                                            <li class="fs-14">aemgulf@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 6481074</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/oro.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Oro</h2>
                                        </div>
                                        <ul >
                                            <li class="fs-14">EM: Daisy Hombagani</li>
                                            <li class="fs-14">emoro@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemoro@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 6297167</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/morobe.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Morobe</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Simon Soheke</li>
                                            <li class="fs-14">emmorobe@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Fredah Joses</li>
                                            <li class="fs-14">aemmorobe@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 4731500</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/eastSpike.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">East Sepik</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: James Piapia</li>
                                            <li class="fs-14">emesp@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemesp@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 4562090</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/manus.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Manus</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Alice Sikin</li>
                                            <li class="fs-14">emmanus@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemmanus@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 9709474</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/madang.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.575rem;">Madang</h2>
                                        </div>
                                        <ul >
                                            <li class="fs-14">EM: Sponsa Navi</li>
                                            <li class="fs-14">emmadang@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemmadang@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 4222644</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="36.6px" src="{{asset('/icons/flags/westspike.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">West Sepik</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Salote Kai</li>
                                            <li class="fs-14">emwsp@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemwsp@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 8571178</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/newIreland.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.575rem;">New Ireland</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Annette Obed Bais</li>
                                            <li class="fs-14">emnip@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemnip@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 9842317</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/eastnewbritain.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.575rem;">East New Britain</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Joap Voivoi</li>
                                            <li class="fs-14">emenb@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Theresa Sam</li>
                                            <li class="fs-14">aemenb@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 9828357</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/arob.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">AROB</h2>
                                        </div>
                                        <ul >
                                            <li class="fs-14">EM: Justine Pantumari</li>
                                            <li class="fs-14">emabg@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemabg@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 9739369</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="36.6px" src="{{asset('/icons/flags/chimbu.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Chimbu</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Tom Sine</li>
                                            <li class="fs-14">emchimbu@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Anthonia Nilkare</li>
                                            <li class="fs-14">aemchimbu@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 7351204</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/westnewbritain.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.575rem;">
                                                West New Britain</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Emily Kelton</li>
                                            <li class="fs-14">emwnb@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemwnb@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 9835484</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/easternHighlands.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.375rem;">Eastern
                                                Highlands</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Steven Gore Kaupa</li>
                                            <li class="fs-14">emehp@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Lucy Gedion</li>
                                            <li class="fs-14">aemehp@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 5321151</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/jiwaka.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Jiwaka</h2>
                                        </div>
                                        <ul >
                                            <li class="fs-14">EM: Rossie Pandihau</li>
                                            <li class="fs-14">emjiwaka@pngec.gov.pg</li>
                                            <li class="fs-14">AEM:</li>
                                            <li class="fs-14">aemjiwaka@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img width="36.6px" src="{{asset('/icons/flags/westernHighlands.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.375rem;">Western
                                                Higlands</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Philip Telape</li>
                                            <li class="fs-14">emwhp@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Wesley Tiane</li>
                                            <li class="fs-14">aemwhp@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 5422349</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/southernHighlands.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700" style="font-size: 1.275rem;">
                                                Southern
                                                Highlands</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Alwynn Jimmy</li>
                                            <li class="fs-14">emshp@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Grace Wong</li>
                                            <li class="fs-14">aemshp@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/enga.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Enga</h2>
                                        </div>
                                        <ul>
                                            <li class="fs-14">EM: Anton lamau</li>
                                            <li class="fs-14">emenga@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Lucy Gedion</li>
                                            <li class="fs-14">aemenga@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: 5471144</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-3 col-lg-6 col-sm-6">
                    <div class="card card-bd dashboard-card">
                        <div class="bg-secondary card-border" style="background:#C8DBBE !important;"></div>
                        <div class="card-body box-style">
                            <div class="media align-items-center">
                                <div class="media-body me-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{asset('/icons/flags/hela.png')}}" alt="ttt">
                                        </div>
                                        <div class="col-md-8"><h2 class="text-black font-w700">Hela</h2>
                                        </div>
                                        <ul >
                                            <li class="fs-14">EM: John Tipa</li>
                                            <li class="fs-14">emhela@pngec.gov.pg</li>
                                            <li class="fs-14">AEM: Anna Pame</li>
                                            <li class="fs-14">aemhela@pngec.gov.pg</li>
                                            <li class="fs-14">Phone: </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection


