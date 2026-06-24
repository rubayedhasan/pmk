<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Founder Tribute</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --pmk-green: #00946a;
            --pmk-green-dark: #176f4e;
            --pmk-green-dark-sublet: #1e2d26;
            --pmk-green-light: #e6f4ef;

            --pmk-blue-dark: #083d56;

            --pmk-dark: #1f2933;
            --pmk-dark-sublet: #1d2a24;
            --pmk-white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Google Sans",
                "Product Sans",
                system-ui,
                sans-serif;
            background: #f6f9f8;
            color: var(--pmk-dark);
        }

        .founder-section {
            padding: 80px 20px;
        }

        .founder-card {
            max-width: 1300px;
            margin: auto;

            display: grid;
            grid-template-columns: 420px 1fr;
            gap: 70px;

            background: var(--pmk-white);

            border-radius: 32px;
            overflow: hidden;

            padding: 60px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .08);

            position: relative;
        }

        .founder-card::before {
            content: "";
            position: absolute;
            inset: 0;

            background:
                radial-gradient(circle at top left,
                    rgba(0, 148, 106, .10),
                    transparent 35%);

            pointer-events: none;
        }

        .founder-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-ring {
            width: 340px;
            height: 340px;
            padding: 8px;

            border-radius: 50%;

            background:
                linear-gradient(135deg,
                    var(--pmk-green),
                    var(--pmk-blue-dark));

            box-shadow:
                0 20px 40px rgba(0, 148, 106, .20);
        }

        .image-ring img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 8px solid white;
        }

        .section-tag {
            display: inline-flex;
            align-items: center;

            padding: 10px 18px;

            border-radius: 100px;

            background: var(--pmk-green-light);

            color: var(--pmk-green-dark);

            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 13px;
        }

        .founder-content h1 {
            margin-top: 22px;

            font-size: 58px;
            line-height: 1.05;

            color: var(--pmk-blue-dark);

            font-weight: 700;
        }

        .designation {
            margin-top: 20px;

            color: var(--pmk-green-dark);

            font-size: 20px;
            font-weight: 500;
        }

        .divider {
            width: 120px;
            height: 4px;

            background: var(--pmk-green);

            border-radius: 50px;

            margin: 30px 0;
        }

        blockquote {
            font-size: 20px;
            line-height: 1.9;

            color: var(--pmk-dark-sublet);

            padding-left: 24px;

            border-left: 4px solid var(--pmk-green);
        }

        .stats {
            margin-top: 50px;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .stat {
            background: var(--pmk-green-light);

            padding: 25px;

            border-radius: 20px;
        }

        .stat h3 {
            color: var(--pmk-blue-dark);
            margin-bottom: 10px;
        }

        .stat p {
            color: var(--pmk-dark);
            line-height: 1.7;
        }

        @media(max-width:992px) {

            .founder-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            blockquote {
                border-left: none;
                border-top: 4px solid var(--pmk-green);

                padding-left: 0;
                padding-top: 20px;
            }

            .divider {
                margin: 25px auto;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .founder-content h1 {
                font-size: 42px;
            }

            .image-ring {
                width: 280px;
                height: 280px;
            }
        }
    </style>
</head>

<body>

    <section class="founder-section">

        <div class="founder-card">

            <div class="founder-image">
                <div class="image-ring">
                    <img
                        src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&q=80"
                        alt="Founder" />
                </div>
            </div>

            <div class="founder-content">

                <span class="section-tag">
                    Founder
                </span>

                <h1>
                    Late. Dewan Abdul Mannan
                </h1>

                <div class="designation">
                    Founder • Palli Mongal Karmosuchi (PMK)
                </div>

                <div class="divider"></div>

                <blockquote>
                    Though Late. Dewan Abdul Mannan is no longer with us,
                    his vision and values remain our guiding light.
                    He dreamed of a compassionate and empowered society.
                    PMK continues serving humanity with integrity,
                    unity and hope for generations to come.
                </blockquote>

                <div class="stats">

                    <div class="stat">
                        <h3>Integrity</h3>
                        <p>Leading with honesty and responsibility.</p>
                    </div>

                    <div class="stat">
                        <h3>Unity</h3>
                        <p>Building stronger communities together.</p>
                    </div>

                    <div class="stat">
                        <h3>Hope</h3>
                        <p>Creating opportunities for future generations.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

</body>

</html>