@extends('common.master')
@section('content')

<section class="search-packages bg-light-gray py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="confirmation-step">
                    <li><a href="#" class="active"><span>1</span> Flight Details</a></li>
                    <li><a href="#" class="active"><span>2</span> Passenger Details</a></li>
                    <li><a href="#"><span>3</span> Payment</a></li>
                    <li><a href="#"><span>4</span> Confirm</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <h4 class="font-weight-500">Passanger Details</h4><hr>
                    <div>
                        <span class="badge badge-pill badge-warning">Note:</span> Please make sure you enter the Name as per your govt. photo id.
                    </div><hr>
                    <div class="passanger-details">
                    <form name="pass_details" method="POST" action="{{route('showpayment')}}">
                    @csrf
                        @for ($i=1; $i <= $per_flight_details->adults; $i++)
                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2"><i class="las la-user-circle"></i> Adult {{$i}}</h6>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <select class="form-control custom-select" name="title{{$i}}" id="title{{$i}}" required>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Mstr">Mstr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name{{$i}}" id="first_name{{$i}}" required class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name{{$i}}" id="last_name{{$i}}" required class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control custom-select" name="gender{{$i}}" id="gender{{$i}}" required>
                                            <option value="Male">Male</option>
                                            <option value="Male">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <label>Date of birth</label>
                                    <div id="datetimepicker" class="input-group">
                                        <input type="text" name="date_of_birth{{$i}}" id="date_of_birth{{$i}}" required placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                        <div class="input-group-append add-on">
                                        <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Seating</label>
                                        <select class="form-control custom-select" name="seating{{$i}}" id="seating{{$i}}" required>
                                            <option value="No preference">No preference</option>  
                                            <option value="Aisle seat">Aisle seat</option>
                                            <option value="Bulkhead seat">Bulkhead seat</option>
                                            <option value="Cradle/Baby Basket seat">Cradle/Baby Basket seat</option>
                                            <option value="Exit seat">Exit seat</option>
                                            <option value="Non smoking window seat">Non smoking window seat</option>
                                            <option value="Suitable for disable seat">Suitable for disable seat</option>
                                            <option value="Suitable for disable seat">Suitable for disable seat</option>
                                            <option value="Legspace">Legspace</option>
                                            <option value="Non smoking seat">Non smoking seat</option>
                                            <option value="Overwing seat">Overwing seat</option>
                                            <option value="Smoking seat">Smoking seat</option>
                                            <option value="Window seat">Window seat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Assistance</label>
                                        <select class="form-control custom-select" name="assistance{{$i}}" id="assistance{{$i}}" required>
                                            <option selected="selected" value="No preference">No preference</option>
                                            <option value="Overwing seat">Deaf</option>
                                            <option value="Smoking seat">Blind</option>
                                            <option value="Window seat">Wheelchair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Meal</label>
                                        <select class="form-control custom-select" name="meal{{$i}}" id="meal{{$i}}">
                                            <option value="No preference">No preference</option>
                                            <option value="BBML">Baby Meal</option>
                                            <option value="BLML">Bland Meal</option>
                                            <option value="CHML">Child Meal Meal</option>
                                            <option value="DBML">Diabetic Meal</option>
                                            <option value="FPML">Fruit Platter Meal</option>
                                            <option value="GFML">Gluten Intolerant Meal</option>
                                            <option value="HNML">Hindu Meal</option>
                                            <option value="KSML">Kosher Meal</option>
                                            <option value="LCML">Low Calorie Meal</option>
                                            <option value="LFML">Low Fat Meal</option>
                                            <option value="NLML">Low Lactose Meal</option>
                                            <option value="LSML">Low Salt Meal</option>
                                            <option value="MOML">Muslim Meal</option>
                                            <option value="RVML">Raw Vegetarian Meal</option>
                                            <option value="SFML">Seafood Meal</option>
                                            <option value="SPML">Special Meal</option>
                                            <option value="AVML">Vegetarian Hindu Meal</option>
                                            <option value="VJML">Vegetarian Jain Meal</option>
                                            <option value="VLML">Vegetarian Lacto-Ovo</option>
                                            <option value="VGML">Vegetarian Meal</option>
                                            <option value="VOML">Vegetarian Oriental Meal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2">Passenger Address</h6>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Post code</label>
                                        <input type="text" class="form-control" placeholder="Enter post code">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control" placeholder="Enter Address Line 1">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" class="form-control" placeholder="Enter Address Line 2">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="Enter your town/city name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>State code</label>
                                        <input type="text" class="form-control" placeholder="Enter your state code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2">Contact Detail</h6>
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label>Email id</label>
                                        <input type="email" placeholder="Enter email id" name="" class="form-control mb-2"/>
                                        <small class="text-muted">Your ticket will be sent to this email address</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="number" placeholder="Enter" name="" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        @endfor
                        @for ($i=1; $i <= $per_flight_details->children; $i++)
                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2"><i class="las la-user-circle"></i> Children {{$i}}</h6>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <select class="form-control custom-select" name="children_title{{$i}}" id="children_title{{$i}}" required>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Mstr">Mstr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="children_first_name{{$i}}" id="children_first_name{{$i}}" required class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="children_last_name{{$i}}" id="children_last_name{{$i}}" required class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control custom-select" name="children_gender{{$i}}" id="children_gender{{$i}}" required>
                                            <option value="Male">Male</option>
                                            <option value="Male">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <label>Date of birth</label>
                                    <div id="datetimepicker" class="input-group">
                                        <input type="text" name="children_date_of_birth{{$i}}" id="children_date_of_birth{{$i}}" required placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                        <div class="input-group-append add-on">
                                        <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Seating</label>
                                        <select class="form-control custom-select" name="children_seating{{$i}}" id="children_seating{{$i}}" required>
                                            <option value="No preference">No preference</option>
                                            <option value="Aisle seat">Aisle seat</option>
                                            <option value="Bulkhead seat">Bulkhead seat</option>
                                            <option value="Cradle/Baby Basket seat">Cradle/Baby Basket seat</option>
                                            <option value="Exit seat">Exit seat</option>
                                            <option value="Non smoking window seat">Non smoking window seat</option>
                                            <option value="Suitable for disable seat">Suitable for disable seat</option>
                                            <option value="Suitable for disable seat">Suitable for disable seat</option>
                                            <option value="Legspace">Legspace</option>
                                            <option value="Non smoking seat">Non smoking seat</option>
                                            <option value="Overwing seat">Overwing seat</option>
                                            <option value="Smoking seat">Smoking seat</option>
                                            <option value="Window seat">Window seat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Assistance</label>
                                        <select class="form-control custom-select" name="children_assistance{{$i}}" id="children_assistance{{$i}}" required>
                                            <option value="No preference">No preference</option>
                                            <option value="Overwing seat">Deaf</option>
                                            <option value="Smoking seat">Blind</option>
                                            <option value="Window seat">Wheelchair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Meal</label>
                                        <select class="form-control custom-select" name="children_meal{{$i}}" id="children_meal{{$i}}">
                                            <option value="No preference">No preference</option>
                                            <option value="BBML">Baby Meal</option>
                                            <option value="BLML">Bland Meal</option>
                                            <option value="CHML">Child Meal Meal</option>
                                            <option value="DBML">Diabetic Meal</option>
                                            <option value="FPML">Fruit Platter Meal</option>
                                            <option value="GFML">Gluten Intolerant Meal</option>
                                            <option value="HNML">Hindu Meal</option>
                                            <option value="KSML">Kosher Meal</option>
                                            <option value="LCML">Low Calorie Meal</option>
                                            <option value="LFML">Low Fat Meal</option>
                                            <option value="NLML">Low Lactose Meal</option>
                                            <option value="LSML">Low Salt Meal</option>
                                            <option value="MOML">Muslim Meal</option>
                                            <option value="RVML">Raw Vegetarian Meal</option>
                                            <option value="SFML">Seafood Meal</option>
                                            <option value="SPML">Special Meal</option>
                                            <option value="AVML">Vegetarian Hindu Meal</option>
                                            <option value="VJML">Vegetarian Jain Meal</option>
                                            <option value="VLML">Vegetarian Lacto-Ovo</option>
                                            <option value="VGML">Vegetarian Meal</option>
                                            <option value="VOML">Vegetarian Oriental Meal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <!-- <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2"><i class="las la-user-circle"></i> Adult 2</h6>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <select class="form-control custom-select" name="">
                                            <option value="Title">---Select---</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Ms">Ms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter last name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control custom-select" name="">
                                            <option value="Male">Male</option>
                                            <option value="Male">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <label>Date of birth</label>
                                    <div id="datetimepicker" class="input-group">
                                        <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
                                        <div class="input-group-append add-on">
                                        <span class="input-group-text bg-white pl-0"><i class="lar la-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2">Passenger Address</h6>
                            <div class="row">
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Post code</label>
                                        <input type="text" name="postcode" id="postcode" required class="form-control" placeholder="Enter post code">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" name="add_1" id="add_1" required class="form-control" placeholder="Enter Address Line 1">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Address Line 2</label>
                                        <input type="text" name="add_2" id="add_2" required class="form-control" placeholder="Enter Address Line 2">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" id="city" required class="form-control" placeholder="Enter your town/city name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="state_code" id="state_code" required class="form-control" placeholder="Enter your state code">
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control custom-select" name="country" id="country" required>
                                            <option value="">--Select--</option>
                                            @foreach($countries as $countriess)
                                            <option value="{{$countriess->name}}">{{$countriess->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2">Contact Details</h6>
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label>Email id</label>
                                        <input type="email" name="email" id="email" required placeholder="Enter email id" class="form-control mb-2"/>
                                        <small class="text-muted">Your ticket will be sent to this email address</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="number" name="mob_no" id="mob_no" required placeholder="Enter" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="flight" id="flight" value="{{$per_flight_details->flight}}">
                        <input type="hidden" name="flights" id="flights" value="{{$per_flight_details->flights}}">
                        <input type="hidden" name="flights_outbound" id="flights_outbound" value="{{$per_flight_details->flights_outbound}}">
                        <input type="hidden" name="flights_inbound" id="flights_inbound" value="{{$per_flight_details->flights_inbound}}">
                        <input type="hidden" name="return_flights" id="return_flights" value="{{$per_flight_details->return_flights}}">
                        <input type="hidden" name="addFrom" id="addFrom" value="{{$per_flight_details->addFrom}}">
                        <input type="hidden" name="addTo" id="addTo" value="{{$per_flight_details->addTo}}">
                        <input type="hidden" name="adults" id="adults" value="{{$per_flight_details->adults}}">
                        <input type="hidden" name="children" id="children" value="{{$per_flight_details->children}}">
                        <input type="hidden" name="infant" id="infant" value="{{$per_flight_details->infant}}">
                        <button type="submit" class="btn btn-primary" onclick="showLoder();">Proceed to payment</button>
                        <!-- <a href="payment.php" class="btn btn-primary">Proceed to payment</a> -->
                    </form>
                    </div>
                </div>
            </div>
            @if(isset($return_flights))
            <div class="col-md-3">
                <div class="card">
                    <h4 class="font-weight-500 mb-0">Fare Summary</h4>
                    <span class="text-muted">Travelers {{$per_flight_details->adults}} Adult</span>
                    <table class="table table-small mt-2 mb-0">
                        <tr>
                            <td>Base Fare x {{$per_flight_details->adults}}</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>{{number_format((float)( (str_replace('GBP','',$return_flights[2]['price']['ApproximateBasePrice']))*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                        <tr>
                            <td>Taxes x {{$per_flight_details->adults}}</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>{{number_format((float)( (str_replace('GBP','',$return_flights[2]['price']['Taxes']))*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                        <tr>
                            <td>Other taxes</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>0.0</td>
                        </tr>
                        <tr class="font-weight-bold bg-light">
                            <td>Total</td>
                            <td class="text-right text-danger"><i class="las la-pound-sign"></i>{{number_format((float)( (str_replace('GBP','',$return_flights[2]['price']['ApproximateBasePrice']))*$per_flight_details->adults)+( (str_replace('GBP','',$return_flights[2]['price']['Taxes']))*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            @else
            <div class="col-md-3">
                <div class="card">
                    <h4 class="font-weight-500 mb-0">Fare Summary</h4>
                    <span class="text-muted">Travelers {{$per_flight_details->adults}} Adult</span>
                    <table class="table table-small mt-2 mb-0">
                        <tr>
                            <td>Base Fare x {{$per_flight_details->adults}}</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>{{number_format((float)(str_replace('GBP','',$data[2]['price']['ApproximateBasePrice'])*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                        <tr>
                            <td>Taxes x {{$per_flight_details->adults}}</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>{{number_format((float)(str_replace('GBP','',$data[2]['price']['Taxes'])*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                        <tr>
                            <td>Other taxes</td>
                            <td class="text-right"><i class="las la-pound-sign"></i>0.0</td>
                        </tr>
                        <tr class="font-weight-bold bg-light">
                            <td>Total</td>
                            <td class="text-right text-danger"><i class="las la-pound-sign"></i>{{number_format((float)(str_replace('GBP','',$data[2]['price']['ApproximateBasePrice'])*$per_flight_details->adults)+(str_replace('GBP','',$data[2]['price']['Taxes'])*$per_flight_details->adults),2, '.', '')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection
