@extends('common.master')
@section('content')

<div class="middle">
    <div class="search-results">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">Hotel In</small>
                    <h6 class="font-weight-600 mb-0"><?php 
                    // use DB;
                    $city_name =  str_replace(')','',explode('(',$searched->city_name)[0]);
                    $country_code =  str_replace(')','',explode('(',$searched->city_name)[1]);
                    $countey_name=DB::table('hotel_countries')->where('country_code',$country_code)->value('country_name');
                    echo $city_name.", ".$countey_name;
                    ?></h6>
                    <!-- searched -->
                    <!-- <h6 class="font-weight-600 mb-0">Mumbai, India</h6> -->
                </div>
                <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Check In</small>
                    <h6 class="font-weight-600 mb-0">{{ date("d/m/Y", strtotime($searched->check_in))}}</h6>
                </div>
                <div class="col-md col-6 my-2 my-md-0">
                    <small class="text-muted d-block mb-1">Check Out</small>
                    <h6 class="font-weight-600 mb-0">{{ date("d/m/Y", strtotime($searched->check_out))}}</h6>
                </div>
                <div class="col-md col-6">
                    <small class="text-muted d-block mb-1">Room and Guests</small>
                    <h6 class="font-weight-600 mb-0"><?php echo $searched->hotel_adults." Adult"; if($searched->hotel_child>0){echo ", ".$searched->hotel_child." Child";} if($searched->hotel_infant>0){echo ", ".$searched->hotel_infant." Infant";} ?></h6>
                </div>
                <div class="col-md mt-md-0 col-6">
                    <a href="#" class="btn btn-yellow btn-sm" data-toggle="collapse" data-target="#search-container">Modify Search</a>
                </div>
            </div>
        </div>
    </div>
    <section id="search-container" class="bg-white collapse">
        <div class="container-fluid">
            <div class="cld__book__form search__modify pt-4">
            <form method="post" class="" action="{{route('hotels')}}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Destination</label>
                            <input type="text" name="city_name" id="city_name" value="{{$searched->city_name}}" required placeholder="New Delhi" class="form-control search_hotel">
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Check In</label>
                            <div id="check_in_datetimepicker" class="input-group check_in_datetimepickerclass">
                                <input type="text" name="check_in" required id="check_in" value="{{$searched->check_in}}" placeholder="dd/mm/yyyy" class="form-control border-right-0 check_in_datetimepickerclass" data-format="dd-MM-yyyy">
                                <div class="input-group-append add-on check_in_datetimepickerclass">
                                  <span class="input-group-text bg-white pl-0 check_in_datetimepickerclass"><i class="lar la-calendar-alt check_in_datetimepickerclass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Check Out</label>
                            <div id="check_out_datetimepicker" class="input-group check_out_datetimepickerclass">
                                <input type="text" name="check_out" required id="check_out" value="{{$searched->check_out}}" placeholder="dd/mm/yyyy" class="form-control border-right-0 check_out_datetimepickerclass" data-format="dd-MM-yyyy">
                                <div class="input-group-append add-on check_out_datetimepickerclass">
                                  <span class="input-group-text bg-white pl-0 check_out_datetimepickerclass"><i class="lar la-calendar-alt check_out_datetimepickerclass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Room & Guests</label>
                            <input type="text" name="hotel_travel_details" id="hotel_travel_details" placeholder="1 Room, 1 Adult" class="form-control" onclick="hotel_traveller_selection();">
                        
                            <div id="hotel_traveller_selection" style="display:none;">
                                <div class="row m-0">
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Room</label>
                                            <select name="hotel_room" id="hotel_room" class="custom-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Adults <small>(18+ yrs)</small></label>
                                            <select name="hotel_adults" id="hotel_adults" class="custom-select">
                                            <option value="1" <?php if($searched->hotel_adults==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->hotel_adults==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->hotel_adults==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->hotel_adults==4){echo "selected";}?>>4</option>
                                                <option value="5" <?php if($searched->hotel_adults==5){echo "selected";}?>>5</option>
                                                <option value="6" <?php if($searched->hotel_adults==6){echo "selected";}?>>6</option>
                                                <option value="7" <?php if($searched->hotel_adults==7){echo "selected";}?>>7</option>
                                                <option value="8" <?php if($searched->hotel_adults==8){echo "selected";}?>>8</option>
                                                <option value="9" <?php if($searched->hotel_adults==9){echo "selected";}?>>9</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Child <small>(2-15 yrs)</small></label>
                                            <select name="hotel_child" id="hotel_child" class="custom-select">
                                                <option >0</option>
                                                <option value="1" <?php if($searched->hotel_child==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->hotel_child==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->hotel_child==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->hotel_child==4){echo "selected";}?>>4</option>
                                                <option value="5" <?php if($searched->hotel_child==5){echo "selected";}?>>5</option>
                                                <option value="6" <?php if($searched->hotel_child==6){echo "selected";}?>>6</option>
                                                <option value="7" <?php if($searched->hotel_child==7){echo "selected";}?>>7</option>
                                                <option value="8" <?php if($searched->hotel_child==8){echo "selected";}?>>8</option>
                                                <option value="9" <?php if($searched->hotel_child==9){echo "selected";}?>>9</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                        <div class="form-group">
                                            <label>Infant <small>(0-23 mths)</small></label>
                                            <select name="hotel_infant" id="hotel_infant" class="custom-select">
                                                <option >0</option>
                                                <option value="1" <?php if($searched->hotel_infant==1){echo "selected";}?>>1</option>
                                                <option value="2" <?php if($searched->hotel_infant==2){echo "selected";}?>>2</option>
                                                <option value="3" <?php if($searched->hotel_infant==3){echo "selected";}?>>3</option>
                                                <option value="4" <?php if($searched->hotel_infant==4){echo "selected";}?>>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2">
                                    <div class="form-group">
                                        <input type="button" name="" id="hotel_buttonApply" class="btn btn-primary" onclick="hotel_traveller_selection();" value="Apply">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" id="hotel_submit" name="hotel_submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>


    <section class="search-packages mt-4">
        <div class="container-fluid">
            <div class="row">
                @if(count($hotels) > 0)

                <div class="col-lg-3 filters_wrapper">
                    <div class="card">
                        <h4 class="font-weight-600 m-0">Filter Result <span class="d-inline-block d-lg-none  filter-open float-right"><i class="las la-times"></i></span></h4>
                        <div class="filter-set">
                            <h6 class="font-weight-600">Hotel Name </h6>
                            <select id="hotelNameFilter" class="form-control">
                                <option value="">Recommended</option>
                                @foreach($hotels[0] as $hotel)
                                @for ($i=0; $i < count($hotel); $i++)
                                <option value="{{$hotel[$i]['HotelName']}}">{{$hotel[$i]['HotelName']}}</option>
                                @endfor
                                @endforeach
                            <!-- <input type="text" class="form-control" placeholder="Search by hotel name" name=""/> -->
                            </select>
                        </div>
                        <div class="filter-set">
                            <h6 class="font-weight-600">Hotel Rating </h6>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Rating5" name="Rating" value="Rating5" onclick="filter()">
                                <label class="custom-control-label" for="Rating5"><img src="{{ asset('public/images/5-star.png')}}" alt="5 star"/></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Rating4" name="Rating" value="Rating4" onclick="filter()">
                                <label class="custom-control-label" for="Rating4"><img src="{{ asset('public/images/4-star.png')}}" alt="5 star"/></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Rating3" name="Rating" value="Rating3" onclick="filter()">
                                <label class="custom-control-label" for="Rating3"><img src="{{ asset('public/images/3-star.png')}}" alt="5 star"/></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Rating2" name="Rating" value="Rating2" onclick="filter()">
                                <label class="custom-control-label" for="Rating2"><img src="{{ asset('public/images/2-star.png')}}" alt="5 star"/></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Rating1" name="Rating" value="Rating1" onclick="filter()">
                                <label class="custom-control-label" for="Rating1"><img src="{{ asset('public/images/1-star.png')}}" alt="5 star"/></label>
                            </div>
                        </div>
                        <div class="filter-set">
                            <h6 class="font-weight-600">Price Range</h6>
                            <label for="customRange"><i class="fas fa-rupee-sign"></i> 26,000/-</label>
                            <input type="range" class="custom-range" id="customRange" name="points1">
                        </div>
                        <div class="filter-set">
                            <h6 class="font-weight-600">Hotel types </h6>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Hotel</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Homestay</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Guest House</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Resort</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Vila</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Hostel</label>
                            </div>
                        </div>
                        <div class="filter-set">
                            <h6 class="font-weight-600">Facilities </h6>
                            @foreach($allfacilities as $allfacility)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Facility{{$allfacility}}" name="Facility" value="Facility{{str_replace(' ','',str_replace('/','',$allfacility))}}" onclick="filter()">
                                <label class="custom-control-label" for="Facility{{$allfacility}}">{{$allfacility}}</label>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="card">
                        <div class="row row-heading align-items-center d-flex d-lg-none">
                            <div class="col-6">
                                76 hotels found
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-default filter-open border">Filters <i class="las la-filter"></i></a>
                            </div>
                        </div>
                        <div class="package-devider">
                            <div class="media">
                                <b>Sort by : </b>&nbsp;&nbsp;
                                <select id="sort_by" name="sort_by" class="form-control col-lg-4">
                                    <option value="">Recommended</option>
                                    <option value="Price_Low_to_High">Price Low to High</option>
                                    <option value="Price_High_to_Low">Price High to Low</option>
                                    <option value="Rating_Low_to_High">Rating Low to High</option>
                                    <option value="Rating_High_to_Low">Rating High to Low</option>
                                    <option value="Hotel_Name_A_to_Z">Hotel Name A to Z</option>
                                    <option value="Hotel_Name_Z_to_A">Hotel Name Z to A</option>
                                </select>
                            </div>
                        </div>
                        </br>

                        <div class="MainDiv">
                        <?php $count=1; $pricearray=[]; ?>
                        @foreach($hotels[0] as $hotel)
                        @for ($i=0; $i < count($hotel); $i++)
                        <?php
                            $price=isset($hotel[$i]['Options']['Option'][0]['TotalPrice'])?(json_decode($hotel[$i]['Options']['Option'][0]['TotalPrice']) *100):(json_decode($hotel[$i]['Options']['Option']['TotalPrice']) *100);
                            array_push($pricearray,$price);

                        ?>
                        <!-- {{$hotel[$i]['HotelId']}} -->
                        <!-- {{json_decode($hotel[$i]['StarRating'])}} -->
                        <div class="package-devider GlobalDiv Rating{{json_decode($hotel[$i]['StarRating'])}} priceRange hotelName_{{$hotel[$i]['HotelName']}} @foreach($hotelDetails[$i]['Facilities']['Facility'] as $facility)
                                                @if($facility['FacilityType'] =='Hotel Facilities')
                                                    {{'Facility'.str_replace(' ','',str_replace('/','',$facility['FacilityName'])).' '}}
                                                    
                                                @endif
                                                @endforeach 
                            SortPrice{{($i+1)}}" 
                            data-GlobalDiv="1" data-price-div="{{isset($hotel[$i]['Options']['Option'][0]['TotalPrice'])?(json_decode($hotel[$i]['Options']['Option'][0]['TotalPrice']) *100):(json_decode($hotel[$i]['Options']['Option']['TotalPrice']) *100)}}">
                            <div class="media">
                                <div class="hotels-image-media mr-3" style="background:url('{{isset($hotelDetails[$i]['Images']['Image'][0])?$hotelDetails[$i]['Images']['Image'][0]:''}}') no-repeat center center;background-size:cover;"></div>
                                <div class="media-body">
                                    <h2 class="font-weight-600">{{$hotel[$i]['HotelName']}}</h2>
                                    <address class="text-muted mb-0">{{$hotelDetails[$i]['Address']}}</address>
                                    <div class="rating">
                                        @if($hotel[$i]['StarRating']==1)
                                        <i class="las la-star active"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i> 1.0
                                        @elseif($hotel[$i]['StarRating']==2)
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i> 2.0
                                        @elseif($hotel[$i]['StarRating']==3)
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i> 3.0
                                        @elseif($hotel[$i]['StarRating']==4)
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star"></i> 4.0
                                        @elseif($hotel[$i]['StarRating']==5)
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i>
                                        <i class="las la-star active"></i> 5.0
                                        @endif
                                    </div>
                                    <div class="row d-none d-md-flex">
                                        <div class="col-6">
                                            <span class="text-muted mt-3 d-block">Facilities</span>
                                            <ul class="d-block mt-1">
                                                <?php $count=0?>
                                                @foreach($hotelDetails[$i]['Facilities']['Facility'] as $facility)
                                                <!-- {{print_r($facility)}} -->
                                                @if($facility['FacilityType'] =='Hotel Facilities')
                                                    @if($count < 5 )
                                                    <li>{{$facility['FacilityName']}}</li>
                                                    @else
                                                    @break;
                                                    @endif
                                                    <?php $count++; ?>
                                                @endif

                                                @endforeach
                                                <li><a href="javascript:void(0)">More <i class="las la-angle-down"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <span class="text-muted mt-3 d-block">Description</span>
                                            <!-- <p class="small text-dark d-block mt-1">{{$hotelDetails[$i]['Description']}} -->
                                            <div class="small text-dark d-block mt-1" id="div_description_{{$hotel[$i]['HotelId']}}" >
                                                <!-- {{htmlspecialchars_decode($hotelDetails[$i]['Description'],ENT_QUOTES)}} -->
                                                <!-- substr($search_datas->sc_brief, 0, 120) -->
                                                <?php echo htmlspecialchars_decode(substr($hotelDetails[$i]['Description'],0,150),ENT_QUOTES)."...";?>
                                                <!-- onclick="myFunction({{$hotel[$i]['HotelId']}})"  -->
                                                <a href="javascript:void(0)" class="d-block">More <i class="las la-angle-down"></i></a>
                                            </div>
                                            
                                            <!-- </p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="border-left col-md-3 mt-3 mt-md-0 text-center text-md-left">
                                    <!-- <del class="text-muted"><i class="las la-pound-sign"></i>32.00</del><br> -->
                                    <!-- {{print_r($hotel[$i]['Options']['Option'])}} -->
                                    <h4 class="mb-0 h3 font-weight-600"><span class="text-danger"><i class="las la-pound-sign"></i>{{isset($hotel[$i]['Options']['Option'][0]['TotalPrice'])?$hotel[$i]['Options']['Option'][0]['TotalPrice']:$hotel[$i]['Options']['Option']['TotalPrice']}}</span></h4>
                                    <!-- <small>Per Room / Per Night</small> -->
                                    <br>
                                    <!-- <a href="hotel-details.php" class="btn btn-primary mt-2">Book Now</a> -->
                                    <form action="{{route('hoteldetails')}}" method="POST">
                                        @csrf
                                        <input type="text" name="hotel_id" value="{{$hotel[$i]['HotelId']}}" hidden>
                                        <input type="text" name="Options" value="{{json_encode($hotel[$i]['Options']['Option'])}}" hidden>
                                        <input type="text" name="check_in" value="{{$searched->check_in}}" hidden>
                                        <input type="text" name="check_out" value="{{$searched->check_out}}" hidden>
                                        <input type="text" name="city_name" value="{{$searched->city_name}}" hidden>
                                        <input type="text" name="hotel_room" value="{{$searched->hotel_room}}" hidden>
                                        <input type="text" name="hotel_adults" value="{{$searched->hotel_adults}}" hidden>
                                        <input type="text" name="hotel_child" value="{{$searched->hotel_child}}" hidden>
                                        <input type="text" name="hotel_infant" value="{{$searched->hotel_infant}}" hidden>
                                        <button type="submit" class="btn btn-primary" onclick="showLoder();">Book Now</button>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
                        
                        @endfor
                        @endforeach
                        </div>

                        <!-- <div class="package-devider">
                            <div class="media">
                                <div class=" hotels-image-media mr-3" style="background:url('assets/images/hotel.jpg') no-repeat center center;background-size:cover;"></div>
                                <div class="media-body">
                                    <h2 class="font-weight-600">Hotel Sunview Jain</h2>
                                <address class="text-muted mb-0">Sector 35, Chandigarh</address>
                                <div class="rating">
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star"></i> 4.0
                                </div>
                                <div class="row d-none d-md-flex">
                                    <div class="col-6">
                                        <span class="text-muted mt-3 d-block">Facilities</span>
                                        <ul class="d-block mt-1">
                                            <li>24-hour reception</li>
                                            <li>24-hour security</li>
                                            <li>Air conditioning in public areas</li>
                                            <li>Car park</li>
                                            <li><a href="#">More <i class="las la-angle-down"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-muted mt-3 d-block">Description</span>
                                        <p class="small text-dark d-block mt-1">Strategically situated close to Santacruzs domestic airport and 15 minutes from Sahar International Airport The Orchid.
                                        <a href="#" class="d-block">More <i class="las la-angle-down"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-left col-md-3 mt-3 mt-md-0 text-center text-md-left">
                                <del class="text-muted"><i class="las la-pound-sign"></i>32.00</del><br>
                                <h4 class="mb-0 h3 font-weight-600"><span class="text-danger"><i class="las la-pound-sign"></i>29.64</span></h4>
                                <small>Per Room / Per Night</small><br>
                                <a href="hotel-details.php" class="btn btn-primary mt-2">Book Now</a>
                            </div>
                        </div> -->
                    </div>


                    <!-- <div class="package-devider">
                            <div class="media">
                                <div class=" hotels-image-media mr-3" style="background:url('assets/images/orbit.jpg') no-repeat center center;background-size:cover;"></div>
                                <div class="media-body">
                                    <h2 class="font-weight-600">Ramada by Wyndham Navi Mumbai</h2>
                                <address class="text-muted mb-0">Bldg 156 millennium business parkmidc sector-2,mumbai, </address>
                                <div class="rating">
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star active"></i>
                                    <i class="las la-star"></i> 4.0
                                </div>
                                <div class="row d-none d-md-flex">
                                    <div class="col-6">
                                        <span class="text-muted mt-3 d-block">Facilities</span>
                                        <ul class="d-block mt-1">
                                            <li>24-hour reception</li>
                                            <li>24-hour security</li>
                                            <li>Air conditioning in public areas</li>
                                            <li>Car park</li>
                                            <li><a href="#">More <i class="las la-angle-down"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <span class="text-muted mt-3 d-block">Description</span>
                                        <p class="small text-dark d-block mt-1">Strategically situated close to Santacruzs domestic airport and 15 minutes from Sahar International Airport The Orchid.
                                        <a href="#" class="d-block">More <i class="las la-angle-down"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border-left col-md-3 mt-3 mt-md-0 text-center text-md-left">
                                <del class="text-muted"><i class="las la-pound-sign"></i>25.30</del><br>
                                <h4 class="mb-0 h3 font-weight-600"><span class="text-danger"><i class="las la-pound-sign"></i>30.73</span></h4>
                                <small>Per Room / Per Night</small><br>
                                <a href="hotel-details.php" class="btn btn-primary mt-2">Book Now</a>
                            </div>
                        </div>
                    </div><hr>
                    <div class="package-devider">
                            <div class="media">
                                <div class=" hotels-image-media mr-3" style="background:url('assets/images/altius.jpg') no-repeat center center;background-size:cover;"></div>
                            <div class="media-body">
                                <h2 class="font-weight-600">The Altius Boutique Hotel (Kings Cross Sports Bar & Lounge)</h2>
                            <address class="text-muted mb-0">Industrial Area Phase II</address>
                            <div class="rating">
                                <i class="las la-star active"></i>
                                <i class="las la-star active"></i>
                                <i class="las la-star active"></i>
                                <i class="las la-star active"></i>
                                <i class="las la-star"></i> 4.0
                            </div>
                            <div class="row d-none d-md-flex">
                                <div class="col-6">
                                    <span class="text-muted mt-3 d-block">Facilities</span>
                                    <ul class="d-block mt-1">
                                        <li>24-hour reception</li>
                                        <li>24-hour security</li>
                                        <li>Air conditioning in public areas</li>
                                        <li>Car park</li>
                                        <li><a href="#">More <i class="las la-angle-down"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <span class="text-muted mt-3 d-block">Description</span>
                                    <p class="small text-dark d-block mt-1">Strategically situated close to Santacruzs domestic airport and 15 minutes from Sahar International Airport The Orchid.
                                    <a href="#" class="d-block">More <i class="las la-angle-down"></i></a></p>
                                </div>
                            </div>
                        </div>
                            
                            <div class="border-left col-md-3 mt-3 mt-md-0 text-center text-md-left">
                                <del class="text-muted"><i class="las la-pound-sign"></i>34.00</del><br>
                                <h4 class="mb-0 h3 font-weight-600"><span class="text-danger"><i class="las la-pound-sign"></i>32.84</span></h4>
                                <small>Per Room / Per Night</small><br>
                                <a href="hotel-details.php" class="btn btn-primary mt-2">Book Now</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                @else
                    <h3>No hotel found!</h3>
                    <a href="{{route('index')}}" class="btn btn-primary">GO BACK</a>
                @endif
            </div>
        </div>
    </section>
</div>



@endsection


@section('script')
<script>
function myFunction(id) {
    var divId="#div_description_"+id;
    if ($(divId).height() == 20) {
           $(divId).animate(
               {height: "20px"});
           }
        else {
           $(divId).animate({height: "100px"});
           }
  //var x = document.getElementById(divId);
  //if (x.style.display === "none") {
  //  x.style.display = "block";
  //} else {
  //  x.style.display = "none";
  //}
}
</script>
<script>
    $( document ).ready(function() {
        // alert("hotel");
        // hotel_submit
        var path = "{{ route('searchhotel') }}";
        // searchhotel
        // searchairport
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


        $(".search_hotel").typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                source: engine.ttAdapter(),
                // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
                name: 'hotelList',
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

        $('.check_in_datetimepickerclass').click(function(){
            $('#check_out').val('');
            $("#check_out_datetimepicker").datetimepicker("destroy");
            $('#check_in_datetimepicker').datetimepicker({
                pickTime: false,
                autoclose: true, 
                startDate: new Date(),
                todayHighlight: true,
                // minDate: new Date(),
                // defaultDate: new Date(),
            });
            $('#check_in_datetimepicker').datetimepicker("show").on('changeDate', function(){
                // $('#departure_date_datetimepicker').hide();
                $('#check_in_datetimepicker').datetimepicker("hide")
            });
            // $('#returnDateDiv').attr('returnDateDiv-data','1'); 
        
        });

        $('.check_out_datetimepickerclass').on('click',function(){
            // alert("return hii")
            // $("#returning_date_datetimepicker").datetimepicker("destroy");
            // returning_date
            var dep_val=$('#check_in').val();
            $('#check_out').val('');
            $('#check_out').val(dep_val);
            
            var newdate = dep_val.split("-").reverse().join("/");
            var datePeriode= new Date(newdate);
            var adddate=datePeriode.setDate(datePeriode.getDate() + 1);
            // alert(adddate);
            // alert(new Date(adddate))
            $('#check_out_datetimepicker').datetimepicker({
                pickTime: false,
                startDate: new Date(adddate),
                autoclose: true,
                todayHighlight: true,
            });

            // $('#returning_date_datetimepicker').datetimepicker("show");
            $('#check_out_datetimepicker').datetimepicker("show").on('changeDate', function(){
                $('#check_out_datetimepicker').datetimepicker("hide")
            });
        });

        $("#hotel_room").change(function(){
            // alert("hii");
            var hotel_room=$('#hotel_room').val();
            var adults=$('#hotel_adults').val();
            var children=$('#hotel_child').val();
            var infant=$('#hotel_infant').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=hotel_room+' Room, '+ adults+' Adults, '+children+' Child, '+infant+' Infant';
            }else if(infant>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+infant+' Infant';
            }else if(children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child';
            }else{
                var val=hotel_room+' Room, '+adults+' Adults';
            }
            $('#hotel_travel_details').removeAttr('placeholder');
            $('#hotel_travel_details').attr('placeholder',val);
            
        });

        $("#hotel_adults").change(function(){
            // alert("hii");
            var hotel_room=$('#hotel_room').val();
            var adults=$('#hotel_adults').val();
            var children=$('#hotel_child').val();
            var infant=$('#hotel_infant').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=hotel_room+' Room, '+ adults+' Adults, '+children+' Child, '+infant+' Infant';
            }else if(infant>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+infant+' Infant';
            }else if(children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child';
            }else{
                var val=hotel_room+' Room, '+adults+' Adults';
            }
            $('#hotel_travel_details').removeAttr('placeholder');
            $('#hotel_travel_details').attr('placeholder',val);
            
        });

        $("#hotel_child").change(function(){
            // alert("hii");
            var hotel_room=$('#hotel_room').val();
            var adults=$('#hotel_adults').val();
            var children=$('#hotel_child').val();
            var infant=$('#hotel_infant').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child, '+infant+' Infant';
            }else if(infant>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+infant+' Infant';
            }else if(children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child';
            }else{
                var val=hotel_room+' Room, '+adults+' Adults';
            }
            $('#hotel_travel_details').removeAttr('placeholder');
            $('#hotel_travel_details').attr('placeholder',val);
            
        });
        $("#hotel_infant").change(function(){
            // alert("hii");
            var hotel_room=$('#hotel_room').val();
            var adults=$('#hotel_adults').val();
            var children=$('#hotel_child').val();
            var infant=$('#hotel_infant').val();
            // alert(adults);
            if(infant>0 && children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child, '+infant+' Infant';
            }else if(infant>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+infant+' Infant';
            }else if(children>0){
                var val=hotel_room+' Room, '+adults+' Adults, '+children+' Child';
            }else{
                var val=hotel_room+' Room, '+adults+' Adults';
            }
            $('#hotel_travel_details').removeAttr('placeholder');
            $('#hotel_travel_details').attr('placeholder',val);
            
        });
        

        $('#hotel_submit').click(function(){
            // alert("hotel_submit");
            // return false;
            var city_name=$('#city_name').val();
            var check_in=$('#check_in').val();
            var check_out=$('#check_out').val();
            if(city_name!='' && check_in!='' && check_out!='' ){
                $('#loading').show();
            }
        });

        $('#hotelNameFilter').on('change',function(){
            // alert("hii");
            var val=$('#hotelNameFilter').val();
            if(val!=''){
            $(".GlobalDiv").attr("data-GlobalDiv", "0")
            $(".GlobalDiv").hide();
            $('.hotelName_'+val).show()
            $('.hotelName_'+val).attr("data-GlobalDiv", "1")
            }else{
                $(".GlobalDiv").attr("data-GlobalDiv", "1")
                $(".GlobalDiv").show();  
            }
        })

        // sort_by
        $('#sort_by').on('change',function(){
            var sort_by_val=$('#sort_by').val();
            // alert(sort_by_val);
            if(sort_by_val=='Price_Low_to_High'){
                // alert(sort_by_val);
               
            }
        });
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
        var Facility=0;
        $('input[name="Facility"]:checked').each(function() {
            Facility=1
        });
        if (Facility==1) {
            arr.push("Facility");
        }
        var Rating=0;
        $('input[name="Rating"]:checked').each(function() {
            Rating=1
        });
        if (Rating==1) {
            arr.push("Rating");
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
        //  if (Stops==1&&Airline==1) {
        //     $('input[name="Stops"]:checked').each(function() {
        //     count=1
        //     GlobalSearchCount=1;

        //     $("."+this.value).show();  
        //             $("."+this.value).attr("data-GlobalDiv", "1")

        //         if ($("."+this.value).attr("data-GlobalDiv")==1) 
        //         {
                    
        //         }  
        //     } else {
        //         $("."+this.value).show(); 
        //         $("."+this.value).attr("data-GlobalDiv", "1")
        //     }
        //   });
         
        //   if(GlobalSearchCount==1)
        //   {
        //     $('input[name="Stops"]:not(:checked)').each(function() {
        //         $("."+this.value).hide();
        //         $("."+this.value).attr("data-GlobalDiv", "0")
        //       });  
        //   } 
        //  }
       
         
         
         
        //   $('input[name="Airline"]:checked').each(function() {
        //     count=1
        //     GlobalSearchCount=1;
        //     if ($("."+this.value).attr("data-GlobalDiv")==1) 
        //     {
        //         $("."+this.value).show();
        //     }

        //   });
        //   if(GlobalSearchCount==1)
        //   {
        //     $('input[name="Airline"]:not(:checked)').each(function() {

        //         $(".GlobalDiv").attr("data-GlobalDiv", "0")


        //       });  
        //   }

          if(SearchCount==0)
          {
            $(".GlobalDiv").show();
            $(".GlobalDiv").attr("data-GlobalDiv", "1")
          }
    }

    // function hotelNameFilter(name){
    //     alert(name);
    // }
</script>
@endsection