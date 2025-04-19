'use strict';

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
};

const preloader = document.querySelector("[data-preloader]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNav = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
};

addEventOnElements(navTogglers, "click", toggleNav);

navTogglers.forEach((toggler) => {
  toggler.addEventListener("click", () => {
    navbar.classList.toggle("active");
  });
});

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElementOnScroll = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
};

window.addEventListener("scroll", activeElementOnScroll);

const revealElements = document.querySelectorAll("[data-reveal]");

const revealElementOnScroll = function () {
  for (let i = 0, len = revealElements.length; i < len; i++) {
    if (revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.15) {
      revealElements[i].classList.add("revealed");
    } else {
      revealElements[i].classList.remove("revealed");
    }
  }
};

window.addEventListener("scroll", revealElementOnScroll);

window.addEventListener("load", revealElementOnScroll);

// Typing effect for the hero subtitle
const dynamicText = document.getElementById("dynamic-text");
const phrases = [
  "Welcome to Blessed Behavioral and Health Services",
  "Your Mental Health, Our Priority",
  "Compassionate Care for All",
  "Our Motto: Blessed to heal, anointed to restore",
];
let phraseIndex = 0;
let letterIndex = 0;

function typeEffect() {
  if (letterIndex < phrases[phraseIndex].length) {
    dynamicText.textContent += phrases[phraseIndex][letterIndex];
    letterIndex++;
    setTimeout(typeEffect, 100); // Typing speed
  } else {
    setTimeout(() => {
      dynamicText.textContent = "";
      letterIndex = 0;
      phraseIndex = (phraseIndex + 1) % phrases.length;
      typeEffect();
    }, 2000); // Pause before typing the next phrase
  }
}

typeEffect();

// Fade-in animation for elements with data-animate="fade-in"
const fadeInElements = document.querySelectorAll("[data-animate='fade-in']");

function fadeInOnScroll() {
  fadeInElements.forEach((el) => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight) {
      el.style.opacity = 1;
      el.style.transform = "translateY(0)";
    }
  });
}

window.addEventListener("scroll", fadeInOnScroll);
window.addEventListener("load", fadeInOnScroll);

// Parallax scrolling effect for the hero background
const heroSection = document.querySelector(".hero");

window.addEventListener("scroll", () => {
  const scrollPosition = window.scrollY;
  heroSection.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
});

// Add animation on scroll
const serviceCards = document.querySelectorAll(".service-card");

const revealOnScroll = () => {
  const triggerBottom = window.innerHeight / 5 * 4;

  serviceCards.forEach((card) => {
    const cardTop = card.getBoundingClientRect().top;

    if (cardTop < triggerBottom) {
      card.classList.add("show");
    } else {
      card.classList.remove("show");
    }
  });
};

window.addEventListener("scroll", revealOnScroll);

// Initial check
revealOnScroll();

// Select all icons in the service section
const icons = document.querySelectorAll(".card-icon i");

// Function to check if an element is in the viewport
const isInViewport = (element) => {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

// Add rotation effect when icons come into view
const rotateIconsOnScroll = () => {
  icons.forEach((icon) => {
    if (isInViewport(icon)) {
      icon.classList.add("rotate"); // Add the rotate class
    }
  });
};

// Listen for scroll events
window.addEventListener("scroll", rotateIconsOnScroll);

// Initial check on page load
rotateIconsOnScroll();

document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById("toggle-services-btn");
  const serviceRow1 = document.getElementById("service-row-1");
  const serviceRow2 = document.getElementById("service-row-2");

  toggleButton.addEventListener("click", () => {
    // Toggle visibility of service rows
    serviceRow1.classList.toggle("hidden");
    serviceRow2.classList.toggle("hidden");

    // Update button text
    if (serviceRow2.classList.contains("hidden")) {
      toggleButton.textContent = "Show More Services";
    } else {
      toggleButton.textContent = "Show Less Services";
    }
  });

  // Example data (replace with backend data later)
  const dailyPercentage = 75;
  const monthlyPercentage = 60;
  const yearlyPercentage = 85;

  // Update percentages
  document.getElementById("daily-progress").style.background = `conic-gradient(
    var(--verdigris) 0%,
    var(--verdigris) ${dailyPercentage}%,
    #e0e0e0 ${dailyPercentage}%
  )`;
  document.getElementById("monthly-progress").style.background = `conic-gradient(
    var(--verdigris) 0%,
    var(--verdigris) ${monthlyPercentage}%,
    #e0e0e0 ${monthlyPercentage}%
  )`;
  document.getElementById("yearly-progress").style.background = `conic-gradient(
    var(--verdigris) 0%,
    var(--verdigris) ${yearlyPercentage}%,
    #e0e0e0 ${yearlyPercentage}%
  )`;

  // Update percentage text
  document.getElementById("daily-percentage").textContent = `${dailyPercentage}%`;
  document.getElementById("monthly-percentage").textContent = `${monthlyPercentage}%`;
  document.getElementById("yearly-percentage").textContent = `${yearlyPercentage}%`;
});

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  let currentSlide = 0;

  const showSlide = (index) => {
    slides.forEach((slide, i) => {
      slide.classList.remove("active");
      if (i === index) {
        slide.classList.add("active");
      }
    });
  };

  const nextSlide = () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  };

  const prevSlide = () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  };

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  // Auto-slide every 5 seconds
  setInterval(nextSlide, 5000);
});

document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {
      const expanded = question.getAttribute("aria-expanded") === "true";
      question.setAttribute("aria-expanded", !expanded);

      // Close other FAQ items
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".faq-question")
            .setAttribute("aria-expanded", "false");
          otherItem.querySelector(".faq-answer").style.display = "none";
        }
      });

      // Toggle the current FAQ item
      const answer = item.querySelector(".faq-answer");
      answer.style.display = expanded ? "none" : "block";
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const readMoreButtons = document.querySelectorAll(".read-more-btn");

  readMoreButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const card = button.closest(".blog-card");
      const fullDescription = card.querySelector(".full-description");

      if (fullDescription.style.display === "none") {
        fullDescription.style.display = "block"; // Show full description
        button.textContent = "Read Less"; // Change button text
      } else {
        fullDescription.style.display = "none"; // Hide full description
        button.textContent = "Read More"; // Reset button text
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const revealButtons = document.querySelectorAll(".reveal-btn");

  revealButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const hiddenText = button.previousElementSibling;
      if (hiddenText.style.display === "none") {
        hiddenText.style.display = "inline"; // Show the hidden text
        button.textContent = "Read Less"; // Change button text
      } else {
        hiddenText.style.display = "none"; // Hide the text again
        button.textContent = "Read More"; // Reset button text
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const navbarLinks = document.querySelectorAll(".navbar-link, .btn");

  navbarLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      const targetId = link.getAttribute("href").substring(1); // Get the section ID
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        event.preventDefault(); // Prevent default anchor behavior
        const headerOffset = 100; // Adjust this value based on your header height
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  });
});

// JavaScript to handle specific screen sizes (e.g., Samsung Galaxy S9, S9+)
document.addEventListener("DOMContentLoaded", function () {
  // Function to check if the device matches Samsung Galaxy S9/S9+ dimensions
  function isSamsungS9() {
    const width = window.innerWidth;
    const height = window.innerHeight;

    // Samsung Galaxy S9/S9+ viewport dimensions
    return (width === 360 && height === 740) || (width === 740 && height === 360);
  }

  // Apply custom styles if the device matches
  if (isSamsungS9()) {
    // Example: Center content and adjust layout
    const heroContent = document.querySelector(".hero-content");
    const serviceCards = document.querySelectorAll(".service-card");
    const blogCards = document.querySelectorAll(".blog-card");

    // Center hero content
    if (heroContent) {
      heroContent.style.textAlign = "center";
      heroContent.style.padding = "20px";
    }

    // Adjust service cards
    serviceCards.forEach((card) => {
      card.style.margin = "0 auto";
      card.style.width = "90%"; // Reduce width for better fit
    });

    // Adjust blog cards
    blogCards.forEach((card) => {
      card.style.margin = "0 auto";
      card.style.width = "90%"; // Reduce width for better fit
    });

    console.log("Custom styles applied for Samsung Galaxy S9/S9+.");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Function to check if the device matches Samsung Galaxy S9/S9+ dimensions
  function isSamsungS9() {
    const width = Math.min(window.innerWidth, window.innerHeight); // Handle portrait and landscape
    const height = Math.max(window.innerWidth, window.innerHeight);

    // Samsung Galaxy S9/S9+ viewport dimensions
    return width === 360 && height === 740;
  }

  // Apply custom styles if the device matches
  if (isSamsungS9()) {
    const heroContent = document.querySelector(".hero-content");

    if (heroContent) {
      // Push down the hero content
      heroContent.style.marginTop = "120px"; // Adjust the value as needed
      heroContent.style.position = "relative"; // Ensure proper positioning
    }

    console.log("Custom styles applied for Samsung Galaxy S9/S9+.");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Function to check if the device matches Samsung Galaxy S9/S9+ dimensions
  function isSamsungS9() {
    const width = Math.min(window.innerWidth, window.innerHeight); // Handle portrait and landscape
    const height = Math.max(window.innerWidth, window.innerHeight);

    // Samsung Galaxy S9/S9+ viewport dimensions
    return width === 360 && height === 740;
  }

  // Apply custom styles if the device matches
  if (isSamsungS9()) {
    const heroContent = document.querySelector(".hero-content");

    if (heroContent) {
      // Push down the hero content
      heroContent.style.marginTop = "120px"; // Adjust the value as needed
      heroContent.style.marginBottom = "50px"; // Add margin-bottom for spacing
      heroContent.style.position = "relative"; // Ensure proper positioning
    }

    console.log("Custom styles applied for Samsung Galaxy S9/S9+.");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const bookingForm = document.getElementById("booking-form");
  const dateInput = document.getElementById("date");
  const timeInput = document.getElementById("time");
  const bookingModal = document.getElementById("booking-modal");
  const modalMessage = document.getElementById("modal-message");
  const modalIcon = document.getElementById("modal-icon");
  const modalClose = document.getElementById("modal-close");

  // Restrict outdated dates
  const today = new Date().toISOString().split("T")[0];
  dateInput.setAttribute("min", today);

  // Restrict weekends (Saturday and Sunday)
  dateInput.addEventListener("input", function () {
    const selectedDate = new Date(dateInput.value);
    const dayOfWeek = selectedDate.getDay(); // 0 = Sunday, 6 = Saturday

    if (dayOfWeek === 0 || dayOfWeek === 6) {
      alert("Appointments cannot be booked on weekends (Saturday and Sunday).");
      dateInput.value = ""; // Clear the invalid date
    }
  });

  

  // Handle form submission
  bookingForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent default form submission

    const selectedDate = new Date(dateInput.value);
    const selectedTime = timeInput.value;

    // Check if the selected day is Monday to Friday
    const dayOfWeek = selectedDate.getDay();
    if (dayOfWeek === 0 || dayOfWeek === 6) {
      alert("Appointments can only be booked from Monday to Friday.");
      return;
    }

    // Check if the selected time is within working hours (9 AM to 5 PM)
    const [hours, minutes] = selectedTime.split(":").map(Number);
    if (hours < 9 || (hours === 17 && minutes > 0) || hours > 17) {
      alert("Appointments can only be booked between 9:00 AM and 5:00 PM.");
      return;
    }

    // If all validations pass, submit the form via AJAX
    const formData = new FormData(bookingForm);

    fetch("book_appointment.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        // Show success or error message in the modal
        modalMessage.textContent = data.includes("successfully")
          ? "Your appointment has been booked successfully! A confirmation email will be sent shortly."
          : "There was an error booking your appointment. Please try again.";
        modalIcon.textContent = data.includes("successfully") ? "✔️" : "❌";
        bookingModal.classList.remove("hidden");
        bookingModal.classList.add("visible");
        bookingForm.reset(); // Clear the form fields
      })
      .catch((error) => {
        // Show error message in the modal
        modalMessage.textContent = "An unexpected error occurred. Please try again.";
        modalIcon.textContent = "❌";
        bookingModal.classList.remove("hidden");
        bookingModal.classList.add("visible");
      });
  });

  // Close the modal
  modalClose.addEventListener("click", function () {
    bookingModal.classList.remove("visible");
    bookingModal.classList.add("hidden");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const bookingForm = document.getElementById("booking-form");
  const bookingModal = document.getElementById("booking-modal");
  const modalMessage = document.getElementById("modal-message");
  const modalIcon = document.getElementById("modal-icon");
  const modalClose = document.getElementById("modal-close");
  const emailInput = document.getElementById("email");
  const nameInput = document.getElementById("name");
  const dateInput = document.getElementById("date");
  const timeInput = document.getElementById("time");
  const serviceInput = document.getElementById("service");

  // Function to validate email format
  function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  // Add event listener for email validation
  emailInput.addEventListener("input", function () {
    if (!validateEmail(emailInput.value)) {
      emailInput.classList.add("input-error");
      emailInput.nextElementSibling.textContent = "Please enter a valid email address.";
    } else {
      emailInput.classList.remove("input-error");
      emailInput.nextElementSibling.textContent = "";
    }
  });

  // Add event listener for name validation
  nameInput.addEventListener("input", function () {
    if (nameInput.value.trim() === "") {
      nameInput.classList.add("input-error");
      nameInput.nextElementSibling.textContent = "Name cannot be empty.";
    } else {
      nameInput.classList.remove("input-error");
      nameInput.nextElementSibling.textContent = "";
    }
  });

  // Add event listener for date validation
  dateInput.addEventListener("input", function () {
    if (dateInput.value === "") {
      dateInput.classList.add("input-error");
      dateInput.nextElementSibling.textContent = "Please select a valid date.";
    } else {
      dateInput.classList.remove("input-error");
      dateInput.nextElementSibling.textContent = "";
    }
  });

  // Add event listener for time validation
  timeInput.addEventListener("input", function () {
    if (timeInput.value === "") {
      timeInput.classList.add("input-error");
      timeInput.nextElementSibling.textContent = "Please select a valid time.";
    } else {
      timeInput.classList.remove("input-error");
      timeInput.nextElementSibling.textContent = "";
    }
  });

  // Add event listener for service validation
  serviceInput.addEventListener("change", function () {
    if (serviceInput.value === "") {
      serviceInput.classList.add("input-error");
      serviceInput.nextElementSibling.textContent = "Please select a service.";
    } else {
      serviceInput.classList.remove("input-error");
      serviceInput.nextElementSibling.textContent = "";
    }
  });


  // Close the modal
  modalClose.addEventListener("click", function () {
    bookingModal.classList.remove("visible");
    bookingModal.classList.add("hidden");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const testimonialSlides = document.querySelectorAll(".testimonial-slide");
  const prevBtn = document.querySelector(".testimonial-controls .prev-btn");
  const nextBtn = document.querySelector(".testimonial-controls .next-btn");

  let currentSlide = 0;

  // Function to update the active slide
  function updateSlides() {
    testimonialSlides.forEach((slide, index) => {
      slide.classList.remove("active");
      if (index === currentSlide) {
        slide.classList.add("active");
      }
    });
  }

  // Event listener for the next button
  nextBtn.addEventListener("click", function () {
    currentSlide = (currentSlide + 1) % testimonialSlides.length; // Loop to the first slide after the last
    updateSlides();
  });

  // Event listener for the previous button
  prevBtn.addEventListener("click", function () {
    currentSlide = (currentSlide - 1 + testimonialSlides.length) % testimonialSlides.length; // Loop to the last slide before the first
    updateSlides();
  });

  // Initialize the first slide as active
  updateSlides();
});

document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("footer-contact-form");
  const contactModal = document.getElementById("footer-contact-modal");
  const modalMessage = document.getElementById("footer-modal-message");
  const modalIcon = document.getElementById("footer-modal-icon");
  const modalClose = document.getElementById("footer-modal-close");

  // Handle form submission
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent default form submission

    const formData = new FormData(contactForm);

    // Send form data using AJAX
    fetch("contact_form.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json()) // Parse the JSON response
      .then((data) => {
        // Check the response status
        if (data.status === "success") {
          modalMessage.textContent = data.message;
          modalIcon.textContent = "✔️"; // Success emoji
          contactForm.reset(); // Clear the form fields
        } else {
          modalMessage.textContent = data.message;
          modalIcon.textContent = "❌"; // Error emoji
        }

        // Show the modal
        contactModal.classList.remove("hidden");
        contactModal.classList.add("visible");
      })
      .catch(() => {
        // Handle unexpected errors
        modalMessage.textContent = "An unexpected error occurred. Please try again.";
        modalIcon.textContent = "❌"; // Error emoji
        contactModal.classList.remove("hidden");
        contactModal.classList.add("visible");
      });
  });

  // Close the modal
  modalClose.addEventListener("click", function () {
    contactModal.classList.remove("visible");
    contactModal.classList.add("hidden");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector(".navbar-toggle");
  const navbarLinks = document.querySelector(".navbar-links");

  toggleButton.addEventListener("click", function () {
    navbarLinks.classList.toggle("active");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const mottoCircle = document.getElementById("motto-circle");

  // Trigger the animation when the page loads
  setTimeout(() => {
    mottoCircle.style.opacity = "1"; // Make the motto visible
    mottoCircle.style.animation = "spin-circle 4s linear"; // Start the animation

    // Remove the animation after it completes (2 spins)
    setTimeout(() => {
      mottoCircle.style.animation = "none"; // Stop the animation
    }, 4000); // 4 seconds (duration of the animation)
  }, 1000); // Delay before starting the animation
});


