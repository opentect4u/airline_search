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
                <div class="form-group">
                    <ul class="cld__selectors">
                        <li><a href="#" class="active">One way</a></li>
                        <li><a href="#">Round trip</a></li>
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
                            <div id="datetimepicker" class="input-group">
                                <input type="text" name="returning_date" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                <div class="input-group-append add-on">
                                <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Passangers & Class</label>
                            <input type="text" name="" placeholder="1 Adult, 2 Child, Economy" class="form-control" onclick="traveller_selection();">
                        
                            <div id="traveller_selection" style="display:none;">
                                <div class="row m-0">
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Adults <small>(12+ yrs)</small></label>
                                            <select name="adults" class="custom-select">
                                                <option selected>1</option>
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
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Children <small>(2-15 yrs)</small></label>
                                            <select name="children" class="custom-select">
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
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Infant <small>(0-23 mths)</small></label>
                                            <select name="infant" class="custom-select">
                                                <option selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Travel Class</label>
                                            <select name="travel_class" class="custom-select">
                                                <option value="Economy" selected>Economy</option>
                                                <option value="Business">Business</option>
                                                <option value="First Class">First Class</option>
                                                <option value="Premium Economy">Premium Economy</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" id="flight_submit" class="btn btn-primary">Search</button>
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
                    <div class="row row-heading align-items-center d-flex d-lg-none">
                        <div class="col-6">
                            76 flights found
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="btn btn-default filter-open border">Filters <i class="las la-filter"></i></a>
                        </div>
                    </div>
                    <div class="row row-heading d-none d-md-flex">
                        <div class="col-md-3">Airlines</div>
                        <div class="col-md-2">Departure</div>
                        <div class="col-md-2 text-center">Duration</div>
                        <div class="col-md-2">Arrival</div>
                        <div class="col-md-3 text-center">Price <i class="las la-long-arrow-alt-up"></i></div>
                    </div>
                @foreach($flights as $flight)
                <!-- {{ $flight['flight']['journey']['Flight'] }} -->
                <div class="flight-devider Airline{{ $flight['flight']['journey']['Airline'] }}">
                    <div class="row align-items-center">
                        <div class="col-md-3 mb-2 mb-md-0">
                            <div class="media">
                                <div class="media-left"><img src="https://goprivate.wspan.com/sharedservices/images/airlineimages/logoAir{{$flight['flight']['journey']['Airline'] }}.gif" alt="6E.png" style="width:40px;height:40px;" class="mr-2"/></div>
                                <div class="media-body align-self-center">
                                    <h6 class="m-0">{{ $flight['flight']['journey']['Airline'] }}<br><small class="text-muted">6E-491</small></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-4">
                            <small><i class="las la-plane-departure h6"></i>{{ \Carbon\Carbon::parse($flight['flight']['journey']['Depart'])->format('d M Y') }}</small>
                            <h6 class="font-weight-bold mb-0">{{ \Carbon\Carbon::parse($flight['flight']['journey']['Depart'])->format('h:i') }}</h6>
                            <span class="text-muted">{{$flight['flight']['journey']['From'] }}</span>
                        </div>
                        <div class="col-md-2 text-center col-4">
                            <span class="exchange-arrow exchange-relative m-auto"><i class="las la-exchange-alt"></i></span>
                            <h5 class="font-weight-600 mb-0 mt-2">{{ \Carbon\Carbon::parse($flight['flight']['journey']['Depart'])->diff(\Carbon\Carbon::parse($flight['flight']['journey']['Arrive']))->format('%Hh %Im') }}</h5>
                            <small class="text-muted">Non stop</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <small><i class="las la-plane-arrival h6"></i> {{ \Carbon\Carbon::parse($flight['flight']['journey']['Arrive'])->format('d M Y') }}</small>
                            <h6 class="font-weight-bold mb-0">{{ \Carbon\Carbon::parse($flight['flight']['journey']['Arrive'])->format('h:i') }}</h6>
                            <span class="text-muted">{{$flight['flight']['journey']['To'] }}</span>
                        </div>
                       
                        <div class="col-md-3 mt-2 mt-md-0 text-center">
                            <h3 class="font-weight-bold"><i class="las la-pound-sign"></i>{{ str_replace('GBP','',$flight['flight']['price']['Total Price'] ) }}</h3>
                            <!-- <a href="flight-details.php" class="btn btn-primary">Book Now</a> -->
                            <form action="{{ route('flightDetails') }}" method="POST">
                                @csrf
                                <input type="text" name="flight" value="{{ $flight['flight'] }}" hidden>
                                <input type="text" name="from" value="{{ $flight['flight']['journey']['From'] }}" hidden>
                                <input type="text" name="depart" value="{{  \Carbon\Carbon::parse($flight['flight']['journey']['Depart'])->format('h:i') }}" hidden>
                                <input type="text" name="arrive" value="{{  \Carbon\Carbon::parse($flight['flight']['journey']['Arrive'])->format('h:i') }}" hidden>
                                <input type="text" name="to" value="{{ $flight['flight']['journey']['To'] }}" hidden>
                                <input type="text" name="journeyTime" value="{{ \Carbon\Carbon::parse($flight['flight']['journey']['Depart'])->diff(\Carbon\Carbon::parse($flight['flight']['journey']['Arrive']))->format('%Hhrs %Imins') }}" hidden>
                                <input type="text" name="airline" value="{{ $flight['flight']['journey']['Airline'] }}" hidden>
                                <input type="text" name="class" value="{{ $flight['flight']['price']['Cabin Class'] }}" hidden>
                                <input type="text" name="flight" value="{{ $flight['flight']['journey']['Flight'] }}" hidden>
                                <input type="text" name="adults" value="{{ $searched->adults }}" hidden>
                                <input type="text" name="children" value="{{ $searched->children }}" hidden>
                                <input type="text" name="infant" value="{{ $searched->infant }}" hidden>
                                <input type="text" name="approxBaseFare" value="{{ $flight['flight']['price']['Approx Base Price'] }}" hidden>
                                <input type="text" name="taxes" value="{{ $flight['flight']['price']['Taxes'] }}" hidden>
                                <input type="text" name="totalPrice" value="{{ $flight['flight']['price']['Total Price'] }}" hidden>
                                <button type="submit" class="btn btn-primary" >Book Now</button>
                            </form>
                            <br>
                            <a href="#" class="mt-1 d-inline-block h5" data-toggle="collapse" data-target="#flight-details{{ $loop->index+1 }}">View flight details</a>
                        </div>
                    </div>
                    <div id="flight-details{{ $loop->index+1 }}" class="card p-3 collapse mt-3">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#fare_details{{ $loop->index+1 }}">Fare Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#baggage_rules{{ $loop->index+1 }}">Baggage Rules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#cancellation_rules{{ $loop->index+1 }}">Cancellation Rules</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content row mt-3">
                            <div id="fare_details{{ $loop->index+1 }}" class="container tab-pane active">
                                <table class="table">
                                    <tr>
                                        <td>Base Fare (1 Adult)</td>
                                        <td><i class="fas fa-rupee-sign"></i> {{ $flight['flight']['price']['Approx Base Price'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Taxes and Fees (1 Adult)</td>
                                        <td><i class="fas fa-rupee-sign"></i> {{ $flight['flight']['price']['Taxes'] }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Fare (1 Adult)</td>
                                        <td><i class="fas fa-rupee-sign"></i> {{ $flight['flight']['price']['Total Price'] }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="baggage_rules{{ $loop->index+1 }}" class="container tab-pane fade">
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
                            <div id="cancellation_rules{{ $loop->index+1 }}" class="container tab-pane fade"><br>
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
               @endforeach
               
                
            </div>
        </div>
    </div>
    </div>
</section>

@endsection

@section('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->
<script type="text/javascript">
    $( document ).ready(function() {
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
      })
    });
</script>
@endsection