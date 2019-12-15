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

                            <h2 class="card-inside-title">My Properties</h2>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Property Type</th>
                                            <th>Address</th>
                                            <th>Property Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>S/N</th>
                                                <th>Property Type</th>
                                                <th>Address</th>
                                                <th>Property Status</th>
                                                <th></th>
                                                <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $count = 1; ?>

                                        @foreach ($properties as $property)

                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $property->type->property_type }}</td>
                                                <td>{{ $property->address }}</td>
                                                @if ($property->available == 0)
                                                    <td>Status Pending</td>
                                                @endif

                                                <td><a href="/property/{{$property->id}}/edit"> <i class='material-icons'>edit</i></a></td>
                                                <td><form method="POST" action="/property/{{ $property->id }}">@method('DELETE') @csrf <button type="submit" class="btn btn-primary waves-effect"> <i class='material-icons'>delete</i></button></form></a></td>

                                            </tr>
                                            <?php $count++; ?>
                                        @endforeach


                                    </tbody>

                                </table>
                    </div>
                </div>
            </div>
    </div>
    <!-- #END# Input -->

@endsection

@section('Title', 'Denomination :: BU_HRM')
