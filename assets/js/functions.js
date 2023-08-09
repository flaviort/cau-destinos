// register split text
gsap.registerPlugin(ScrollTrigger, SplitText, ScrollSmoother)

const body = document.body
const select = (e) => document.querySelector(e)
const selectAll = (e) => document.querySelectorAll(e)
const selectId = (id) => document.getElementById(id)
const vh = (coef) => window.innerHeight * (coef/100)
const vw = (coef) => window.innerWidth * (coef/100)

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// show success message after form submit
	if (window.location.href.indexOf('contact-success') > -1) {
		setTimeout(function(){
			select('.contact-success').click()
		}, 300)
	}

	// make anchor links scroll smoothy
	$('.sliding-link').click(function(e) {
		e.preventDefault()
		var aid = $(this).attr('href')
		$('html, body').animate({ scrollTop: $(aid).offset().top }, 'slow')
	})

	// correct label click
	$('label').click(function(e){
		e.stopImmediatePropagation()
	})

	// open / close fs menu
	$('.open-fs').click(function(){
		$('body').toggleClass('fs-menu-open')
	})

	$('#fs-menu a').click(function(){
		$('body').removeClass('fs-menu-open')
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			$('body').removeClass('fs-menu-open')
		}
	})

	// faq open / close
	$('.faq-question .question').click(function(){
		$(this).parent('.faq-question').toggleClass('active')
		$(this).siblings('.answer').slideToggle()
		setTimeout(function(){
			ScrollTrigger.refresh()
		}, 450)
	})

	// magnet links
    if ($(window).width() > 993) {
        const links = selectAll('.magnet')
        const animateLink = function(e){
            const link = this.querySelector('span')
            const { offsetX: x, offsetY: y } = e
            const { offsetWidth: width, offsetHeight: height } = this

            intensity = 50
            xMove = x / width * (intensity * 2) - intensity
            yMove = y / height * (intensity * 2) - intensity
            link.style.transform = 'translate(' + xMove + 'px,' + yMove + 'px)'

            if(e.type == 'mouseleave') link.style.transform = ''
        }

        links.forEach(link => {
            link.addEventListener('mousemove', animateLink)
            link.addEventListener('mouseleave', animateLink)
        })
    }
}

// init mask js
function initMask() {
	var cleave = new Cleave("input[type='tel']", {
		delimiters: ['(', ') '],
    	blocks: [0, 2, 9],
	});
}

// init lazyload
function initLazyLoad() {
	const lazyLoadInstance = new LazyLoad({ 
		elements_selector: '.lazy',
		container: select('.main-wrap'),
		threshold: 200,
	})

	// refresh scrolltrigger once an image is loaded
	gsap.utils.toArray('.lazy').forEach(item => {
		item.addEventListener('load', () => {
			if (!item.classList.contains('cover')) {
				ScrollTrigger.refresh()
			}
		})
	})
}

// validate footer newsletter
function validateForms() {
	if(selectAll('.form-validate')) {

		const form = $('.form-validate')

		$.each(form, function() {
			$(this).validate({
				errorPlacement: function(error, element) {
					error.appendTo(element.closest('.form-line'))
					error.addClass('error-msg')
				},
				highlight: function (element){
					$(element).closest('.form-line').addClass('error')
				},
				unhighlight: function (element){
					$(element).closest('.form-line').removeClass('error')
				},
				messages: {
					Nome: "Este campo é obrigatório",
					Email: "Este campo é obrigatório",
					Mensagem: "Este campo é obrigatório",
				}
			})
		})
	}
}

// init scroll smoother
function initScrollSmoother() {
	if (ScrollTrigger.isTouch !== 1) {
		const smoother = ScrollSmoother.create({
			wrapper: '#smooth-content',
			content: '#smooth-content .main-wrap',
			smooth: 2,
			effects: true,
			normalizeScroll: true
		})

		// parallax effect
		smoother.effects('.parallax-img', {
			speed: 'auto'
		})

		// pause / play scroll smoother on some determined actions
		$('.open-fs').click(function(){
			smoother.paused(true)
		})

		$('#fs-menu a, .close-fs').click(function(){
			smoother.paused(false)
		})

		$(document).keyup(function(e) {
			if(e.key === 'Escape') {
				smoother.paused(false)
			}
		})

		// top menu smooth links
		$('#top-menu .menu button').click(function(e){
			e.stopImmediatePropagation()
			let target = $(this).attr('data-href')
			console.log(target)
			gsap.to(smoother, {
				scrollTop: Math.min(ScrollTrigger.maxScroll(window), smoother.offset(target, 'top 100')),
				duration: 1
			})
		})

		// init fancybox
		Fancybox.bind('[data-fancybox]', {
			autoFocus: false,
			dragToClose: false,
			placeFocusBack: false,
			on: {
				init: () => {
					smoother.paused(true)
				},
				destroy: () => {
					smoother.paused(false)
				}
			}
		})

	} else {

		// init fancybox on mobile
		Fancybox.bind('[data-fancybox]', {
			autoFocus: false,
			dragToClose: false,
			placeFocusBack: false
		})
	}
}

// here goes all the scroll related animations
function scrollTriggerAnimations() {

	// reveal text animation
	if(select('.reveal-text')) {

        const texts = selectAll('.reveal-text')
    
        texts.forEach(text => {
            
            // reset if needed
            if(text.anim) {
                text.anim.progress(1).kill()
            	text.split.revert()
            }

            text.split = new SplitText(text, { 
                type: 'lines, words, chars',
                linesClass: 'split-line'
            })

            // set up the anim
            text.anim = gsap.from(text.split.chars, {
                scrollTrigger: {
                    trigger: text,
                    toggleActions: 'restart pause resume reverse',
                    start: 'top 75%'
                },
                duration: 0.5, 
                ease: 'circ.out', 
                y: 100 + '%', 
                stagger: 0.01
            })
        })

	}
    
}

// init the banner section
function initBanner() {
	if(select('.banner-slider')) {

			// init the banner slider
			var autoplayIndicator = select('.autoplay-indicator span')

			const banner_slider = new Swiper('.banner-slider', {
				slidesPerView: 1,
				loop: false,
				simulateTouch: true,
				allowTouchMove: true,
				autoHeight: false,
				calculateHeight: false,
				spaceBetween: 0,
				effect: 'fade',
				fadeEffect: {
					crossFade: true
				},
				autoplay: {
					delay: 5000,
					disableOnInteraction: false
				},
				speed: 600,
				pagination: {
					el: '.banner-nav',
					clickable: true,
					renderBullet: function (index, className) {
						var slides = selectAll('.banner-slider .swiper-slide')
						var image = slides[index].querySelector('img')
						var altText = image.getAttribute('alt')
						var indexText = (index + 1).toString().padStart(2, '0')
						return '<span class="' + className + '"><p>' + indexText + '.<br />' + altText + '</p></span>'
					}
				},
				on: {
					autoplayTimeLeft(s, time, progress) {
						autoplayIndicator.style.setProperty("--progress", 1 - progress);
					}
				}
			})

	}
}

// init the cards section
function initCards() {
	if(select('.cards-slider')) {

		// check if the windows is below or above 993px
		if ($(window).width() > 993) {

			gsap.set('.cards-slider .swiper-slide', {
				opacity: 0,
				y: '25vh'
			})
	
			ScrollTrigger.batch('.cards-slider .swiper-slide', {
				start: '0 95%',
				onEnter: elements => {
					  gsap.to(elements, {
						opacity: 1,
						y: 0,
						stagger: 0.25,
						duration: 1
					})
				},
				onLeaveBack: elements => {
					gsap.to(elements, {
						opacity: 0,
						y: '25vh',
						stagger: 0.15,
						duration: 1
					})
				}
			})
			
		} else {

			// cards slider animation
			gsap.set('.cards-slider .swiper-slide', {
				x: '50vw',
				opacity: 0,
				scale: .75
			})

			gsap.to('.cards-slider .swiper-slide', {
				x: 0,
				opacity: 1,
				scale: 1,
				duration: 1,
				scrollTrigger: {
					trigger: '.cards-slider',
					start: '25% 100%',
					toggleActions: 'restart pause resume reverse'
				}
			})

			// init the cards slider
			const cards_slider = new Swiper('.cards-slider', {
				slidesPerView: 1,
				loop: false,
				simulateTouch: true,
				allowTouchMove: true,
				autoHeight: false,
				calculateHeight: false,
				spaceBetween: 15,
				navigation: {
					nextEl: '.cards-nav .next',
					prevEl: '.cards-nav .prev'
				},
				breakpoints: {
					767: {
						spaceBetween: 20,
						slidesPerView: 2
					}
				},
				on: {
					touchStart(){
						$('.cards-slider').addClass('is-dragging')
					}, touchEnd(){
						$('.cards-slider').removeClass('is-dragging')
					}
				}
			})
		}

	}
}

// init the services section
function initServices() {
	if(select('.services-slider')) {

		// services slider animation
		gsap.set('.services-slider .swiper-slide', {
			x: '50vw',
			opacity: 0,
			scale: .75
		})

		gsap.to('.services-slider .swiper-slide', {
			x: 0,
			opacity: 1,
			scale: 1,
			duration: 1,
			scrollTrigger: {
				trigger: '.services-slider',
				start: '25% 100%',
				toggleActions: 'restart pause resume reverse'
			}
		})

		// init the services slider
		const services_slider = new Swiper('.services-slider', {
			slidesPerView: 1,
			loop: false,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: true,
			calculateHeight: true,
			spaceBetween: 15,
			navigation: {
				nextEl: '.services-nav .next',
				prevEl: '.services-nav .prev'
			},
			breakpoints: {
				767: {
					spaceBetween: 30,
					slidesPerView: 1.5
				}, 1200: {
					spaceBetween: 50,
					slidesPerView: 2.75
				}
			},
			on: {
				touchStart(){
					$('.services-slider').addClass('is-dragging')
				}, touchEnd(){
					$('.services-slider').removeClass('is-dragging')
				}
			}
		})

	}
}

// init the directions section
function initDirections() {
	if(select('.directions-pin')) {

		let mainImage = $('#directions .images .position-00 .main-image')
		let mainText = $('#directions .text-big')
		let image00 = $('#directions .images .position-00')
		let image01 = $('#directions .images .position-01')
		let image02 = $('#directions .images .position-02')
		let image03 = $('#directions .images .position-03')
		let image04 = $('#directions .images .position-04')
		let image05 = $('#directions .images .position-05')
		let image06 = $('#directions .images .position-06')

		ScrollTrigger.create({
			trigger: '#directions',
			pin: true,
			start: 'top top',
			end: '+=' + vh(200)
		})

		gsap.to(image00, {
			scale: 4,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.from(mainText, {
			scale: 0,
			autoAlpha: 0,
			y: 500,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(mainImage, {
			borderRadius: 0,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image01, {
			scale: 5,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image02, {
			scale: 6,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image03, {
			scale: 8,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image04, {
			scale: 5,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image05, {
			scale: 6,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

		gsap.to(image06, {
			scale: 9,
			scrollTrigger: {
				trigger: '#directions',
				start: 'top top',
				endTrigger: '#team',
				scrub: () => {
					if (ScrollTrigger.isTouch !== 1) {
						3
					} else {
						true
					}
				}
			}
		})

	}
}

// init the team section
function initTeam() {
	if(select('.team-slider')) {

		// team slider animation
		gsap.set('.team-slider .swiper-slide', {
			x: '50vw',
			opacity: 0,
			scale: .75
		})

		gsap.to('.team-slider .swiper-slide', {
			x: 0,
			opacity: 1,
			scale: 1,
			duration: 1,
			scrollTrigger: {
				trigger: '.team-slider',
				start: '25% 100%',
				toggleActions: 'restart pause resume reverse'
			}
		})

		// init the team slider
		const team_slider = new Swiper('.team-slider', {
			slidesPerView: 1,
			loop: false,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: false,
			calculateHeight: false,
			spaceBetween: 15,
			navigation: {
				nextEl: '.team-nav .next',
				prevEl: '.team-nav .prev'
			},
			breakpoints: {
				767: {
					spaceBetween: 20,
					slidesPerView: 2
				}, 1200: {
					spaceBetween: 30,
					slidesPerView: 3
				}
			},
			on: {
				touchStart(){
					$('.team-slider').addClass('is-dragging')
				}, touchEnd(){
					$('.team-slider').removeClass('is-dragging')
				}
			}
		})

	}
}

// init the testimonials section
function initTestimonials() {
	if(select('.testimonials-slider')) {

		// testimonials slider animation
		gsap.fromTo('.testimonials-slider', {
			x: '10vw'
		}, {
			x: '-10vw',
			scrollTrigger: {
				trigger: '.testimonials-slider',
				start: '-10% 110%',
				end: '110% -10%',
				scrub: 2
			}
		})

		// init the testimonials slider
		const testimonials_slider = new Swiper('.testimonials-slider', {
			slidesPerView: 1,
			loop: false,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: false,
			calculateHeight: false,
			spaceBetween: 15,
			navigation: {
				nextEl: '.testimonials-nav .next',
				prevEl: '.testimonials-nav .prev'
			},
			breakpoints: {
				767: {
					spaceBetween: 20,
					slidesPerView: 2
				}, 1200: {
					spaceBetween: 30,
					slidesPerView: 3
				}
			},
			on: {
				touchStart(){
					$('.testimonials-slider').addClass('is-dragging')
				}, touchEnd(){
					$('.testimonials-slider').removeClass('is-dragging')
				}
			}
		})

	}
}

// init the top menu
function initTopMenu() {
	
	let currentScroll = 0
	let isScrollingDown = true
	var topMenu = document.getElementById('top-menu')

	$('#top-menu').addClass('fixed')

	window.addEventListener('scroll', function(){
	
		if ( window.pageYOffset > currentScroll ) {
			isScrollingDown = true
			topMenu.classList.remove('fixed')
		} else {
			isScrollingDown = false
			topMenu.classList.add('fixed')
		}
		
		currentScroll = window.pageYOffset
		
	})
}

// disable console warnings and show skyline message
function initCopyright() {
	const message = 'Design VVE Fight 🔗 www.vvefight.com \nCode Senz Design 🔗 www.senzdsn.com'
	const style = 'color: #f8f8f8; font-size: 12px; font-weight: bold; background-color: #0d0e13; padding: 8px'
	console.log(`%c${message}`, style)
}

// opening animation
function openingAnimation() {
	const opening = gsap.timeline({
		delay: .75
	})

	opening.set('html', {
		cursor: 'wait',
	})

	opening.set('#banner', {
		autoAlpha: 0,
		scale: 1.1
	})

	opening.set('#about', {
		autoAlpha: 0,
		y: '20%'
	})

	opening.call(function() {
		initScript()
	})

	opening.to('body', {
		opacity: 1,
		clearProps: 'all'
	})

	opening.to('#banner', {
		autoAlpha: 1,
		scale: 1,
		duration: 1.5
	})

	opening.to('#about', {
		autoAlpha: 1,
		y: 0,
		duration: 1
	}, '-=1')

	opening.to('html', {
		cursor: 'auto',
		duration: 0
	})

	opening.call(function() {
		ScrollTrigger.refresh()
	})

}

// fire all scripts on page load
function initScript() {
	initClickAndKeyFunctions()
	initMask()
	validateForms()
	initLazyLoad()
	initBanner()
	initCards()
	initDirections()
	initServices()
	initTeam()
	initTestimonials()
	scrollTriggerAnimations()
	initScrollSmoother()
	initCopyright()
	initTopMenu()
}

openingAnimation()