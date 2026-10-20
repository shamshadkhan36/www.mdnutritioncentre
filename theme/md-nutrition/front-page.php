<?php
/**
 * The template for displaying the home page
 *
 * @package MD_Nutrition
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- 3. HERO SECTION -->
    <section class="hero-section" style="background-image: url('<?php echo esc_url( get_theme_mod( 'md_hero_bg', 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=1920&q=80' ) ); ?>');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-card">
                <div class="hero-tag" style="display: inline-block; background: rgba(96, 148, 50, 0.12); color: var(--primary-green-dark); padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: 600; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 14px;">
                    Certified Nutrition & Wellness
                </div>
                <h1>Strong Body.<br>Sharp Mind. Smart Nutrition.</h1>
                <p style="color: #555; font-size: 15px; margin-bottom: 22px; line-height: 1.65;">
                    Personalized wellness coaching under <strong>Senior Wellness Coach Mahammed Mujeeb</strong> to help you achieve sustainable health, better energy, and a confident lifestyle through science-backed, food-first guidance.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( get_theme_mod( 'md_booking_url', 'https://calendly.com/mujeeb-nutrition/one-to-one-meeting' ) ); ?>" target="_blank" class="hero-btn">
                        <i class="fa-regular fa-calendar-check" style="margin-right: 6px;"></i> Book Appointment
                    </a>
                    <a href="https://wa.me/919700907707" target="_blank" class="hero-btn" style="background-color: var(--whatsapp-green, #25D366);">
                        <i class="fa-brands fa-whatsapp" style="margin-right: 6px;"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <section class="stats-bar" style="background: #ffffff; border-bottom: 1px solid var(--border-light); padding: 25px 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
                <div>
                    <h3 style="font-family: var(--font-serif); font-size: 32px; font-weight: 700; color: var(--primary-green);">3+</h3>
                    <p style="font-size: 13.5px; color: var(--muted-text);">Years Coaching Experience</p>
                </div>
                <div>
                    <h3 style="font-family: var(--font-serif); font-size: 32px; font-weight: 700; color: var(--primary-green);">250+</h3>
                    <p style="font-size: 13.5px; color: var(--muted-text);">Clients Guided to Results</p>
                </div>
                <div>
                    <h3 style="font-family: var(--font-serif); font-size: 32px; font-weight: 700; color: var(--primary-green);">95%</h3>
                    <p style="font-size: 13.5px; color: var(--muted-text);">Client Follow-Through Rate</p>
                </div>
                <div>
                    <h3 style="font-family: var(--font-serif); font-size: 32px; font-weight: 700; color: var(--primary-green);">4.9★</h3>
                    <p style="font-size: 13.5px; color: var(--muted-text);">Average Client Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. THREE CATEGORY CARDS SECTION -->
    <section class="feature-cards-section" id="services">
        <div class="container">
            <div class="feature-cards-grid">
                <!-- Card 1 -->
                <div class="banner-card">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=700&q=80" alt="Weight Management" class="bg-img">
                    <div class="banner-overlay overlay-dark"></div>
                    <div class="banner-content">
                        <div class="divider-line"></div>
                        <h3>Weight Management</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Sustainable Fat Loss & Muscle Retention</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="banner-card">
                    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=700&q=80" alt="Diabetes Support" class="bg-img">
                    <div class="banner-overlay overlay-green"></div>
                    <div class="banner-content">
                        <div class="divider-line"></div>
                        <h3>Diabetes & Sugar Control</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Lifestyle-Focused Metabolic Health</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="banner-card">
                    <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=700&q=80" alt="PCOD & Thyroid Care" class="bg-img">
                    <div class="banner-overlay overlay-grey"></div>
                    <div class="banner-content">
                        <div class="divider-line"></div>
                        <h3>PCOD & Thyroid Care</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Hormonal Balance & Sustainable Habits</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. THREE FEATURE ICON BOXES -->
    <section class="icon-boxes-section">
        <div class="container">
            <div class="icon-boxes-grid">
                <!-- Icon 1: Free Health Assessment -->
                <div class="icon-box">
                    <div class="icon-box-icon">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <h4>1. Free Health Assessment</h4>
                    <p>Schedule your 1-on-1 consultation online or at our Guntur centre to analyze your routine and health history.</p>
                </div>

                <!-- Icon 2: Truly Personalized Nutrition -->
                <div class="icon-box">
                    <div class="icon-box-icon">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4>2. Food-First & Sustainable</h4>
                    <p>No crash diets or unnecessary supplements—just balanced, portion-controlled meals designed for your body.</p>
                </div>

                <!-- Icon 3: Ongoing WhatsApp Guidance -->
                <div class="icon-box">
                    <div class="icon-box-icon">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h4>3. Continuous WhatsApp Support</h4>
                    <p>Regular follow-ups, ongoing progress tracking, and direct WhatsApp coaching to keep you consistent.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. WHY PEOPLE NEED A HEALTH ADVISER (MAHAMMED MUJEEB) -->
    <section class="adviser-section" id="about">
        <div class="container">
            <div class="adviser-grid">
                <!-- Left Column with Image + Green Overlay & Meditation Silhouette -->
                <div class="adviser-image-wrap">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=800&q=80" alt="Health Consultation">
                    <div class="adviser-image-overlay">
                        <div class="meditation-icon">
                            <i class="fa-solid fa-spa"></i>
                        </div>
                        <h3>Feel complete Inside and Outside</h3>
                        <span style="display: inline-block; background: rgba(255,255,255,0.2); padding: 6px 16px; border-radius: 20px; font-size: 13px; margin-top: 10px;">Mahammed Mujeeb · Senior Wellness Coach</span>
                    </div>
                </div>

                <!-- Right Column with Content -->
                <div class="adviser-content">
                    <h2>Why Choose<br><span class="green-accent">MD Nutrition Centre?</span></h2>
                    <p>
                        At MD Nutrition Centre, we believe lasting health begins with the right guidance and sustainable habits. Under the leadership of <strong>Senior Wellness Coach Mahammed Mujeeb</strong>, we provide personalized nutrition and lifestyle coaching designed to help you achieve healthy weight management, improved well-being, and lifelong wellness.
                    </p>
                    <div class="btn-group">
                        <a href="https://calendly.com/mujeeb-nutrition/one-to-one-meeting" target="_blank" class="btn-green">
                            <i class="fa-regular fa-calendar-check" style="margin-right: 6px;"></i> Book Assessment
                        </a>
                        <a href="https://wa.me/919700907707" target="_blank" class="btn-dark">
                            <i class="fa-brands fa-whatsapp" style="margin-right: 6px;"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. SUCCESS STORIES -->
    <section style="padding: 60px 0; background: #ffffff;" id="success-stories">
        <div class="container">
            <div style="text-align: center; max-width: 650px; margin: 0 auto 40px;">
                <h2 style="font-family: var(--font-serif); font-size: 38px; font-weight: 600; color: #222;">Real People. Real Results.</h2>
                <p style="color: var(--muted-text); font-size: 15px;">Every health journey is built on trust, personalized care, and lasting lifestyle change.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                <div style="background: var(--bg-light); border: 1px solid var(--border-light); padding: 30px; border-radius: 6px;">
                    <i class="fa-solid fa-quote-left" style="font-size: 26px; color: var(--primary-green); opacity: 0.3; margin-bottom: 12px; display: block;"></i>
                    <p style="font-size: 14.5px; color: #444; font-style: italic; line-height: 1.7; margin-bottom: 18px;">
                        “Living with diabetes for over 20 years and dependent on insulin for 5 years. After joining MD Nutrition Centre and following coach's guidance, I no longer need insulin and manage with just one tablet! My energy is completely back.”
                    </p>
                    <h4 style="font-family: var(--font-serif); font-size: 17px; color: #222;">Suresh P. V.</h4>
                    <span style="font-size: 12.5px; color: var(--primary-green-dark); font-weight: 500;">Civil Contractor · Diabetes Recovery</span>
                </div>
                <div style="background: var(--bg-light); border: 1px solid var(--border-light); padding: 30px; border-radius: 6px;">
                    <i class="fa-solid fa-quote-left" style="font-size: 26px; color: var(--primary-green); opacity: 0.3; margin-bottom: 12px; display: block;"></i>
                    <p style="font-size: 14.5px; color: #444; font-style: italic; line-height: 1.7; margin-bottom: 18px;">
                        “The plan felt realistic from day one. No crash diets or unrealistic restrictions—just simple, sustainable habits that fit my lifestyle. Over time, I felt healthier, lighter, and full of energy.”
                    </p>
                    <h4 style="font-family: var(--font-serif); font-size: 17px; color: #222;">Mohammed Abdul Shafi</h4>
                    <span style="font-size: 12.5px; color: var(--primary-green-dark); font-weight: 500;">Sustainable Weight Management</span>
                </div>
                <div style="background: var(--bg-light); border: 1px solid var(--border-light); padding: 30px; border-radius: 6px;">
                    <i class="fa-solid fa-quote-left" style="font-size: 26px; color: var(--primary-green); opacity: 0.3; margin-bottom: 12px; display: block;"></i>
                    <p style="font-size: 14.5px; color: #444; font-style: italic; line-height: 1.7; margin-bottom: 18px;">
                        “The coaching went beyond food. Sleep, stress, daily movement—everything came together. My PCOS symptoms are finally manageable and my confidence is restored.”
                    </p>
                    <h4 style="font-family: var(--font-serif); font-size: 17px; color: #222;">Sravani P.</h4>
                    <span style="font-size: 12.5px; color: var(--primary-green-dark); font-weight: 500;">PCOS & Hormonal Wellness</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FOUR-COLUMN ACTIVITY & NUTRITION GALLERY -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=600&q=80" alt="Outdoor Fitness">
                    <div class="gallery-item-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1518310383802-640c2de311b2?auto=format&fit=crop&w=600&q=80" alt="Fitness Training">
                    <div class="gallery-item-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=600&q=80" alt="Diet Consultation">
                    <div class="gallery-item-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=600&q=80" alt="Healthy Breakfast Bowl">
                    <div class="gallery-item-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. UPCOMING WORKSHOPS & EVENTS SECTION -->
    <section class="events-section" id="events">
        <div class="container">
            <div class="events-section-title">
                <h2>Upcoming Workshops & Events</h2>
            </div>
            <div class="events-grid">
                <!-- Event 1 -->
                <div class="event-card">
                    <div class="event-image-wrap">
                        <img src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?auto=format&fit=crop&w=600&q=80" alt="Sugar Control Masterclass">
                    </div>
                    <div class="event-body">
                        <div class="event-meta">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Guntur Centre & Live Online</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa-regular fa-clock"></i>
                            <span>Every Saturday / 10:00 am - 11:30 am</span>
                        </div>
                    </div>
                    <div class="event-footer-btn">
                        <a href="https://wa.me/919700907707" target="_blank" class="event-btn-dark">Register Now</a>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card">
                    <div class="event-image-wrap">
                        <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?auto=format&fit=crop&w=600&q=80" alt="Mindful Nutrition Workshop">
                    </div>
                    <div class="event-body">
                        <div class="event-meta">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Virtual Session (Zoom)</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa-regular fa-clock"></i>
                            <span>Monthly / 06:00 pm - 07:30 pm</span>
                        </div>
                    </div>
                    <div class="event-footer-btn">
                        <a href="https://wa.me/919700907707" target="_blank" class="event-btn-dark">Register Now</a>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card">
                    <div class="event-image-wrap">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=600&q=80" alt="PCOD & Hormonal Balance">
                        <div class="event-image-overlay">
                            <h4>Hormonal Health & PCOD Wellness Month</h4>
                        </div>
                    </div>
                    <div class="event-body">
                        <div class="event-meta">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Community Interactive Group</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa-regular fa-clock"></i>
                            <span>Weekly Progress Tracking</span>
                        </div>
                    </div>
                    <div class="event-footer-btn">
                        <a href="https://chat.whatsapp.com/IF8lLJ6M1GI77Kv7LwZKWz" target="_blank" class="event-btn-green">Join Group</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
