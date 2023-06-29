$(window).on('load', function () {
	/**
	 * Add class by document path
	 * @param  {} 
	 */
	$(function () {
		var CurrentUrl = document.URL;
		var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();

		$('.navbar-nav a').each(function () {
			var ThisUrl = $(this).attr('href');
			var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();
			if (ThisUrlEnd == CurrentUrlEnd) {
				$(this).addClass('active bg-primary text-light rounded');
				if ($('.navbar-nav .dropdown-item').hasClass('active')) {
					$(this).closest('.dropdown').find('.dropdown-toggle').addClass('active');
				}
			}
		});
	});
});

$(document).ready(function () {
	// Tambahkan kode Anda di sini
});


// function showContent() {
//   document.getElementById("content").style.display="block"
//   // document.getElementById("showContent").style.display="none"
// }
AOS.init();

const cardWidth = 500,
  degIncrement = 6,
  card = document.getElementById("cardd");

const getRotateDeg = (input) => {
  if (input < cardWidth * 0.33) {
    return `-${degIncrement * 3}deg`;
  } else if (input >= cardWidth * 0.33 && input < cardWidth * 0.66) {
    return `-${degIncrement}deg`;
  } else if (input >= cardWidth * 0.66 && input < cardWidth * 0.5) {
    return "0deg";
  } else if (input >= cardWidth * 0.5 && input < cardWidth * 0.33) {
    return `${degIncrement}deg`;
  } else {
    return `${degIncrement * 3}deg`;
  }
};

const onMouseMove = (event) => {
  const { target } = event;
  const rect = target.getBoundingClientRect();

  const rotateX = getRotateDeg(event.clientY - rect.top);
  const rotateY = getRotateDeg(event.clientX - rect.left);

  card.style.transform = `rotateX(${rotateX}) rotateY(${rotateY})`;
};

const onMouseLeave = () => {
  card.style.transform = `none`;
};


const toggleSwitch = document.querySelector('input[type="checkbox"]');

if(localStorage.getItem('darkModeEnabled')){
  document.body.className = 'dark';
  toggleSwitch.checked = true;
}

const body = document.querySelector('body');

toggleSwitch.addEventListener('click', function(e) {
  const {checked} = toggleSwitch;
  if (checked) {
    localStorage.setItem('darkModeEnabled', true);
  } else {
    localStorage.removeItem('darkModeEnabled');
  }
  document.body.className = checked ? 'dark' : '' 
})

function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}
const dept = document.getElementById("jumlah-dept");
animateValue(dept, 0, 8, 1500);

const anggota = document.getElementById("jumlah-anggota");
animateValue(anggota, 0, 500, 4700);

const proker = document.getElementById("jumlah-proker");
animateValue(proker, 0, 50, 2500);

const pengurus = document.getElementById("jumlah-pengurus");
animateValue(pengurus, 0, 107, 4000);

//department//
var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 20,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 0,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

// var swiper = new Swiper(".slide-container1", {
//   slidesPerView: 1,
//   spaceBetween: 0,
//   sliderPerGroup: 3,
//   loop: true,
//   centerSlide: "true",
//   fade: "true",
//   grabCursor: "true",

//   navigation: {
//     nextEl: ".swiper-navBtn1",
//     prevEl: ".swiper-navBtn1",
//   },

//   breakpoints: {
//     0: {
//       slidesPerView: 1,
//     },
//     520: {
//       slidesPerView: 1,
//     },
//     768: {
//       slidesPerView: 1,
//     },
//     1000: {
//       slidesPerView: 1,
//     },
//   },
// });

// var swiper = new Swiper(".slide-container2", {
//   slidesPerView: 3,
//   spaceBetween: 0,
//   sliderPerGroup: 3,
//   loop: true,
//   centerSlide: "true",
//   fade: "true",
//   grabCursor: "true",

//   navigation: {
//     nextEl: ".swiper-navBtn2",
//     prevEl: ".swiper-navBtn2",
//   },

//   breakpoints: {
//     0: {
//       slidesPerView: 1,
//     },
//     520: {
//       slidesPerView: 1,
//     },
//     768: {
//       slidesPerView: 2,
//     },
//     1000: {
//       slidesPerView: 3,
//     },
//   },
// });

// optionsList.forEach(o => {
//   o.addEventListener("click", () => {
//     selected.innerHTML = o.querySelector("label").innerHTML;
//     optionsContainer.classList.remove("haha");
//   });
// });
//departent//
