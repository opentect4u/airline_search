@extends('common.master')
@section('content')

<div class="middle">
    <div class="search-results">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">From</small>
                    <h6 class="font-weight-600 mb-0">{{$searched->from1}}</h6>
                    <small class="exchange-arrow"><i class="las la-exchange-alt"></i></small>
                </div>
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">To</small>
                    <h6 class="font-weight-600 mb-0">{{$searched->to3}}</h6>
                </div>
                <!-- <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Departure date</small>
                    <h6 class="font-weight-600 mb-0">05/03/2021</h6>
                </div>
                <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Returning date</small>
                    <h6 class="font-weight-600 mb-0">08/03/2021</h6>
                </div> -->
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">Passangers & Class</small>
                    <h6 class="font-weight-600 mb-0">{{ isset($searched->adults)?$searched->adults.'Adult':''}} <?php if($searched->children > 0){echo ' ,'.$searched->children.'Child';} if($searched->infant > 0){echo ' ,'.$searched->infant.'Infant';} ?>, {{$searched->travel_class}}</h6>
                </div>
                <div class="col-md mt-md-0 col-6">
                    <a href="#" class="btn btn-yellow btn-sm" data-toggle="collapse" data-target="#search-container">Modify Search</a>
                </div>
            </div>
        </div>
    </div>
    <section id="search-container" class="bg-white collapse">
        <div class="container-fluid">
            <div class="cld__book__form search__modify">
                <form name="multicity" id="multicity" method="GET" action="{{route('multicityflight')}}" class="w-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="font-weight-600 mb-3">Multi City / Stop Over <i class="las la-plane"></i></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="text-uppercase text-muted">Flight 1</h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from1" id="from1" value="{{$searched->from1}}" required placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to1" id="to1" value="{{$searched->to1}}" required placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Date</label>
                                <div id="flight0_date_datetimepicker" class="input-group">
                                    <input type="text" name="flight0_date" id="flight0_date" required value="{{ isset($searched->flight0_date)? \Carbon\Carbon::parse($searched->flight0_date)->format('d-m-Y'):'' }}" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                    <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="text-uppercase text-muted">Flight 2</h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from2" id="from2"  value="{{$searched->from2}}" required placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to2" id="to2"  value="{{$searched->to2}}" required placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Date</label>
                                <div id="flight1_date_datetimepicker" class="input-group">
                                    <input type="text" name="flight1_date" required id="flight1_date" value="{{ isset($searched->flight1_date)? \Carbon\Carbon::parse($searched->flight1_date)->format('d-m-Y'):'' }}" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                    <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h6 class="text-uppercase text-muted">Flight 3</h6>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>From</label>
                                <input type="text" name="from3" id="from3"  value="{{$searched->from3}}" required placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to3" id="to3" value="{{$searched->to3}}" required placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Date</label>
                                <div id="flight2_date_datetimepicker" class="input-group">
                                    <input type="text" name="flight2_date" id="flight2_date" value="{{ isset($searched->flight2_date)? \Carbon\Carbon::parse($searched->flight2_date)->format('d-m-Y'):'' }}" required placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                    <div class="input-group-append add-on">
                                    <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row" id="multiCityFieldAdd"><div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <a href="javascript:void(0)" id="addFlight"><i class="las la-plus-circle"></i> Add Another Flight</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md col-6">
                            <div class="form-group">
                                <label>Adults <small>(12+ yrs)</small></label>
                                <select name="adults" id="adults" class="custom-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md col-6">
                            <div class="form-group">
                                <label>Children <small>(2-15 yrs)</small></label>
                                <select name="children" id="children" class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md col-6">
                            <div class="form-group">
                                <label>Infant <small>(0-23 mths)</small></label>
                                <select name="infant" id="infant" class="custom-select">
                                    <option selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md col-6">
                            <div class="form-group">
                                <label>Travel Class</label>
                                <select name="travel_class" id="travel_class" class="custom-select">
                                    <option value="Economy" selected>Economy</option>
                                    <option value="Business">Business</option>
                                    <option value="First Class">First Class</option>
                                    <option value="Premium Economy">Premium Economy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md col-12">
                            <input type="submit" id="submit" value="Search Flight" class="btn btn-primary">
                            <!-- <a href="flights.php" class="btn btn-primary">Search Flight</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

<section class="search-packages mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 filters_wrapper">
                <div class="card">
                    <h4 class="font-weight-600 m-0">Filter Result <span class="d-inline-block d-lg-none  filter-open float-right"><i class="las la-times"></i></span></h4>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Stops </h6>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Non Stop</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">1 Stop</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">1+ Stop</label>
                        </div>
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Departure </h6>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">6AM-12 Noon</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">12 Noon-6PM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">After 6PM</label>
                        </div>
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Price Range</h6>
                        <label for="customRange"><i class="fas fa-rupee-sign"></i> 26,000/-</label>
                        <input type="range" class="custom-range" id="customRange" name="points1">
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Airlines </h6>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Air India</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Air Asia</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Go Air</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">IndiGo</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Vistara</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 flight-section">
                <div class="card">
                    <div class="row row-heading d-none d-md-flex">
                        <div class="col-md-3">Airlines</div>
                        <div class="col-md-2">Departure</div>
                        <div class="col-md-2 text-center">Duration</div>
                        <div class="col-md-2">Arrival</div>
                        <div class="col-md-3 text-center">Price <i class="las la-long-arrow-alt-up"></i></div>
                    </div>
                    @if(count($multiflights)>0)
                    <?php $count=1;?>
                    @foreach($multiflights as $data)
                    <div class="flight-devider">
                        <div class="row align-items-center">
                        @foreach($data as $datas)
                        <?php $priceShowcount=1; $total_price=0;?>
                        @foreach($datas as $datas1)
                        <!-- {{count($datas)}} -->
                            <!-- {{print_r($datas1)}} -->
                            <!-- <form name="flightdetails" method="POST" action=""> -->
                            @foreach($datas1 as $datas2)
                            <!-- {{count($datas1)}}  -->
                            <!-- {{print_r($datas2[1])}} -->
                            <!-- <form name="flightdetails" method="POST" action=""> -->
                            
                            <div class="col-md-3 mb-2 mb-md-0">
                                <div class="media">
                                    <div class="media-left"><img src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php foreach($datas2[0] as $journey){ echo $journey[0]['Airline']; } ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                    <div class="media-body align-self-center">
                                        <h6 class="m-0"><?php foreach($datas2[0] as $journey){ echo $journey[0]['Airline']; } ?><br><small class="text-muted"><?php foreach($datas2[0] as $journey){ echo $journey[0]['Airline']; } ?>-<?php foreach($datas2[0] as $journey){ echo $journey[0]['Flight']; } ?></small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <small><i class="las la-plane-departure h6"></i> <?php foreach($datas2[0] as $journey){ echo \Carbon\Carbon::parse($journey[0]['Depart'])->format('d M Y'); } ?></small>
                                <h6 class="font-weight-bold mb-0"><?php foreach($datas2[0] as $journey){ echo \Carbon\Carbon::parse($journey[0]['Depart'])->format('H:i'); } ?></h6>
                                <span class="text-muted"><?php foreach($datas2[0] as $journey){ echo $journey[0]['From']; }?></span>
                            </div>
                            <div class="col-md-2 text-center col-4">
                                <span class="exchange-arrow exchange-relative m-auto"><i class="las la-exchange-alt"></i></span>
                                <h5 class="font-weight-600 mb-0 mt-2"><?php foreach($datas2[0] as $journey){ echo \Carbon\Carbon::parse($journey[0]['Depart'])->diff(\Carbon\Carbon::parse($journey[count($journey)-1]['Arrive']))->format('%Hh %Im');} ?></h5>
                                <small class="text-muted"><?php 
                            foreach($datas2[0] as $journey){ if(count($journey)==1){ echo "Non stop"; }else{echo ucwords(app('App\Http\Controllers\UtilityController')->convert_number_to_words((count($journey)-1)))." stop";}}
                            ?></small>
                            </div>
                            <div class="col-md-2 col-4">
                                <small><i class="las la-plane-arrival h6"></i> <?php foreach($datas2[0] as $journey){ echo \Carbon\Carbon::parse($journey[count($journey)-1]['Arrive'])->format('d M Y'); } ?></small>
                                <h6 class="font-weight-bold mb-0"><?php foreach($datas2[0] as $journey){ echo \Carbon\Carbon::parse($journey[count($journey)-1]['Arrive'])->format('H:i'); } ?></h6>
                                <span class="text-muted"><?php foreach($datas2[0] as $journey){  echo $journey[count($journey)-1]['To'];}?></span>
                            </div>
                            <div class="col-md-3 mt-2 mt-md-0 text-center">
                                
                                <?php foreach($datas2[1] as $prices){ $total_price=$total_price+str_replace('GBP','',$prices['Total Price']);} ?>
                                <!-- <input type="text" name="flight{{$priceShowcount}}" id="flight{{$priceShowcount}}" value="{{$datas2}}"> -->
                                @if($priceShowcount==count($datas))
                                <h3 class="font-weight-bold"><i class="las la-pound-sign">{{number_format((float)$total_price,2,'.','')}}</i></h3>
                                <!-- <a href="flight-details.php" class="btn btn-primary">Book Now</a><br> -->
                                <form name="flightdetails" method="POST" action="{{route('multicityflightdetails')}}">
                                    @csrf
                                    <?php $formcount=1;?>
                                    @foreach($datas as $datas1)
                                    <input type="hidden" name="flights{{$formcount}}" id="flights{{$formcount}}" value="{{json_encode($datas1)}}">
                                    <?php $formcount++; ?>
                                    @endforeach
                                    <!-- {{count($datas)}} -->
                                    <input type="hidden" name="trip" id="trip" value="{{count($datas)}}">
                                    <input type="hidden" name="adults" id="adults" value="{{$searched->adults}}">
                                    <input type="hidden" name="children" id="children" value="{{$searched->children}}">
                                    <input type="hidden" name="infant" id="infant" value="{{$searched->infant}}">
                                    <!-- <input type="hidden" name="flights" id="flights" value="{{json_encode($datas)}}"> -->
                                    <input type="submit" id="submit" value="Book Now" class="btn btn-primary"> <br>
                                </form>
                                <a href="#" class="mt-1 d-inline-block h5" data-toggle="collapse" data-target="#flight-details{{$count}}">View flight details</a>
                                @endif
                            </div>
                            <!-- </form> -->
                            @endforeach 
                            <!-- </form> -->
                            <?php $priceShowcount++; ?>
                        @endforeach   
                        @endforeach   
                        </div>
                        <div id="flight-details{{$count}}" class="card p-3 collapse mt-3">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#flight_details{{ $count }}">Flight Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#fare_details{{$count}}">Fare Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#baggage_rules{{$count}}">Baggage Rules</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#cancellation_rules{{$count}}">Cancellation Rules</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content row mt-3">
                                <div id="flight_details{{ $count }}" class="container tab-pane active">
                                    @foreach($data as $datas0)
                                    @foreach($datas0 as $datas1)
                                    @foreach($datas1 as $flight_data)
                                    @foreach($flight_data[0] as $datas)
                                    @for($i=0; $i < count($datas); $i++) 
                                    <!-- {{$datas[0]['Airline']}} -->
                                    @if($i==0)
                                    <div>{{$datas[0]['From']}} - {{$datas[count($datas)-1]['To']}} | {{\Carbon\Carbon::parse($datas[$i]['Depart'])->format('d M Y')}}</div>
                                    @endif
                                    @if($i>0)
                                    <div class="row align-items-center">
                                        <!-- {{$datas[$i]['Depart'] }} ---{{$datas[0]['Arrive']}} ---{{($i-1)}} -->
                                        <div>Change of Planes | {{\Carbon\Carbon::parse($datas[$i]['Depart'])->diff(\Carbon\Carbon::parse($datas[($i-1)]['Arrive']))->format('%Hh %Im')}} layover in ({{$datas[$i]['From']}})</div>
                                    </div>
                                    @endif
                                    <div class="row align-items-center">
                                        <div class="col-md-3 mb-2 mb-md-0">
                                            <div class="media">
                                                <div class="media-left"><img src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php echo $datas[$i]['Airline']; ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0"><?php  echo $datas[$i]['Airline']; ?><br><small class="text-muted"><?php echo $datas[$i]['Airline']; ?>-<?php  echo $datas[$i]['Flight']; ?></small></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-4">
                                            <small><i class="las la-plane-departure h6"></i> <?php  echo \Carbon\Carbon::parse($datas[$i]['Depart'])->format('d M Y');  ?></small>
                                            <h6 class="font-weight-bold mb-0"> <?php echo \Carbon\Carbon::parse($datas[$i]['Depart'])->format('h:i');  ?></h6>
                                            <span class="text-muted"><?php echo $datas[$i]['From']; ?></span>
                                        </div>
                                        <div class="col-md-2 text-center col-4">
                                            <span class="exchange-arrow exchange-relative m-auto" title="hello"><i class="las la-exchange-alt"></i></span>
                                            <h5 class="font-weight-600 mb-0 mt-2">  <?php  echo \Carbon\Carbon::parse($datas[$i]['Depart'])->diff(\Carbon\Carbon::parse($datas[$i]['Arrive']))->format('%Hh %Im'); ?></h5>
                                            <!-- <small class="text-muted">
                                            <?php 
                                            if(count($datas)==1){ echo "Non stop"; }else{echo ucwords(app('App\Http\Controllers\UtilityController')->convert_number_to_words((count($datas)-1)))." stop" ;}
                                            ?>
                                            </small> -->
                                        </div>
                                        <div class="col-md-2 col-4">
                                            <small><i class="las la-plane-arrival h6"></i> <?php  echo \Carbon\Carbon::parse($datas[$i]['Arrive'])->format('d M Y'); ?></small>
                                            <h6 class="font-weight-bold mb-0"> <?php echo \Carbon\Carbon::parse($datas[$i]['Arrive'])->format('h:i');  ?></h6>
                                            <span class="text-muted"><?php  echo $datas[$i]['To'];?></span>
                                        </div>
                                    </div>
                                    
                                    @endfor
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </div>
                                <div id="fare_details{{$count}}" class="container tab-pane fade">
                                    <table class="table">
                                        @foreach($data as $datas0)
                                        @foreach($datas0 as $datas1)
                                        @foreach($datas1 as $flight_data)
                                        
                                        <tr>
                                            <td><?php foreach($flight_data[0] as $journey){ echo $journey[0]['From']." - ".$journey[count($journey)-1]['To']; }?>  (1 Adult)</td>
                                            <td><i class="las la-pound-sign"></i> <?php foreach($flight_data[1] as $prices){echo str_replace('GBP','',$prices['Total Price'] );}?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Taxes and Fees (1 Adult)</td>
                                            <td><i class="fas fa-rupee-sign"></i> 1,806</td>
                                        </tr>
                                        <tr>
                                            <td>Total Fare (1 Adult)</td>
                                            <td><i class="fas fa-rupee-sign"></i> 8,551</td>
                                        </tr> -->
                                        @endforeach
                                        @endforeach
                                        @endforeach
                                    </table>
                                </div>
                                <div id="baggage_rules{{$count}}" class="container tab-pane fade">
                                    <table class="table">
                                        <tr>
                                            <td>Baggage Type</td>
                                            <td>Check-In</td>
                                            <td>Cabin</td>
                                        </tr>
                                        <tr>
                                            <td>Adult</td>
                                            <td>15 Kgs</td>
                                            <td>7 Kgs</td>
                                        </tr>
                                    </table>
                                    <small>The baggage information is just for reference. Please Check with airline before check-in. For more information, visit IndiGo Airlines Website.</small>
                                </div>
                                <div id="cancellation_rules{{$count}}" class="container tab-pane fade"><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Cancellation Charges</h6>
                                            <table class="table">
                                                <tr>
                                                    <td>0-2 hours</td>
                                                    <td>Non Refundable</td>
                                                </tr>
                                                <tr>
                                                    <td>2-72 hours</td>
                                                    <td><i class="fas fa-rupee-sign"></i> 3,500</td>
                                                </tr>
                                                <tr>
                                                    <td>>72 hours</td>
                                                    <td><i class="fas fa-rupee-sign"></i> 3,000</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Reschedule Charges</h6>
                                            <table class="table">
                                                <tr>
                                                    <td>0-2 hours</td>
                                                    <td>Non Refundable</td>
                                                </tr>
                                                <tr>
                                                    <td>2-72 hours</td>
                                                    <td><i class="fas fa-rupee-sign"></i> 3,000</td>
                                                </tr>
                                                <tr>
                                                    <td>>72 hours</td>
                                                    <td><i class="fas fa-rupee-sign"></i> 2,500</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <h5 class="small">Terms & Conditions</h5>
                                    <ul class="small">
                                        <li>The charges are per passenger per sector and applicable only on refundable type tickets.</li>
                                        <li>Rescheduling Charges = Rescheduling/Change Penalty + Fare Difference (if applicable)</li>
                                        <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                        <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Goibibo Service Fee.</li>
                                        <li>No Baggage Allowance for Infants</li>
                                        <li>In case of restricted cases , no amendments /cancellation allowed.</li>
                                        <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                        <li>Disclaimer: Airline Penalty changes are indicative and can change without prior notice.</li>
                                        <li>NA means Not Available. Please check with airline for penalty information.</li>
                                        <li>If taxes are more than default cancellation penalty then all taxes will be refundable.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    @endforeach
                    @endif
               
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
@section('script')

<script type="text/javascript">
    $( document ).ready(function() {
        $('#loading').hide();
        $('#loading_small').hide();
        var path = "{{ route('searchairport') }}";

         // Set the Options for "Bloodhound" suggestion engine
         var engine = new Bloodhound({
                    remote: {
                        // url: '/find?q=%QUERY%',
                        url: path+'?q=%QUERY%',
                        wildcard: '%QUERY%'
                    },
                    datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });


        $(".search_input").typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                }, {
                    source: engine.ttAdapter(),

                    // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                    name: 'airportList',

                    // the key from the array we want to display (name,id,email,etc...)
                    templates: {
                        empty: [
                            '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                        ],
                        header: [
                            '<div class="list-group search-results-dropdown">'
                        ],
                        suggestion: function (data) {
                            return '<span class="list-group-item">' + data + '</span>'
                        }
                    }
        });

        jQuery('#flight0_date_datetimepicker').datetimepicker({
            pickTime: false,
            autoclose: true, 
            startDate: new Date(),
            todayHighlight: true,
            autoclose: true,
        });
        jQuery('#flight1_date_datetimepicker').datetimepicker({
            pickTime: false,
            autoclose: true, 
            startDate: new Date(),
            todayHighlight: true,
            autoclose: true,
        });
        jQuery('#flight2_date_datetimepicker').datetimepicker({
            pickTime: false,
            autoclose: true, 
            startDate: new Date(),
            todayHighlight: true,
            autoclose: true,
        });
        $('.returning_date_datetimepickerclass').click(function(){
            // alert("hii");
            $('#one_way').removeAttr('class');
            $('#round_trip').attr('class','active');
        });
        $(".returning_date_datetimepickerclass").blur(function(){
            // alert("This input field has lost its focus.");
            // alert($('#returning_date').val());
            if($('#returning_date').val()==''){
                $('#round_trip').removeAttr('class');
                $('#one_way').attr('class','active');
            }
            
        });
        // returning_date
        // $(".returning_date_datetimepickerclass").on('click', function(event){
        //     alert("hii");
            
        // });

        $("#adults").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });

        $("#children").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });
        $("#infant").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });
        $("#travel_class").change(function(){
            // alert("hii");
            var adults=$('#adults').val();
            var children=$('#children').val();
            var infant=$('#infant').val();
            var travel_class=$('#travel_class').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=adults+' Adults, '+children+' Child, '+infant+' Infant, '+travel_class;
            }else if(infant>0){
                var val=adults+' Adults, '+infant+' Infant, '+travel_class;
            }else if(children>0){
                var val=adults+' Adults, '+children+' Child, '+travel_class;
            }else{
                var val=adults+' Adults, '+travel_class;
            }
            $('#flight_travel_details').removeAttr('placeholder');
            $('#flight_travel_details').attr('placeholder',val);
            
        });

      

        $('#flight_submit').click(function(){
            // alert("hii");
            var addFrom=$('#addFrom').val();
            var addTo=$('#addTo').val();
            if(addFrom===""){
                alert('Please enter From');
                return false;
            }else if(addTo===""){
                alert('Please enter To');
                return false;
            }else{
                $('#loading').show();
            }
            // alert(addFrom);
            // path='<?php echo route('flights');?>';
            // var url=("{{route('flights')}}")
            // window.location.href(path);
            // window.location.assign(url);
        })
        
        //  click on add anathor flight
        $('#addFlight').click(function(){
            alert("hii");
            // $("#multiCityFieldAdd").append('<div class="row"></div>');
            ('<div class="row"></div>').insertAfter("#multiCityFieldAdd")
        });
    });
</script>
@endsection