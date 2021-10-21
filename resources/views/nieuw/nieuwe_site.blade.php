@extends('layouts.master')

@section('content')
 	<div class="row">
		<div class="col-sm-8">
			<p>&nbsp;</p>
			<div class="row align-items-center">
				<div class="col-sm-4">
					<a href="{{ asset('images/ThankGod0.jpg') }}" data-lightbox="ThankGod_Doesburg" data-title="<br />...lachend">
					<img src="{{ asset('images/ThankGod0.jpg') }}" class="img-fluid rounded" width="170" height="239" /></a><br /><br />
				</div>
				<div class="col-sm-8 text-center">
					<a href="{{ asset('storage/Archief/2018/1007\20.jpg') }}" data-lightbox="ThankGod_Doesburg" data-title="<br />Optreden in Doesburg in 2018">
					<img src="{{ asset('storage/Archief/2018/1007/20.jpg') }}" alt="{{ asset('storage/Archief/2018/1007/20.jpg') }}" class="img-fluid rounded" width="625" height="415" /></a><br />
					Wij zijn te vinden op<br />
					<a href="https://www.vierlingsbeek-groeningen.nl/verenigingen" target="_blank">www.vierlingsbeek-groeningen.nl</a>.<br /><br />
				</div>
			</div>

			<h1>Zanggroep</h1>
			<p>Een groep van ongeveer 50 zangers en zangeressen in de leeftijd van 38 tot 78 jaar. Onze zanggroep is ontstaan uit een in 1970 opgericht 
			jongerenkoor. In de loop der jaren is het repertoire veranderd van kerkmuziek naar wat het nu is. Elke vrijdagavond wordt er op plezierige, enthousiaste en serieuze wijze 
			gerepeteerd in de gemeenschapsruimte <strong>Joffershof</strong> onder leiding van onze dirigente <a href="https://www.nancymeijer.nl" target="_blank" title="www.nancymeijer.nl">Nancy 
			Meijer</a>.<br /> 
			Wij treden enkele malen per jaar op in allerlei gelegenheden, van bruin caf&eacute; tot cultureel centrum, van winkelgalerij tot stadspark.<br />
			Lijkt het zingen iets voor jou en voel je je aangetrokken tot onze zanggroep, neem dan contact op met ons. Met name bij de tenoren en de bassen is er nog voldoende plaats om 
			deel uit te maken van &eacute;&eacute;n van deze groepen.</p>
			<h1>Evergreen</h1>
			<p>Dit staat voor de muziek die wij ten gehore brengen. Naast evergreens is ons repertoire ook opgebouwd uit musicalsongs, popsongs, gospels en jazz-achtige nummers.<br />
			Om een indruk te geven van ons repertoire volgt hier een aantal titels:<br />
			<em>A night like this</em>, <em>You&#39;re the voice</em>, <em>Dancing in the street</em>, 
			<em>God only knows</em>, <em>Mr. Blue Sky</em>, <em>Somebody to love</em>, <em>Your mama don&#39;t 
			dance</em>, <em>Liefs uit Londen</em>.<br />
			Bijna alle liederen worden minimaal 4-stemmig gezongen. Enkele nummers worden a cappella gezongen, maar de meeste liederen worden begeleid door ons combo met gitaar, basgitaar, 
			piano en drums.</p>
			<h1>Vierlingsbeek</h1>
			<p>Een dorpje met zo&#39;n 2600 inwoners, gelegen tussen de Maas aan de oostzijde en de A73 en de spoorlijn van Nijmegen naar Venlo aan de 
			westzijde, in het uiterste puntje van Noord-Brabant. Of zoals in ons volkslied staat: <em>&quot;tussen Maas en Peelmoerassen&quot;</em>.</p>

			<p><a href="/nieuwe_site">Terug naar boven</a></p>
		</div>
		@include('nieuw.sidebar')
	</div>
@endsection
