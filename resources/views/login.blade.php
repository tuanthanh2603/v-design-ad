<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập - V Design</title>
    <link rel="icon" href="{{ asset('static/logo-sm.png') }}" type="image/x-icon">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.7">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <style>
        @media screen and (max-width: 768px) {
            .title-center {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-2">
                                <div class="card-header pb-0  bg-transparent title-center">
                                    <img src="{{ asset('static/logo-sm.png') }}" alt="" width="120px">

                                </div>
                                <div class="card-header pb-0 bg-transparent title-center">
                                    <h3 class="font-weight-bolder text-info text-gradient">Đăng nhập</h3>

                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <label>Tên đăng nhập</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Tên đăng nhập"
                                                aria-label="Email" aria-describedby="email-addon" required>
                                        </div>
                                        <label>Mật khẩu</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Mật khẩu"
                                                aria-label="Password" aria-describedby="password-addon" required>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Đăng
                                                nhập</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('static/curved6.jpg') }}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="{{ url('/') }}" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Trang chủ V Design
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Liên hệ hỗ trợ
                    </a>
                   
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> V Design
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
