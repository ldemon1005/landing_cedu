<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CEDU</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('local/storage/app/client/css/reset.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('local/storage/app/client/css/style.css')}}">
</head>
<body>
<div id="wrapper">
    <div id="header">
        <!--no content-->
    </div>

    <div id="main">
        <!--
        -------------Section 1---------->
        <section id="sec1">
            <div>
                <div class="logo"></div>
            </div>
            <div class="container">
                <h1>học ngu đã có cedu</h1>
                <h4 class="uppercase line-decor">cedu</h4>
                <p>
                    Là nơi cung cấp các khóa học đa dạng,
                    <br>
                    chất lượng đến từ hệ thống giảng viên, doanh nhân, cá nhân xuất sắc nhất cả nước
                    <br>
                    với sứ mệnh làm cầu nối lan tỏa tri thức đến mọi người.
                </p>
            </div>
        </section>


        <!--
        -------------Section 2---------->
        <section id="sec2">
            <div class="container pad">
                <h4 class="head line-left main-blue mb-5">mục tiêu hôm nay của bạn là gì?</h4>
                <div class="position-relative">
                    <div class="blue-background left"></div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h4 class="mb-4"><span class="main-blue">Hãy cùng CEDU</span> <br>
                                <span>chinh phục ngay!</span></h4>
                            <div style="line-height: 2">
                                CEDU cam kết chất lượng của từng khóa học, đảm bảo cho các học viên tiếp thu kiến thức
                                hiệu quả thông qua các hình thức giảng dạy sinh động, hấp dẫn theo định hướng nền công
                                nghệ 4.0. Học viên sẽ không còn cảm giác ngao ngán việc học mà giờ đây, tại CEDU học
                                chính là niềm vui!
                                Sau cùng, CEDU luôn hướng tới mong muốn được trở thành người bạn đồng hành tin cậy đối
                                với từng học viên trên chặng đường chinh phục tri thức!
                            </div>
                        </div>
                        <div class="col-12 col-md-5 offset-md-1 image-container">
                            <div class="image image-square" style="background-image: url({{asset('local/storage/app/client/images/image1.png')}})"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pad">
                <h4 class="head line-right main-blue mb-5">tại sao bạn chọn cedu?</h4>
                <div class="position-relative">
                    <div class="blue-background right middle"></div>

                    <div class="row">
                        <div class="col-12 col-md-5 image-container">
                            <div class="image image-square" style="background-image: url({{asset('local/storage/app/client/images/image2.png')}})"></div>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="reason">
                                <li> Các khóa học đa dạng, chất lượng phù hợp với mọi đối tượng</li>
                                <li> Hệ thống giảng viên, doanh nhân, cá nhân xuất sắc, giàu kinh nghiệm</li>
                                <li> Chi phí hợp lí, thanh toán nhanh gọn, tiện lợi</li>
                                <li> Phương pháp giảng dạy định hướng công nghệ 4.0</li>
                                <li> Cam kết chất lượng từng khóa học</li>
                                <li> Luôn có đội ngũ hỗ trợ 24/7 khi bạn gặp khó khăn
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--
        -------------Section 3---------->
        <section id="sec3">
            <div class="position-relative pt-5">
                <div class="background"></div>
                <div class="container">
                    <div class="row mt-4 mb-4">
                        <div class="col-9">
                            <h4 class="head">CHÀO MỪNG SỰ KIỆN RA MẮT CEDU!</h4>
                        </div>
                        <div class="col-3">
                            [ 0 9 : 0 9 - 2 1 / 1 0 / 2 0 1 8 ]
                        </div>
                    </div>
                    <div class="div-decor">
                        <div>
                            <h4>Hãy tham dự để có cơ hội<br>
                                trải nghiệm và<br>
                                nhận được phần quà giá trị từ CEDU</h4>
                        </div>
                        <div class="text-24 text-right">
                            Nhanh tay đăng ký<br>
                            để trở thành một trong những người<br>
                            may mắn nhất!
                        </div>
                    </div>

                    <div class="position-relative">
                        <h4 class="head">BẠN MUỐN ĐƯỢC TƯ VẤN!</h4>
                        <div>Hãy đăng ký để được tư vấn ngay:</div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="form-container">
                    <div class="form-body">
                        <form id="form-1" method="post" action="{{route('action_info')}}">
                            {{csrf_field()}}
                            <div class="form-input">
                                <input type="text" name="name" placeholder="Họ và tên">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="phone" placeholder="Số điện thoại">
                            </div>
                            <button onclick="submit_form_1()" type="button" class="mt-5">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>

</div>

<div id="footer"></div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('local/storage/app/client/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('local/storage/app/client/js/custom.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.learn-more').click(function () {
            $('html,body').animate({scrollTop: $('#overview').offset().top});
        });
    });
</script>
</body>
</html>