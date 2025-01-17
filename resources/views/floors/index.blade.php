@extends('layouts.app')

@section('content')
@include('layouts.header')
@include('layouts.sidebar')
<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Floors of {{ $building->building_name}}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route ('buildings.index') }}">Buildings</a></li>
                                    <li class="breadcrumb-item active"><a href="">{{ $building->building_name}}</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="w-100">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @forelse ($floors as $floor)
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="border p-3 rounded mt-4">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title bg-transparent rounded font-size-24 text-warning">
                                                            <i class="bx bxs-folder"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-14 mb-0">{{ $floor->name }}</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="text-muted mt-3">
                                                            <p class="mb-0">{{ number_format($floor->totalEnergy(), 2) }} kWh</p>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 align-self-end">
                                                        <div class="float-end mt-3">
                                                            <a href="{{ route('rooms.index') }}?floor_id={{ $floor->id }}" class="btn btn-primary">View Rooms</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                                  
                                    <!-- end col -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--  end row -->
            </div> <!-- container-fluid -->
        </div> <!-- end page-content -->
    </div> <!-- end main content-->
</div> <!-- end layout-wrapper -->
@endsection