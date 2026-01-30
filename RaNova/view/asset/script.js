const menuBtn = document.getElementById("menuBtn");
const menuList = document.querySelector("nav ul");

menuBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  menuList.classList.toggle("active");
});

menuList.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    menuList.classList.remove("active");
  });
});

document.addEventListener("click", (e) => {
  if (!menuList.contains(e.target) && !menuBtn.contains(e.target)) {
    menuList.classList.remove("active");
  }
});

// ========================LIGHTBOX
const images = document.querySelectorAll(".lightbox-img");
const overlay = document.getElementById("lightboxOverlay");
const overlayImage = document.getElementById("lightboxImage");
const closeBtn = overlay.querySelector(".close");
const prevBt = overlay.querySelector(".prev");
const nextBt = overlay.querySelector(".next");

let currentIndex = 0;

const imgArray = Array.from(images);

images.forEach((img, index) => {
  img.addEventListener("click", () => {
    currentIndex = index;
    overlayImage.src = img.src;
    overlay.style.display = "flex";
  });
});

closeBtn.addEventListener("click", () => (overlay.style.display = "none"));

prevBt.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + imgArray.length) % imgArray.length;
  overlayImage.src = imgArray[currentIndex].src;
});

nextBt.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % imgArray.length;
  overlayImage.src = imgArray[currentIndex].src;
});

overlay.addEventListener("click", (e) => {
  if (e.target === overlay) overlay.style.display = "none";
});

// ===============================WELLNESS BOOKING FORM
let bookButton = document.getElementById("bookWellness");
let overlayForm = document.querySelector(".overlays");
let closeFormBtn = document.querySelector(".closeForm");  

bookButton.addEventListener("click", () => {
    overlayForm.classList.add('active');
    document.body.style.overflow = 'hidden';
});

closeFormBtn.addEventListener("click", () => {
    overlayForm.classList.remove('active');
    document.body.style.overflow = 'auto';
});

overlayForm.addEventListener('click', (e) => {
    if (e.target === overlayForm) {
        overlayForm.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
});

// ================Counter Animation
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".number h2");
  const section = document.querySelector(".healthPlatform");

  const speed = 200;

  const startCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    counter.innerText = "0";

    const updateCount = () => {
      const current = +counter.innerText;
      const increment = Math.ceil(target / speed);

      if (current < target) {
        counter.innerText = current + increment;
        requestAnimationFrame(updateCount);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          counters.forEach((counter) => startCounter(counter));
        } else {
          counters.forEach((counter) => (counter.innerText = "0"));
        }
      });
    },
    { threshold: 0.4 }
  );

  observer.observe(section);
});

// ========== Popular Section Slider
document.addEventListener("DOMContentLoaded", () => {
  const prevBtn = document.querySelector(".backArrow i");
  const nextBtn = document.querySelector(".rightArrow i");
  const slider = document.querySelector(".popularContainer");
  const cards = document.querySelectorAll(".pHOlder");

  let index = 0;

  function cardsPerView() {
    if (window.innerWidth <= 480) return 1;
    if (window.innerWidth <= 992) return 2;
    return 3;
  }

  function updateArrows() {
    const maxIndex = cards.length - cardsPerView();

    //======= LEFT arrow
    if (index === 0) {
      prevBtn.classList.add("arrow-disabled");
      prevBtn.classList.remove("arrow-active");
    } else {
      prevBtn.classList.remove("arrow-disabled");
      prevBtn.classList.add("arrow-active");
    }

    //========= RIGHT arrow
    if (index >= maxIndex) {
      nextBtn.classList.add("arrow-disabled");
      nextBtn.classList.remove("arrow-active");
    } else {
      nextBtn.classList.remove("arrow-disabled");
      nextBtn.classList.add("arrow-active");
    }
  }

  function slide() {
    const cardWidth = cards[0].offsetWidth + 20;
    slider.style.transform = `translateX(-${index * cardWidth}px)`;
    updateArrows();
  }

  nextBtn.addEventListener("click", () => {
    const maxIndex = cards.length - cardsPerView();
    if (index < maxIndex) {
      index++;
      slide();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
      slide();
    }
  });

  window.addEventListener("resize", () => {
    index = 0;
    slide();
  });

  slide();
});

// ========== Popular Hospitals Slider
document.addEventListener("DOMContentLoaded", () => {
  const prevBtn = document.querySelector(".hospital-back i");
  const nextBtn = document.querySelector(".hospital-next i");
  const slider = document.querySelector(".hospital-slider");
  const cards = slider.querySelectorAll(".poularHospital");

  let index = 0;

  function cardsPerView() {
    if (window.innerWidth <= 480) return 1;
    if (window.innerWidth <= 992) return 2;
    return 3;
  }

  function updateArrows() {
    const maxIndex = cards.length - cardsPerView();

    if (index === 0) {
      prevBtn.classList.add("arrow-disabled");
      prevBtn.classList.remove("arrow-active");
    } else {
      prevBtn.classList.remove("arrow-disabled");
      prevBtn.classList.add("arrow-active");
    }

    if (index >= maxIndex) {
      nextBtn.classList.add("arrow-disabled");
      nextBtn.classList.remove("arrow-active");
    } else {
      nextBtn.classList.remove("arrow-disabled");
      nextBtn.classList.add("arrow-active");
    }
  }

  function slide() {
    const cardWidth = cards[0].offsetWidth + 20; // includes gap
    slider.style.transform = `translateX(-${index * cardWidth}px)`;
    updateArrows();
  }

  nextBtn.addEventListener("click", () => {
    const maxIndex = cards.length - cardsPerView();
    if (index < maxIndex) {
      index++;
      slide();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
      slide();
    }
  });

  window.addEventListener("resize", () => {
    index = 0;
    slide();
  });

  slide();
});

// ========== Popular Doctors Slider
document.addEventListener("DOMContentLoaded", () => {
  const prevBtn = document.querySelector(".docBack");
  const nextBtn = document.querySelector(".docNext");
  const slider = document.querySelector(".doc-slider");
  const cards = slider.querySelectorAll(".doc");

  let index = 0;

  function cardsPerView() {
    if (window.innerWidth <= 480) return 1;
    if (window.innerWidth <= 992) return 2;
    return 3;
  }

  function updateArrows() {
    const maxIndex = cards.length - cardsPerView();

    prevBtn.classList.remove("arrow-active", "arrow-disabled");
    nextBtn.classList.remove("arrow-active", "arrow-disabled");

    if (index === 0) {
      prevBtn.classList.add("arrow-disabled");
    } else {
      prevBtn.classList.add("arrow-active");
    }

    if (index >= maxIndex) {
      nextBtn.classList.add("arrow-disabled");
    } else {
      nextBtn.classList.add("arrow-active");
    }
  }

  function slide() {
    const cardWidth = cards[0].offsetWidth + 20;
    slider.style.transform = `translateX(-${index * cardWidth}px)`;
    updateArrows();
  }

  nextBtn.addEventListener("click", () => {
    const maxIndex = cards.length - cardsPerView();
    if (index < maxIndex) {
      index++;
      slide();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
      slide();
    }
  });

  window.addEventListener("resize", () => {
    index = 0;
    slide();
  });

  slide();
});

// ========== Customer Reviews Slider
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".customerHolders");
  const cards = document.querySelectorAll(".customerWrapper");
  const prev = document.querySelector(".customer-back");
  const next = document.querySelector(".customer-next");

  let index = 0;

  function cardsPerView() {
    if (window.innerWidth <= 480) return 1;
    if (window.innerWidth <= 992) return 2;
    return 3;
  }

  function updateSlider() {
    const perView = cardsPerView();
    const cardWidth = cards[0].offsetWidth + 25;
    slider.style.transform = `translateX(-${index * cardWidth}px)`;

    prev.classList.toggle("arrow-disabled", index === 0);
    prev.classList.toggle("arrow-active", index !== 0);

    next.classList.toggle("arrow-disabled", index >= cards.length - perView);
    next.classList.toggle("arrow-active", index < cards.length - perView);
  }

  next.addEventListener("click", () => {
    if (index < cards.length - cardsPerView()) {
      index++;
      updateSlider();
    }
  });

  prev.addEventListener("click", () => {
    if (index > 0) {
      index--;
      updateSlider();
    }
  });

  window.addEventListener("resize", updateSlider);
  updateSlider();
});

// ==========================WEELNESS CATEGORIES SLIDER

const slider = document.querySelector(".wellContainer");
const prevBtn = document.querySelector(".weelbackArrow");
const nextBtn = document.querySelector(".weelrightArrow");

let index = 0;

function visibleCards() {
  if (window.innerWidth >= 1024) return 3;
  if (window.innerWidth >= 600) return 2;
  return 1;
}

function cardWidth() {
  return slider.querySelector(".wellWrapper").offsetWidth + 20;
}

function updateSlider() {
  slider.style.transform = `translateX(-${index * cardWidth()}px)`;

  prevBtn.classList.toggle("arrow-disabled", index === 0);
  nextBtn.classList.toggle(
    "arrow-disabled",
    index >= slider.children.length - visibleCards()
  );
}

nextBtn.addEventListener("click", () => {
  if (index < slider.children.length - visibleCards()) {
    index++;
    updateSlider();
  }
});

prevBtn.addEventListener("click", () => {
  if (index > 0) {
    index--;
    updateSlider();
  }
});

window.addEventListener("resize", () => {
  index = 0;
  updateSlider();
});

updateSlider();
