@extends('layouts.portal')
@section('menu')
                    @if (Auth::user()->role == 2)
                    <li class="header">Properties</li>

                                    <li>
                                        <a href="{{ route('property.create') }}">
                                            <span>Upload Property</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('property.index') }}">
                                            <span>My Properties</span>
                                        </a>
                                    </li>
                    @endif
                    <li class="header">My Account</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <i class="material-icons col-red">backspace</i>
                                <span> {{ __('Logout') }}</span>
                            </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>

                    </li>


@endsection
