  <!-- Modal -->
  <div class="modal fade shape" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" style="font-size: 16px;">Unleash Your Brand's Potential with Stunning Designs!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-unstyled text-left ">
                            <li class="pp"><i class="far fa-gem check-icon text-success"></i> Transforming ideas into visually captivating realities.</li>
                            <li class="pp"><i class="far fa-lightbulb check-icon text-warning"></i> Elevating your brand's identity with innovative designs tailored to your needs.</li>
                            <li class="pp"><i class="fas fa-paint-brush check-icon text-info"></i> Delivering striking logos and captivating marketing materials.</li>
                            <li class="pp"><i class="fas fa-users check-icon text-primary"></i> Dedicated team offering top-notch, creative solutions.</li>
                            <li class="pp"><i class="far fa-star check-icon text-danger"></i> Experience the exceptional power of design to bring your vision to life!</li>
                        </ul>
                <div class="form-group">
                    <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
                        <i class="fas fa-check-circle"></i> <span id="successText"></span>
                    </div>
                    <div id="errorMessages" class="alert alert-danger" role="alert" style="display: none;">
                        <i class="fas fa-exclamation-circle"></i> <span id="errorText"></span>
                    </div>
                    <label for="name">Name</label>
                    <input type="number" id="service_id" name="service_id" style="display: none;">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitOrder">Order Now</button>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
      <div class="footer-1 bg-gray-850 border-gray-800">
        <div class="row">
          <div class="col-lg-4 mb-30">
              <img  src="{{asset('assets')}}/home/image/3lama.png"  alt="al-nasr" style="width: 80% !important;">
          </div>
          <div class="col-lg-4 mb-30">
            <h6 class="text-lg mb-30 color-white wow animate__animated animate__fadeInUp">Categories</h6>
            <div class="row">
              <div class="col-6">
                <ul class="menu-footer">

                    @foreach ($category as $item )
                    <li><a class="color-gray-500" href="{{ route('showByCategory',$item->name ) }}"></a></li>
                  <li class="wow animate__animated animate__fadeInUp"><a class="color-gray-500" href="{{ route('showByCategory',$item->name ) }}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
              </div>
              <div class="col-6">
                <ul class="menu-footer">
                    @isset($subCategory)
                    @foreach ($subCategory as $item )
                    <li class="wow animate__animated animate__fadeInUp"><a class="color-gray-500" href="/s/{{ $item->name }}">{{ $item->name }}</a></li>
                    @endforeach
                    @endisset
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-30">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            @if(!session('subscribed'))
                <h4 class="text-lg mb-30 color-white wow animate__animated animate__fadeInUp">Newsletter</h4>
                <p class="text-base color-gray-500 wow animate__animated animate__fadeInUp">Sign up to be first to receive the latest stories inspiring us, case studies, and industry news.</p>
                <div class="form-newsletters mt-15 wow animate__animated animate__fadeInUp">
                    <form action="{{ route('subscribers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input name="name" class="input-name border-gray-500" type="text" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input name="email" class="input-email border-gray-500" type="email" placeholder="Email address">
                        </div>
                        <div class="form-group mt-20">
                            <button type="submit" class="btn btn-linear hover-up">
                                Subscribe <i class="fi-rr-arrow-small-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            @endif
        </div>

        </div>
        <div class="footer-bottom border-gray-800">
          <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
              <p class="text-base color-white wow animate__animated animate__fadeIn">© Developer By <a class="copyright" href="https://wa.me/201001995914" target="_blank">Mostafa Elbagory</a></p>
            </div>
            <div class="col-lg-7 text-center text-lg-end">
              <div class="box-socials">
                <div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a class="icon-socials icon-twitter color-gray-500" href="https://twitter.com">Twitter</a></div>
                <div class="d-inline-block mr-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s"><a class="icon-socials icon-linked color-gray-500" href="https://www.linkedin.com">LinkedIn</a></div>
                <div class="d-inline-block wow animate__animated animate__fadeIn" data-wow-delay=".4s"><a class="icon-socials icon-insta color-gray-500" href="https://www.instagram.com">Instagram</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="progressCounter progressScroll hover-up hover-neon-2">
    <div class="progressScroll-border">
      <div class="progressScroll-circle"><span class="progressScroll-text"><i class="fi-rr-arrow-small-up"></i></span></div>
    </div>
  </div>

  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/modernizr-3.6.0.min.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/bootstrap.bundle.min.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/waypoints.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/wow.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/text-type.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/swiper-bundle.min.js"></script>
  <script src="https://wp.alithemes.com/html/genz/demos/assets/js/vendors/jquery.progressScroll.min.js"></script>
  <script src="{{asset('assets')}}/main.js?v=2.0"></script>

 <script>
     setTimeout(function () {
        $("#preloader-active").fadeOut("slow");
    }, 1000);
        function changeValueAndOpenModal(serviceId) {
    $('#service_id').val(serviceId); // تغيير قيمة الحقل service_id
    $('#staticBackdrop').modal('show'); // فتح نافذة العرض المنبثقة
    console.log(serviceId);
   }

$(document).ready(function() {

        // عند النقر على زر "Order Now" داخل النموذج المودال
        $('#submitOrder').on('click', function() {
            var serviceId = $('#service_id').val(); // تغيير قيمة الحقل service_id
            var name = $('#name').val();
            var email = $('#email').val();
            var number = $('#phone').val();
            var country = $('#country').val();

            // إرسال البيانات باستخدام AJAX
            $.ajax({
                method: 'POST',
                url: '{{ route('services.store') }}', // استبدل services بالاسم الصحيح لكنترولر الخاص بك
                data: {
                    service_id: serviceId,
                    name: name,
                    email: email,
                    number: number,
                    country: country,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
         // عرض رسالة نجاح الطلب
    $('#successText').text(response.message);
    $('#successMessage').show();
    // إخفاء الرسائل الخطأ إذا كانت موجودة
    $('#errorMessages').hide();
    },
    error: function(xhr) {
        var errors = xhr.responseJSON;
    // عرض رسائل الخطأ داخل Modal
    var errorHtml = '<ul>';
    $.each(errors.errors, function(key, value) {
        errorHtml += '<li>' + value + '</li>';
    });
    errorHtml += '</ul>';

    $('#errorText').html(errorHtml);
    $('#errorMessages').show();
    // إخفاء رسالة النجاح إذا كانت موجودة
    $('#successMessage').hide();

    }
            });
        });
    });
  </script>
</body>
</html>
