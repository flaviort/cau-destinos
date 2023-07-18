// register split text
gsap.registerPlugin(ScrollTrigger, SplitText, ScrollSmoother)

const body = document.body;
const select = (e) => document.querySelector(e);
const selectAll = (e) => document.querySelectorAll(e);
const selectId = (id) => document.getElementById(id);
const vh = (coef) => window.innerHeight * (coef/100);
const vw = (coef) => window.innerWidth * (coef/100);

// init all click, mouseover and keyup functions
function initClickAndKeyFunctions() {

	// correct label click
	$('label').click(function(e){
		e.stopImmediatePropagation()
	})

	var fsMenu = gsap.timeline({
		paused: true
	})

	fsMenu.to('#fs-menu', {
		pointerEvents: 'all',
		duration: 0
	})

	fsMenu.to('#mouse', {
		borderColor: '#fff',
		duration: 1
	})

	fsMenu.to('#fs-menu .bg div', {
		height: '100%',
		stagger: .1
	}, '-=1')

	fsMenu.to('#fs-menu .close-fs', {
		autoAlpha: 1
	}, '-=.5')

	fsMenu.to('#fs-menu .menu > li', {
		autoAlpha: 1,
		stagger: .1
	})

	// open / close fs menu
	$('.open-fs').click(function(){
		fsMenu.play()
	})

	$('.close-fs, #fs-menu .bg, #fs-menu a').click(function(){
		fsMenu.reverse()
	})

	// close all opened menus when pressing the ESC key
	$(document).keyup(function(e) {
		if(e.key === 'Escape') {
			$('body').removeClass('fs-menu-open')
			fsMenu.reverse()
		}
	})

	// faq open / close
	$('.faq-question .question').click(function(){
		if (isDoubleClicked($(this))) return;
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
            const link = this.querySelector('span');
            const { offsetX: x, offsetY: y } = e
            const { offsetWidth: width, offsetHeight: height } = this;

            intensity = 50;
            xMove = x / width * (intensity * 2) - intensity;
            yMove = y / height * (intensity * 2) - intensity;
            link.style.transform = 'translate(' + xMove + 'px,' + yMove + 'px)';

            if(e.type == 'mouseleave') link.style.transform = '';
        }

        links.forEach(link => {
            link.addEventListener('mousemove', animateLink)
            link.addEventListener('mouseleave', animateLink)
        })
    }
}

// init lazyload
function initLazyLoad() {
	const lazyLoadInstance = new LazyLoad({ 
		elements_selector: '.lazy',
		container: select('.main-wrap')
	})

	// refrsh scrolltrigger once an image is loaded
	gsap.utils.toArray('.lazy').forEach(item => {
		item.addEventListener('load', () => {
			if (!item.classList.contains('cover')) {
				ScrollTrigger.refresh()
			}
		})
	})
}

// init fancybox
function initFancybox() {
	Fancybox.bind('[data-fancybox]', {
		autoFocus: false,
		dragToClose: false,
		placeFocusBack: false,
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
	}
}

// here goes all the scroll related animations
function scrollTriggerAnimations() {

	// reveal text animation
	if(select('.reveal-text')) {

        const texts = selectAll('.reveal-text');
    
        texts.forEach(text => {
            
            // reset if needed
            if(text.anim) {
                text.anim.progress(1).kill();
            	text.split.revert();
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

// init the top menu
function initTopMenu() {
	
	let currentScroll = 0;
	let isScrollingDown = true;
	var topMenu = document.getElementById('top-menu')

	$('#top-menu').addClass('fixed')

	window.addEventListener('scroll', function(){
	
		if ( window.pageYOffset > currentScroll ) {
			isScrollingDown = true;
			topMenu.classList.remove('fixed');
		} else {
			isScrollingDown = false;
			topMenu.classList.add('fixed');
		}
		
		currentScroll = window.pageYOffset
		
	})
}

// init all the sliders on the website
function initSliders() {

	// init the why choose slider on the homepage
	if(select('.why-choose-slider')) {
		const whyChooseSlider = new Swiper ('.why-choose-slider', {
			slidesPerView: 1,
			loop: true,
			simulateTouch: true,
			allowTouchMove: true,
			autoHeight: true,
			calculateHeight: true,
			spaceBetween: 15,
			pagination: {
				el: '#why-choose .why-choose-nav',
				type: 'bullets',
				clickable: true,
			},
			autoplay: {
				delay: 9750
			},
			breakpoints: {
				767: {
					spaceBetween: 30
				}
			}
		})
	}
}

// disable console warnings and show skyline message
function initCopyright() {
	//console.clear()
	const message = 'Design VVE Fight 🔗 www.vvefight.com \nCode Senz Design 🔗 www.senzdsn.com'
	const style = 'color: #f8f8f8; font-size: 12px; font-weight: bold; background-color: #0d0e13; padding: 8px'
	console.log(`%c${message}`, style)
}

// custom mouse cursor
function initMouseCursor() {

	let links = selectAll('a, button')
	let mouse = document.getElementById('mouse');

	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseover', function(){
			gsap.to(mouse, {
				scale: 2,
				width: '3rem',
				height: '3rem',
				marginTop: '-1.5rem',
				marginLeft: '-1.5rem'
			})
		});
	};
	
	for (let i = 0; i < links.length; i++) {
		links[i].addEventListener('mouseleave', function(){
			gsap.to(mouse, {
				scale: 1,
				width: '1.5rem',
				height: '1.5rem',
				marginTop: '-.75rem',
				marginLeft: '-.75rem'
			})
		});
	};

	function moveCircle(e) {
		gsap.to(mouse, .5, {
			x: e.clientX,
			y: e.clientY
		})
	}
	
	window.addEventListener('mousemove', moveCircle)
}

// fire the opening animation
function openingAnimation() {
	const opening = gsap.timeline({
		delay: 1
	});

	opening.set('html', {
		cursor: 'wait',
	})

	opening.call(function(){
		initScript()
	})

	opening.to('#top-menu', {
		y: '-110%',
		duration: 0
	})

	opening.set('#home-banner .bg', {
		autoAlpha: 0
	})

	opening.set('#home-banner .col-12', {
		autoAlpha: 0
	})

	opening.set('#about', {
		marginTop: '5rem'
	})

	opening.to('#opening .bg div', {
		y: '-110%',
		stagger: 0.1,
		duration: 2
	})

	opening.to('html', {
		cursor: 'auto',
		duration: 0
	})

	opening.to('#home-banner .bg', {
		autoAlpha: 1,
		duration: 1
	}, '-=1')

	opening.to('#about', {
		marginTop: 0,
		duration: 1
	}, '-=1')

	opening.to('#home-banner .col-12', {
		autoAlpha: 1,
		duration: 1
	}, '-=1')

	opening.to('#top-menu', {
		y: 0,
		duration: 1
	}, '-=2')

	opening.call(function(){
		ScrollTrigger.refresh()
		$('#top-menu').addClass('fixed')
	})

	opening.to('#top-menu', {
		clearProps: true,
		duration: 0
	})
}

// fire all scripts on page load
function initScript() {
	initClickAndKeyFunctions()
	initFancybox()
	validateForms()
	initLazyLoad()
	initSliders()
	scrollTriggerAnimations()
	initScrollSmoother()
	initCopyright()
	initMouseCursor()
	initTopMenu()
	//openingAnimation()
}

initScript()