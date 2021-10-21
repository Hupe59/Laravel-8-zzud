@extends('layouts.master')

@section('content')
 	<div class="row">
		<div class="col-xl-8">
			<h2>Contact</h2>
			<h3>Je kan op de volgende manieren contact opnemen:</h3>
			<div class="accordion" id="accordionContact">
				<div class="accordion-item">
					<div class="accordion-header" id="headingOne">
						<h5 class="mb-0">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								secretariaat/ telefoon/ bank/ KvK
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionContact">
						<div class="accordion-body">
							<table class="table table-sm table-responsive">
								<tr>
									<td><p><strong>Secretariaat:</strong></p></td>
									<td><p class="groen"><strong>Mira Klaassen</strong></p></td>
								</tr>
								<tr>
									<td><p><strong>Telefoon:</strong></p></td>
									<td><p class="groen"><strong>0478&nbsp;-&nbsp;631508</strong></p></td>
								</tr>
								<tr>
									<td><p><strong>Bank:</strong></p></td>
									<td><p class="groen"><strong>NL18RABO0154.3052.94<br />(Rabobank)<br />t.n.v.&nbsp;penningmeester&nbsp;Z.E.V.</strong></p></td>
								</tr>
								<tr>
									<td><p><strong>KvK-nummer:</strong></p></td>
									<td><p class="groen"><strong>40216789</strong></p></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				
				<div class="accordion-item">
					<div class="accordion-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								E-mail
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionContact">
						<div class="accordion-body">
							<p><a href="mailto:mail@zevzingt.nl">
							<img src="{{ asset('images/envelop.gif') }}" alt="E-mail ons ..." style="border: 0;" hspace="5" vspace="5" width="50" height="50" />
							mail@zevzingt.nl</a></p>
						</div>
					</div>
				</div>
				
				<div class="accordion-item">
					<div class="accordion-header" id="headingThree">
						<h5 class="mb-0">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Repetitie-adres
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionContact">
						<div class="accordion-body">
							<p><span class="groen"><strong>Zanggroep Evergreen Vierlingsbeek</strong></span> repeteert elke vrijdag<br />
							van 20.00 uur tot 22.30 uur in:</p>
							<p class="groen"><strong>Gemeenschapshuis Joffershof<br />
							Laurentiusstraat 2<br />
							5821 AW&nbsp;&nbsp;VIERLINGSBEEK</strong></p>
							<p>Telefoon: <span class="groen"><strong>0478&nbsp;&#45;&nbsp;632082</strong></span></p>
						</div>
					</div>
				</div>

				<div class="accordion-item">
					<div class="accordion-header" id="headingFour">
						<h5 class="mb-0">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Nuttige locaties
							</button>
						</h5>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionContact">
						<div class="accordion-body">
							<p>Enkele nuttige 
							<a href="https://www.google.com/maps/d/edit?mid=1WAU6D6WG7954ZEXWzrKQj6KQKcvdMIZv&usp=sharing" title="Enkele nuttige locaties m.b.t. Z.E.V." target="_blank"><span class="groen">locaties</span></a> met 
							betrekking tot <span class="groen"><strong>Zanggroep Evergreen Vierlingsbeek</strong></span></p>
						</div>
					</div>
				</div>
				
				<div>
					<p><br />
						<a href="/contact">Terug naar boven</a>
					</p>
				</div>
			</div>			
		</div>
		@include('nieuw.sidebar')
	</div>
@endsection
