@extends('layout.main')

@section('styles')
<link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('main-content')
<div class="container-top">
    <div class="title-header">
        Dashboard
    </div>
</div>
<div class="container justify-content-space-around" style="margin-top: 60px;">
    <div class="card">
        <div class="card-header">Sensor On</div>
        <div class="card-content-right font-weight-800">{{ $sensoron }}</div>
    </div>
    <div class="card">
        <div class="card-header">Sensor Off</div>
        <div class="card-content-right font-weight-800">{{ $sensoroff }}</div>
    </div>
    <div class="card">
        <div class="card-header">Disconnected</div>
        <div class="card-content-right font-weight-800">-</div>
    </div>
    <div class="card">
        <div class="card-header">Total Sensor</div>
        <div class="card-content-right font-weight-800">{{ $totalsensor }}</div>
    </div>
</div>
@endsection