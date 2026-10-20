<?php
/**
 * The template for displaying the footer
 *
 * @package MD_Nutrition
 */
?>

<!-- 10. FOOTER -->
<footer class="site-footer" id="contact">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: About / Branding -->
            <div class="footer-col">
                <div class="logo" style="margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-leaf logo-icon" style="color: var(--primary-green-light); font-size: 28px;"></i>
                    <div class="logo-text">
                        <h2 style="color: #ffffff; font-size: 24px; margin: 0;">MD Nutrition</h2>
                        <span style="color: #bbbbbb; font-size: 11px; letter-spacing: 2px; text-transform: uppercase;">Centre · Health Coach</span>
                    </div>
                </div>
                <p>Coaching by <strong>Mahammed Mujeeb</strong> · Certified Wellness Coach in Nutrition. Helping you achieve a Strong Body, Sharp Mind, and Smart Nutrition with food-first habits.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About Coach</a></li>
                    <li><a href="#services">Our Programs</a></li>
                    <li><a href="#success-stories">Success Stories</a></li>
                    <li><a href="https://forms.gle/KyWakw7E8ptdWNvy8" target="_blank">Registration Form</a></li>
                    <li><a href="https://chat.whatsapp.com/IF8lLJ6M1GI77Kv7LwZKWz" target="_blank">WhatsApp Community</a></li>
                </ul>
            </div>

            <!-- Column 3: Specialized Care -->
            <div class="footer-col">
                <h4>Specialized Care</h4>
                <ul>
                    <li><a href="#services">Weight Management</a></li>
                    <li><a href="#services">Sugar Control (Diabetes)</a></li>
                    <li><a href="#services">PCOD / PMOS Care</a></li>
                    <li><a href="#services">Thyroid Wellness</a></li>
                    <li><a href="#services">Blood Pressure & Heart</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="footer-col">
                <h4>Get In Touch</h4>
                <p><i class="fa-solid fa-location-dot" style="color: var(--primary-green-light); margin-right: 8px;"></i> Guntur, Andhra Pradesh, India</p>
                <p><i class="fa-solid fa-phone" style="color: var(--primary-green-light); margin-right: 8px;"></i> <a href="tel:+919700907707" style="color: #aaaaaa;">+91 97009 07707</a></p>
                <p><i class="fa-solid fa-envelope" style="color: var(--primary-green-light); margin-right: 8px;"></i> <a href="mailto:mdnutritioncentre@gmail.com" style="color: #aaaaaa;">mdnutritioncentre@gmail.com</a></p>
                <p><i class="fa-brands fa-whatsapp" style="color: var(--whatsapp-green, #25D366); margin-right: 8px;"></i> <a href="https://wa.me/919700907707" target="_blank" style="color: #aaaaaa;">WhatsApp Consultation</a></p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> MD Nutrition Centre. All Rights Reserved. Coaching by Mahammed Mujeeb.</p>
            <p><?php esc_html_e( 'Strong Body · Sharp Mind · Smart Nutrition', 'md-nutrition' ); ?></p>
        </div>
    </div>
</footer>

<!-- 11. FLOATING BUTTONS -->
<a href="https://wa.me/919700907707" target="_blank" class="floating-whatsapp" title="<?php esc_attr_e( 'Chat on WhatsApp', 'md-nutrition' ); ?>" style="position: fixed; bottom: 30px; left: 30px; background-color: #25D366; color: #ffffff; width: 52px; height: 52px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 26px; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4); z-index: 999;">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<a href="#" class="leaf-top-btn" id="scrollTopBtn" title="<?php esc_attr_e( 'Back to Top', 'md-nutrition' ); ?>">
    <span>
        <i class="fa-solid fa-chevron-up"></i>
        Top
    </span>
</a>

<?php wp_footer(); ?>
</body>
</html>
