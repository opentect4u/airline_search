@extends('common.master')
@section('content')

<div class="middle">
    <section class="search-packages py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="confirmation-step">
                        <li><a href="#" class="active"><span>1</span> Flight Details</a></li>
                        <li><a href="#"><span>2</span> Passenger Details</a></li>
                        <li><a href="#"><span>3</span> Payment</a></li>
                        <li><a href="#"><span>4</span> Confirm</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <h4 class="font-weight-500">Ticket Details</h4><hr>
                        <h6 class="mb-0"><i class="fas fa-plane"></i> Chandigarh - Bangalore Friday, 29 Nov 2019
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#baggage-and-fare" class="float-right badge badge-success font-weight-400">Baggage and Fare Rules</a>
                    </h6><hr>
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="media">
                                <div class="media-left"><img src="assets/images/6E.png" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                <div class="media-body align-self-center">
                                    <h6 class="m-0">IndiGo<br><small class="text-muted">6E-491</small></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <small><i class="las la-plane-departure h6"></i> 07 March 2021</small>
                            <h6 class="font-weight-bold mb-0">10:45</h6>
                            <span class="text-muted">Chandigarh</span>
                        </div>
                        <div class="col-md-2 text-center">
                            <span class="exchange-arrow exchange-relative m-auto"><i class="las la-exchange-alt"></i></span>
                            <h5 class="font-weight-600 mb-0 mt-2">02 h 55 m</h5>
                            <small class="text-muted">Non stop</small>
                        </div>
                        <div class="col-md-2">
                            <small><i class="las la-plane-arrival h6"></i> 07 March 2021</small>
                            <h6 class="font-weight-bold mb-0">13:40</h6>
                            <span class="text-muted">Mumbai</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3 class="font-weight-bold"><i class="las la-pound-sign"></i>85.00</h3>
                        </div>
                    </div>
                        <p class="mt-3"><i class="las la-suitcase-rolling"></i> 15 Kgs Check-In, 7 Kgs Cabin</p>
                        <hr><div class="col-md-12 text-center my-2">
                            <span class="badge badge-pill badge-warning"><i class="far fa-clock"></i> DEL (New Delhi) 2h 20m Layover</span><br>
                            <small> Re-Checkin your baggage</small>
                        </div>
                        <hr>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="media">
                                    <div class="media-left"><img src="assets/images/6E.png" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                    <div class="media-body align-self-center">
                                        <h6 class="m-0">IndiGo<br><small class="text-muted">6E-491</small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <small><i class="las la-plane-departure h6"></i> 07 March 2021</small>
                                <h6 class="font-weight-bold mb-0">10:45</h6>
                                <span class="text-muted">Chandigarh</span>
                            </div>
                            <div class="col-md-2 text-center">
                                <span class="exchange-arrow exchange-relative m-auto"><i class="las la-exchange-alt"></i></span>
                                <h5 class="font-weight-600 mb-0 mt-2">02 h 55 m</h5>
                                <small class="text-muted">Non stop</small>
                            </div>
                            <div class="col-md-2">
                                <small><i class="las la-plane-arrival h6"></i> 07 March 2021</small>
                                <h6 class="font-weight-bold mb-0">13:40</h6>
                                <span class="text-muted">Mumbai</span>
                            </div>
                            <div class="col-md-3 text-center">
                                <h3 class="font-weight-bold"><i class="las la-pound-sign"></i>85.00</h3>
                            </div>
                        </div>
                        <p class="mt-3"><i class="las la-suitcase-rolling"></i> 15 Kgs Check-In, 7 Kgs Cabin</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                    <h4 class="font-weight-500 mb-0">Fare Summary</h4>
                    <span class="text-muted">Travelers 1 Adult</span>
                    <table class="table table-small mt-2">
                        <tr>
                            <td>Base Fare x 1</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>80.00</td>
                        </tr>
                        <tr>
                            <td>Taxes x 1</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>8.00</td>
                        </tr>
                        <tr>
                            <td>Other taxes</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>0.0</td>
                        </tr>
                        <tr class="font-weight-bold bg-light">
                            <td>Total</td>
                            <td class="text-right text-danger"><i class="las la-pound-sign"></i>88.00</td>
                        </tr>
                    </table>
                    <a href="passenger-details.php" class="btn btn-primary w-100">Book Now</a>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection