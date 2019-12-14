@extends('layouts.menu')

@section('content')
    <!-- Input -->
    <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add Property

                        </h2>

                    </div>
                    <div class="body">
                            <h2 class="card-inside-title">Add New Property</h2>
                            @include('errors')

                            <form method="POST" action="{{ route('property.store') }}">
                                {{ csrf_field() }}
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label> Select Property Type</label>
                                                    <select class="form-control show-tick" name="property_type_id">
                                                        <option value="">-- Please select Property Type--</option>
                                                        @foreach ($property_types as $property_type)
                                                            <option value="{{ $property_type->id }}" @if ($property_type->id == old('property_type_id')) selected="selected"@endif>{{ $property_type->property_type }}</option>
                                                        @endforeach
                                                    </select>
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
