@extends('dashboard.layouts.app')
@section('content')

        <div class="content-wrapper">
            <div class="content-body">
                <section id="icon-section">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Icon Section</h4>
                            <p>Statistics on minimal cards with attractive icon section.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>Products</h5>
                                            <h5 class="text-bold-400 mb-0">{{ $products }}</h5>
                                        </div>
                                        <div class="p-2 text-center bg-warning rounded-right">
                                            <i class="ft-camera font-large-2 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>New Users</h5>
                                            <h5 class="text-bold-400 mb-0">{{ $users }}</h5>
                                        </div>
                                        <div class="p-2 text-center bg-success rounded-right">
                                            <i class="ft-user font-large-2 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media align-items-stretch">
                                        <div class="p-2 media-body text-left">
                                            <h5>New Orders</h5>
                                            <h5 class="text-bold-400 mb-0">{{ $orders }}</h5>
                                        </div>
                                        <div class="p-2 text-center bg-danger rounded-right">
                                            <i class="ft-shopping-cart font-large-2 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
@endsection
