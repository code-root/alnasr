
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/home/image/logo-27-26.png">
    <link href="{{asset('assets')}}/home/css/style.css?v=2.0" rel="stylesheet">
    <title>al-nasr</title>
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">

    <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
    .shape {
      top: 13%;
    }

  /* شاشات صغيرة */
  @media only screen and (max-width: 480px) {
    .shape {
        top: 0% !important;
      }
  }

  /* شاشات متوسطة */
  @media only screen and (min-width: 481px) and (max-width: 767px) {
    .shape {
        top: 0% !important;
      }
      }

      .logo-night {
    width: 100%;
    height: 84px; /* افتراضي لحالة الديسكتوب */
}

@media screen and (max-width: 767px) {
    /* هذا سينفذ فقط عندما تكون الشاشة أصغر من 767 بكسل (حالة الجوال) */
    .logo-night {
        height: 67px;
    }
}


@media only screen and (max-width: 600px) {
  .header-right {
    display: none; /* تخفي شريط العنوان */
  }
  .video-container {
    display: none !important;

  }
  .header .main-header .header-logo {
    position: relative;
    left: 12%;
    width: 16%;
}

.ourPro {
    font-size: 32px;
    margin-top: 5rem;
    margin-left: 9%;
}

.subCategory {
  width: 50% !important;
  font-size: 16px  !important;
}
.card-style-2 {
    padding: 17px;
    border-radius: 58px;
    margin-bottom: 20px;
}

.ppv {
  margin-left: 13rem !important; 
}
}

.subCategory {
  width: 14%;text-align: center;
}

.ourPro {
  font-size: 26px;
    margin-top: 5rem;
    margin-left: 19%;
      }
</style>
