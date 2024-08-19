@extends('layout')
@section('content')
    <div class="wrapper">
        <aside id="sidebar">
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand text-white fs-6 fw-bold">
                        <img src="{{ asset('assets/images/bus.png') }}" alt="bus" width="30" height="30">
                        TransBus
                    </a>
                </div>
            </nav>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ $activeLink === 'dashboard' ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ $activeLink === 'buses' ? 'active' : '' }}">
                        <i class="bi bi-bus-front-fill"></i>
                        <span>Buses</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ $activeLink === 'drivers' ? 'active' : '' }}">
                        <i class="lni lni-user"></i>
                        <span>Drivers</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ $activeLink === 'schedule' ? 'active' : '' }}">
                        <i class="lni lni-popup"></i>
                        <span>schedule</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ $activeLink === 'settings' ? 'active' : '' }}">
                        <i class="lni lni-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                @yield('BusesData')
            </div>
        </div>
    </div>