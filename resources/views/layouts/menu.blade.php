@extends('layouts.portal')
@section('menu')
                    <li class="{{ request()->is('tenure/*') ? 'active' : ''}}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>Tenures</span>
                            </a>
                            <ul class="ml-menu">
                                    <li class="{{ request()->is('tenure') ? 'active' : ''}}">
                                        <a href="/tenure">View Tenures</a>
                                    </li>
                                @foreach ($tenures as $tenure)
                                    <li>
                                        <a href="/tenure/{{$tenure->id}}">{{ $tenure->tenure }}</a>
                                    </li>
                                @endforeach
                            </ul>


                        </li>

                        <li class="{{ request()->is('summary') ? 'active' : ''}}">
                                <a href="/summary">
                                    <i class="material-icons">layers</i>
                                    <span>Executive Summary</span>
                                </a>
                            </li>
                        <li class="{{ request()->is('swot') ? 'active' : ''}}">
                                <a href="/swot">
                                    <i class="material-icons">layers</i>
                                    <span>SWOT</span>
                                </a>
                            </li>
                        <li class="{{ request()->is('goal') ? 'active' : ''}}">
                                <a href="/goal">
                                    <i class="material-icons">layers</i>
                                    <span>Goals</span>
                                </a>
                        </li>

                        <li class="{{ request()->is('offices') ? 'active' : ''}}">
                                <a href="/offices">
                                    <i class="material-icons">layers</i>
                                    <span>Offices</span>
                                </a>
                        </li>
                        <li class="{{ request()->is('objective') ? 'active' : ''}}">
                                <a href="/objective">
                                    <i class="material-icons">layers</i>
                                    <span>Objectives</span>
                                </a>
                        </li>
                        <li class="{{ request()->is('objective') ? 'active' : ''}}">
                                <a href="{{ route('approved_objectives') }}">
                                    <i class="material-icons">layers</i>
                                    <span>Approved Objectives</span>
                                </a>
                        </li>
                        @if (session('logged_in_user')['current_head'] == 1)
                        <li class="{{ request()->is('awaiting_approvals') ? 'active' : ''}}">
                                <a href="{{ route('awaiting_approvals') }}">
                                    <i class="material-icons">layers</i>
                                    <span>Awaiting Approval</span>
                                </a>
                        </li>
                        <li class="{{ request()->is('approvals_made') ? 'active' : ''}}">
                                <a href="/approvals_made">
                                    <i class="material-icons">layers</i>
                                    <span>Approvals Made</span>
                                </a>
                        </li>
                        <li class="{{ request()->is('openings_made') ? 'active' : ''}}">
                                <a href="/openings_made">
                                    <i class="material-icons">layers</i>
                                    <span>Opened for Ammendment</span>
                                </a>
                        </li>
                        <li class="{{ request()->is('approvals_denied') ? 'active' : ''}}">
                                <a href="/approvals_denied">
                                    <i class="material-icons">layers</i>
                                    <span>Approvals Denied</span>
                                </a>
                        </li>
                        @endif
                        @if (session('logged_in_user')['current_role'] == 1)
                        <li class="header">ADMINISTRATION</li>
                        <li>
                            <a href="/guidelines">
                                <i class="material-icons">home</i>
                                <span>Guidelines</span>
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
