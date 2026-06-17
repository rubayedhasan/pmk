<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMK MFI Field Activities</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f2f2f2;
            padding: 20px;
        }

        .slide {
            width: 1400px;
            height: 900px;
            background: #faf9f4;
            margin: auto;
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        /* LEFT SIDE */

        .left-panel {
            width: 48%;
            position: relative;
            padding: 25px;
            background: #f6f5ee;
        }

        .logo-section img {
            width: 230px;
        }

        .image-wrapper {
            position: absolute;
            left: 30px;
            top: 120px;
            width: 720px;
            height: 650px;
            overflow: hidden;
            border-top-right-radius: 280px;
            border-bottom-right-radius: 280px;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .orange-shape {
            position: absolute;
            bottom: -120px;
            left: -100px;
            width: 600px;
            height: 280px;
            background: #ef7d19;
            border-radius: 50%;
        }

        /* RIGHT SIDE */

        .right-panel {
            width: 52%;
            padding: 60px 60px 40px;
        }

        .right-panel h3 {
            color: #0d4f44;
            font-size: 34px;
            font-weight: 500;
        }

        .right-panel h1 {
            color: #0d4f44;
            font-size: 72px;
            line-height: 1.1;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .line {
            width: 70px;
            height: 4px;
            background: #ef7d19;
            margin-bottom: 25px;
        }

        .intro {
            font-size: 30px;
            line-height: 1.5;
            color: #333;
            margin-bottom: 35px;
        }

        .activity-card {
            border: 1px solid #ece4d5;
            border-radius: 18px;
            overflow: hidden;
            background: white;
        }

        .activity {
            display: grid;
            grid-template-columns: 90px 80px 1fr;
            align-items: center;
            gap: 15px;
            padding: 22px 25px;
            border-bottom: 1px solid #f0eadf;
        }

        .activity:last-child {
            border-bottom: none;
        }

        .number {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            font-weight: 700;
        }

        .icon {
            font-size: 42px;
        }

        .text {
            font-size: 34px;
            color: #222;
            line-height: 1.3;
        }

        /* Colors */

        .orange .number,
        .orange .icon {
            color: #ef7d19;
        }

        .orange .number {
            border: 2px solid #f5c18d;
        }

        .green .number,
        .green .icon {
            color: #77a93c;
        }

        .green .number {
            border: 2px solid #c7deb0;
        }

        .blue .number,
        .blue .icon {
            color: #2e86cf;
        }

        .blue .number {
            border: 2px solid #c7dff5;
        }

        .teal .number,
        .teal .icon {
            color: #20a4a0;
        }

        .teal .number {
            border: 2px solid #bde7e5;
        }

        .yellow .number,
        .yellow .icon {
            color: #f3a006;
        }

        .yellow .number {
            border: 2px solid #f7ddb0;
        }

        .purple .number,
        .purple .icon {
            color: #9155b5;
        }

        .purple .number {
            border: 2px solid #dcc7ea;
        }
    </style>
</head>

<body>

    <div class="slide">

        <!-- Left Section -->
        <div class="left-panel">

            <div class="logo-section">
                <img src="pmk-logo.png" alt="PMK MFI Logo">
            </div>

            <div class="image-wrapper">
                <img src="field-activity.jpg" alt="Field Activity">
            </div>

            <div class="orange-shape"></div>

        </div>

        <!-- Right Section -->
        <div class="right-panel">

            <h3>Inside PMK MFI’s</h3>
            <h1>Field-Level Activities</h1>

            <div class="line"></div>

            <p class="intro">
                We work at the grassroots to empower communities
                and build a better tomorrow.
            </p>

            <div class="activity-card">

                <div class="activity orange">
                    <div class="number">01</div>
                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                    <div class="text">Providing Microfinance & Savings Services</div>
                </div>

                <div class="activity green">
                    <div class="number">02</div>
                    <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                    <div class="text">Supporting Livelihood Development</div>
                </div>

                <div class="activity blue">
                    <div class="number">03</div>
                    <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="text">Conducting Financial Literacy Training</div>
                </div>

                <div class="activity teal">
                    <div class="number">04</div>
                    <div class="icon"><i class="fa-solid fa-stethoscope"></i></div>
                    <div class="text">Promoting Health & Social Awareness</div>
                </div>

                <div class="activity yellow">
                    <div class="number">05</div>
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                    <div class="text">Empowering Women Through SHGs</div>
                </div>

                <div class="activity purple">
                    <div class="number">06</div>
                    <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                    <div class="text">Monitoring Progress & Measuring Impact</div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>