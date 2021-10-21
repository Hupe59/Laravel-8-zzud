@extends('layouts.master')

@section('content')
 	<div class="row">
		<div class="col-xl-8">
			<h2>Commissies</h2>
			<p>Naast het bestuur zijn de belangrijkste commissies achtereenvolgens de muziekcommissie, de beweging-/ kledingcommissie, de podiumcommissie, de optredenscommissie, de commissie 
			voor de organisatie van het dagje uit en de liedjesavondcommissie. Verder zijn er nog enkele kleinere &quot;organen&quot;, te weten de redactie van 
			<span class="groen"><strong>&#39;t Notenschrift</strong></span> en de mensen die zorg dragen voor de 
			verjaardagskaarten en de website.<br /> <!-- , de begeleiding voor <span class="groen"><strong>Z.E.V.-Light</strong></span> -->
			Er is zodoende een aantal leden van <span class="groen"><strong>Z.E.V.</strong></span> die naast het zingen nog op andere terreinen actief zijn binnen de zanggroep.</p>
			<div class="col-sm-12 text-center">
				<a href="{{ asset('storage/Archief/2018/ModM/20180616634.jpg') }}" data-lightbox="ModM2018" data-title="<br />Muziek op de Maas in 2018">
					<img src="{{ asset('storage/Archief/2018/ModM/20180616634.jpg') }}" alt="{{ asset('storage/Archief/2018/ModM/20180616634.jpg') }}" class="img-fluid rounded" width="600" height="450" /></a><br />
				<span class="groen"><strong>Zanggroep Evergreen Vierlingsbeek</strong></span> tijdens <span class="groen"><strong>Muziek op de Maas</strong></span> in <strong>2018</strong>.<br /><br />
			</div>
		</div>
		@include('nieuw.sidebar')
	</div>
@endsection
