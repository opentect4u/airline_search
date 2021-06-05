@extends('common.master')
@section('content')

<section class="search-packages bg-light-gray py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="confirmation-step">
                    <li><a href="#" class="active"><span>1</span> Flight Details</a></li>
                    <li><a href="#" class="active"><span>2</span> Passenger Details</a></li>
                    <li><a href="#" class="active"><span>3</span> Payment</a></li>
                    <li><a href="#"><span>4</span> Confirm</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <h4 class="font-weight-500">Payment Details</h4><hr>
                    <form class="passanger-details" action="">
                        <div id="accordion" class="w-100">
                            <div class="card-body border rounded set mb-3">
                                <div class="card-header bg-primary-light font-weight-500 h6 border-0" id="headingOne">
                                    <a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                        Credit or Debit Card
                                    </a>
                                </div>
                                <div id="collapse1" class="collapse show mt-2" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="alert alert-warning"><i class="las la-credit-card"></i> We also accept <b>International Cards</b> for payments on transaction. </div>
        <img src="{{ asset('public/images/payment-cards.png') }}" alt="cards" class="img-fluid"/>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter Number" name=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name on Card</label>
                                                    <input type="text" class="form-control" placeholder="Enter Name" name=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Expiry Date</label>
                                                    <input type="text" maxlength="4" class="form-control" placeholder="MM/YY" name=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>CVV</label>
                                                    <input type="password" maxkength="4" class="form-control" placeholder="" name=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="confirm-booking.php" class="btn btn-primary">Pay <i class="las la-pound-sign"></i>88.00</a>
                                </div>
                            </div>
                            <div class="card-body border rounded set mb-3">
                                <div class="card-header bg-primary-light font-weight-500 h6 border-0" id="headingTwo">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                                        Net Banking
                                    </a>
                                </div>
                                <div id="collapse2" class="collapse mt-2" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <div class="card card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="SBI" name="bank" value="">
                                                        <span class="custom-control-label mr-2" for="SBI">SBI</span>
     <img src="{{ asset('public/images/sbi.png') }}" alt="SBI"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <div class="card card-body">
             <div class="custom-control custom-radio">
           <input type="radio" class="custom-control-input" id="ICICI" name="bank" value="">
        <span class="custom-control-label mr-2" for="ICICI">ICICI</span>
    <img src="{{ asset('public/images/icici.png') }}" alt="ICICI"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6">
    <div class="card card-body">
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="HDFC" name="bank" value="">
           <span class="custom-control-label mr-2" for="HDFC">HDFC</span>
    <img src="{{ asset('public/images/HDFC.png') }}" alt="HDFC"/>
                    </div>
                        </div>
                               </div>
                                            <div class="col-md-6 col-6">
                                                <div class="card card-body">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="AXIS" name="bank" value="">
                                                        <span class="custom-control-label mr-2" for="AXIS">AXIS</span>
     <img src="{{ asset('public/images/AXIS.png') }}" alt="AXIS"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                            <label class="custom-control-label" for="customCheck">By clicking on Pay , I agree to accept the <a href="#">Booking Terms</a> & Cloud Travels General <a href="#">Terms of use and services</a></label>
                                          </div>
                                        <a href="confirm-booking.php" class="btn btn-primary">Pay <i class="las la-pound-sign"></i>88.00</a>
                                    </div>
                            </div>
                            <div class="card-body border rounded set mb-3">
                                <div class="card-header bg-primary-light font-weight-500 h6" id="headingThree">
                                    <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                                        Paypal
                                    </a>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="custom-control custom-radio align-items-center d-flex">
                                            <input type="radio" class="custom-control-input" id="paypal" name="bank" value="">
                                            <span class="custom-control-label mr-2" for="paypal">Paypal</span>
    <img src="{{ asset('public/images/paypal.png') }}" alt="paypal" class="ml-auto" style="width:150px;"/>
                </div>
                                        <a href="confirm-booking.php" class="btn btn-primary">Pay <i class="las la-pound-sign"></i>88.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <h4 class="font-weight-500 mb-0">Fare Summary</h4>
                    <span class="text-muted">Travelers 1 Adult</span>
                    <table class="table table-small mt-2 mb-0">
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection