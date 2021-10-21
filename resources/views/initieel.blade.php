@extends('layouts.master')

@section('content')
	
<div class="row">
		<div class="col-sm-12">
			<div class="row align-items-sm-center">
				<div class="col-sm-12 text-center">
					<p>&nbsp;</p>
					<a href="https://www.e-boekhouden.nl/?c=vssp" title="e-Boekhouden.nl" target="_blank">
					<img class="img-fluid rounded" src="https://www.e-boekhouden.nl/Content/Sponsoring/728-90c.png" alt="e-Boekhouden.nl" /></a>
					<p>&nbsp;</p>
					<div data-bs-toggle="modal" data-bs-target="#coronamaatregelen">
						<h4 class="rood" title="...klikbaar"><a>Maatregelen tegen de verspreiding van het coronavirus</a></h4>
					</div>

					<div class="modal fade" id="coronamaatregelen" data-bs-backdrop="static" aria-hidden="true" data-bs-keyboard="false" tabindex="-1" aria-labelledby="coronamaatregelenLabel" style="z-index: 9000;">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="coronamaatregelenLabel"><strong><span class="groen">Zanggroep Evergreen Vierlingsbeek</span></strong></h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body text-left">
									<p>Om verspreiding van het <em>coronavirus</em> te voorkomen zijn tot nadere berichtgeving <strong>ALLE</strong> optredens van 
									<strong><span class="groen">Zanggroep Evergreen Vierlingsbeek</span></strong> opgeschort.<br />De repetities zijn inmiddels weer met enkele aanpassingen hervat.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
								</div>
							</div>
						</div>
					</div>
					<p>&nbsp;</p>

				</div>
				<div class="owl-carousel">
					<div class="item text-center" data-bs-toggle="modal" data-bs-target="#MuziekopdeMaas">
						<img class="img-fluid rounded" src="{{ asset('storage/Archief/2019/ModM/08.jpg') }}" />
						<h4><a>Muziek op de Maas</a></h4>
					</div>
					<div class="item text-center" data-bs-toggle="modal" data-bs-target="#ZEVInteractief">
						<img class="img-fluid rounded" src="{{ asset('storage/Archief/2018/1124ZI/48.JPG') }}" />
						<h4><a>Z.E.V.-Interactief</a></h4>
					</div>
					<div class="item text-center" data-bs-toggle="modal" data-bs-target="#Revues">
						<img class="img-fluid rounded" src="{{ asset('storage/Archief/2016/Carrousel/CarrouselFoto.jpg') }}" />
						<h4><a>Revues</a></h4>
					</div>
					<div class="item text-center" data-bs-toggle="modal" data-bs-target="#Liedjesavond">
						<img class="img-fluid rounded" src="{{ asset('storage/Archief/2018/0113/19.jpg') }}" />
						<h4><a>Liedjesavond</a></h4>
					</div>
					<div class="item text-center" data-bs-toggle="modal" data-bs-target="#Concertreizen">
						<img class="img-fluid rounded" src="{{ asset('storage/Archief/2011/Bonn/BW20110607.jpg') }}" />
						<h4><a>Concertreizen</a></h4>
					</div>

				</div>

				<div class="modal fade" id="MuziekopdeMaas" tabindex="-1" aria-labelledby="MuziekopdeMaasLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="MuziekopdeMaasLabel"><strong><span class="groen">Muziek op de Maas</span></strong></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-left">
								<p>Reeds meer dan 10 jaar (de eerste keer was in 2004) organiseert <strong><span class="groen">Zanggroep Evergreen Vierlingsbeek</span></strong> bijna jaarlijks het 
								midzomeravondevenement <strong><span class="groen">Muziek op de Maas</span></strong> nabij de Maas, dichtbij de locatie van de veerdienst Vierlingsbeek - Bergen.</p>
								<p>De toeschouwers kunnen vanaf een aangrenzend weiland prachtige muziek en show in zeer uiteenlopende stijlen beluisteren en bekijken. De muziek wordt vanaf een ponton 
								in de Maas gepresenteerd dat speciaal hiervoor is ingevaren en vanuit het weiland zelf.<br />Deelnemende muziekgroepen zijn naast 
								<span class="groen"><strong>Z.E.V.</strong></span> vaak een gastkoor, een straatorkest/ muziekband en een Rockabilly/ Countryboogie Group.</p>
								<p>De eerstvolgende editie van <strong><span class="groen">Muziek op de Maas</span></strong> zal zijn in <span class="rood"><strong>juni 2022</strong></span>.</p>
								<p><a href="{{ asset('storage/Archief/2019/ModM/08.jpg') }}" data-lightbox="initieel1" data-title="<span class='groen'>Muziek op de Maas 2019</span>">
								<img class="img-fluid rounded" src="{{ asset('storage/Archief/2019/ModM/08.jpg') }}" width="1200" height="800" /></a></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="ZEVInteractief" tabindex="-1" aria-labelledby="ZEVInteractiefLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ZEVInteractiefLabel"><strong><span class="groen">Z.E.V.-Interactief</span></strong></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-left">
								<p>Vanaf 2008 organiseert <strong>Zanggroep Evergreen Vierlingsbeek <span class="groen">Z.E.V.-Interactief</span></strong>, een bijna jaarlijks terugkerende reeks 
								concerten in <strong><span class="groen">Zalencentrum Concordia</span></strong> aan het <strong>Vrijthof</strong> in Vierlingsbeek. Er worden twee gastkoren uitgenodigd 
								met de uitdrukkelijke bedoeling om te genieten van elkaars gezelschap en vooral van elkaars gezamenlijke hobby: muziek en zang in een lichtvoetig en eigentijds 
								repertoire onder het motto <em>&quot;Samen zingen en swingen&quot;</em>. Voor de avond wordt er een passend <em>thema</em> gekozen.</p>
								<p><a href="{{ asset('storage/Archief/2018/1124ZI/48.JPG') }}" data-lightbox="initieel2" data-title="<span class='groen'>Z.E.V.-Interactief 2018</span>">
								<img class="img-fluid rounded" src="{{ asset('storage/Archief/2018/1124ZI/48.JPG') }}" width="1772" height="1177" /></a></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="Revues" tabindex="-1" aria-labelledby="RevuesLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog modal-dialog-centered" >
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="RevuesLabel"><strong><span class="groen">Revues</span></strong></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-left">
								<p>Gemiddeld genomen om de 5 &agrave; 6 jaar organiseert <strong><span class="groen">Zanggroep Evergreen Vierlingsbeek</span></strong> een avondvullende <em>revue</em>, die 2 &agrave; 3 maal 
								wordt uitgevoerd. Vijf maal reeds werden achtereenvolgens de revues/ producties uitgevoerd: <strong><span class="groen">Bonjour Paris</span></strong> (in 1990), 
								<strong><span class="groen">Welcome America</span></strong> (in 1995), <strong><span class="groen">Cocktail</span></strong> (in 2001), 
								<strong><span class="groen">D&eacute;j&agrave; Vu</span></strong> (in 2007) en <strong><span class="groen">Carrousel</span></strong> (in 2016).</p>
								<p>De eerste 3 revues werden steevast in <strong><span class="groen">Zalencentrum Concordia</span></strong> in Vierlingsbeek uitgevoerd, 
								<strong><span class="groen">D&eacute;j&agrave; Vu</span></strong> vond plaats in een heuse <em><span class="groen">spiegeltent</span></em> en de productie 
								<strong><span class="groen">Carrousel</span></strong> werd gehouden in de buitenlucht, achter de <strong><span class="groen">Laurentiuskerk</span></strong> in Vierlingsbeek. Het publiek krijgt 
								gedurende de avond muziek, dans en entertainment voorgeschoteld in een bepaalde verhaallijn.</p>
								<p><a href="{{ asset('storage/Archief/2016/Carrousel/CarrouselFoto.jpg') }}" data-lightbox="initieel3" data-title="<span class='groen'>Deelnemers aan de Productie Carrousel uit 2016</span>">
								<img class="img-fluid rounded" src="{{ asset('storage/Archief/2016/Carrousel/CarrouselFoto.jpg') }}" width="1024" height="724" /></a></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="Liedjesavond" tabindex="-1" aria-labelledby="LiedjesavondLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="LiedjesavondLabel"><strong><span class="groen">Liedjesavond</span></strong></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-left">
								<p><span class="groen"><strong>Zanggroep Evergreen Vierlingsbeek</strong></span> organiseert elk jaar de zogenaamde &#39;<span class="groen"><em>liedjesaovend</em></span>&#39; 
								&quot;<span class="groen"><strong>&Ocirc;jjem van &Egrave;ge B&ocirc;jjem</strong></span>&quot;.</p>
								<p>Tijdens de &#39;<em>liedjesaovend</em>&#39; wordt de carnavalsschlager van dat jaar voor de carnavalsvereniging de 
								&quot;<span class="groen"><strong>Keieschieters</strong></span>&quot; uit <strong>Vierlingsbeek</strong> en <strong>Groeningen</strong> verkozen. De financi&euml;le baat 
								hiervan is ter aanvulling van de verenigingskas. Aangezien dit naast de oud papieractie de enige maar niet minder veelomvattende financi&euml;le kasactie van de vereniging is 
								wordt door de leden van <span class="groen"><strong>Z.E.V.</strong></span> hieraan zoveel mogelijk medewerking verleend.</p>
								<p>Ieder jaar wordt een thema voor de avond vastgesteld.</p>
								<p>Een paar extra-muzikale leden van <span class="groen"><strong>Z.E.V.</strong></span> begeleidt de deelnemende groepen. Zij helpen waar nodig met het op muziek 
								zetten van de teksten en het uitschrijven van de begeleidingsmuziek.<br />
								Er is een groep die zorg draagt voor het inrichten van het podium en een groep die de zaalversiering maakt, uiteraard geheel in de stijl van het voor dat jaar geldende 
								thema.</p>
								<p>Er wordt ook gezorgd voor muziekopnames en voor het maken van decoraties voor iedere deelnemer.</p>
								<p>Dit gezellige dorpsgebeuren is inmiddels al meer dan <strong>30 jaar</strong> niet meer weg te denken uit de evenementenkalender van <strong>Vierlingsbeek</strong> en 
								<strong>Groeningen</strong>.</p>
<!--
								<p>De eerstvolgende <span class="groen"><em>liedjesaovend</em></span> <strong><span class="groen">&Ocirc;jjem van &Egrave;ge B&ocirc;jjem</span></strong> zal zijn op 
								<strong>zaterdagavond 25 januari 2020</strong>.</p>
-->
								<p><a href="{{ asset('storage/Archief/2018/0113/19.jpg') }}" data-lightbox="initieel4" data-title="<span class='groen'>De latere winnaar van de Liedjesavond 2018</span>">
								<img class="img-fluid rounded" src="{{ asset('storage/Archief/2018/0113/19.jpg') }}" width="645" height="430" /></a></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="Concertreizen" tabindex="-1" aria-labelledby="ConcertreizenLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ConcertreizenLabel"><strong><span class="groen">Concertreizen</span></strong></h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body text-left">
								<p>Om de 5 &agrave; 6 jaar organiseert <strong><span class="groen">Zanggroep Evergreen Vierlingsbeek</span></strong> een meerdaagse concertreis voor de leden en hun eventuele partners, vaak in 
								combinatie met een gezamenlijk optreden van een plaatselijk zangkoor. Zo zijn er in het verleden concertreizen georganiseerd naar o.a. <strong>Heidelberg</strong>, <strong>Leuven</strong>, 
								<strong>Groningen</strong>, <strong>Gent</strong> en <strong>Bonn</strong>.</p>
								<p><a href="{{ asset('storage/Archief/2011/Bonn/BW20110607.jpg') }}" data-lightbox="initieel5" data-title="<span class='groen'>Concertreis van Z.E.V. in 2011</span>">
								<img class="img-fluid rounded" src="{{ asset('storage/Archief/2011/Bonn/BW20110607.jpg') }}" width="640" height="480" /></a></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Sluit af</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 text-center">
					<a href="{{ asset('images/LogoZEV2019a.jpg') }}" data-lightbox="20191220" data-title="<br />Het logo van Z.E.V.">
					<img src="{{ asset('images/LogoZEV2019a.jpg') }}" class="img-fluid rounded" width="560" height="700" alt="{{ asset('images/LogoZEV2019a.jpg') }}" title="Het logo van Z.E.V." /></a><br /><br />
				</div>
				<div class="col-sm-12">
					<h2 class="rood">Welkom</h2>
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-3">
					<h4>&nbsp;</h4>
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-9">
					<h4>op de website van</h4>
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-3">
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-9">
					<h1 class="groen">Zanggroep</h1>
				</div>
				<div class="col-sm-6">
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-6">
					<h1 class="groen">Evergreen</h1>
				</div>
				<div class="col-sm-9">
					<h1>&nbsp;</h1>
				</div>
				<div class="col-sm-3">
					<h1 class="groen">Vierlingsbeek</h1>
				</div>
				<script>
						$(document).ready(function() {
						var owl = $('.owl-carousel');
						owl.owlCarousel({
							items: 3,
							loop: true,
							margin: 10,
							autoplay: true,
							autoplayTimeout: 3500,
							autoplayHoverPause: true,
							responsiveClass: true,
							responsive: {
								0: {
									items: 1
								},
								768: {
									items: 3
								},
								992: {
									items: 5,
									margin: 20
								}
							}
						});
					});
				</script>
			</div>
		</div>
	</div>
@endsection
