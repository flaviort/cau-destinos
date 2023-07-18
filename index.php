<?php
	$currentPage = 'home';
	include('components/head.php');
?>

<section id='banner'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='about'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='cards'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='services'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='team'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='testimonials'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
			</div>
		</div>
	</div>
</section>

<section id='contact'>
	<div class='container container-big'>
		<div class='row'>

			<div class='col-md-5 left'>

				<h2 class='text-big light blue'>
					Realize a viagem <br />
					dos seus sonhos <br />
					<strong>falando conosco!</strong>
				</h2>

				<form action='#' class='form-validate'>

					<div class='form-line'>

						<label for='contact-name' class='label'>
							Nome
						</label>

						<div class='line-wrapper'>

							<input type='text' id='contact-name' name='Nome' class='input' required>

						</div>

					</div>

					<div class='form-line'>

						<label for='contact-email' class='label'>
							Email
						</label>

						<div class='line-wrapper'>

							<input type='email' id='contact-email' name='Email' class='input' required>

						</div>

					</div>

					<div class='form-line'>

						<label for='contact-phone' class='label'>
							Telefone
						</label>

						<div class='line-wrapper'>

							<input type='text' id='contact-phone' name='Telefone' class='input'>

						</div>

					</div>

					<div class='form-line'>

						<label for='contact-message' class='label'>
							Mensagem
						</label>

						<div class='line-wrapper'>

							<textarea id='contact-message' name='Mensagem' class='input textarea' required></textarea>

						</div>

					</div>

					<div class='form-line'>

						<input type='submit' id='contact-submit'>

						<label for='contact-submit' class='blue-button magnet'>
							<span>
								Enviar!
							</span>
						</label>

					</div>

				</form>
				
			</div>

			<div class='col-md-7 right'>

				<div class='image'>
					<img data-src='assets/img/camel.jpg' alt='Camelo' class='lazy cover'>
				</div>

				<p>
					Egito
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php'); ?>