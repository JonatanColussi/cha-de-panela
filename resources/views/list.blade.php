<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Lista de Presentes - Jonatan & Letícia</title>
	<style>
		body {
			background-image: url({{ asset('img/wpp.jpg') }});
			overflow-x: hidden;
		}

		.footer-fixed {
			width: 100%;
		    text-align: center;
		    z-index: 9999;
		    height: 50px;
		    position: fixed;
		    bottom: 0;
		    background-color: #c7c7c7;
		    vertical-align: middle;
		    border-top: 2px solid #fff;
		}

		.footer-fixed button {
			margin-top: 7px;
		}

		.riscado {
			text-decoration: line-through;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<ul class="list-group" style="margin-top:50px; margin-bottom: 100px;">
				@foreach ($gifts as $gift)
					<li class="list-group-item">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="gift{{ $gift->id }}" name="gift[]" value="{{ $gift->id }}" {{ ($gift->checked) ? 'disabled' : '' }}>
							<label class="custom-control-label {{ ($gift->checked) ? 'riscado' : ''}}" for="gift{{ $gift->id }}">{{ $gift->name }}</label>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="footer-fixed">
		<button type="button" class="btn btn-success" disabled>Presentear</button>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="{{ asset('js/components.js') }}" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function($) {
			$("li").on('click', function(){
				$(this).find('[type=checkbox]:not(:disabled)').prop('checked', !$(this).find('[type=checkbox]').prop('checked'));
			});

			var gifts = [];
			$('[type=checkbox]').on('change', function() {
				gifts = [];
				$('[type=checkbox]:checked').each(function() {
					gifts.push($(this).val());
				});

				$(".footer-fixed button").prop('disabled', (gifts.length == 0));
			});

			$(".footer-fixed button").on('click', function(event) {
				event.preventDefault();

				msg = "Você selecionou os seguintes presentes:\n\n";

				$('[type=checkbox]:checked').each(function() {
					msg += $(this).siblings('label').text()+"\n";
				});
				msg += "\nConfirma?";

				if (confirm(msg)) {
					$.ajax({
						url: '{{ route('save') }}',
						type: 'POST',
						dataType: 'json',
						data: {
							gifts: gifts
						},
						success: function(response){
							if (response.success) {
								alert("Itens gravados com sucesso\n\nNós agradeçemos muito :D");
								location.reload();
							}
						},
						error: function(response){
							console.log(response);
						}
					});
				}
			});
		});
	</script>
</body>
</html>
