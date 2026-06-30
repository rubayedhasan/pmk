<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
            --primary: #0f5132;
            --primary-light: #edf8f2;
            --border: #e7ece9;
            --text: #1d2939;
            --muted: #667085;
        }

        .recognition {
            padding: 100px 0;
            background: #fafafa;
        }

        .container {
            width: min(1200px, 90%);
            margin: auto;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: auto auto 70px;
        }

        .section-tag {
            display: inline-block;
            padding: 8px 18px;
            background: #e8f7ef;
            color: var(--primary);
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .section-title {
            font-size: 48px;
            color: var(--text);
            margin-bottom: 18px;
            font-weight: 700;
        }

        .section-text {
            color: var(--muted);
            line-height: 1.8;
            font-size: 17px;
        }

        .award-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
        }

        .award-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 45px 35px;
            text-align: center;
            transition: .35s;
        }

        .award-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, .08);
        }

        .icon {
            width: 78px;
            height: 78px;
            margin: auto;
            border-radius: 50%;
            background: var(--primary-light);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .award-card h3 {
            font-size: 22px;
            margin-bottom: 16px;
            color: var(--text);
        }

        .award-card p {
            color: var(--muted);
            line-height: 1.8;
            font-size: 15px;
        }

        /* Mobile */

        @media(max-width:768px) {

            .section-title {
                font-size: 34px;
            }

            .recognition {
                padding: 70px 0;
            }

            .award-card {
                padding: 35px 25px;
            }

        }
    </style>
</head>

<body>
    <section class="recognition">
        <div class="container">

            <div class="section-header">
                <span class="section-tag">Recognition</span>

                <h2 class="section-title">
                    Awards & Certifications
                </h2>

                <p class="section-text">
                    Our commitment to transparency, financial inclusion, and responsible governance
                    is recognized by regulatory authorities and development partners.
                </p>
            </div>

            <div class="award-grid">

                <div class="award-card">
                    <div class="icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>

                    <h3>MRA Licensed MFI</h3>

                    <p>
                        Licensed by the Microcredit Regulatory Authority of Bangladesh,
                        ensuring trusted and compliant financial services.
                    </p>
                </div>

                <div class="award-card">
                    <div class="icon">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>

                    <h3>NGO Affairs Bureau</h3>

                    <p>
                        Officially registered with the NGO Affairs Bureau,
                        Government of Bangladesh.
                    </p>
                </div>

                <div class="award-card">
                    <div class="icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>

                    <h3>Development Partners</h3>

                    <p>
                        Collaborating with national and international organizations
                        to maximize community impact.
                    </p>
                </div>

                <div class="award-card">
                    <div class="icon">
                        <i class="fa-solid fa-seedling"></i>
                    </div>

                    <h3>Social Impact</h3>

                    <p>
                        Dedicated to sustainable development through measurable,
                        people-centered financial inclusion.
                    </p>
                </div>

            </div>

        </div>
    </section>
</body>

</html>