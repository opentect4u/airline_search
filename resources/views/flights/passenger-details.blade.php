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
                        <form>
                        <div class="card-body border rounded set mb-3">
                            <h6 class="font-weight-500 mb-3 bg-primary-light p-2"><i class="las la-user-circle"></i> Adult 1</h6>
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
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Seating</label>
                                        <select class="form-control custom-select" name="">
                                            <option value="">No preference</option>
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
                                        <select class="form-control custom-select" name="">
                                            <option value="Deaf">Deaf</option>
                                            <option value="Blind">Blind</option>
                                            <option value="Wheelchair">Wheelchair</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6">
                                    <div class="form-group">
                                        <label>Meal</label>
                                        <select class="form-control custom-select" name="">
                                            <option value="Deaf">--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border rounded set mb-3">
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
                        </div>
                        <div class="card-body border rounded set mb-3">
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
                        </div>
                        <a href="payment.php" class="btn btn-primary">Proceed to payment</a>
                    </form>
                    </div>
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
