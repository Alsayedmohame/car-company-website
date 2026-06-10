<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أوتو درايف | لتجارة السيارات الفاخرة</title>
    <!-- استدعاء أيقونات FontAwesome لمظهر احترافي -->
    <link rel="stylesheet" href="https://cloudflare.com">
    <style>
        :root {
            --main-color: #ff3333;
            --dark-bg: #111111;
            --card-bg: #1a1a1a;
            --text-light: #ffffff;
            --text-muted: #aaaaaa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0b0b0b;
            color: #f5f5f5;
        }

        /* الهيدر وقائمة التنقل */
        header {
            background-color: var(--dark-bg);
            border-bottom: 2px solid #222;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--main-color);
            font-size: 2rem;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--main-color);
        }

        /* القسم الترحيبي الكبير (Hero Section) */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(11, 11, 11, 1)), 
                        url('https://unsplash.com') no-repeat center center/cover;
            text-align: center;
            padding: 100px 20px;
            border-bottom: 3px solid var(--main-color);
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 15px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
        }

        .hero h2 span {
            color: var(--main-color);
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto 30px auto;
            line-height: 1.6;
        }

        .btn-main {
            background-color: var(--main-color);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 51, 51, 0.4);
        }

        .btn-main:hover {
            background-color: #cc0000;
            transform: scale(1.05);
        }

        /* قسم المعرض (Grid Section) */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .fleet-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.2rem;
            position: relative;
            font-weight: bold;
        }

        .fleet-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--main-color);
            margin: 15px auto 0 auto;
            border-radius: 2px;
        }

        .cars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 30px;
        }

        .car-card {
            background: var(--card-bg);
            border-radius: 12px;
            border: 1px solid #252525;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .car-card:hover {
            transform: translateY(-10px);
            border-color: var(--main-color);
            box-shadow: 0 15px 30px rgba(255, 51, 51, 0.15);
        }

        .car-img-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .car-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .car-card:hover img {
            transform: scale(1.1);
        }

        .car-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--main-color);
            color: white;
            padding: 5px 15px;
            font-size: 0.85rem;
            font-weight: bold;
            border-radius: 20px;
        }

        .car-info {
            padding: 25px;
        }

        .car-info h3 {
            margin: 0 0 12px 0;
            font-size: 1.5rem;
            color: var(--text-light);
        }

        .car-info p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 20px;
            height: 45px;
            overflow: hidden;
        }

        .car-specs {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #282828;
            border-bottom: 1px solid #282828;
            padding: 12px 0;
            margin-bottom: 20px;
            font-size: 0.85rem;
            color: #ccc;
        }

        .car-specs span i {
            color: var(--main-color);
            margin-left: 5px;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            color: var(--main-color);
            font-weight: bold;
            font-size: 1.4rem;
        }

        .btn-view {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: color 0.2s;
        }

        .btn-view:hover {
            color: var(--main-color);
        }

        /* الفوتر */
        footer {
            background-color: var(--dark-bg);
            border-top: 2px solid #222;
            color: var(--text-muted);
            text-align: center;
            padding: 25px;
            margin-top: 80px;
            font-size: 0.95rem;
        }

        footer span {
            color: var(--main-color);
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <i class="fa-solid fa-car-burst"></i>
            <h1>Auto<span>Drive</span></h1>
        </div>
        <div>
            <i class="fa-solid fa-phone" style="color: var(--main-color)"></i> 19xxx
        </div>
    </header>

    <section class="hero">
        <h2>اكتشف متعة القيادة مع <span>AutoDrive</span></h2>
        <p>نحن نوفر لك باقة حصريّة من أفخم خيارات السيارات الرياضية والكهربائية والعائلية في العالم بأعلى معايير الأمان المعتمدة.</p>
        <a href="#fleet" class="btn-main">استعرض الأسطول</a>
    </section>

    <div class="container" id="fleet">
        <h2 class="fleet-title">أحدث السيارات المتوفرة بصالات العرض</h2>
        
        <div class="cars-grid">
            <!-- السيارة الأولى: بورش -->
            <div class="car-card">
                <div class="car-img-wrapper">
                    <img src="https://unsplash.com" alt="Porsche 911">
                    <div class="car-tag">جديد حصري</div>
                </div>
                <div class="car-info">
                    <h3>بورش 911 تيربو S</h3>
                    <p>أيقونة رياضية فريدة تجمع القوة الخارقة بالتصميم الانسيابي المذهل.</p>
                    <div class="car-specs">
                        <span><i class="fa-solid fa-gauge-high"></i> 330 كم/س</span>
                        <span><i class="fa-solid fa-bolt"></i> 650 حصان</span>
                        <span><i class="fa-solid fa-gears"></i> أوتوماتيك</span>
                    </div>
                    <div class="card-footer">
                        <span class="price">$216,000</span>
                        <a href="#" class="btn-view">التفاصيل <i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>

            <!-- السيارة الثانية: مرسيدس -->
            <div class="car-card">
                <div class="car-img-wrapper">
                    <img src="https://unsplash.com" alt="Mercedes AMG">
                    <div class="car-tag">الأكثر مبيعاً</div>
                </div>
                <div class="car-info">
                    <h3>مرسيدس AMG GT</h3>
                    <p>فخامة مطلقة وأداء عالي على الطريق السريع بتكنولوجيا ألمانية رائدة.</p>
                    <div class="car-specs">
                        <span><i class="fa-solid fa-gauge-high"></i> 310 كم/س</span>
                        <span><i class="fa-solid fa-bolt"></i> 530 حصان</span>
                        <span><i class="fa-solid fa-gears"></i> أوتوماتيك</span>
                    </div>
                    <div class="card-footer">
                        <span class="price">$118,000</span>
                        <a href="#" class="btn-view">التفاصيل <i class="fa-solid fa-arrow-left"></i></a>
                    </div>
                </div>
            </div>

            <!-- السيارة الثالثة: أودي -->
            <div class="car-card">
                <div class="car-img-wrapper">
                    <img src="https://unsplash.com" alt="Audi R8">
                    <div class="car-tag">طلب خاص</div>
                </div>
