@include('includes.header')
@extends('layouts.master')


@section('content')
	<div class="row  farms-fix">
    <div class="footer-header">

    </div>
	</div>
	<div class="row">
	@if ($code === 1)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagesuc">
				<h1>Vasa poruka je poslata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 2)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Doslo je do greske</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 3)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Taj recept nepostoji</h1>

		</div>
		<div class="col-md-3"></div>

	@elseif ($code === 4)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>id recepta nije odgovarujećeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 5)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>niste izabrali paket</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 6)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>paket nije odogovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 7)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>količina nije odogovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 8)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>ime nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 9)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>prezime nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 10)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>email nije odogovarajućeg formata</h1>

		</div>

	@elseif ($code === 11)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>telefon nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 12)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>mesto nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 13)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>ulica i broj nisu odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 14)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>poštanski kod nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 15)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>poruka sa specijalnim zahtevima nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 16)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagesuc">
				<h1>Uspesno poslata narudžbina</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 17)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Administrator sa tim korisničkim imenom nije pronađen</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 18)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Pogrešno ste ukucali lozinku</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 19)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Niste prijavljeni</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 22)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Naslov recepta nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 23)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Sastojci nisu odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 24)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Način spremanja nije odgovarajućeg formata</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 25)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagesuc">
				<h1>Uspešno poslat recept</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 26)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Neuspešno poslata narudžbina</h1>

		</div>
		<div class="col-md-3"></div>
	@elseif ($code === 27)
		<div class="col-md-3"></div>
		<div class="col-md-6 messagefail">
				<h1>Nemate dozvolu</h1>

		</div>
		<div class="col-md-3"></div>
	@endif
		</div>

@endsection