const swiper = new Swiper(".mainSwiper", {
	// Optional parameters
	loop: true,
	lazy: true,
	effect: 'creative',
	creativeEffect: {
		prev: {
			// will set `translateZ(-400px)` on previous slides
			translate: [0, 0, -400],
		},
		next: {
			// will set `translateX(100%)` on next slides
			translate: ['100%', 0, 0],
		},
	},
	autoplay: {
		delay: 2000,
	},  
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});

const feature = new Swiper('.featureSwiper', {
        slidesPerView: 4,
        loop: true,
        parallax: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});

const pers = new Swiper('.persSwiper', {
        slidesPerView: 4,
        loop: true,
        parallax: true,
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});


const pop = new Swiper('.popSwiper', {
	slidesPerView: 4,
        loop: true,
        parallax: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});

const brand = new Swiper('.brandSwiper', {
	slidesPerView: 4,
        loop: true,
        parallax: false,
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});

const catalog = new Swiper('.catalogSwiper', {
	slidesPerView: 3,
        loop: true,
        parallax: false,
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 0,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});


const poppr = new Swiper('.popprSwiper', {
	slidesPerView: 4,
        loop: true,
        parallax: false,
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});
const advantages = new Swiper('.advantagesSwiper', {
	slidesPerView: 3,
        loop: true,
        parallax: false,
        speed: 1500,
        direction: 'horizontal',
        effect: 'slide',
        spaceBetween: 18,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }, 
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});



/* меню под крошками */
var chosen = document.querySelector(".chosen"),
list = document.querySelector(".menulist");
listItems = document.querySelectorAll(".menulist ul li");

if ( chosen != null && list != null && listItems != null ) {
	
chosen.addEventListener("click", function () {
  this.classList.toggle("active");
  list.classList.toggle("active");
});
listItems.forEach((item) => {
  item.addEventListener("click", function () {
    chosen.children[0].textContent = this.textContent;
    list.classList.remove("active");
    chosen.classList.remove("active");
  });
});
}