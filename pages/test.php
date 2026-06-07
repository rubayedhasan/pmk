<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* --- Product Info Section --- */
        .product-info-container {
            margin-top: 20px;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        /* Heading: "Product Info" */
        .product-info-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #034851;
            /* Dark teal accent */
            margin: 0 0 16px 0;
        }

        /* Base style for both upper and lower data blocks */
        .info-block {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 12px 0;
        }

        /* Upper Section (Product Code, Loan Amount, Interest) */
        .info-block.upper {
            padding-top: 4px;
        }

        /* Lower Section (Repayment Cycle, Installments) */
        .info-block.lower {
            padding-bottom: 4px;
        }

        /* The divider line seen between the two sections */
        .info-divider {
            border: none;
            border-top: 1.5px solid #0a6b5c;
            /* Emerald green accent rule */
            margin: 4px 0;
        }

        /* --- Icons Alignment --- */
        .info-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 24px;
            height: 24px;
            color: #0a6b5c;
            /* Icon matching the primary green tone */
            flex-shrink: 0;
        }

        /* Specific styling if you are using an SVG or Font Icon for the calendar */
        .info-icon svg,
        .info-icon i {
            width: 100%;
            height: 100%;
        }

        /* --- Text & Data Rows Stack --- */
        .info-data-stack {
            display: flex;
            flex-direction: column;
            gap: 6px;
            /* Spacing between text rows */
        }

        /* Text row format: "Label: Value" */
        .info-row {
            font-size: 0.95rem;
            color: #2d3748;
            /* Off-black/charcoal readability font color */
            line-height: 1.4;
        }

        /* Emphasizing the labels if wrapped in <strong> or <span class="label"> */
        .info-row .label {
            font-weight: 600;
            color: #1a202c;
        }
    </style>
</head>

<body>
    <div class="product-info-container">
        <h2 class="product-info-title">Product Info</h2>

        <!-- Upper Section -->
        <div class="info-block upper">
            <!-- Taka Currency Icon Sign Placeholder -->
            <div class="info-icon">৳</div>
            <div class="info-data-stack">
                <div class="info-row"><span class="label">Product Code:</span> 128</div>
                <div class="info-row"><span class="label">Loan Amount:</span> ৳1K-৳1Lac</div>
                <div class="info-row"><span class="label">Interest Rate:</span> 24%</div>
            </div>
        </div>

        <hr class="info-divider">

        <!-- Lower Section -->
        <div class="info-block lower">
            <!-- Calendar Icon Placeholder -->
            <div class="info-icon">📅</div>
            <div class="info-data-stack">
                <div class="info-row"><span class="label">Repayment Cycle:</span> Weekly & Monthly</div>
                <div class="info-row"><span class="label">Loan Installments:</span> 12/18/24/36/46</div>
            </div>
        </div>
    </div>
</body>

</html>