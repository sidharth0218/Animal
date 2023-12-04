@extends('master')
@section('student-form')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Horizontal Two column</h4>
                <form class="form-sample" action="{{ route('student.store') }}">
                    @csrf
                    <p class="card-description"> Personal info </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="first" class="form-control"  placeholder="first" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="last" class="form-control"  placeholder="last" />
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="gender">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="date"  name="dob" placeholder="dd/mm/yyyy" />
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="Category">
                            <option>Category1</option>
                            <option>Category2</option>
                            <option>Category3</option>
                            <option>Category4</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Membership</label>
                        <div class="col-sm-4">
                            <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="0" checked> Free </label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-radio">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="1"> Professional </label>
                            </div>
                        </div>
                        </div>

                    </div>
                    </div>
                    <p class="card-description"> Address </p>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address 1</label>
                        <div class="col-sm-9">
                            <input type="text"  name="address" class="form-control" placeholder="address" />
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" type="submit" >Save</button>
                    </div>
                    </div>

                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
