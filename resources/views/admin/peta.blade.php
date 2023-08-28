@extends('layouts.app')

@section('title', 'Admin | Peta')

@section('content')
<div class="pagetitle">
    <h1>Peta Kos</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Peta Kos</li>
    </ol>
    </nav>
</div>

<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .leaflet-container {
        height: 400px;
        width: 600px;
        max-width: 100%;
        max-height: 100%;
    }
</style>


<div id="map" style="width: 100%; height: 500px;"></div>
<script>

	var map = L.map('map').setView([-0.5554005321181287,123.13630200914336], 13);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var marker = L.marker([-0.5554005321181287,123.13630200914336]).addTo(map);

	var circle = L.circle([51.508, -0.11], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map);

	var polygon = L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(map);


</script>

@endsection