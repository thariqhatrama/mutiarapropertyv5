<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Load Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <style>
        /* General reset for the floating button area */
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevents horizontal scrolling */
        }

        /* Styling for the floating WhatsApp button */
        a.floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            /* WhatsApp green color */
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            /* Icon size */
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            /* High z-index to ensure visibility */
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, transform 0.3s;
            /* Smooth transitions for hover effects */
        }

        /* Hover effect */
        a.floating:hover {
            background-color: #128C7E;
            /* Darker shade for hover effect */
            transform: scale(1.1);
            /* Slightly enlarge the button on hover */
        }

        /* Responsive adjustments for tablets */
        @media (max-width: 768px) {
            a.floating {
                width: 50px;
                /* Smaller button size on tablets */
                height: 50px;
                font-size: 25px;
                /* Adjusted icon size */
            }
        }

        /* Responsive adjustments for mobile phones */
        @media (max-width: 480px) {
            a.floating {
                width: 40px;
                /* Smaller button size for mobile phones */
                height: 40px;
                font-size: 22px;
                /* Adjusted icon size */
                bottom: 15px;
                /* Adjusted position */
                right: 15px;
            }
        }
    </style>
</head>

<body>
    <a href="https://wa.me/6281213334441?text=Halo%20Saya%20tertarik%20dengan%20Mutiara%20Residence,%20saya%20ingin%20tanya%20lebih%20lanjut!" class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon"></i>
    </a>
</body>

</html>