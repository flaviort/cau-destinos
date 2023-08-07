<?php
	$currentPage = 'home';
	include('components/head.php');
?>

<section id='banner'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>

				<div class='banner-slider swiper-container'>
					<div class='swiper-wrapper'>

						<div class='swiper-slide'>
							<div class='box'>
								<img data-src='assets/img/banner-01.jpg' alt='Índia' class='lazy cover'>
							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>
								<img data-src='assets/img/banner-02.jpg' alt='Marrocos' class='lazy cover'>
							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>
								<img data-src='assets/img/banner-03.jpg' alt='Jordânia' class='lazy cover'>
							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>
								<img data-src='assets/img/banner-04.jpg' alt='Chile' class='lazy cover'>
							</div>
						</div>

					</div>
				</div>

				<div class='banner-nav'></div>

				<div class='autoplay-indicator'>
					<span></span>
				</div>

			</div>
		</div>
	</div>
</section>

<section id='about'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				<div class='blue-box'>

					<h2 class='text-big light'>
						Somos a ponte entre você e novas experıêncıas
					</h2>

					<div class='row'>
						
						<div class='col-md-6'>
							<p>
								Somos criadores de conexões profundas entre viajantes destemidos e as maravilhas espalhadas pelo mundo. Em cada roteiro, costuramos pontes que transcendem o comum, desvendando destinos cativantes e emocionantes, prontos para serem explorados por aqueles que buscam algo além do convencional.<br /><br />

								Cada jornada que criamos é desenhada para inspirar, encantar e desafiar.
							</p>
						</div>

						<div class='col-md-6'>
							<p>
								Das paisagens majestosas aos sabores locais, das culturas vibrantes às tradições ancestrais, nossos roteiros são a manifestação de experiências que tocam os corações dos viajantes e criam memórias.<br /><br />

								Seja bem-vindo à Cau Destinos, onde criamos pontes entre pessoas e novas experiências, transformando viagens em boas memórias.
							</p>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section id='cards'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>

				<div class='top'>

					<div class='left'>

						<h2 class='text-big light blue reveal-text'>
							Os padrões foram feıtos para serem quebrados.<br />
							Explore os destınos Cau.
						</h2>

					</div>

					<div class='cards-nav navigation'>

						<div class='button prev'>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
						</div>

						<div class='button next'>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
						</div>

					</div>

				</div>

				<div class='cards-slider swiper-container'>
					<div class='swiper-wrapper'>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Cau informa
								</p>

								<p class='title light'>
									Os padrões foram feıtos para serem quebrados<br /><br />

									<span class='blue'>Explore os destınos Cau</span>
								</p>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Tailândia
								</p>

								<img data-src='assets/img/destinations/01.jpg' alt='Tailândia' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Vietnã
								</p>

								<img data-src='assets/img/destinations/02.jpg' alt='Vietnã' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Turquia
								</p>

								<img data-src='assets/img/destinations/03.jpg' alt='Turquia' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Noruega
								</p>

								<img data-src='assets/img/destinations/04.jpg' alt='Noruega' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Egito
								</p>

								<img data-src='assets/img/destinations/05.jpg' alt='Egito' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Peru
								</p>

								<img data-src='assets/img/destinations/06.jpg' alt='Peru' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									África do Sul
								</p>

								<img data-src='assets/img/destinations/07.jpg' alt='África do Sul' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Argentina
								</p>

								<img data-src='assets/img/destinations/08.jpg' alt='Argentina' class='lazy cover'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<p class='floating-text'>
									Áustria
								</p>

								<img data-src='assets/img/destinations/09.jpg' alt='Áustria' class='lazy cover'>

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section id='services'>
	<div class='container'>
		<div class='row'>
			<div class='col-12'>

				<div class='top'>

					<div class='left'>

						<h2 class='text-big light blue reveal-text'>
							Nós cuidamos de tudo!
						</h2>

					</div>

					<div class='services-nav navigation'>

						<div class='button prev'>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
						</div>

						<div class='button next'>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
						</div>

					</div>

				</div>

				<div class='services-slider swiper-container'>
					<div class='swiper-wrapper'>

						<div class='swiper-slide'>
							<div class='box'>

								<h3 class='text-big blue'>
									<b>
										Passagem
									</b>
								</h3>

								<p>
									Proporcionamos pacotes personalizados com passagens aéreas inclusas, permitindo que você explore o mundo de forma descomplicada e única. Deixe-nos criar uma jornada feita sob medida para você!
								</p>

								<img src='assets/img/services-01.png' alt='Passagem'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<h3 class='text-big blue'>
									<b>
										Hospedagem
									</b>
								</h3>

								<p>
									De charmosos chalés nas montanhas a aconchegantes hotéis à beira-mar, cada hospedagem é cuidadosamente selecionada para proporcionar uma experiência autêntica e memorável.
								</p>

								<img src='assets/img/services-02.png' alt='Hospedagem'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<h3 class='text-big blue'>
									<b>
										Passeios
									</b>
								</h3>

								<p>
									Dos encantos escondidos das cidades históricas aos cenários deslumbrantes da natureza, cada passeio é uma jornada de descobertas e emoções. Cada roteiro é uma promessa.
								</p>

								<img src='assets/img/services-03.png' alt='Passeios'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<h3 class='text-big blue'>
									<b>
										Alimentação
									</b>
								</h3>

								<p>
									Celebre a diversidade dos sabores em suas viagens! Dos mercados vibrantes às mesas de restaurantes estrelados, cada momento à mesa será uma experiência cativante e inesquecível.
								</p>

								<img src='assets/img/services-04.png' alt='Alimentação'>

							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section id='directions'>
	<div class='directions-pin'>

		<p class='text-big light'>
			Vá na direção de experiências incomuns <a href='#contact' class='hover-underline sliding-link'>clicando aqui!</a>
		</p>

		<div class='images'>

			<div class='position position-00'>
				<div class='image main-image'>
					<img src='assets/img/australia.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-01'>
				<div class='image image-01'>
					<img src='assets/img/banner-01.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-02'>
				<div class='image image-02'>
					<img src='assets/img/destinations/01.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-03'>
				<div class='image image-03'>
					<img src='assets/img/banner-02.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-04'>
				<div class='image image-04'>
					<img src='assets/img/banner-03.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-05'>
				<div class='image image-05'>
					<img src='assets/img/destinations/02.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

			<div class='position position-06'>
				<div class='image image-06'>
					<img src='assets/img/camel.jpg' alt='Austrália' class='lazy cover'>
				</div>
			</div>

		</div>

	</div>
</section>

<section id='team'>
	<div class='container'>
		<div class='row'>
			<div class='col-12'>

				<div class='top'>

					<div class='left'>

						<h2 class='text-big light blue reveal-text'>
							Team Cau Destinos
						</h2>

						<p class='desc'>
							Somos curadores de sonhos, arquitetos de roteiros e contadores de histórias que se entrelaçam com cada destino. Movidos pela aventura, dedicamos nossa expertise em desvendar tesouros escondidos e desenhar itinerários que transcendem o turismo comum.
						</p>

					</div>

					<div class='team-nav navigation'>

						<div class='button prev'>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
						</div>

						<div class='button next'>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
						</div>

					</div>

				</div>

				<div class='team-slider swiper-container'>
					<div class='swiper-wrapper'>

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/01.jpg' alt='Caroline Ferreira' class='lazy cover'>

								<h3 class='text-big'>
									<b>
										Caroline Ferreira
									</b>
								</h3>

								<p>
									Diretora Administrativa
								</p>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/02.jpg' alt='Fábio Nicolau' class='lazy cover'>

								<h3 class='text-big'>
									<b>
										Fábio Nicolau
									</b>
								</h3>

								<p>
									Diretor Operacional
								</p>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/03.jpg' alt='Milena Biagi' class='lazy cover'>

								<h3 class='text-big'>
									<b>
										Milena Biagi
									</b>
								</h3>

								<p>
									Gestora
								</p>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/04.jpg' alt='Jussara Lopes' class='lazy cover'>

								<h3 class='text-big'>
									<b>
										Jussara Lopes
									</b>
								</h3>

								<p>
									Gestora
								</p>

							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section id='testimonials'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				<div class='gray-box'>

					<div class='top'>

						<h2 class='text-big light blue reveal-text'>
							Veja o que <br />
							estão falando <br />
							da Cau Destinos
						</h2>

						<div class='testimonials-nav navigation'>

							<div class='button prev'>
								<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
								<?php echo file_get_contents('assets/svg/ux/angle-left.svg'); ?>
							</div>

							<div class='button next'>
								<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
								<?php echo file_get_contents('assets/svg/ux/angle-right.svg'); ?>
							</div>

						</div>

					</div>

					<div class='testimonials-slider swiper-container'>
						<div class='swiper-wrapper'>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Atendimento impecável. A empresa me atendeu de acordo com a minha proposta de viagem. Só tenho que parabenizar a Cau Destinos.<br /><br />

										O atendimento com a Jussara foi maravilhoso, super indico.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Angela Bertolazzi
											</strong>
										</p>

										<p class='position'>
											Cliente Cau
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Fizemos nosso pacote de férias para a cidade de Natal para o mês de janeiro 2023, com a Jussara.<br /><br />

										Deu tudo muito certo, desde a parte área,  terrestre e o hotel indicado , que foi maravilhoso. Obrigada pela atenção e dedicação!”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Angela Barreto
											</strong>
										</p>

										<p class='position'>
											Cliente Cau
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Chegou o meu kit viagem, que lembrança linda! A cada dia vocês inovando e cativando o cliente.<br /><br />

										Dessa forma já estou pensando na próxima viagem pelo capricho e valorizo muito essa atenção. Tudo é feito com muito carinho. Parabéns!”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Delsilene
											</strong>
										</p>

										<p class='position'>
											Cliente Cau
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Na Cau Destinos você conta com uma equipe de especialistas em viagem para te dar todo apoio e suporte que necessita! 😊 <br /><br />

										As melhores experiências de viagem estão na CAU”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Jussara Lopes
											</strong>
										</p>

										<p class='position'>
											Cliente Cau
										</p>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section id='contact'>
	<div class='container'>
		<div class='row'>

			<div class='col-md-5 left'>

				<h2 class='text-big light blue reveal-text'>
					Realize a viagem <br />
					dos seus sonhos <br />
					<strong>falando conosco!</strong>
				</h2>

				<form action='#' class='form-validate'>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='text' id='contact-name' name='Nome' class='input' placeholder='Nome' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='email' id='contact-email' name='Email' class='input' placeholder='Email' required>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<input type='tel' id='contact-phone' name='Telefone' placeholder='Telefone (com DDD)' class='input'>
						</div>
					</div>

					<div class='form-line'>
						<div class='line-wrapper'>
							<textarea id='contact-message' name='Mensagem' class='input textarea' placeholder='Mensagem' required></textarea>
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
					<img data-src='assets/img/camel.jpg' alt='Camelo' class='lazy cover parallax-img'>
				</div>

				<p data-speed='.975'>
					Egito
				</p>

			</div>

		</div>
	</div>
</section>

<?php include('components/footer.php'); ?>