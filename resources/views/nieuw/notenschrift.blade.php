@extends('layouts.master')

@section('content')
 	<div class="row">
		<div class="col-xl-8">
			<h2>&#39;t Notenschrift</h2>
				<p><span class="groen"><strong>&#39;t Notenschrift</strong></span> is het &#39;huisorgaan&#39; van <span class="groen"><strong>Zanggroep Evergreen Vierlingsbeek</strong></span>.</p>
				<div class="table-responsive-sm">
					<table class="table">
						<tr>
							<td>
								<a href="{{ asset('images/notschr.jpg') }}" data-lightbox="notschr" data-title="<br />Ons &#39;huisorgaan&#39;">
								<img src="{{ asset('images/notschr.jpg') }}" class="rounded img-fluid" alt="{{ asset('images/notschr.jpg') }}" width="200" height="150" /></a>
							</td>
							<td>Het verschijnt twee maal per jaar (eind juni en eind december) en er staan o.a. verslagen van optredens, interviews met koorleden, een puzzel en allerlei ontboezemingen van de leden in.<br /><br />
							We zijn inmiddels al aan de <strong>22<sup>e</sup></strong> jaargang toe.</td>
						</tr>
					</table>
				</div>
		</div>
		@include('nieuw.sidebar')
	</div>
@endsection
