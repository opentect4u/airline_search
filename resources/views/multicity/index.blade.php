@extends('common.master')
@section('content')

<div class="container my-3 py-3 border-top border-bottom">
    <div class="row">
        <div class="col-md-12">
            <h3 class="font-weight-600 mb-3">Multi City / Stop Over <i class="las la-plane"></i></h3>
        </div>
    </div>
   <div class="cld__book__form search__modify">
        <form name="multicity" id="multicity" method="post" action="" class="w-100">
            <div class="row">
                <div class="col-md-2">
                    <h6 class="text-uppercase text-muted">Flight 1</h6>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>From</label>
                        <input type="text" name="from1" id="from1" placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="to1" id="to1" placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Date</label>
                        <div id="flight0_date_datetimepicker" class="input-group">
                            <input type="text" name="flight0_date" id="flight0_date" value="{{date('d-m-Y')}}" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
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
                        <input type="text" name="from2" id="from2" placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="to2" id="to2" placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Date</label>
                        <div id="flight1_date_datetimepicker" class="input-group">
                            <input type="text" name="flight1_date" id="flight1_date" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
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
                        <input type="text" name="from3" id="from3" placeholder="(IXC) | Chandigarh Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>To</label>
                        <input type="text" name="to3" id="to3" placeholder="(BOM) | Chhatrapati Shivaji Int'l Airport" class="form-control search_input">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Date</label>
                        <div id="flight2_date_datetimepicker" class="input-group">
                            <input type="text" name="flight2_date" id="flight2_date" placeholder="dd-mm-yyyy" class="form-control border-right-0" data-format="dd-MM-yyyy">
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
                    <a href="flights.php" class="btn btn-primary">Search Flight</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="middle bg-white">
    <div class="container my-4">
        <div class="row cld__bes__wrap">
            <div class="col-md-4">
                <div class="card">
                    <div class="media align-items-center">
                        <div class="media-left mr-3"><img src="{{ asset('public/images/best-price.png')}}" alt="best price" class="img-fluid"/></div>
                        <div class="media-body">
                            <h5>Best price guarantee</h5>
                            <p>Find our lowest price to destinations worldwide guaranteed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="media align-items-center">
                        <div class="media-left mr-3"><img src="{{ asset('public/images/easy-booking.png')}}" alt="easy booking"/></div>
                        <div class="media-body">
                            <h5>Easy booking</h5>
                            <p>Search, select and save - the fastest way to book your trip.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="media align-items-center">
                        <div class="media-left mr-3"><img src="{{ asset('public/images/support.png')}}" alt="support"/></div>
                        <div class="media-body">
                            <h5>24/7 Customer support</h5>
                            <p>Receive free support from our friendly and reliable team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    <h3 class="font-weight-light h1 mb-1">Best <span class="font-weight-bold">offers for you!</span></h3>
                    <p>Discover a different world…</p>
                </div>
                <div class="col-md-12 mt-2">
                    <div id="cld__home__discount__banner" class="owl-carousel owl-theme cld__home__discount__banner owl__control__top">
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount1.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount2.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount3.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount4.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount1.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount2.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount3.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                        <div class="item"><a href="#"><img src="{{ asset('public/images/discount4.jpg')}}" alt="discount1" class="img-fluid"/></a></div>
                    </div>
                </div>
            </div>
    </div>

    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <a href="#"><img src="{{ asset('public/images/Landing-page-banner-mobile.jpg')}}" alt="" class="img-fluid"/></a>
            </div>
            <div class="col-md-6">
                <a href="#"><img src="{{ asset('public/images/SME_Desktop-Landingpage-mobile-banner.jpg')}}" alt="" class="img-fluid"/></a>
            </div>
        </div>
    </div>

   
</div>

@endsection
@section('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> -->
<script type="text/javascript">
    $( document ).ready(function() {
        $('#loading').hide();
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