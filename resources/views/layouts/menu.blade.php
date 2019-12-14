@extends('layouts.portal')
@section('menu')

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
