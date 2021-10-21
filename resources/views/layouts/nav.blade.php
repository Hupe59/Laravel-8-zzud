<nav class="navbar navbar-expand-xl navbar-dark bg-dark rounded" style="z-index: 8000;">
	<div class="container-fluid">

<!-- Brand -->
		<a class="navbar-brand" href="/" style="padding-top: 0; padding-bottom: 0;">
			<img src="{{ asset('images/LogoZEV2019b.jpg') }}" width="54" height="54" alt="LogoZEV2019b.jpg" />
		</a>
<!--
		<a class="navbar-brand" href="/">Startpagina</a>
-->

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Links -->
			<ul class="navbar-nav me-auto">
<!--
			<ul class="navbar-nav mr-auto" style="padding-top: 12px;">
			<ul class="navbar-nav">
-->			
<!--
					@if (Auth::check())
-->				
					<!-- Dropdown 0 -->
<!--
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $naam_fid[0] }}</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink0">
							@if (Auth::user()->singing_voice > 0)
								<a class="dropdown-item" href="/aanwezigheid">Aanwezigheid</a>
								@if (Auth::user()->extra == "1" || Auth::user()->extra == "2")
									<a class="dropdown-item" href="/aanwezigheidusers">Aanwezigheid Z.E.V.-lid</a>
									<a class="dropdown-item" href="/aanwezigheiddata">Aanwezigheid per datum</a>
								@endif
							@endif
							@if ($naam_fid[0] === 'Admin')
								<a class="dropdown-item" href="/register">Nieuwe gebruiker</a>
								<a class="dropdown-item" href="/users">Ledenoverzicht</a>
								<a class="dropdown-item" href="/repertoire/create">Nieuw nummer</a>
								<a class="dropdown-item" href="/files/create">Bestanden uploaden</a>
								<a class="dropdown-item" href="/presence">Aanwezigheidsregistratie</a>
								<a class="dropdown-item" href="/aanwezigheidusers">Aanwezigheid Z.E.V.-lid</a>
								<a class="dropdown-item" href="/aanwezigheiddata">Aanwezigheid per datum</a>
								<a class="dropdown-item" href="/oldpaper">Oud Papier Registratie</a>
								<a class="dropdown-item" href="/wachtwoordResetMelding">Melden terugzetten wachtwoord</a>
							@else	
								<a class="dropdown-item" href="/mededelingen">Mededelingen</a>
								<a class="dropdown-item" href="/ledenoverzicht">Ledenoverzicht</a>
								<a class="dropdown-item" href="/userszev">Toon profiel Z.E.V.-lid</a>
								<a class="dropdown-item" href="/userszevlight">Toon profiel Z.E.V.-Lightlid</a>
								@if (Auth::user()->singing_voice <> 5)
									<a class="dropdown-item" href="/oudpapier">Overzicht Oud Papier</a>
								@endif
								@if (Auth::user()->oldpapers()->whereDate('old_paper_date', '<=', Carbon\Carbon::today()->toDateString())->count() > 0)
									<a class="dropdown-item" href="/oudpapierindividueel">Oud Papier Verleden</a>
								@endif
								<a class="dropdown-item" href="/downloaden">Te downloaden ...</a>
								<a class="dropdown-item" href="/commissies0">Commissies</a>
								<a class="dropdown-item" href="/veranderWachtwoord">Verander je wachtwoord</a>
							@endif
							@if (Auth::user()->extra == "1" || Auth::user()->extra == "2")
								<a class="dropdown-item" href="/usersann">Jubilarissen</a>
							@endif
							<a class="dropdown-item" href="/logout">Afmelden</a>
						</div>
					</li>
				@else
-->			
					<li class="nav-item">
						<a class="nav-link" href="login">Aanmelden</a>
					</li>
<!--
				@endif
				<li class="nav-item custom-navbar-image" id="wow">
					<a class="nav-link" href="/css/images/a.jpg" data-lightbox="Wow" data-title="<br />Spreekt voor zich ...">
						<img src="/css/images/wow_tr.png" width="64" height="48" style="margin-top: 2px;"></a>
					<a class="nav-link" href="/css/images/2.jpg" data-lightbox="Wow" data-title="<br />Optreden in Handel in 2015"></a>
					<a class="nav-link" href="/css/images/HangDownYourHead.jpg" data-lightbox="Wow" data-title="<br />Hang down your head ..."></a>
					<a class="nav-link" href="/css/images/CarrouselDeelnemers.jpg" data-lightbox="Wow" data-title="<br />Enthousiast ..."></a>
					<a class="nav-link" href="/css/images/Engeltjes.jpg" data-lightbox="Wow" data-title="<br />Engeltjes ..."></a>
					<a class="nav-link" href="/css/images/220.jpg" data-lightbox="Wow" data-title="<br />Muziek op de Maas 2014"></a>
				</li>
-->			
				<li class="nav-item">
					<a class="nav-link" href="actualiteiten">Actualiteiten</a>
				</li>
				<!-- Dropdown 1 -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Z.E.V.-allerlei</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
						<li><a class="dropdown-item" href="/nieuwe_site">Over ons</a></li>
						<li><a class="dropdown-item" href="/repertoire">Repertoire</a></li>
						<li><a class="dropdown-item" href="/samenstelling">Samenstelling Zanggroep</a></li>
						<li><a class="dropdown-item" href="/optredens">Optredens</a></li>
						<li><a class="dropdown-item" href="/commissies">Commissies</a></li>
						<li><a class="dropdown-item" href="/liedjesavond">Liedjesavond</a></li>
<!--							
						<li><a class="dropdown-item" href="/Oveb">Teksten Liedjesavond</a></li>
-->							
						<li><a class="dropdown-item" href="/notenschrift">&#39;t Notenschrift</a></li>
						<li><a class="dropdown-item" href="/links">Links</a></li>
<!--
						@if (Auth::check())
							<li><a class="dropdown-item" href="/googledrive">Google Drive</a></li>
							<li><a class="dropdown-item" href="/coronaprotocol">Coronaprotocol</a></li>
						@endif
-->
					</ul>
				</li>
				<!-- Dropdown 2 -->
<!--							
				Z.E.V.-Light
-->							
<!--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Z.E.V.-Light</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
						<a class="dropdown-item" href="/ZLinformatie">Informatie</a>
						<a class="dropdown-item" href="/actualiteiten">Werving</a>
						<a class="dropdown-item" href="/actualiteiten"><em>... verdere invulling</em></a>
					</div>
				</li>
-->
				<!-- Dropdown 3 -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Evenementen</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
						<li><a class="dropdown-item" href="ModM">Muziek op de Maas</a></li>
						<li><a class="dropdown-item" href="ZEV_Interactief">Z.E.V.-Interactief</a></li>
					</ul>
				</li>

			</ul>		

<!--
			<ul class="navbar-nav ml-auto">
-->			
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
