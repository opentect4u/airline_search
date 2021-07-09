@extends('common.master')
@section('content')

<div class="middle">
    <div class="search-results">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">From</small>
                    <h6 class="font-weight-600 mb-0">{{$searched->addFrom}}</h6>
                    <!-- <h6 class="font-weight-600 mb-0">Chandigarh Airport</h6> -->
                    <small class="exchange-arrow"><i class="las la-exchange-alt"></i></small>
                </div>
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">To</small>
                    <h6 class="font-weight-600 mb-0">{{$searched->addTo}}</h6>
                    <!-- <h6 class="font-weight-600 mb-0">Chhatrapati Shivaji Airport</h6> -->
                </div>
                <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Departure date</small>
                    <h6 class="font-weight-600 mb-0">{{ Carbon\Carbon::parse($searched->departure_date)->format('d/m/Y')}}</h6>
                    <!-- <h6 class="font-weight-600 mb-0">05/03/2021</h6> -->
                </div>
                <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Returning date</small>
                    <!-- <h6 class="font-weight-600 mb-0">{{ $searched->returning_date}}</h6> -->
                    <h6 class="font-weight-600 mb-0">{{ isset($searched->returning_date)?Carbon\Carbon::parse($searched->returning_date)->format('d/m/Y'):''}}</h6>
                </div>
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
            <form method="get" class="{{route('flights')}}">
                <input type="hidden" name="flexi" id="flexi" value="{{isset($searched->flexi)?$searched->flexi:''}}">
                <input type="hidden" name="direct_flight" id="direct_flight" value="{{isset($searched->direct_flight)?$searched->direct_flight:''}}">
                <div class="form-group">
                    <ul class="cld__selectors">
                        <li><a href="#" class="active" id="one_way">One way</a></li>
                        <li><a href="#" id="round_trip">Round trip</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" name="addFrom" id="addFrom" placeholder="(IXC) | Chandigarh Airport" class="form-control search_input" value="{{$searched->addFrom}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" name="addTo" id="addTo" placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input" value="{{$searched->addTo}}">
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Departure Date</label>
                            <div id="departure_date_datetimepicker" class="input-group">
                                <input type="text" name="departure_date" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy" value={{ \Carbon\Carbon::parse($searched->departure_date)->format('d-m-Y') }}>
                                <div class="input-group-append add-on">
                                <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Returning Date</label>
                            <div id="returning_date_datetimepicker" class="input-group returning_date_datetimepickerclass">
                                <input type="text" name="returning_date" id="returning_date" placeholder="dd-mm-yyyy" class="form-control border-right-0 returning_date_datetimepickerclass" data-format="dd-MM-yyyy" value={{ isset($searched->returning_date)? \Carbon\Carbon::parse($searched->returning_date)->format('d-m-Y'):'' }}>
                                <div class="input-group-append add-on returning_date_datetimepickerclass">
                                <span class="input-group-text bg-white pl-0 returning_date_datetimepickerclass"><i class="lar la-calendar-alt returning_date_datetimepickerclass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Passangers & Class</label>
                            <input type="text" id="flight_travel_details" name="" placeholder="<?php if($searched->adults>0){echo $searched->adults." Adult";} if($searched->children>0){echo ", ".$searched->children." Child";} if($searched->infant>0){echo ", ".$searched->infant." Infant";} echo ", ".$searched->travel_class; ?>" class="form-control" onclick="traveller_selection();">
                        
                            <div id="traveller_selection" style="display:none;">
                                <div class="row m-0">
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Adults <small>(12+ yrs)</small></label>
                                            <select name="adults" id="adults" class="custom-select">
                                                <option value="1" <?php if($searched->adults==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->adults==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->adults==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->adults==4){echo "selected";}?>>4</option>
                                                <option value="5" <?php if($searched->adults==5){echo "selected";}?>>5</option>
                                                <option value="6" <?php if($searched->adults==6){echo "selected";}?>>6</option>
                                                <option value="7" <?php if($searched->adults==7){echo "selected";}?>>7</option>
                                                <option value="8" <?php if($searched->adults==8){echo "selected";}?>>8</option>
                                                <option value="9" <?php if($searched->adults==9){echo "selected";}?>>9</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Children <small>(2-15 yrs)</small></label>
                                            <select name="children" id="children" class="custom-select">
                                                <option >0</option>
                                                <option value="1" <?php if($searched->children==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->children==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->children==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->children==4){echo "selected";}?>>4</option>
                                                <option value="5" <?php if($searched->children==5){echo "selected";}?>>5</option>
                                                <option value="6" <?php if($searched->children==6){echo "selected";}?>>6</option>
                                                <option value="7" <?php if($searched->children==7){echo "selected";}?>>7</option>
                                                <option value="8" <?php if($searched->children==8){echo "selected";}?>>8</option>
                                                <option value="9" <?php if($searched->children==9){echo "selected";}?>>9</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Infant <small>(0-23 mths)</small></label>
                                            <select name="infant" id="infant" class="custom-select">
                                                <option >0</option>
                                                <option value="1" <?php if($searched->infant==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->infant==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->infant==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->infant==4){echo "selected";}?>>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Travel Class</label>
                                            <select name="travel_class" id="travel_class" class="custom-select">
                                                <option value="Economy" <?php if($searched->travel_class=='Economy'){echo "selected";}?>>Economy</option>
                                                <option value="Business" <?php if($searched->travel_class=='Business'){echo "selected";}?>>Business</option>
                                                <option value="First Class" <?php if($searched->travel_class=='First Class'){echo "selected";}?>>First Class</option>
                                                <option value="Premium Economy" <?php if($searched->travel_class=='Premium Economy'){echo "selected";}?>>Premium Economy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" id="flight_submit" class="btn btn-primary" onclick="showLoder();">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
</section>

<section class="search-packages mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 filters_wrapper">
                @if(count($flights)>0)
                <div class="card">
                    <h4 class="font-weight-600 m-0">Onward Filter <span class="d-inline-block d-lg-none  filter-open float-right"><i class="las la-times"></i></span></h4>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Stops </h6>
                        @foreach($stops as $stop)
                        <!-- {{$stop}} -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Stops{{$stop}}" name="Stops" value="Stops{{$stop}}" onclick="filter()">
                            <label class="custom-control-label" for="Stops{{$stop}}">
                            <?php 
                            if($stop==0){ echo "Non Stop";}else{echo ($stop)." Stop";}
                            ?>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Departure </h6>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Departure16" name="Departure" value="Departure16" onclick="filter()">
                            <label class="custom-control-label" for="Departure16">Before 6AM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Departure612" name="Departure" value="Departure612" onclick="filter()">
                            <label class="custom-control-label" for="Departure612">6AM-12 Noon</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Departure126" name="Departure" value="Departure126" onclick="filter()">
                            <label class="custom-control-label" for="Departure126">12 Noon-6PM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Departure6" name="Departure" value="Departure6" onclick="filter()">
                            <label class="custom-control-label" for="Departure6">After 6PM</label>
                        </div>
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Price Range</h6>
                        <label for="onwwayRange"><i class="fas fa-rupee-sign" id="amount"></i> </label>
                        <input type="range" class="custom-range" id="onwwayRange" name="onwwayRange">
                        <input type="hidden" class="custom-range" id="onwwayRange_minprice" name="onwwayRange_minprice" value="<?php 
                            foreach($flights[0] as $flight){
                                foreach($flight[1] as $prices){ 
                                    echo (str_replace('GBP','',$prices['Total Price'])*100);
                                }
                            }
                        ?>">
                        <input type="hidden" class="custom-range" id="onwwayRange_maxprice" name="onwwayRange_maxprice" value="<?php 
                            foreach($flights[(count($flights)-1)] as $flight){
                                foreach($flight[1] as $prices){ 
                                    echo (str_replace('GBP','',$prices['Total Price'])*100);
                                }
                            }
                        ?>">
                        
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Airlines </h6>
                        @foreach($airlines as $airline)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Airline{{$airline}}" name="Airline" value="Airline{{$airline}}" onclick="filter()" >
                            <label class="custom-control-label" for="Airline{{$airline}}">{{ $airline }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if(count($flights)>0 && $searched->returning_date!=null)
                <br/>
                <div class="card">
                    <h4 class="font-weight-600 m-0">Return Filter <span class="d-inline-block d-lg-none  filter-open float-right"><i class="las la-times"></i></span></h4>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Stops </h6>
                        @foreach($return_stops as $stop)
                        <!-- {{$stop}} -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="return_Stops{{$stop}}" name="return_Stops" value="return_Stops{{$stop}}" onclick="return_filter()">
                            <label class="custom-control-label" for="return_Stops{{$stop}}">
                            <?php 
                            if($stop==0){ echo "Non Stop";}else{echo ($stop)." Stop";}
                            ?>
                            </label>
                        </div>
                        @endforeach
                        <!-- <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Stops{{$stop}}" name="example1">
                            <label class="custom-control-label" for="Stops{{$stop}}"></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">1 Stop</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">1+ Stop</label>
                        </div> -->
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Departure </h6>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ReturnDeparture16" name="ReturnDeparture" value="ReturnDeparture16" onclick="return_filter()">
                            <label class="custom-control-label" for="ReturnDeparture16">Before 6AM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ReturnDeparture612" name="ReturnDeparture" value="ReturnDeparture612" onclick="return_filter()">
                            <label class="custom-control-label" for="ReturnDeparture612">6AM-12 Noon</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ReturnDeparture126" name="ReturnDeparture" value="ReturnDeparture126" onclick="return_filter()">
                            <label class="custom-control-label" for="ReturnDeparture126">12 Noon-6PM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ReturnDeparture6" name="ReturnDeparture" value="ReturnDeparture6" onclick="return_filter()">
                            <label class="custom-control-label" for="ReturnDeparture6">After 6PM</label>
                        </div>
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Price Range</h6>
                        <label for="customRange"><i class="fas fa-rupee-sign"></i> 26,000/-</label>
                        <input type="range" class="custom-range" id="customRange" name="points1">
                    </div>
                    <div class="filter-set">
                        <h6 class="font-weight-600">Airlines </h6>
                        @foreach($return_airlines as $airline)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="return_Airline{{$airline}}" name="return_Airline" value="return_Airline{{$airline}}" onclick="return_filter();" >
                            <label class="custom-control-label" for="return_Airline{{$airline}}">{{ $airline }}</label>
                        </div>
                        @endforeach
                        <!-- <div class="custom-control custom-checkbox">
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
                        </div> -->
                    </div>
                </div>
                @endif
            </div>
            @if(count($flights)>0)
            <div class="col-lg-5 flight-section">
                <div class="card">
                    <h4>Onward Journey</h4>
                    <br/>
                    <div class="row row-heading d-none d-md-flex">
                        <div class="col-md-3">Airlines</div>
                        <div class="col-md-2" data-departureordervalue="ASC" id="departure_order" style="cursor: pointer;">Departure<i class="las la-long-arrow-alt-up"></i><i class="las la-long-arrow-alt-down"></i></div>
                        <div class="col-md-2 text-center">Duration</div>
                        <div class="col-md-2">Arrival</div>
                        <div class="col-md-3 text-center" id="price_order" style="cursor: pointer;">Price <i class="las la-long-arrow-alt-up"></i><i class="las la-long-arrow-alt-down"></i></div>
                    </div>
                    <div class="MainDiv">
                    <?php $count=1; $flightCount=0;$DepartureTime="";$DepartureSlot="";$DepartureTimeOrder =[];?>
                    @foreach($flights as $flight)
                    @foreach($flight as $flight_data)
                    @foreach($flight_data[0] as $datas)
                    <?php $rrr=count($datas);
                    array_push($DepartureTimeOrder,\Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'));
                    ?>
                    @endforeach
                    
                    @if($searched->direct_flight == 'DF' && $rrr>1 && $searched->flexi=="")
                    @continue
                    @elseif($searched->flexi == 'F' && $rrr==1 && $searched->direct_flight=="")
                    @continue
                    @endif
                    
                        <?php foreach($flight_data[0] as $datas){
                        $DepartureTime =\Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); 
                        } ?>
                        <?php
                        if ($DepartureTime>=0 &&$DepartureTime<6) {
                            $DepartureSlot="Departure16";
                        }
                        elseif ($DepartureTime>=6 &&$DepartureTime<=12) {
                            $DepartureSlot="Departure612";
                        }
                        elseif ($DepartureTime>=12 &&$DepartureTime<=18) {
                            $DepartureSlot="Departure126";
                        }
                        elseif ($DepartureTime>=18 &&$DepartureTime<=24) {
                            $DepartureSlot="Departure6";
                        }
                        ?>
                    
                        <div id="SortDeparture{{$count}}" class="flight-devider GlobalDiv {{$DepartureSlot}} Airline<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?> Stops<?php  foreach($flight_data[0] as $datas){ echo count($datas)-1; } ?>" data-GlobalDiv="1" data-TotalpriceDiv="<?php foreach($flight_data[1] as $prices){ echo (str_replace('GBP','',$prices['Total Price'] )*100); } ?>" data-Deprature-time="<?php foreach($flight_data[0] as $datas){echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); } ?>">
                            <div class="row align-items-center">
                                <div class="col-md-3 mb-2 mb-md-0">
                                    <div class="media">
                                        <div class="media-left"><img src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                        <div class="media-body align-self-center">
                                            <h6 class="m-0"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?><br><small class="text-muted"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?>-<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Flight']; } ?></small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-4">
                                    <small><i class="las la-plane-departure h6"></i> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('d M Y'); } ?></small>
                                    <h6 class="font-weight-bold mb-0"> <?php foreach($flight_data[0] as $datas){echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); } ?></h6>
                                    <span class="text-muted"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['From']; }?></span>
                                </div>
                                <div class="col-md-2 text-center col-4">
                                    <span class="exchange-arrow exchange-relative m-auto" title="hello"><i class="las la-exchange-alt"></i></span>
                                    <h5 class="font-weight-600 mb-0 mt-2">  <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[0]['Depart'])->diff(\Carbon\Carbon::parse($datas[count($datas)-1]['Arrive']))->format('%Hh %Im');} ?></h5>
                                    <small class="text-muted">
                                    <?php 
                                    foreach($flight_data[0] as $datas){ if(count($datas)==1){ echo "Non stop"; }else{echo ucwords(app('App\Http\Controllers\UtilityController')->convert_number_to_words((count($datas)-1)))." stop";}}
                                    ?>
                                    </small>
                                </div>
                                <div class="col-md-2 col-4">
                                    <small><i class="las la-plane-arrival h6"></i> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('d M Y'); } ?></small>
                                    <h6 class="font-weight-bold mb-0"> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('H:i'); } ?></h6>
                                    <span class="text-muted"><?php foreach($flight_data[0] as $datas){  echo $datas[count($datas)-1]['To'];}?></span>
                                </div>
                            
                                <div class="col-md-3 mt-2 mt-md-0 text-center">
                                    <h3 class="font-weight-bold"><i class="las la-pound-sign"></i><?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );} ?></h3>
                                    <!-- <a href="flight-details.php" class="btn btn-primary">Book Now</a> -->
                                    <input type="radio" id="radioFlight{{$count}}" name="radioFlight" <?php if($count==1){echo 'checked="checked"';}?> onclick="OnwardFlightDetails({{$count}},{{$flight_data}},'{{$searched->addFrom}}','{{$searched->addTo}}',{{$searched->adults}},{{$searched->children}},{{$searched->infant}});" value="{{$flight_data}}">
                                    <!-- <form action="{{ route('flightDetails') }}" method="POST">
                                        @csrf
                                        <input type="text" name="flights" value="{{$flight_data}}" hidden>
                                        <input type="text" name="addFrom" value="{{ $searched->addFrom }}" hidden>
                                        <input type="text" name="addTo" value="{{ $searched->addTo }}" hidden>
                                        <input type="text" name="adults" value="{{ $searched->adults }}" hidden>
                                        <input type="text" name="children" value="{{ $searched->children }}" hidden>
                                        <input type="text" name="infant" value="{{ $searched->infant }}" hidden>
                                        <button type="submit" class="btn btn-primary" onclick="showLoder();">Book Now</button>
                                    </form> -->
                                    <br>
                                    <a href="#" class="mt-1 d-inline-block h5" data-toggle="collapse" data-target="#flight-details{{ $count }}">View flight details</a>
                                </div>
                            </div>
                            <div id="flight-details{{ $count }}" class="card p-3 collapse mt-3">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#flight_details{{ $count }}">Flight Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#fare_details{{ $count }}">Fare Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#baggage_rules{{ $count }}" onclick="BaggageCancelRule({{ $count }},{{$flight_data}});">Baggage Rules</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#cancellation_rules{{ $count }}" onclick="BaggageCancelRule({{ $count }},{{$flight_data}});">Cancellation Rules</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content row mt-3">
                                    <div id="flight_details{{ $count }}" class="container tab-pane active">
                                        @foreach($flight_data[0] as $datas)
                                        @for($i=0; $i < count($datas); $i++) 
                                        <!-- {{$datas[0]['Airline']}} -->
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
                                    </div>
                                    <div id="fare_details{{ $count }}" class="container tab-pane">
                                        <table class="table">
                                            <tr>
                                                <td>Base Fare (1 Adult)</td>
                                                <td><i class="las la-pound-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Approx Base Price'] );} ?></td>
                                            </tr>
                                            <tr>
                                                <td>Taxes and Fees (1 Adult)</td>
                                                <td><i class="las la-pound-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Taxes'] );} ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total Fare (1 Adult)</td>
                                                <td><i class="las la-pound-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );} ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div id="baggage_rules{{ $count }}" class="container tab-pane fade">
                                        <table class="table">
                                            <tr>
                                                <td>Baggage Type</td>
                                                <td>Check-In</td>
                                                <td>Cabin</td>
                                            </tr>
                                            <tr>
                                                <td>Adult</td>
                                                <td id="checkIn{{ $count }}">15 Kgs</td>
                                                <td id="cabin{{ $count }}">7 Kgs</td>
                                            </tr>
                                        </table>
                                        <small>The baggage information is just for reference. Please Check with airline before check-in. For more information, visit IndiGo Airlines Website.</small>
                                    </div>
                                    <div id="cancellation_rules{{ $count }}" class="container tab-pane fade"><br>
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
                                                        <td id="cancellation{{$count}}"><i class="las la-pound-sign"></i> 3,500</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td>>72 hours</td>
                                                        <td><i class="fas fa-rupee-sign"></i> 3,000</td>
                                                    </tr> -->
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
                                                        <td id="reschedule{{$count}}"><i class="fas fa-rupee-sign"></i> 3,000</td>
                                                    </tr>
                                                    <!-- <tr>
                                                        <td>>72 hours</td>
                                                        <td><i class="fas fa-rupee-sign"></i> 2,500</td>
                                                    </tr> -->
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
                    @endforeach
                    </div> 
                </div>
            </div>
            @else
            <div class="col-lg-9 flight-section">
                <h3>No flights found</h3>
                <a href="{{route('index')}}" class="btn btn-primary">GO BACK</a>
            </div>
            @endif
            @if(count($flights)>0 && $searched->returning_date!=null)
            <div class="col-lg-5 flight-section">
                <div class="card">
                    <h4>Return Journey</h4>
                    <br/>
                    <div class="row row-heading d-none d-md-flex">
                        <div class="col-md-3">Airlines</div>
                        <div class="col-md-2" data-departureordervalue="ASC" id="return_departure_order" style="cursor: pointer;">Departure<i class="las la-long-arrow-alt-up"></i><i class="las la-long-arrow-alt-down"></i></div>
                        <div class="col-md-2 text-center">Duration</div>
                        <div class="col-md-2">Arrival</div>
                        <div class="col-md-3 text-center">Price <i class="las la-long-arrow-alt-up" id="return_price_order"></i></div>
                    </div>
                    <div class="ReturnMainDiv">
                    <?php $count=1;$ReturnDepartureTime="";$ReturnDepartureSlot="";$ReturnDepartureTimeOrder =[];?>
                    @foreach($return_flights as $flight)
                    @foreach($flight as $flight_data)
                    @foreach($flight_data[0] as $datas)
                    <?php $return_rrr=count($datas);
                    array_push($ReturnDepartureTimeOrder,\Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'));
                    ?>
                    @endforeach
                    @if($searched->direct_flight == 'DF' && $return_rrr>1 && $searched->flexi=="")
                    @continue
                    @elseif($searched->flexi == 'F' && $return_rrr==1 && $searched->direct_flight=="")
                    @continue
                    @endif

                    <?php foreach($flight_data[0] as $datas){
                    $ReturnDepartureTime =\Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); 
                    } ?>
                     <?php
                     if ($ReturnDepartureTime>=0 &&$ReturnDepartureTime<6) {
                        $ReturnDepartureSlot="ReturnDeparture16";
                     }
                     elseif ($ReturnDepartureTime>=6 &&$ReturnDepartureTime<=12) {
                         $ReturnDepartureSlot="ReturnDeparture612";
                     }
                     elseif ($ReturnDepartureTime>=12 &&$ReturnDepartureTime<=18) {
                         $ReturnDepartureSlot="ReturnDeparture126";
                     }
                     elseif ($ReturnDepartureTime>=18 &&$ReturnDepartureTime<=24) {
                         $ReturnDepartureSlot="ReturnDeparture6";
                     }
                     ?>

                    <div id="ReturnSortDeparture{{$count}}" class="flight-devider ReturnGlobalDiv {{$ReturnDepartureSlot}} return_Airline<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?> return_Stops<?php  foreach($flight_data[0] as $datas){ echo count($datas)-1; } ?> " return-data-GlobalDiv="1" data-Deprature-time="<?php foreach($flight_data[0] as $datas){echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); } ?>">
                        <div class="row align-items-center">
                            <div class="col-md-3 mb-2 mb-md-0">
                                <div class="media">
                                    <div class="media-left"><img src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                    <div class="media-body align-self-center">
                                        <h6 class="m-0"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?><br><small class="text-muted"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; } ?>-<?php foreach($flight_data[0] as $datas){ echo $datas[0]['Flight']; } ?></small></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-4">
                                <small><i class="las la-plane-departure h6"></i> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('d M Y'); } ?></small>
                                <h6 class="font-weight-bold mb-0"> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); } ?></h6>
                                <span class="text-muted"><?php foreach($flight_data[0] as $datas){ echo $datas[0]['From']; }?></span>
                            </div>
                            <div class="col-md-2 text-center col-4">
                                <span class="exchange-arrow exchange-relative m-auto" title="hello"><i class="las la-exchange-alt"></i></span>
                                <h5 class="font-weight-600 mb-0 mt-2">  <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[0]['Depart'])->diff(\Carbon\Carbon::parse($datas[count($datas)-1]['Arrive']))->format('%Hh %Im');} ?></h5>
                                <small class="text-muted">
                                <?php 
                                foreach($flight_data[0] as $datas){ if(count($datas)==1){ echo "Non stop"; }else{echo ucwords(app('App\Http\Controllers\UtilityController')->convert_number_to_words((count($datas)-1)))." stop";}}
                                ?>
                                </small>
                            </div>
                            <div class="col-md-2 col-4">
                                <small><i class="las la-plane-arrival h6"></i> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('d M Y'); } ?></small>
                                <h6 class="font-weight-bold mb-0"> <?php foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('H:i'); } ?></h6>
                                <span class="text-muted"><?php foreach($flight_data[0] as $datas){  echo $datas[count($datas)-1]['To'];}?></span>
                            </div>
                        
                            <div class="col-md-3 mt-2 mt-md-0 text-center">
                                <h3 class="font-weight-bold"><i class="las la-pound-sign"></i><?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );} ?></h3>
                                <!-- <a href="flight-details.php" class="btn btn-primary">Book Now</a> -->
                                <input type="radio" id="radioReturnFlight{{$count}}" name="radioReturnFlight"  <?php if($count==1){echo 'checked="checked"';}?> onclick="ReturnFlightDetails({{$count}},{{$flight_data}},'{{$searched->addFrom}}','{{$searched->addTo}}',{{$searched->adults}},{{$searched->children}},{{$searched->infant}});" value="{{$flight_data}}">
                                <!-- <form action="{{ route('flightDetails') }}" method="POST">
                                    @csrf
                                    <input type="text" name="flights" value="{{$flight_data}}" hidden>
                                    <input type="text" name="adults" value="{{ $searched->adults }}" hidden>
                                    <input type="text" name="children" value="{{ $searched->children }}" hidden>
                                    <input type="text" name="infant" value="{{ $searched->infant }}" hidden>
                                    <button type="submit" class="btn btn-primary" >Book Now</button>
                                </form> -->
                                <br>
                                <a href="#" class="mt-1 d-inline-block h5" data-toggle="collapse" data-target="#return_flight-details{{ $count }}">View flight details</a>
                            </div>
                        </div>
                        <div id="return_flight-details{{ $count }}" class="card p-3 collapse mt-3">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#return_flight_details{{ $count }}">Flight Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#return_fare_details{{ $count }}">Fare Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#return_baggage_rules{{ $count }}">Baggage Rules</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#return_cancellation_rules{{ $count }}">Cancellation Rules</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content row mt-3">
                                <div id="return_flight_details{{ $count }}" class="container tab-pane active">
                                    @foreach($flight_data[0] as $datas)
                                    @for($i=0; $i < count($datas); $i++) 
                                    <!-- {{$datas[0]['Airline']}} -->
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
                                </div>
                                <div id="return_fare_details{{ $count }}" class="container tab-pane">
                                    <table class="table">
                                        <tr>
                                            <td>Base Fare (1 Adult)</td>
                                            <td><i class="fas fa-rupee-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Approx Base Price'] );} ?></td>
                                        </tr>
                                        <tr>
                                            <td>Taxes and Fees (1 Adult)</td>
                                            <td><i class="fas fa-rupee-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Taxes'] );} ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Fare (1 Adult)</td>
                                            <td><i class="fas fa-rupee-sign"></i> <?php foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );} ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="return_baggage_rules{{ $count }}" class="container tab-pane fade">
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
                                <div id="return_cancellation_rules{{ $count }}" class="container tab-pane fade"><br>
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
                    @endforeach
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-9 flight-section">
                <h3>No flights found</h3>
                <a href="{{route('index')}}" class="btn btn-primary">GO BACK</a>
            </div>
            @endif
        </div>
    </div>
    </div>
</section>
<style>
    .splitviewStickyOuter{
        position: fixed;
        bottom: 10px;
        width: 900px;
        z-index: 12;
        margin-left: 334px;
    }   
    .splitviewSticky {
        border-radius: 4px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 15%);
        background-color: #0a223d;
        padding: 12px;
    }
    .makeFlex {
        /* display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox; */
        display: flex;
    }
    .whiteText{
        color:white;
    }
    .stickyFlightDtl{
        border-left: 2px solid white;
        height: 100px;
        margin-left:20px;
    }
    .appendLeft15{
        margin-left: 10px;
    }
    .commonBookNow{
        height: 50px;
        margin-top: 25px;
        margin-left: 193px;
    }
</style>
@if(count($flights)>0)
<div class="splitviewStickyOuter">
    <div class="splitviewSticky makeFlex">
    
        <div class="appendLeft15">
            <p class="whiteText appendBottom12">Onward</p>
            <div class="makeFlex spaceBetween">
                <div class="makeFlex">
                    <div class="logoClass">
                        <img id="img_Onward" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php foreach($flights[0] as $flight_data){foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; }} ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2">
                    </div>
                    <div class="appendLeft10">
                        <p class="whiteText blackFont fontSize16 appendBottom4" id="time_Onward"><?php foreach($flights[0] as $flight_data){foreach($flight_data[0] as $datas){echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); }} ?> → <?php foreach($flights[0] as $flight_data){foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('H:i'); }} ?></p>
                        <!-- <p class="skyBlueText fontSize12 pointer ">Flight Details</p> -->
                    </div>
                </div>
                <span class="whiteText blackFont fontSize16" style="margin-left:20px;" id="price_Onward">£ <?php foreach($flights[0] as $flight_data){foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );}} ?></span>
            </div>
        </div>
        

        
        <div class="stickyFlightDtl appendLeft15">
            <p class="whiteText appendBottom12" style="margin-left:5px;">Return</p>
            <div class="makeFlex spaceBetween">
                <div class="makeFlex">
                    <div class="logoClass" style="margin-left:5px;">
                        <img id="img_Return" src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir<?php foreach($return_flights[0] as $flight_data){foreach($flight_data[0] as $datas){ echo $datas[0]['Airline']; }} ?>.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2">
                    </div>
                    <div class="appendLeft10">
                        <p class="whiteText blackFont fontSize16 appendBottom4" id="time_Return"><?php foreach($return_flights[0] as $flight_data){foreach($flight_data[0] as $datas){echo \Carbon\Carbon::parse($datas[0]['Depart'])->format('H:i'); }} ?> → <?php foreach($return_flights[0] as $flight_data){foreach($flight_data[0] as $datas){ echo \Carbon\Carbon::parse($datas[count($datas)-1]['Arrive'])->format('H:i'); }} ?></p>
                        <!-- <p class="skyBlueText fontSize12 pointer ">Flight Details</p> -->
                    </div>
                </div>
                <span class="whiteText blackFont fontSize16" style="margin-left:20px;" id="price_Return">£ <?php foreach($return_flights[0] as $flight_data){foreach($flight_data[1] as $prices){ echo str_replace('GBP','',$prices['Total Price'] );}} ?></span>
            </div>
        </div>
        
        <div class="makeFlex stickyFlightDtl appendLeft15">
            <div class="makeFlex hrtlCenter pushRight">
                <div class="textRight appendRight10">
                    <p><span class="whiteText fontSize22 boldFont" style="margin-left:20px;">Total Price</p>
                    <p><span class="whiteText fontSize22 boldFont" style="margin-left:20px;" id="totalPriceDiv">£ <?php   
                    foreach($flights[0] as $flight_data){
                        foreach($flight_data[1] as $prices){ 
                            $val1= str_replace('GBP','',$prices['Total Price'] );
                        }
                    } 
                    foreach($return_flights[0] as $flight_data){
                        foreach($flight_data[1] as $prices){ 
                            $val2= str_replace('GBP','',$prices['Total Price']);
                        }
                    }
                    echo number_format(($val1+$val2),2);
                    ?></span></p>
                    <!-- <p class="skyBlueText fontSize12 pointer ">Fare Details</p> -->
                </div>
                <div class="makeFlex hrtlCenter">
                    <form action="{{ route('roundflightDetails') }}" method="POST">
                    @csrf
                        @foreach($flights[0] as $datas)
                        <input type="hidden" name="flights" id="flights" value="{{$datas}}" >
                        <input type="hidden" name="total_price" id="total_price" value="<?php foreach($datas[1] as $prices){ 
                            echo str_replace('GBP','',$prices['Total Price']);
                        }?>" >
                        @endforeach
                        @foreach($return_flights[0] as $datas)
                        <input type="hidden" name="return_flights_data" id="return_flights_data" value="{{$datas}}" >
                        <input type="hidden" name="return_total_price" id="return_total_price" value="<?php foreach($datas[1] as $prices){ 
                            echo str_replace('GBP','',$prices['Total Price']);
                        }?>" >
                        @endforeach
                        <input type="text" name="addFrom" value="{{ $searched->addFrom }}" hidden>
                        <input type="text" name="addTo" value="{{ $searched->addTo }}" hidden>
                        <input type="text" name="adults" value="{{ $searched->adults }}" hidden>
                        <input type="text" name="children" value="{{ $searched->children }}" hidden>
                        <input type="text" name="infant" value="{{ $searched->infant }}" hidden>
                        <button type="submit" class="btn btn-primary commonBookNow" >Book Now</button>
                    </form>
                    <!-- <button id="" class="btn btn-primary commonBookNow">Book Now</button> -->
                    <span class="customArrow arrowUp"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->

@endsection

@section('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
		
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

        jQuery('#departure_date_datetimepicker').datetimepicker({
            pickTime: false,
            autoclose: true, 
            startDate: new Date(),
            todayHighlight: true,
            autoclose: true,
        });
        var returning_date ='<?php echo $searched->returning_date;?>';
        if (returning_date!='') {
            $('#one_way').removeAttr('class');
            $('#round_trip').attr('class','active');  
        }

        jQuery('#returning_date_datetimepicker').datetimepicker({
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
            }
            // alert(addFrom);
            // path='<?php echo route('flights');?>';
            // var url=("{{route('flights')}}")
            // window.location.href(path);
            // window.location.assign(url);
        });

        // $("#onwwayRange").slider({
        //     range: true,
        //     min: 1000,
        //     max: 20000,
        //     values: [ 100, 200 ],
        //     slide:function(event, ui){
        //         // alert(ui.values[0]);
        //         // $("#minimum_range").val(ui.values[0]);
        //         // $("#maximum_range").val(ui.values[1]);
        //         // load_product(ui.values[0], ui.values[1]);
        //     }
        // });
        var v1 = $('#onwwayRange_minprice').val();
        var v2 = $('#onwwayRange_maxprice').val();
        

        $("#onwwayRange").slider({
        range: true,
        min: v1,
        max: v2,
        values: [v1, v2],
        slide: function(event, ui) {
            $("#amount").html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            v1 = ui.values[ 0 ];
            v2 = ui.values[ 1 ];
            }
        });
        $("#amount").html("<i class='las la-pound-sign'></i>" + $("#onwwayRange" ).slider( "values", 0 ) + " - <i class='las la-pound-sign'></i>" + $("#onwwayRange").slider("values", 1));
        

    });
    
    function filter()
    {
        // if ($("."+this.value).attr("data-GlobalDiv")==1) 
        // $(".GlobalDiv").attr("data-GlobalDiv", "0")
        var SearchCount=0;
        var count=0;
     
        $(".GlobalDiv").attr("data-GlobalDiv", "0")
        $(".GlobalDiv").hide();
       
        var arr=[];
        var Departure=0;
        $('input[name="Departure"]:checked').each(function() {
          Departure=1
        });
        if (Departure==1) {
            arr.push("Departure");
        }
        var Stops=0;
        $('input[name="Stops"]:checked').each(function() {
           Stops=1
        });
        if (Stops==1) {
            arr.push("Stops");
        }
        var Airline=0;
        $('input[name="Airline"]:checked').each(function() {
            Airline=1
        });
        if (Airline==1) {
            arr.push("Airline");
        }
          
        $.each(arr, function( index, d ) {
            SearchCount=1;
            count+=1;
            
            $('input[name="'+d+'"]:checked').each(function() {
                if (SearchCount==count) {
                    $("."+this.value).show(); 
                    $("."+this.value).attr("data-GlobalDiv", "1") ; 
                }
                else if(count>SearchCount) 
                {
                    if ($("."+this.value).attr("data-GlobalDiv")=="1") 
                    {
                        $("."+this.value).show();     
                    }  
                }
            });
            $('input[name="'+d+'"]:not(:checked)').each(function() {
            
                $("."+this.value).attr("data-GlobalDiv", "0")
                $("."+this.value).hide();

                    
            });
          
        });
        

          if(SearchCount==0)
          {
            $(".GlobalDiv").show();
            $(".GlobalDiv").attr("data-GlobalDiv", "1")
          }
    }

    function return_filter()
    {
        // if ($("."+this.value).attr("data-GlobalDiv")==1) 
        // $(".GlobalDiv").attr("data-GlobalDiv", "0")
        var SearchCount=0;
        var count=0;
     
        $(".ReturnGlobalDiv").attr("return-data-GlobalDiv", "0")
        $(".ReturnGlobalDiv").hide();
       
        var arr=[];
        var Departure=0;
        $('input[name="ReturnDeparture"]:checked').each(function() {
          Departure=1
        });
        if (Departure==1) {
            arr.push("ReturnDeparture");
        }
        var Stops=0;
        $('input[name="return_Stops"]:checked').each(function() {
           Stops=1
        });
        if (Stops==1) {
            arr.push("return_Stops");
        }
        var Airline=0;
        $('input[name="return_Airline"]:checked').each(function() {
            Airline=1
        });
        if (Airline==1) {
            arr.push("return_Airline");
        }
          
        $.each(arr, function( index, d ) {
            SearchCount=1;
            count+=1;
            
            $('input[name="'+d+'"]:checked').each(function() {
                if (SearchCount==count) {
                    $("."+this.value).show(); 
                    $("."+this.value).attr("return-data-GlobalDiv", "1") ; 
                }
                else if(count>SearchCount) 
                {
                    if ($("."+this.value).attr("return-data-GlobalDiv")=="1") 
                    {
                        $("."+this.value).show();     
                    }  
                }
            });
            $('input[name="'+d+'"]:not(:checked)').each(function() {
            
                $("."+this.value).attr("return-data-GlobalDiv", "0")
                $("."+this.value).hide();

                    
            });
          
        });
        

          if(SearchCount==0)
          {
            $(".ReturnGlobalDiv").show();
            $(".ReturnGlobalDiv").attr("return-data-GlobalDiv", "1")
          }
    }
        
        

    //sorting 
    $('#price_order').click(function(){
        // alert("hii");
        var url= window.location.href;
        var price_order='{{isset($searched->price_order)?$searched->price_order:''}}';
        if(price_order==""){
            var newurl=url+'&price_order=price_order';
        }else{
            var newurl=url.split('&price_order=price_order')[0];
            // alert(newurl);
        }
        // alert(url); 
        window.location.assign(newurl);

    });

    $('#departure_order').click(function(){
            // alert("hii");
            var order_val=$("#departure_order").attr("data-departureordervalue");
            // alert(order_val);
            var DepartureTimeOrder=[];
            var DepartureTimeOrder=<?php 
            $ddd=[];
            $DepartureTimeOrder=array_unique(isset($DepartureTimeOrder)?$DepartureTimeOrder:[]);
            foreach($DepartureTimeOrder as $val){
                array_push($ddd,$val);
            }
            echo json_encode($ddd);
            ?>;
         
            if(order_val=="ASC"){
                for (let index = 0; index < DepartureTimeOrder.sort().length; index++) {
                    for (let Divindex = 1; Divindex <=$('.GlobalDiv').length; Divindex++) {
                    var dataDepraturetime=$("#SortDeparture"+Divindex).attr("data-Deprature-time")
                    if (dataDepraturetime==DepartureTimeOrder[index]) {
                    $(".MainDiv").append($("#SortDeparture"+Divindex));
                    }
                
                    
                  }
                }
                $("#departure_order").attr("data-departureordervalue", "DESC");
            } 
            else{
               for (let index = 0; index < DepartureTimeOrder.sort().reverse().length; index++) {
                    for (let Divindex = 1; Divindex <=$('.GlobalDiv').length; Divindex++) {
                    var dataDepraturetime=$("#SortDeparture"+Divindex).attr("data-Deprature-time")
                    if (dataDepraturetime==DepartureTimeOrder[index]) {
                    $(".MainDiv").append($("#SortDeparture"+Divindex));
                    }
                
                    
                 }
               }
                $("#departure_order").attr("data-departureordervalue", "DESC"); 
            }

    });

    $('#return_departure_order').click(function(){
            // alert("hii");
            var order_val=$("#return_departure_order").attr("data-departureordervalue");
            // alert(order_val);
            var ReturnDepartureTimeOrder=[];
            var ReturnDepartureTimeOrder=<?php 
            $ddd=[];
            $ReturnDepartureTimeOrder=array_unique(isset($ReturnDepartureTimeOrder)?$ReturnDepartureTimeOrder:[]);
            foreach($ReturnDepartureTimeOrder as $val){
                array_push($ddd,$val);
            }
            echo json_encode($ddd);
            ?>;
         
            if(order_val=="ASC"){
                for (let index = 0; index < ReturnDepartureTimeOrder.sort().length; index++) {
                    for (let Divindex = 1; Divindex <=$('.ReturnGlobalDiv').length; Divindex++) {
                    var dataDepraturetime=$("#ReturnSortDeparture"+Divindex).attr("data-Deprature-time")
                    if (dataDepraturetime==ReturnDepartureTimeOrder[index]) {
                    $(".ReturnMainDiv").append($("#ReturnSortDeparture"+Divindex));
                    }
                
                    
                  }
                }
                $("#return_departure_order").attr("data-departureordervalue", "DESC");
            } 
            else{
               for (let index = 0; index < ReturnDepartureTimeOrder.sort().reverse().length; index++) {
                    for (let Divindex = 1; Divindex <=$('.ReturnGlobalDiv').length; Divindex++) {
                    var dataDepraturetime=$("#ReturnSortDeparture"+Divindex).attr("data-Deprature-time")
                    if (dataDepraturetime==ReturnDepartureTimeOrder[index]) {
                    $(".ReturnMainDiv").append($("#ReturnSortDeparture"+Divindex));
                    }
                
                    
                 }
               }
                $("#return_departure_order").attr("data-departureordervalue", "DESC"); 
            }

    });

    // baggage_rules
    function BaggageCancelRule(count,flights){
        // alert(flights);    
        var loading ='<img id="loading-image-small" src="{{ asset('public/loder-small.gif') }}" alt="Loading..." style=" position: absolute;top: 100px;left: 431px;z-index: 100;"/>';
        $('#loading_small').append(loading);
        $('#loading_small').show();

        $("#cancellation"+count).empty();
        $("#reschedule"+count).empty();
        $("#checkIn"+count).empty();
        $("#cabin"+count).empty();
        var count=count;
        var flights=flights;
        
        $.ajax({
            type: "POST",
            url: "{{ route('BaggageCancelRuleajax') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                count:count,
                flights:flights
            },
            success: function(data){
                // alert(data);
                var obj = JSON.parse ( data );
                // alert(obj.baggageallowanceinfo);
                $('#loading_small').hide();
                $('#loading_small').empty();
                var changepenalty='<i class="las la-pound-sign"></i>'+obj.changepenalty.replace('GBP','');
                var cancelpenalty='<i class="las la-pound-sign"></i>'+obj.cancelpenalty.replace('GBP','');
                var baggageallowanceinfo=obj.baggageallowanceinfo+"gs";
                var carryonallowanceinfo=obj.carryonallowanceinfo+"gs";
                
                $("#cancellation"+count).append(cancelpenalty);
                $("#reschedule"+count).append(changepenalty);
                $("#checkIn"+count).append(baggageallowanceinfo);
                $("#cabin"+count).append(carryonallowanceinfo);

            }
        });

    }
    function showLoder(){
        $('#loading').show();
    }

    function OnwardFlightDetails(count,flight_data,addFrom,addTo,adults,children,infant){
        var count=count;
        var journeydata=flight_data[0];
        var pricedata=flight_data[1];
       
        for (x in journeydata) {
            // var deptime=journeydata[x].length;
            var airline=journeydata[x][0]['Airline'][0];
            var deptime=journeydata[x][0]['Depart'][0];
            var arrive=journeydata[x][(journeydata[x].length)-1]['Arrive'][0];
        }
        // alert(airline+"  "+deptime+"  "+arrive);
        var time_Onward=DateFormat(deptime)+" → "+DateFormat(arrive);
        // alert(DateFormat(deptime));
        $('#time_Onward').empty();
        $("#time_Onward").append(time_Onward);

        for (x in pricedata) {
            var price= pricedata[x]['Total Price'][0].replace('GBP','');
        }
        // alert(price);
        var price_Onward="£ "+price;
        var return_total_price=$("#return_total_price").val();
        // alert(inputvalreturnflight);
        var total_price="£ "+(parseFloat(price)+parseFloat(return_total_price)).toFixed(2);
        // alert(total_price);
        // var totalPriceDiv=""+total_price
        $('#totalPriceDiv').empty();
        $("#totalPriceDiv").append(total_price);

        var src_val="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir"+airline+".gif"
        $('#img_Onward').removeAttr('src');
        $("#img_Onward").attr('src',src_val);
        
        $('#price_Onward').empty();
        $("#price_Onward").append(price_Onward);

        $('#total_price').removeAttr('value');
        $("#total_price").attr('value',price);

        var onwordflights=$("input[name='radioFlight']:checked").val();
        $("#flights").removeAttr('value');
        $("#flights").attr('value',onwordflights);
        // var returnflights=$("input[name='radioReturnFlight']:checked").val();
        
    }
    function ReturnFlightDetails(count,flight_data,addFrom,addTo,adults,children,infant){
        // alert("hii");
        var count=count;
        var journeydata=flight_data[0];
        var pricedata=flight_data[1];
       
        for (x in journeydata) {
            // var deptime=journeydata[x].length;
            var airline=journeydata[x][0]['Airline'][0];
            var deptime=journeydata[x][0]['Depart'][0];
            var arrive=journeydata[x][(journeydata[x].length)-1]['Arrive'][0];
        }
        // alert(airline+"  "+deptime+"  "+arrive);
        var time_Return=DateFormat(deptime)+" → "+DateFormat(arrive);
        // alert(DateFormat(deptime));
        $('#time_Return').empty();
        $("#time_Return").append(time_Return);

        for (x in pricedata) {
            var price= pricedata[x]['Total Price'][0].replace('GBP','');
        }
        // alert(price);
        var price_Onward="£ "+price;
        var return_total_price=$("#total_price").val();
        // alert(inputvalreturnflight);
        var total_price="£ "+(parseFloat(price)+parseFloat(return_total_price)).toFixed(2);
        // alert(total_price);
        // var totalPriceDiv=""+total_price
        $('#totalPriceDiv').empty();
        $("#totalPriceDiv").append(total_price);
        
        var src_val="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir"+airline+".gif"
        $('#img_Return').removeAttr('src');
        $("#img_Return").attr('src',src_val);
        
        $('#price_Return').empty();
        $("#price_Return").append(price_Onward);

        $('#return_total_price').removeAttr('value');
        $("#return_total_price").attr('value',price);

        var onwordflights=$("input[name='radioReturnFlight']:checked").val();
        $("#return_flights_data").removeAttr('value');
        $("#return_flights_data").attr('value',onwordflights);
    }

    function DateFormat(stringDate){
        var date = new Date(stringDate);
        var seconds = date.getSeconds();
        var minutes = date.getMinutes();
        var hour = date.getHours();
        var HoursMinutes = hour + ":" + minutes;
        // alert(HoursMinutes);
        return HoursMinutes;
    }
</script>
@endsection