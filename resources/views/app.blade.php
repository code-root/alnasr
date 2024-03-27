<!DOCTYPE html>
<html>
<head>
    <title>عنوان الصفحة</title>
    <!-- أي ميتا تاجز أو أسكربتس أو ستايلز يجب وضعها هنا -->
</head>
<body>
    @include('partials.header') <!-- إضافة الهيدر -->

    @include('partials.navbar') <!-- إضافة النافبار -->

    <div class="container">
        @yield('content') <!-- جزء الـ body -->
    </div>

    @include('partials.footer') <!-- إضافة الفوتر -->
</body>
</html>
