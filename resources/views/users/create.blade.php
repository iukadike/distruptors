@extends('layouts.menu')

@section('content')
    <!-- Input -->
    <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add Property Evaluators

                        </h2>

                    </div>
                    <div class="body">
                            <h2 class="card-inside-title">Add Property Evaluator</h2>
                            @include('errors')

                            <form method="POST" action="{{ route('user.store') }}">
                                {{ csrf_field() }}
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> Last Name</label>
                                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> First Name</label>
                                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> Other Name</label>
                                                    <input type="text" class="form-control" name="other_name" placeholder="Other Name" value="{{ old('other_name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> Email Address</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Enter the Email Address" value="{{ old('other_name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> Phone Number</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Other Name" value="{{ old('other_name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                        <label> Input Address</label>
                                                    <textarea name="address" class="form-control {{ $errors->has('address') ? 'is-danger' : ''}}">{{ old('address')}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">


                                            <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Submit</button>
                                        </div>
                                    </div>

                            </form>


                    </div>
                </div>
            </div>
    </div>
    <!-- #END# Input -->

@endsection

@section('Title', 'Affordable Homes :: Upload Property')
