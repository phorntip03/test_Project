<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <title>คอร์สเรียน</title>
    <style>
        body {
            background-color: #ffffff;
            color: #2081e2;
            font-family: 'Arial', sans-serif;
            margin-top: 20px;
        }

        .navbar {
            background-color: #ffffff;
        }

        .nav-link {
            color: #030303 !important;
        }

        .dropdown-menu {
            background-color: #ffffff;
        }

        .dropdown-item {
            color: #000000 !important;
        }

        .col-md-3.text-end {
            text-align: right;
        }

        .elementor-carousel-image {
            width: 100%;
            height: 300px;
            background-size: cover;
            background-position: center;
        }
        .text-with-image {
      display: flex;
      align-items: center;
    }
    .text-with-image img {
      margin-right: 50px; /* ระยะห่างระหว่างรูปภาพและข้อความ */
    }
    .nav li {
      display: flex;
      align-items: center;
    }
    .nav li svg, .nav li .bi {
      margin-right: 5px; /* ระยะห่างระหว่างไอคอนและข้อความ */
    }
    .footer-center {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
</head>

<body>
  <container>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="img/p4.png" alt="RMUTI Korat" width="50" height="100">
                </a>
            </div>

            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">หน้าแรก</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="courseDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    คอร์สเรียน
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="courseDropdown">
                                    <li><a class="dropdown-item" href="#">คอร์สทั้งหมด</a></li>
                                    <li><a class="dropdown-item" href="#">คอร์สอบรม</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ebookDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    e-book
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="ebookDropdown">
                                    <li><a class="dropdown-item" href="#">e-book ทั้งหมด</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="guideDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    คู่มือการใช้งาน
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="guideDropdown">
                                    <li><a class="dropdown-item" href="#">ระบบซื้อคอร์ส</a></li>
                                    <li><a class="dropdown-item" href="#">ระบบเรียน</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ติดต่อเรา</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href='login.php'">Login</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='signup.php'">Sign-up</button>
            </div>
          </header>
        </container>
<class>
        <div class="elementor-carousel-image" style="background-image: url('img/p1.png');"></div>

        <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom">คอร์สนิยม</h2>
      
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              <div class="col">
                  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/p3.jpg'); background-size: cover; background-position: center;">
                      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">วิชาการเขียนโปรแกรม</h3>
                          <ul class="d-flex list-unstyled mt-auto">
                              <li class="me-auto">
                                  <img src="img/p3.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                              </li>
                              <li class="d-flex align-items-center me-3">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#geo-fill"></use>
                                  </svg>
                                  <small>Earth</small>
                              </li>
                              <li class="d-flex align-items-center">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#calendar3"></use>
                                  </svg>
                                  <small>3d</small>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
      
              <div class="col">
                  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/p5.jpg'); background-size: cover; background-position: center;">
                      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">วิชาธุระกิจใหม่</h3>
                          <ul class="d-flex list-unstyled mt-auto">
                              <li class="me-auto">
                                  <img src="img/p5.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                              </li>
                              <li class="d-flex align-items-center me-3">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#geo-fill"></use>
                                  </svg>
                                  <small>Pakistan</small>
                              </li>
                              <li class="d-flex align-items-center">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#calendar3"></use>
                                  </svg>
                                  <small>4d</small>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
      
              <div class="col">
                  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('img/p6.jpg'); background-size: cover; background-position: center;">
                      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                          <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">วิชาปัญญาประดิษฐ์</h3>
                          <ul class="d-flex list-unstyled mt-auto">
                              <li class="me-auto">
                                  <img src="img/p6.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                              </li>
                              <li class="d-flex align-items-center me-3">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#geo-fill"></use>
                                  </svg>
                                  <small>California</small>
                              </li>
                              <li class="d-flex align-items-center">
                                  <svg class="bi me-2" width="1em" height="1em">
                                      <use xlink:href="#calendar3"></use>
                                  </svg>
                                  <small>5d</small>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </class>
<Columns>
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">อัปสกิลยุคใหม่ไปกับเรา</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center   fs-2 mb-3">
            <i class="bi bi-book"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">แหล่งรวมคอร์ส</h3>
            <p>แหล่งรวมคอร์สเรียนฟรีที่ทุกคนสามารถเข้ามาเรียนได้</p>
            <a href="#" class="icon-link">
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3">
            <i class="bi bi-rocket-takeoff-fill"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">คอร์สทักษะอนาคต</h3>
            <p>คอร์สอบรมทักษะยุคใหม่ให้ทำงานเก่งขึ้นทั้งองค์กร ในรูปแบบเวิร์กช็อป และหลักสูตรออนไลน์ </p>
            <a href="#" class="icon-link">
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3">
            <i class="bi bi-person-check"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">สอนโดยผู้เชี่ยวชาญ</h3>
            <p>สอนโดยผู้เชี่ยวชาญของวงการ ช่วยแก้ปัญหาในโลกการทำงานของคุณ</p>
            <a href="#" class="icon-link">
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
        </div>
      </div>
    </Columns>

      <footter>
      <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-body-secondary text-with-image">
        <img src="img/p4.png" width="50" height="50" alt="University Logo">
        มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตสุรินทร์ Rajamangala University of Technology Isan SURIN Campus.
      </p>
    </div>

    <div class="col mb-3"></div>

    <div class="col mb-3">
      <h5>ติดต่อเรา</h5>
      <ul class="nav flex-column">
        <li><i class="bi bi-map"></i><a href="#" class="nav-link p-0 text-body-secondary">มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตสุรินทร์</a></li>
        <li><i class="bi bi-geo"></i><a href="#" class="nav-link p-0 text-body-secondary">145 ม.15 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมืองสุรินทร์ จ.สุรินทร์ 32000</a></li>
        <li><i class="bi bi-telephone"></i><a href="#" class="nav-link p-0 text-body-secondary">(+66)044-513 236 </a></li>
        <li><i class="bi bi-telephone"></i><a href="#" class="nav-link p-0 text-body-secondary">Fax : (+66)044-513 237</a></li>
        <li><i class="bi bi-envelope"></i><a href="#" class="nav-link p-0 text-body-secondary">E-mail :saraban_surin@rmuti.ac.th</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>ติดตามเรา</h5>
      <ul class="nav flex-column">
        <li><i class="bi bi-globe2"></i><a href="https://computer.surin.rmuti.ac.th/computer/index.php" class="nav-link p-0 text-body-secondary">Website</a></li>
        <li><i class="bi bi-facebook"></i><a href="https://www.facebook.com/computerTechnolgySurin" class="nav-link p-0 text-body-secondary">facebook</a></li>
      </ul>
    </div>
  </footer>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>
    <div class="col-md-4 footer-center">
      <span class="text-body-secondary">© 2024 Phorntip, Sakchai</span>
    </div>
    <div class="col-md-4"></div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
