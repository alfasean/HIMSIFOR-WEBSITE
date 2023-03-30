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

var swiper = new Swiper(".slide-container1", {
  slidesPerView: 1,
  spaceBetween: 0,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",

  navigation: {
    nextEl: ".swiper-navBtn1",
    prevEl: ".swiper-navBtn1",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1000: {
      slidesPerView: 1,
    },
  },
});

var swiper = new Swiper(".slide-container2", {
  slidesPerView: 3,
  spaceBetween: 0,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",

  navigation: {
    nextEl: ".swiper-navBtn2",
    prevEl: ".swiper-navBtn2",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});
//departent//