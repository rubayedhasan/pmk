<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notic</title>

    <style>
        /* Modal background */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background: rgba(0, 0, 0, 0.5);

            display: flex;
            align-items: center;
            justify-content: center;

            z-index: 9999;

            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        /* Show modal */
        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        /* Modal box */
        .modal-content {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 12px;
            max-width: 400px;
            width: 90%;
            text-align: center;

            /* 👇 nice shadow */
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);

            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }

        .modal.show .modal-content {
            transform: translateY(0);
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 12px;
            right: 16px;

            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Text styling */
        .modal-content h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .modal-content p {
            font-size: 0.95rem;
            color: #555;
        }
    </style>
</head>

<body>
    <div id="constructionModal" class="modal">
        <div class="modal-content">
            <button class="close-btn" id="closeModal">&times;</button>

            <h3>🚧 Under Construction</h3>
            <p>
                This website is currently in development. Some features may not work properly yet.
                Thank you for your patience.
            </p>
        </div>
    </div>

    <script>
        const modal = document.getElementById("constructionModal");
        const closeBtn = document.getElementById("closeModal");

        // Show modal on page load
        window.addEventListener("load", () => {
            modal.classList.add("show");

            // Auto close after 5 seconds
            setTimeout(() => {
                modal.classList.remove("show");
            }, 5000);
        });

        // Close button click
        closeBtn.addEventListener("click", () => {
            modal.classList.remove("show");
        });

        // Close when clicking outside the modal content
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.remove("show");
            }
        });
    </script>
</body>

</html>