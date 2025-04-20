<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blessed Behavioral & Health Services</title>
    <meta name="title" content="Blessed Behavioral & Health Services" />
    <meta
      name="description"
      content="Blessed Behavioral & Health Services LLC provides compassionate care for mental and physical well-being."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="public/css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <!-- <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script>
      emailjs.init("YOUR_PUBLIC_KEY"); // Replace with your EmailJS Public Key
    </script> -->
  </head>
  
  <body id="top">
    <div class="preloader" data-preloader>
      <div class="circle"></div>
    </div>

    <header class="header" data-header>
      <div class="container">
        
        <nav class="new-navbar">
          <div class="navbar-container">
            <!-- Logo -->
            <a href="index.php" class="navbar-logo">
              <img src="public/img/IMG_2.JPG" width="150" height="50" alt="Main Logo" />
            </a>

            <!-- Navigation Links -->
            <ul class="navbar-links">
              <li><a href="index.php" class="navbar-link">Home</a></li>
              <li><a href="#doctors-label" class="navbar-link">Doctor</a></li>
              <li><a href="#services-label" class="navbar-link">Services</a></li>
              <li><a href="#blog-label" class="navbar-link">Blog</a></li>
              <li><a href="#contact" class="navbar-link">Contact</a></li>
            </ul>
            <a href="#booking-label" class="btn has-before title-md" style="text-align: justify"
          >Make Appointment</a>


            <!-- Toggle Button for Small Screens -->
            <button class="navbar-toggle" aria-label="Toggle Menu">
              <ion-icon name="menu-outline"></ion-icon>
            </button>
          </div>
        </nav>
        <div class="overlay" data-nav-toggler data-overlay></div>

        <!-- Make Appointment Button -->
      </div>
    </header>

    <main>
      <article>
        <section class="section hero" aria-label="home">
          <div class="video-background">
            <video autoplay muted loop playsinline>
              <source src="video/bgHe.mp4" type="video/mp4" />
              Your browser does not support the video tag.
            </video>
          </div>
          <br><br>
          

          <div class="container hero-layout">
            <div class="hero-content">
              
              <p class="hero-subtitle has-before" data-reveal="left">
                <span id="dynamic-text"></span>
              </p>
              <h1 class="headline-lg hero-title" data-animate="fade-in">
                Where <span class="highlight">Dr. Emma Markey (DNP, FNP, PMHNP)</span> Provides Mental Health
              </h1>
              <h1 class="headline-lg hero-title" data-animate="fade-in">
                For Your Health and Well-Being
              </h1>
              
            </div>
            <figure class="hero-banner" data-animate="fade-in">
              <div class="image-container">
                <img
                  src="public/img/IMG_1714.JPG"
                  width="590"
                  height="517"
                  loading="eager"
                  alt="Dr. Emma Markey"
                  class="hero-image"
                />
               
              </div>
              <a href="#doctors-label" class="btn doctor-link title-md">Dr. Emma Markey</a>
            </figure>
          </div>
        </section>

        <section class="service" aria-label="service">
          <div class="container">
            <h2 class="section-title offer-title">What I Offer</h2>
            <!-- New Title -->
            <ul class="service-list">
              <!-- Health Checkup -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #f8d7da; color: #721c24;">
                  <div class="card-icon">
                    <i class="fas fa-stethoscope"></i>
                    <!-- Font Awesome Icon -->
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #721c24;">Health Checkup</a>
                  </h3>
                  <p class="card-text">
                    Regular health checkups for all age groups to ensure
                    well-being and early detection of health issues.
                  </p>
                </div>
              </li>

              <!-- Mental Health Support -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d4edda; color: #155724;">
                  <div class="card-icon">
                    <i class="fas fa-brain"></i>
                    <!-- Font Awesome Icon -->
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #155724;">Mental Health Support</a>
                  </h3>
                  <p class="card-text">
                    Providing counseling and mental health services to help
                    individuals cope with stress and mental challenges.
                  </p>
                </div>
              </li>

              <!-- Nutrition Guidance -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d1ecf1; color: #0c5460;">
                  <div class="card-icon">
                    <i class="fas fa-apple-alt"></i>
                    <!-- Font Awesome Icon -->
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #0c5460;">Nutrition Guidance</a>
                  </h3>
                  <p class="card-text">
                    Helping individuals maintain a healthy diet and lifestyle
                    through personalized nutrition plans.
                  </p>
                </div>
              </li>

              <!-- Emergency Care -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #fff3cd; color: #856404;">
                  <div class="card-icon">
                    <i class="fas fa-ambulance"></i>
                    <!-- Font Awesome Icon -->
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #856404;">Emergency Care</a>
                  </h3>
                  <p class="card-text">
                    24/7 emergency care services for critical health situations
                    requiring immediate attention.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section class="section about" aria-labelledby="about-label">
          <div class="container about-layout">
            <div class="about-content">
              <p
                class="section-subtitle title-lg has-after"
                id="about-label"
                data-reveal="left"
              >
                About Us
              </p>
              <h2 class="headline-md" data-reveal="left">
                Dedicated to Holistic Healthcare
              </h2>
              <p class="section-text" data-reveal="left">
                At <strong>Blessed Behavioral & Health Services</strong>, we are proud to embody the vision and dedication of
                <strong>Dr. Emma Markey (DNP, FNP, PMHNP)</strong>, a highly accomplished healthcare professional.
              </p>
              <p class="section-text" data-reveal="left">
                Our mission is to create a sanctuary where individuals can find solace, support, and guidance on their journey to mental health. We offer a comprehensive suite of services, including:
              </p>
              <ul class="about-list" data-reveal="left">
                <li class="about-item">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>
                  <span class="span" style="color: orange;">Psychiatric Assessments</span>
                </li>
                <li class="about-item">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>
                  <span class="span" style="color: orange;">Medication Management</span>
                </li>
                <li class="about-item">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>
                  <span class="span" style="color: orange;">Therapeutic Counseling</span>
                </li>
                <li class="about-item">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>
                  <span class="span" style="color: orange;">Integrative Healing Techniques</span>
                </li>
              </ul>
              <p class="section-text" data-reveal="left">
                Guided by a philosophy of compassion and empowerment, Dr. Markey and
                her team are dedicated to cultivating a nurturing environment where
                individuals feel valued, understood, and empowered to reclaim their
                mental wellness. Together, we embark on a collaborative journey toward
                healing and transformation.
              </p>
            </div>
            <div class="about-image-container" data-reveal="right">
              <div class="image-slider">
                <div class="slide active">
                  <img
                    src="public/img/IMG_5.JPG"
                    alt="Dr. Emma Markey"
                    class="about-image"
                    width="300"
                    height="400"
                  />
                </div>
                <div class="slide">
                  <img
                    src="public/img/IMG_1.JPG"
                    alt="Dr. Emma Markey"
                    class="about-image"
                    width="300"
                    height="400"
                  />
                </div>
                <div class="slide">
                  <img
                    src="public/img/IMG_1714.JPG"
                    alt="Dr. Emma Markey"
                    class="about-image"
                    width="300"
                    height="400"
                  />
                </div>
                <!-- Navigation Buttons -->
                <button class="prev-btn" aria-label="Previous Slide">
                  <ion-icon name="chevron-back-outline"></ion-icon>
                </button>
                <button class="next-btn" aria-label="Next Slide">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
              </div>
            </div>
          </div>
        </section>
  
        
        <section class="service" aria-label="service">
          <div class="container">
          <p
              class="section-subtitle title-lg text-center"
              id="services-label"
              data-reveal="bottom" 
            >
              Our Services
            </p>
            <h2
              class="section-title headline-md text-center"
              data-reveal="bottom"
            >
              Comprehensive Care for Mind and Body
            </h2>
            <p class="section-text text-center" data-reveal="bottom">
              Blessed Behavioral & Health Services LLC is dedicated to offering
              a comprehensive array of services tailored to meet the diverse
              needs of our clients. Our integrative approach seamlessly combines
              mental health and primary care services to deliver holistic care
              that nurtures both mind and body. Key services include:
            </p>
        
        <!-- Service Section -->
        
          <div class="container">
            
            <ul class="service-list">
              <!-- Anxiety -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #f8d7da; color: #721c24;">
                  <div class="card-icon">
                    <i class="fas fa-heartbeat"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #721c24;">Anxiety, Depression, and Bipolar Disorder Treatments</a>
                  </h3>
                  <p class="card-text">
                    We utilize evidence-based interventions to assist individuals in managing symptoms of anxiety, depression, and bipolar disorders, fostering emotional stability and tranquility.
                  </p>
                </div>
              </li>

              <!-- Stress Management -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d4edda; color: #155724;">
                  <div class="card-icon">
                    <i class="fas fa-spa"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #155724;">Stress Management</a>
                  </h3>
                  <p class="card-text">
                    We provide strategies and techniques to identify and manage stressors, enhancing resilience and overall well-being.
                  </p>
                </div>
              </li>

              <!-- Addiction Counseling -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d1ecf1; color: #0c5460;">
                  <div class="card-icon">
                    <i class="fas fa-hand-holding-heart"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #0c5460;">Addiction Counseling</a>
                  </h3>
                  <p class="card-text">
                    Support is available for individuals facing substance abuse or addictive behaviors, with a focus on recovery, relapse prevention, and the development of a healthy lifestyle.
                  </p>
                </div>
              </li>

              <!-- Hyperactivity Disorder -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #fff3cd; color: #856404;">
                  <div class="card-icon">
                    <i class="fas fa-brain"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #856404;">Attention-Deficit/Hyperactivity Disorder (ADHD)</a>
                  </h3>
                  <p class="card-text">
                    Our certified providers specialize in diagnosing and treating ADHD across the lifespan, offering expertise in prescribing and monitoring medications such as stimulants and non-stimulants.
                  </p>
                </div>
              </li>

              <!-- Medication Management -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #f8d7da; color: #721c24;">
                  <div class="card-icon">
                    <i class="fas fa-pills"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #721c24;">Medication Management</a>
                  </h3>
                  <p class="card-text">
                    This involves the prescription, monitoring, and adjustment of psychiatric medications to treat conditions such as depression, anxiety, and bipolar disorder.
                  </p>
                </div>
              </li>

              <!-- Trauma Therapy -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d4edda; color: #155724;">
                  <div class="card-icon">
                    <i class="fas fa-hands-helping"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #155724;">Trauma Therapy</a>
                  </h3>
                  <p class="card-text">
                    We provide specialized treatment for individuals who have experienced trauma, including PTSD and childhood trauma.
                  </p>
                </div>
              </li>

              <!-- Insomnia Management -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #d1ecf1; color: #0c5460;">
                  <div class="card-icon">
                    <i class="fas fa-moon"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #0c5460;">Insomnia Management</a>
                  </h3>
                  <p class="card-text">
                    Our approach includes cognitive-behavioral therapy for insomnia (CBT-I), lifestyle modifications, and medication management.
                  </p>
                </div>
              </li>

              <!-- Substance Abuse Treatment -->
              <li>
                <div class="service-card" data-reveal="bottom" style="background-color: #fff3cd; color: #856404;">
                  <div class="card-icon">
                    <i class="fas fa-wine-bottle"></i>
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#" style="color: #856404;">Substance Abuse Treatment</a>
                  </h3>
                  <p class="card-text">
                    We implement a multidisciplinary approach, including counseling, behavioral therapies, and support groups.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="service" aria-labelledby="listing-label">
          
          <div class="container">
          
            <p
              class="section-subtitle title-lg text-center"
              id="listing-label"
              data-reveal="bottom"
            >
              Our Specialties
            </p>
            <h2
              class="section-title headline-md text-center"
              data-reveal="bottom"
            >
              Explore Our Areas of Expertise
            </h2>
            <br><br><br>
            <ul class="service-list">
              <!-- Psychiatric Care -->
              <li>
                <div class="service-card" data-reveal="bottom">
                  <div class="image-container">
                    <img
                      src="public/img/psychaitric.jpeg"
                      alt="Psychiatric Care"
                      class="service-image"
                      width="300"
                      height="200"
                    />
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#">Psychiatric Care</a>
                  </h3>
                  <p class="card-text">
                    Comprehensive mental health assessments and personalized treatment plans for conditions like anxiety, depression, and bipolar disorder.
                  </p>
                </div>
              </li>

              <!-- Trauma Therapy -->
              <li>
                <div class="service-card" data-reveal="bottom">
                  <div class="image-container">
                    <img
                      src="public/img/truama.jpeg"
                      alt="Trauma Therapy"
                      class="service-image"
                      width="300"
                      height="200"
                    />
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#">Trauma Therapy</a>
                  </h3>
                  <p class="card-text">
                    Specialized care for individuals recovering from trauma, including PTSD and childhood trauma, using evidence-based therapeutic approaches.
                  </p>
                </div>
              </li>

              <!-- Medication Management -->
              <li>
                <div class="service-card" data-reveal="bottom">
                  <div class="image-container">
                    <img
                      src="public/img/medicine.jpeg"
                      alt="Medication Management"
                      class="service-image"
                      width="300"
                      height="200"
                    />
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#">Medication Management</a>
                  </h3>
                  <p class="card-text">
                    Safe and effective prescription, monitoring, and adjustment of medications to support mental health and overall well-being.
                  </p>
                </div>
              </li>

              <!-- TeleHealth -->
              <li>
                <div class="service-card" data-reveal="bottom">
                  <div class="image-container">
                    <img
                      src="public/img/Tele.jpeg"
                      alt="TeleHealth"
                      class="service-image"
                      width="300"
                      height="200"
                    />
                  </div>
                  <h3 class="headline-sm card-title">
                    <a href="#">TeleHealth</a>
                  </h3>
                  <p class="card-text">
                    Convenient virtual consultations that allow you to access quality mental health and primary care services from the comfort of your home.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </section>

                
        <section class="section blog" aria-labelledby="blog-label">
          <div class="container">
            <p
              class="section-subtitle title-lg text-center"
              id="blog-label"
              data-reveal="bottom"
            >
              News & Articles
            </p>
            <h2
              class="section-title headline-md text-center"
              data-reveal="bottom"
            >
              Latest Updates from Blessed Behavioral & Health Services
            </h2>
            <ul class="grid-list">
              <!-- Blog Post 1 -->
              <li>
                <div
                  class="blog-card has-before has-after"
                  data-reveal="bottom"
                >
                  <div class="meta-wrapper">
                    <div class="card-meta">
                      <ion-icon name="person-outline"></ion-icon>
                      <span class="span">By Dr. Emma Markey (DNP, FNP, PMHNP)</span>
                    </div>
                    <div class="card-meta">
                      <ion-icon name="calendar-outline"></ion-icon>
                      <span class="span">March 15, 2025</span>
                    </div>
                  </div>
                  <h3 class="headline-sm card-title">
                    The Importance of Mental Health in Everyday Life
                  </h3>
                  <p class="card-text">
                    Discover how prioritizing mental health can improve your overall well-being and lead to a more fulfilling life.
                  </p>
                  <p class="card-text full-description" style="display: none;">
                    Mental health is a cornerstone of overall well-being. In this article, we explore how taking care of your mental health can positively impact your relationships, productivity, and physical health. Learn practical tips and strategies to integrate mental wellness into your daily routine and create a balanced, fulfilling life.
                  </p>
                  <button class="btn-text title-lg read-more-btn">Read More</button>
                </div>
              </li>

              <!-- Blog Post 2 -->
              <li>
                <div
                  class="blog-card has-before has-after"
                  data-reveal="bottom"
                >
                  <div class="meta-wrapper">
                    <div class="card-meta">
                      <ion-icon name="person-outline"></ion-icon>
                      <span class="span">By Dr. Emma Markey</span>
                    </div>
                    <div class="card-meta">
                      <ion-icon name="calendar-outline"></ion-icon>
                      <span class="span">February 28, 2025</span>
                    </div>
                  </div>
                  <h3 class="headline-sm card-title">
                    Tips for Managing Stress in a Busy World
                  </h3>
                  <p class="card-text">
                    Learn practical strategies to manage stress and maintain balance in your daily life.
                  </p>
                  <p class="card-text full-description" style="display: none;">
                    Stress is an inevitable part of modern life, but it doesn't have to control you. This article provides actionable tips to identify stress triggers, develop healthy coping mechanisms, and create a lifestyle that promotes resilience and peace of mind.
                  </p>
                  <button class="btn-text title-lg read-more-btn">Read More</button>
                </div>
              </li>

              <!-- Blog Post 3 -->
              <li>
                <div
                  class="blog-card has-before has-after"
                  data-reveal="bottom"
                >
                  <div class="meta-wrapper">
                    <div class="card-meta">
                      <ion-icon name="person-outline"></ion-icon>
                      <span class="span">By Dr. Emma Markey</span>
                    </div>
                    <div class="card-meta">
                      <ion-icon name="calendar-outline"></ion-icon>
                      <span class="span">January 10, 2025</span>
                    </div>
                  </div>
                  <h3 class="headline-sm card-title">
                    Understanding the Benefits of Holistic Healthcare
                  </h3>
                  <p class="card-text">
                    Explore how holistic healthcare approaches can address both mental and physical well-being.
                  </p>
                  <p class="card-text full-description" style="display: none;">
                    Holistic healthcare focuses on treating the whole person, not just the symptoms. This article delves into the benefits of integrating mental, emotional, and physical health care to achieve a balanced and harmonious life. Discover how holistic practices can transform your approach to wellness.
                  </p>
                  <button class="btn-text title-lg read-more-btn">Read More</button>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section class="section doctors" aria-labelledby="doctors-label">
          <div class="container">
            <p
              class="section-subtitle title-lg text-center"
              id="doctors-label"
              data-reveal="bottom"
            >
              Our Doctor
            </p>
            <h2
              class="section-title headline-md text-center"
              data-reveal="bottom"
            >
              Meet Our Expert
            </h2>
            <div class="doctor-card">
              <img
                src="public/img/IMG_1714.JPG"
                alt="Dr. Emma Markey"
                class="doctor-image"
                width="200"
                height="200"
              />
              <h3 class="doctor-name">Dr. Emma Markey (DNP, FNP, PMHNP)</h3>
              <p class="doctor-title">DNP, PMHNP, FNP</p>
              <p class="doctor-bio">
                Dr. Emma Markey (DNP, FNP, PMHNP) is a highly skilled Doctor of Nursing Practice (DNP)
                with dual specializations as a Psychiatric-Mental Health Nurse Practitioner (PMHNP) and Family Nurse Practitioner (FNP).
              </p>
              <ul class="doctor-specialties">
                <li style="color: black !important;"><ion-icon name="checkmark-circle-outline"></ion-icon> Psychiatric Assessments</li>
                <li style="color: black !important;"><ion-icon name="checkmark-circle-outline"></ion-icon> Medication Management</li>
                <li style="color: black !important;"><ion-icon name="checkmark-circle-outline"></ion-icon> Therapeutic Counseling</li>
                <li style="color: black !important;"><ion-icon name="checkmark-circle-outline"></ion-icon> Integrative Healing Techniques</li>
              </ul>
              <a href="#contact" class="btn has-before title-md">Contact Dr. Markey</a>
            </div>
          </div>
        </section>

                <section class="section video-section" aria-labelledby="video-label">
          <div class="container">
            <p
              class="section-subtitle title-lg text-center"
              id="video-label"
              data-reveal="bottom"
            >
              Meet Dr. Emma Markey
            </p>
            <h2
              class="section-title headline-md text-center"
              data-reveal="bottom"
            >
              A Glimpse into Her Journey
            </h2>
            <div class="video-container" style="text-align: center; margin-top: 20px;">
              <video controls width="80%" style="border-radius: 10px;">
                <source src="video/ACC.mp4" type="video/mp4" />
                Your browser does not support the video tag.
              </video>
            </div>
            <p class="section-text text-center" data-reveal="bottom" style="margin-top: 20px;">
              Learn more about Dr. Emma Markey (DNP, FNP, PMHNP) and her dedication to providing compassionate care for mental and physical well-being.
            </p>
          </div>
        </section>

        <section class="section booking" aria-labelledby="booking-label">
          <div class="container">
            <p class="section-subtitle title-lg text-center" id="booking-label" data-reveal="bottom">
              Book an Appointment
            </p>
            <h2 class="section-title headline-md text-center" data-reveal="bottom">
              Schedule Your Visit
            </h2>
            <p class="text-center" style="color: #555;">
              <strong>Working Hours:</strong> 9:00 AM to 5:00 PM<br>
              <strong>Working Days:</strong> Monday to Friday
            </p>

            <form id="booking-form" class="booking-form" action="app/handlers/book_appointment.php" method="POST">
              <div class="form-group">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="input-field" placeholder="Enter your full name" required />
                <small class="error-message"></small>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="input-field" placeholder="Enter your email" required />
                <small class="error-message"></small>
              </div>
              <div class="form-group">
                <label for="date" class="form-label">Select Date</label>
                <input type="date" id="date" name="date" class="input-field" required />
                <small class="error-message"></small>
              </div>
              <div class="form-group">
                <label for="time" class="form-label">Select Time</label>
                <input type="time" id="time" name="time" class="input-field" required />
                <small class="error-message"></small>
              </div>
              <div class="form-group">
             
              <select name="service" id="service" class="input-field">
              <option value="">--- Select Service</option>
              <option value="Pharmceutical Service">Pharmceutical Service</option>
              <option value="Medication Management">Medication Management.</option>
              <option value="Therapeutic Counseling">Therapeutic Counseling</option>
              <option value="Other bookings">Other bookings</option>
              </select>
                <small class="error-message"></small>
              </div>
              <button type="submit" class="btn has-before title-md">Book Appointment</button>
            </form>
          </div>
        </section>

      

        <section class="section testimonials" aria-labelledby="testimonials-label">
          <div class="container">
            <p
              class="section-subtitle title-lg text-center"
              id="testimonials-label"
              data-reveal="bottom"
            >
              What Our Clients Say
            </p>
            <h2 class="section-title headline-md text-center" data-reveal="bottom">
              Testimonials
            </h2>

            <div class="testimonial-slider">
              <!-- Testimonial 1 -->
              <div class="testimonial-slide active">
                <p class="testimonial-text" style="color: black !important;">
                  "Blessed Behavioral & Health Services LLC has been a life-changing
                  experience for me. The team is compassionate, professional, and truly
                  dedicated to their clients' well-being."
                </p>
                <div class="testimonial-author">
                  <img
                    src="public/img/DaveShoot.JPG"
                    alt="Nora"
                    class="testimonial-author-image"
                  />
                  <h3 class="testimonial-author-name">DaveStacks</h3>
                </div>
              </div>

              <!-- Testimonial 2 -->
              <div class="testimonial-slide">
                <p class="testimonial-text" style="color: black !important;">
                  "I am so grateful for the care and support I received. The holistic
                  approach helped me regain my confidence and improve my mental health."
                </p>
                <div class="testimonial-author">
                  <img
                    src="public/img/nora.jpeg"
                    alt="Jane Smith"
                    class="testimonial-author-image"
                  />
                  <h3 class="testimonial-author-name" >Nora Smith</h3>
                </div>
              </div>

              <!-- Testimonial 3 -->
              <div class="testimonial-slide">
                <p class="testimonial-text" style="color: black !important;">
                  "The services provided here are exceptional. I highly recommend them
                  to anyone seeking mental health or primary care services."
                </p>
                <div class="testimonial-author">
                  <img
                    src="public/img/Victor.jpeg"
                    alt="Michael Johnson"
                    class="testimonial-author-image"
                  />
                  <h3 class="testimonial-author-name">Victor Reyes</h3>
                </div>
              </div>
            </div>

            <div class="testimonial-controls">
              <button class="control-btn prev-btn" aria-label="Previous Testimonial">
                <ion-icon name="chevron-back-outline"></ion-icon>
              </button>
              <button class="control-btn next-btn" aria-label="Next Testimonial">
                <ion-icon name="chevron-forward-outline"></ion-icon>
              </button>
            </div>
          </div>
        </section>

        <section class="section faq" aria-labelledby="faq-label">
          <div class="container">
            <p
              class="section-subtitle title-lg text-center"
              id="faq-label"
              data-reveal="bottom"
            >
              Frequently Asked Questions
            </p>
            <h2 class="section-title headline-md text-center" data-reveal="bottom">
              How Can We Help You?
            </h2>

            <div class="faq-list">
              <!-- FAQ Item 1 -->
              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>What services do you offer?</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </button>
                <div class="faq-answer">
                  <p>
                    We offer a wide range of services, including psychiatric
                    assessments, medication management, therapeutic counseling, and
                    integrative healing techniques.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 2 -->
              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>How can I book an appointment?</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </button>
                <div class="faq-answer">
                  <p>
                    You can book an appointment through our online booking form or by
                    contacting us directly via phone or email.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 3 -->
              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>Do you accept insurance?</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </button>
                <div class="faq-answer">
                  <p>
                    Yes, we accept most major insurance plans. Please contact us to
                    confirm if your insurance is accepted.
                  </p>
                </div>
              </div>

              <!-- FAQ Item 4 -->
              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>What are your operating hours?</span>
                  <ion-icon name="chevron-down-outline"></ion-icon>
                </button>
                <div class="faq-answer">
                  <p>
                    Our clinic is open Monday to Friday from 9:00 AM to 6:00 PM. We are
                    closed on weekends and public holidays.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        
      </article>
    
    </main>
      
    <!-- Booking Modal -->
    <div id="booking-modal" class="modal hidden">
      <div class="modal-content">
        <span id="modal-icon" class="modal-icon">✔️</span>
        <p id="modal-message"></p>
        <button id="modal-close" class="btn">Okay</button>
      </div>
    </div>

    <!-- Modal Popup -->
    <div id="booking-modal" class="modal hidden">
      <div class="modal-content">
        <span id="modal-icon" class="modal-icon">✔️</span>
        <p id="modal-message"></p>
        <button id="modal-close" class="btn">Okay</button>
      </div>
    </div>

    <!-- Contact Modal -->
    <div id="contact-modal" class="modal hidden">
      <div class="modal-content">
        <span id="contact-modal-icon" class="modal-icon">✔️</span>
        <p id="contact-modal-message"></p>
        <button id="contact-modal-close" class="btn">Okay</button>
      </div>
    </div>

    <!-- Footer Contact Modal -->
    <div id="footer-contact-modal" class="modal hidden">
      <div class="modal-content">
        <span id="footer-modal-icon" class="modal-icon">✔️</span>
        <p id="footer-modal-message"></p>
        <button id="footer-modal-close" class="btn">Okay</button>
      </div>
    </div>

    <footer
      class="footer"
      style="background-image: url('public/img/footer.jpeg');"
    >
      <div class="overlay"></div>
      <div class="container">
        <!-- Footer Top Section -->
        <div class="footer-top">
          <!-- Logo Section -->
          <div class="footer-brand">
            <a href="#" class="logo logoH">
              <img
                src="public/img/IMG_2.JPG"
                width="136"
                height="46"
                alt="Blessed Behavioral & Health Services"
              />
            </a>
          </div>

          <!-- Contact Form Section -->
          <div class="footer-contact-form">
            <h3 class="footer-form-title">Get in Touch</h3>
            <form action="app/handlers/contact_form.php" method="POST" id="footer-contact-form" class="contact-form">
              <div class="form-group">
                <label for="footer-name" class="form-label">Full Name</label>
                <input type="text" id="footer-name" name="name" class="input-field" placeholder="Enter your full name" required />
              </div>
              <div class="form-group">
                <label for="footer-email" class="form-label">Email Address</label>
                <input type="email" id="footer-email" name="email" class="input-field" placeholder="Enter your email" required />
              </div>
              <div class="form-group">
                <label for="footer-message" class="form-label">Message</label>
                <textarea id="footer-message" name="message" class="input-field" placeholder="Write your message here" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn has-before title-md">Send Message</button>
            </form>
          </div>

          <!-- Modal Popup -->
          <div id="footer-contact-modal" class="modal hidden">
            <div class="modal-content">
              <span id="footer-modal-icon" class="modal-icon">✔️</span>
              <p id="footer-modal-message"></p>
              <button id="footer-modal-close" class="btn">Okay</button>
            </div>
          </div>

          <!-- Footer Contact Section -->
          <div class="footer-contact" id="contact">
            <h3 class="footer-contact-title">Contact Us</h3>
            <ul class="contact-list">
              <li class="contact-item">
                <div class="item-icon">
                  <ion-icon name="mail-open-outline"></ion-icon>
                </div>
                <div>
                  <p>
                    <strong>Main Email:</strong>
                    <a href="mailto:contact@davestacks017@gmail.com" class="contact-link"
                      >contact@blessedbehavioral.com</a
                    >
                  </p>
                  <p>
                    <strong>Inquiries:</strong>
                    <a href="mailto:info@blessedbehavioral.com" class="contact-link"
                      >info@blessedbehavioral.com</a
                    >
                  </p>
                </div>
              </li>
              <li class="contact-item">
                <div class="item-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
                <div>
                  <p>
                    <strong>Office Telephone:</strong>
                    <a href="tel:407-547-7400" class="contact-link"
                      >407-547-7400</a
                    >
                  </p>
                  <p>
                    <strong>Mobile:</strong>
                    <a href="407-547-7400" class="contact-link"
                      >407-547-7400</a
                    >
                  </p>
                </div>
              </li>
              <li class="contact-item">
                <div class="item-icon">
                  <ion-icon name="logo-whatsapp"></ion-icon>
                </div>
                <div>
                  <p>
                    <strong>WhatsApp:</strong>
                    <a
                      href="https://wa.me/14075477400?text=Hello%20Blessed%20Behavioral%20&%20Health%20Services,%20I%20would%20like%20to%20inquire%20about%20your%20services."
                      class="contact-link"
                      target="_blank"
                    >
                      Chat on WhatsApp
                    </a>
                  </p>
                </div>
              </li>
            </ul>

            <!-- Map Section -->
            <div class="map-container">
              <iframe
              
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49754.44838705686!2d-106.57603754141914!3d38.79458796672275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sus!4v1744759264048!5m2!1sen!2sus"
                width="100%"
                height="300"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>

          <!-- Social Media Links -->
          <div class="footer-social">
            <h3 class="footer-social-title">Follow Us</h3>
            <ul class="social-links">
              <li>
                <a href="https://www.linkedin.com/in/dr-emma-markey-dnp-pmhnp-bc-fnp-c-mpa-hsa-bsn-rn-1067ba39?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="social-link" aria-label="LinkedIn">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="https://www.tiktok.com/@blessed_behaviora?_t=ZP-8rk9OiSROO6&_r=1" target="_blank" class="social-link" aria-label="TikTok">
                  <i class="fab fa-tiktok"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/blessed_behavioral/?igsh=MWN4NGZ0dXNueHc5Yw#" target="_blank" class="social-link" aria-label="Instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://x.com/service_blessed/status/1862106766550372722?s=46&t=N92Is_qc1pcyMyVMxSMPVA" target="_blank" class="social-link" aria-label="Twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://web.facebook.com/people/Blessed-Behavioral/pfbid024P95KZ8ZDdH7xodEV3eBTPJq39iW5UwMJfSUuT4yvyd5qbu4T1ihx9iLkgSQCu7ql/?mibextid=kFxxJD&rdid=dGaDOe79L12rKQ4j&share_url=https%253A%252F%252Fweb.facebook.com%252Fshare%252F18B37Trt1q%252F%253Fmibextid%253DkFxxJD%2526_rdc%253D1%2526_rdr" target="_blank" class="social-link" aria-label="Facebook">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
          <p class="rights-text">
            &copy; 2025 Blessed Behavioral & Health Services LLC. All rights reserved. Designed by
            <a href="https://davestackportfolio.com" target="_blank">DaveStacksITConsult</a>.
          </p>
        </div>
      </div>
    </footer>
    <a
      href="#top"
      class="back-top-btn"
      aria-label="Back to Top"
      data-back-top-btn
    >
      <ion-icon name="chevron-up"></ion-icon>
    </a>
    <script src="public/js/script.js"></script>
  </body>
</html>
