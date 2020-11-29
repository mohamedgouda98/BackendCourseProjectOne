<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.blade.php">الفوزان للمحاماه</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="register.blade.php">انشاء حساب</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.blade.php">تسجيل الخروج</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.blade.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                لوحة التحكم
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a id="website" class="nav-link collapsed" href="#" data-section=".edit-website" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                تعديل الموقع الالكترونى
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav website-links">
                                    <a class="nav-link" href="#!" data-content=".slider-section">السلايدر</a>
                                    <a class="nav-link" href="#!" data-content=".about-section">من نحن</a>
                                    <a class="nav-link" href="#!" data-content=".features-section">مميزاتنا</a>
                                    <a class="nav-link" href="#!" data-content=".services-section">خدماتنا</a>
                                    <a class="nav-link" href="#!" data-content=".contact-section">تواصل معنا</a>
                                </nav>
                            </div>
                            <a id="blog" class="nav-link collapsed" href="#" data-section=".edit-blog" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                المقالات
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav blog-links">
                                    <a class="nav-link" href="#!" data-content=".add-blog">اضافة مقال</a>
                                    <a class="nav-link" href="#!" data-content=".all-blogs">عدد المقالات</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4 mt-3">
                            <li class="breadcrumb-item active">لوحة التحكم</li>
                        </ol>
                        <!-- Start Dashboard Cards -->
                        <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Dashboard Cards -->

                        <div class="row">
                            <div class="col-12">

                                <!-- Start Dashboard Main Content -->
                                <div class="dash-main-content">

                                    <!-- Start Edit Website -->
                                    <div class="edit-website">

                                        <!-- Start Edit Slider Section
                                        ------------------------------>
                                        <div class="slider-section">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    السلايدر
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Form
                                                    ----------------->
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">عنوان السلايدر</label>
                                                                    <!-- Slider Title Input
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>اضافة صورة</label>

                                                                    <!-- Upload Slider Image Input
                                                                    -------------------------->
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">العنوان الفرعي</label>

                                                            <!-- Slider Subtitle
                                                            -------------------------->
                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="10" rows="5"></textarea>
                                                        </div>

                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    --------------->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Slider Section
                                        ----------------------------->

                                        <!-- Start Edit About Section
                                        ------------------------------>
                                        <div class="about-section">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    من نحن
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Form
                                                    ----------------->
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">عنوان القسم</label>
                                                                    <!-- About Title Input
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>اضافة صورة</label>

                                                                    <!-- Upload About Image Input
                                                                    -------------------------->
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">اضافة محتوى للقسم</label>

                                                            <!-- About Brief
                                                            -------------------------->
                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="5"></textarea>
                                                        </div>

                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    --------------->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit About Section
                                        ----------------------------->

                                        <!-- Start Edit Features Section
                                        ----------------------------->
                                        <div class="features-section">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    مميزاتنا
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Form
                                                    --------------->
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">اضاقة عنوان</label>
                                                            <!-- Features Title
                                                            -------------------------->
                                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">محتوى القسم</label>
                                                            <!-- Features Content
                                                            -------------------------->
                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="10"></textarea>
                                                        </div>
                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    ------------->
                                                    <!-- Start Services Item preview -->
                                                    <div class="row">
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                    </div>
                                                    <!-- Start Dervices Item preview -->

                                                    <!-- Modal -->
                                                    <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenteredLabel">تعدل</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <!-- Start Form
                                                                --------------->
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput">اضاقة عنوان</label>
                                                                        <!-- Features Title
                                                                        -------------------------->
                                                                        <input type="text" class="form-control" id="formGroupExampleInput">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="formGroupExampleInput2">محتوى القسم</label>
                                                                        <!-- Features Content
                                                                        -------------------------->
                                                                        <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                    <!-- button Submit Form
                                                                    -------------------------->
                                                                    <input type="submit" class="btn btn-primary" value="اضافة">
                                                                </form>
                                                                <!-- End Form
                                                                ------------->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Features Section
                                        ----------------------------->

                                        <!-- Start Edit Services Section
                                        ----------------------------->
                                        <div class="services-section">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    خدماتنا
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Form
                                                    --------------->
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">عنوان الخدمة</label>
                                                            <!-- Services Title
                                                            -------------------------->
                                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">محتوى الخدمة</label>
                                                            <!-- Services Content
                                                            -------------------------->
                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="10"></textarea>
                                                        </div>
                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    --------------->

                                                    <!-- Start Services Item preview -->
                                                    <div class="row">
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered2">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered2">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                        <!-- Start Item Services -->
                                                        <div class="col-12 col-md-4">
                                                            <div class="card mt-5">
                                                                <div class="card-body">
                                                                    <!-- Item Services Title -->
                                                                    <h4 class="card-title">Card title</h4>

                                                                    <!-- Item Services Content -->
                                                                    <p class="card-text">
                                                                        Some quick example text to build on the card title
                                                                        and make up the bulk of the card's content.
                                                                    </p>

                                                                    <!-- Item Services Button Control -->
                                                                    <a href="#!" class="card-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered2">تعديل</a>
                                                                    <a href="#!" class="card-link btn btn-danger">حذف</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item Services -->
                                                    </div>
                                                    <!-- Start Dervices Item preview -->

                                                    <!-- Modal -->
                                                    <div class="modal" id="exampleModalCentered2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenteredLabel">تعدل</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Start Form
                                                                    --------------->
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput">عنوان الخدمة</label>
                                                                            <!-- Services Title
                                                                            -------------------------->
                                                                            <input type="text" class="form-control" id="formGroupExampleInput">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput2">محتوى الخدمة</label>
                                                                            <!-- Services Content
                                                                            -------------------------->
                                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="10"></textarea>
                                                                        </div>
                                                                        <!-- button Submit Form
                                                                        -------------------------->
                                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                                    </form>
                                                                    <!-- End Form
                                                                    --------------->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Services Section
                                        ----------------------------->

                                        <!-- Start Edit Contact Us Section
                                        ---------------------------------->
                                        <div class="contact-section">

                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    معلومات التواصل
                                                </div>
                                                <div class="card-body">

                                                    <!-- Start Form
                                                    --------------->
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">عنوان الفرع الاول</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">عنوان الفرع الثانى</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">البريد الالكترونى</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">رقم الهاتف</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">ايام العمل</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">اوقات العمل</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">رابط الفيس فوك</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">رابط تويتر</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">رابط الانستجرام</label>
                                                                    <!-- Contact Title
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    --------------->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Contact Us Section
                                        ---------------------------------->

                                    </div>
                                    <!-- End Edit Website -->

                                    <!-- Start Add Blog -->
                                    <div class="edit-blog">

                                        <!-- Start Add Blog Section -->
                                        <div class="add-blog">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-chart-area ml-1"></i>
                                                    اضافة مقال
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Form
                                                    ----------------->
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formGroupExampleInput">عنوان المقال</label>
                                                                    <!-- Blog Title Input
                                                                    -------------------------->
                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group">
                                                                    <label>اضافة صورة للمقال</label>

                                                                    <!-- Upload Blog Image Input
                                                                    -------------------------->
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="customFile">
                                                                        <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput2">محتوى المقال</label>

                                                            <!-- blog Content
                                                            -------------------------->
                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="5"></textarea>
                                                        </div>

                                                        <!-- button Submit Form
                                                        -------------------------->
                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                    </form>
                                                    <!-- End Form
                                                    --------------->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Add Blog Section -->

                                        <!-- Start All Blogs Section -->
                                        <div class="all-blogs">
                                            <div class="card mb-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table mr-1"></i>
                                                    عدد المقالات
                                                </div>
                                                <div class="card-body">
                                                    <!-- Start Table Blogs -->
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                            <thead>
                                                                <!-- Start Header For Table -->
                                                                <tr>
                                                                    <th>رقم المقال</th>
                                                                    <th>العنوان</th>
                                                                    <th>نبذه</th>
                                                                    <th>تعديل</th>
                                                                    <th>حذف</th>
                                                                </tr>
                                                                <!-- End Header For Table -->
                                                            </thead>
                                                            <tbody>
                                                                <!-- Start the row For Table -->
                                                                <tr>
                                                                    <!-- Number for Blog -->
                                                                    <td>#1</td>
                                                                    <!-- Title for Blog -->
                                                                    <td>العنوان الرئيسى للمقال</td>
                                                                    <!-- Brife for Blog -->
                                                                    <td>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،</td>

                                                                    <!-- Edit and Delete Buttons -->
                                                                    <td>
                                                                        <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered3">تعديل</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#!" class="btn btn-danger">حذف</a>
                                                                    </td>
                                                                </tr>
                                                                <!-- End the row For Table -->
                                                                <tr>
                                                                    <td>#2</td>
                                                                    <td>العنوان الرئيسى للمقال</td>
                                                                    <td>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،</td>
                                                                    <td>
                                                                        <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered3">تعديل</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#!" class="btn btn-danger">حذف</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#3</td>
                                                                    <td>العنوان الرئيسى للمقال</td>
                                                                    <td>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،</td>
                                                                    <td>
                                                                        <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCentered3">تعديل</a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#!" class="btn btn-danger">حذف</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- End Table Blogs -->
                                                    <!-- Modal -->
                                                    <div class="modal" id="exampleModalCentered3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenteredLabel">تعدل</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Start Form
                                                                    ----------------->
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="formGroupExampleInput">عنوان المقال</label>
                                                                                    <!-- Blog Title Input
                                                                                    -------------------------->
                                                                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>اضافة صورة للمقال</label>

                                                                                    <!-- Upload Blog Image Input
                                                                                    -------------------------->
                                                                                    <div class="custom-file">
                                                                                        <input type="file" class="custom-file-input" id="customFile">
                                                                                        <label class="custom-file-label" for="customFile">تحميل صورة</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput2">محتوى المقال</label>

                                                                            <!-- blog Content
                                                                            -------------------------->
                                                                            <textarea class="form-control" id="formGroupExampleInput2" cols="30" rows="5"></textarea>
                                                                        </div>

                                                                        <!-- button Submit Form
                                                                        -------------------------->
                                                                        <input type="submit" class="btn btn-primary" value="اضافة">
                                                                    </form>
                                                                    <!-- End Form
                                                                    --------------->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End All Blogs Section -->

                                </div>
                                <!-- End Dashboard Main Content -->
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">
                                Copyright &copy; <a href="https://www.clicktopass.com"> Clicktopass Co.</a> 2020
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
