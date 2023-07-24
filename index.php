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

					<h2 class='text-big light reveal-text'>
						Somos a ponte entre você e novas experıêncıas
					</h2>

					<div class='row'>
						
						<div class='col-md-6'>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr exercitation ullamc laboris nisi ut aliquip ex ea comodo consequat. Duis autept dolor in reprehenderit in vol vellhit esse cillum dolore eur fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>

						<div class='col-md-6'>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr exercitation ullamc laboris nisi ut aliquip ex ea comodo consequat. Duis autept dolor in reprehenderit in vol vellhit esse cillum dolore eur fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
									Moscou
								</p>

								<img data-src='assets/img/destinations/02.jpg' alt='Moscou' class='lazy cover'>

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
									Jordânia
								</p>

								<img data-src='assets/img/destinations/07.jpg' alt='Jordânia' class='lazy cover'>

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
									Índia
								</p>

								<img data-src='assets/img/destinations/09.jpg' alt='Índia' class='lazy cover'>

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
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolo magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamc laboris nisi ut ex comodo abnos consequat.
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
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolo magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamc laboris nisi ut ex comodo abnos consequat.
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
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolo magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamc laboris nisi ut ex comodo abnos consequat.
								</p>

								<img src='assets/img/services-03.png' alt='Passeios'>

							</div>
						</div>

						<div class='swiper-slide'>
							<div class='box'>

								<h3 class='text-big blue'>
									<b>
										Transporte
									</b>
								</h3>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolo magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamc laboris nisi ut ex comodo abnos consequat.
								</p>

								<img src='assets/img/services-01.png' alt='Transporte'>

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
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolo magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamc laboris nisi ut ex comodo abnos consequat.
								</p>

								<img src='assets/img/services-02.png' alt='Alimentação'>

							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<section id='directions'>
	<div class='container container-big'>
		<div class='row'>
			<div class='col-12'>
				
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
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididi, labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr exercitation ullamc laboris nisi ut aliquip ex ea comodo consequat.
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

								<img data-src='assets/img/team/03.jpg' alt='Jussara Lopes' class='lazy cover'>

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

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/04.jpg' alt='Milena Biagi' class='lazy cover'>

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

								<img data-src='assets/img/team/03.jpg' alt='Jussara Lopes' class='lazy cover'>

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

						<div class='swiper-slide'>
							<div class='box'>

								<img data-src='assets/img/team/04.jpg' alt='Milena Biagi' class='lazy cover'>

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
										“Agradeço imensamente à Cau por tornar a minha viagem à Tailândia uma experiência inesquecível. A atenção aos detalhes, a organização impecável e a seleção dos melhores passeios fizeram toda a diferença.<br /><br />

										Recomendo a todos os clientes que desejam vivenciar experiências mágicas.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Ana Silva
											</strong>
										</p>

										<p class='position'>
											Advogada
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Quero expressar minha gratidão por planejar uma viagem incrível para a Patagônia. A combinação de paisagens deslumbrantes, guias experientes e acomodações confortáveis fez com que essa fosse a melhor viagem da minha vida.<br /><br />

										Certamente voltarei a utilizar os serviços da agência no futuro.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Carlos Pereira
											</strong>
										</p>

										<p class='position'>
											Engenheiro Civil
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Não poderia estar mais satisfeita com os serviços prestados pela Cau Destinos. Minha viagem à França foi perfeita em todos os aspectos.<br /><br />

										Desde o planejamento cuidadoso até a assistência durante toda a jornada, tudo foi excepcional. Sem dúvida, recomendo a agência a todos os amantes de viagens.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Laura Santos
											</strong>
										</p>

										<p class='position'>
											Jornalista
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Superou todas as minhas expectativas em minha recente viagem ao Japão.<br /><br />

										A dedicação da equipe em criar um itinerário personalizado, combinado com o conhecimento profundo da cultura local, garantiu uma experiência autêntica e enriquecedora. Com certeza, voltarei a contar com seus serviços.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Rodrigo Almeida
											</strong>
										</p>

										<p class='position'>
											Empresário
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Agradeço imensamente à Cau por tornar a minha viagem à Tailândia uma experiência inesquecível. A atenção aos detalhes, a organização impecável e a seleção dos melhores passeios fizeram toda a diferença.<br /><br />

										Recomendo a todos os clientes que desejam vivenciar experiências mágicas.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Ana Silva
											</strong>
										</p>

										<p class='position'>
											Advogada
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Quero expressar minha gratidão por planejar uma viagem incrível para a Patagônia. A combinação de paisagens deslumbrantes, guias experientes e acomodações confortáveis fez com que essa fosse a melhor viagem da minha vida.<br /><br />

										Certamente voltarei a utilizar os serviços da agência no futuro.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Carlos Pereira
											</strong>
										</p>

										<p class='position'>
											Engenheiro Civil
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Não poderia estar mais satisfeita com os serviços prestados pela Cau Destinos. Minha viagem à França foi perfeita em todos os aspectos.<br /><br />

										Desde o planejamento cuidadoso até a assistência durante toda a jornada, tudo foi excepcional. Sem dúvida, recomendo a agência a todos os amantes de viagens.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Laura Santos
											</strong>
										</p>

										<p class='position'>
											Jornalista
										</p>
									</div>

								</div>
							</div>

							<div class='swiper-slide'>
								<div class='box'>

									<p class='text'>
										“Superou todas as minhas expectativas em minha recente viagem ao Japão.<br /><br />

										A dedicação da equipe em criar um itinerário personalizado, combinado com o conhecimento profundo da cultura local, garantiu uma experiência autêntica e enriquecedora. Com certeza, voltarei a contar com seus serviços.”
									</p>

									<div class='bottom'>
										<p class='name'>
											<strong>
												Rodrigo Almeida
											</strong>
										</p>

										<p class='position'>
											Empresário
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
							<input type='text' id='contact-phone' name='Telefone' placeholder='Telefone' class='input'>
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