<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* =========================
   FOOTER BASE
========================= */

        .pmk-footer {
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        /* =========================
   TOP STRIP
========================= */

        .footer-top {
            background: #0F8F63;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-top-content {
            max-width: 1100px;
            margin: auto;
        }

        .footer-top h2 {
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-cta {
            background: #ffffff;
            color: #0F8F63;
            padding: 12px 28px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .footer-cta:hover {
            background: #f1f1f1;
        }

        /* =========================
   MAIN FOOTER
========================= */

        .footer-main {
            background: #0F5675;
            padding: 70px 20px;
        }

        .footer-grid {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 40px;
        }

        .footer-col h3,
        .footer-col h4 {
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-col p {
            font-size: 14px;
            line-height: 1.6;
            color: #e0e0e0;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #18A873;
        }

        /* =========================
   NEWSLETTER
========================= */

        .newsletter h5 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .newsletter form {
            display: flex;
            margin-top: 10px;
        }

        .newsletter input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .newsletter button {
            background: #0F8F63;
            border: none;
            padding: 10px 16px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter button:hover {
            background: #0C6E4D;
        }

        /* =========================
   BOTTOM
========================= */

        .footer-bottom {
            background: #0C4A66;
            padding: 20px;
        }

        .footer-bottom-content {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            font-size: 14px;
            color: #cccccc;
        }

        .footer-links a {
            margin-left: 20px;
            color: #cccccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        /* =========================
   RESPONSIVE
========================= */

        @media (max-width: 768px) {
            .footer-bottom-content {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            .newsletter form {
                flex-direction: column;
            }

            .newsletter button {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <footer class="pmk-footer">

        <!-- Mission Strip -->
        <div class="footer-top">
            <div class="footer-top-content">
                <h2>Together We Build Sustainable Communities</h2>
                <a href="#" class="footer-cta">Become a Partner</a>
            </div>
        </div>

        <!-- Main Footer -->
        <div class="footer-main">
            <div class="footer-grid">

                <!-- About -->
                <div class="footer-col">
                    <h3>Palli Mongal Karmosuchi (PMK)</h3>
                    <p>
                        PMK is a national NGO committed to poverty reduction,
                        social justice, climate resilience, and sustainable
                        rural development across Bangladesh.
                    </p>
                </div>

                <!-- Programs -->
                <div class="footer-col">
                    <h4>Our Programs</h4>
                    <ul>
                        <li><a href="#">Microfinance</a></li>
                        <li><a href="#">Women Empowerment</a></li>
                        <li><a href="#">Climate Adaptation</a></li>
                        <li><a href="#">Livelihood Support</a></li>
                        <li><a href="#">Education & Health</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Leadership</a></li>
                        <li><a href="#">Annual Reports</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact & Newsletter -->
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p>Dhaka, Bangladesh</p>
                    <p>Email: info@pmk.org</p>
                    <p>Phone: +880 1234 567890</p>

                    <div class="newsletter">
                        <h5>Subscribe to Updates</h5>
                        <form>
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>© 2026 PMK - All Rights Reserved</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Transparency</a>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>