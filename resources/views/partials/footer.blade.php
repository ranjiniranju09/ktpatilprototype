<style>
.site-footer {
    background-color: #97182c;
    color: #ffffff;
    padding-top: 60px;
}

.footer-top {
    padding-bottom: 40px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.footer-section h3 {
    color: #ffffff;
    font-size: 20px;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.footer-section p {
    color: #cccccc;
    line-height: 1.6;
    margin-bottom: 20px;
}

.footer-social a {
    color: #ffffff;
    margin-right: 15px;
    font-size: 18px;
    transition: color 0.3s;
}

.footer-social a:hover {
    color: var(--primary-color);
}

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-section ul li {
    margin-bottom: 10px;
}

.footer-section ul li a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-section ul li a:hover {
    color: var(--primary-color);
}

.contact-info li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    color: #cccccc;
}

.contact-info li i {
    margin-right: 10px;
    margin-top: 5px;
    color: var(--primary-color);
}

.contact-info li a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info li a:hover {
    color: var(--primary-color);
}

.footer-bottom {
    background-color: #97182c;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom p {
    color: #cccccc;
    margin: 0;
    font-size: 14px;
}

@media (max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr;
    }

    .footer-section {
        text-align: center;
        margin-bottom: 30px;
    }

    .contact-info li {
        justify-content: center;
    }
}
</style>


<footer class="site-footer">
    <div class="footer-top">
        <div class="container-footer">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>About DY Patil University</h3>
                    <p>DY Patil University is committed to excellence in teaching, research, and innovation. We strive to create an environment that fosters intellectual growth and personal development.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/academics">Academic Programs</a></li>
                        <li><a href="/admissions">Admissions</a></li>
                        <li><a href="/research">Research</a></li>
                        <li><a href="/campus-life">Campus Life</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            K.T.Patil College of Engineering and Technology, Keshav Nagar, Jadhavwadi road ,Dharashiv Pune 413501
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+918806078888">+91 8806078888</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@dypatil.edu">#</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container-footer">
            <p>&copy; {{ date('Y') }} DY Patil University. All rights reserved.</p>
        </div>
    </div>
</footer>


