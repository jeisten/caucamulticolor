<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.multicolor.gov.co</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('img/logo1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        body { display: flex; flex-direction: column; min-height: 100vh; }
        main { flex: 1 0 auto; }
        footer { flex-shrink: 0; }
        .swiper-container { max-width: 100%; max-height: 400px; overflow: hidden; }
        .swiper-slide img { width: 100%; height: 100%; object-fit: cover; }
        .content-container { padding-left: 100px; padding-right: 100px; }
        @media (max-width: 768px) {
            .swiper-container { max-height: 200px; }
            .content-container { padding-left: 15px; padding-right: 15px; }
        }
        .custom-text { color: #757575; text-align: center; margin-bottom: 10px; }
        .custom-rectangle {
            background-color: #FFC107;
            color: rgb(13, 79, 137);
            border-radius: 5px;
            margin-bottom: 30px;
            padding: 1px 1px 1px 5px;
            text-align: center;
            font-size: 34px;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    @include('layouts.header')

    <!-- Aquí va el contenido principal -->
    <main class="container mx-auto py-3 content-container">
      @include('siti.bodysiti')
      
    </main>

   @include('layouts.footer')

    <!-- Scripts para Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
        });

        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
