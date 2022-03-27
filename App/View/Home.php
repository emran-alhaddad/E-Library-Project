<!DOCTYPE html>
<html>
<?php require_once(System::COMPONENTS."head.php"); ?>

<body>

<?php require_once(System::COMPONENTS."header.php"); ?>

    <!-- Start Body Section -->
    <section class="body">

        
    <?php require_once(System::COMPONENTS."searchLogo.php"); ?>
        <!-- Start Carosal  -->
    <?php require_once(System::COMPONENTS."carosel.php"); ?>


        <!-- Categories Sction -->
        <section class=" categories hide">
            <h1> تصفح حسب القسم</h1>
            <div class="container slider">
                <a class="simpleCard" href="#sec1">
                    <img src="<?= System::ASSETS?>icons/svgexport-45.svg" alt="" srcset="">
                    <h2>دين</h2>
                </a>

                <a href="#sec2" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-41.svg" alt="" srcset="">
                    <h2>تاريخ</h2>
                </a>

                <a href="#sec6" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-39.svg" alt="" srcset="">
                    <h2>روايات</h2>
                </a>

                <a href="#sec3" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-42.svg" alt="" srcset="">
                    <h2>سياسة</h2>
                </a>

                <a href="#sec4" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-44.svg" alt="" srcset="">
                    <h2>اقتصاد</h2>
                </a>

                <a href="#sec5" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-46.svg" alt="" srcset="">
                    <h2>طبخ</h2>
                </a>

                <a href="#" class="simpleCard">
                    <img src="<?= System::ASSETS?>icons/svgexport-47.svg" alt="" srcset="">
                    <h2>تربية</h2>
                </a>
            </div>
        </section>

        <!-- End Categories Section  -->

        <section class="adds hide">

            <div>
                <img src="<?= System::ASSETS?>images/Adds.jpg" width="100%" alt="">
            </div>
        </section>

        <section class="presentations">
            <div class="oneLineDiv">
                <h1> العروض الحالية</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                        <h5 class="lastOfferText" id="lastOffers1"></h5>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                        <h5 class="lastOfferText" id="lastOffers2"></h5>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                        <h5 class="lastOfferText" id="lastOffers3"></h5>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                        <h5 class="lastOfferText" id="lastOffers4"></h5>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                        <h5 class="lastOfferText" id="lastOffers5"></h5>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>

            <div id="sec1" class="oneLineDiv">
                <h1> الكتب الدينية</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>

            <div class="oneLineDiv">
                <h1> الكتب التاريخية</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>

            <div id="sec2" class="oneLineDiv">
                <h1> السايسة</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>


            <div id="sec3" class="oneLineDiv">
                <h1> الأقتصاد</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>


            <div id="sec4" class="oneLineDiv">
                <h1> الطبخ</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>
            </div>


            <div id="sec5" class="oneLineDiv">
                <h1> أفضل الروايات الرومانسية</h1>
                <a href="category.html">عرض الكل</a>
            </div>
            <div class="container slider">
                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book1.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                        <h2>17.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book2.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                        <h2>24.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book3.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book4.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                        <h2>19.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

                <div class="card">
                    <a href="Details" class="header">
                        <img src="<?= System::ASSETS?>images/Books/Book5.jpg" alt="" srcset="">
                    </a>
                    <a href="Details" class="body">
                        <h1><img src="<?= System::ASSETS?>images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                        <div class="rating">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                            <img src="<?= System::ASSETS?>icons/rating.svg" class="rating__star" alt="">
                        </div>
                        <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                        <h2>3.99 <sub>رس</sub></h2>
                        <span>صيغ أخرى:</span>
                        <a href="#">كتاب مطبوع</a>
                    </a>
                    <div class="footer">
                        <img src="<?= System::ASSETS?>icons/svgexport-55.svg" alt="transfere" srcset="">
                        <img class="origin" src="<?= System::ASSETS?>icons/cart-2.svg" alt="shopbag" srcset="">
                        <img src="<?= System::ASSETS?>icons/svgexport-54.svg" alt="star" srcset="">
                    </div>
                </div>

            </div>
        </section>
    </section>
    <!-- End Body Section  -->



    <!-- Start Footer  -->
    <footer>
        <div class="first">
            <div class="contact">
                <div>
                    <h1>انظم إلى نشرتنا البريدية</h1>
                    <form action="">
                        <input type="email" name="email" placeholder="ادخل بريدك الإلكتروني" id="">
                        <input type="submit" value="اشتراك">
                    </form>
                </div>

                <div class="contactLinks">
                    <h1>تواصل معنا</h1>
                    <div>
                        <img src="<?= System::ASSETS?>icons/svgexport-58.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-59.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-60.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-61.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-62.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-63.svg" alt="">
                        <img src="<?= System::ASSETS?>icons/svgexport-64.svg" alt="">

                    </div>
                </div>


            </div>
            <div>
                <h1>خدمة العملاء</h1>
                <hr>
                <ul>
                    <li><a href="#">مبيغات الشركة</a></li>
                    <li><a href="#">الأسئلة المتكررة</a></li>
                    <li><a href="#">دليل التسوق والمطبوعات</a></li>
                    <li><a href="#">مواقع المعارض</a></li>
                    <li><a href="#">سياسة الضمان</a></li>
                    <li><a href="#">سياسة الإسترجاع والإستبدال</a></li>
                    <li><a href="#">أتصل بنا</a></li>
                    <li>92000000089</li>
                </ul>
            </div>
            <div>
                <h1>خدمات جرير</h1>
                <hr>
                <ul>
                    <li><a href="#">مبيغات الشركة</a></li>
                    <li><a href="#">الأسئلة المتكررة</a></li>
                    <li><a href="#">دليل التسوق والمطبوعات</a></li>
                    <li><a href="#">مواقع المعارض</a></li>
                    <li><a href="#">سياسة الضمان</a></li>
                    <li><a href="#">سياسة الإسترجاع والإستبدال</a></li>
                    <li><a href="#">أتصل بنا</a></li>
                    <li>92000000089</li>
                </ul>
            </div>

            <div>
                <h1>روابط سريعة</h1>
                <hr>
                <ul>
                    <li><a href="#">مبيغات الشركة</a></li>
                    <li><a href="#">الأسئلة المتكررة</a></li>
                    <li><a href="#">دليل التسوق والمطبوعات</a></li>
                    <li><a href="#">مواقع المعارض</a></li>
                    <li><a href="#">سياسة الضمان</a></li>
                    <li><a href="#">سياسة الإسترجاع والإستبدال</a></li>
                    <li><a href="#">أتصل بنا</a></li>
                    <li>92000000089</li>
                </ul>
            </div>

            <div>
                <h1>عن جرير</h1>
                <hr>
                <ul>
                    <li><a href="#">مبيغات الشركة</a></li>
                    <li><a href="#">الأسئلة المتكررة</a></li>
                    <li><a href="#">دليل التسوق والمطبوعات</a></li>
                    <li><a href="#">مواقع المعارض</a></li>
                    <li><a href="#">سياسة الضمان</a></li>
                    <li><a href="#">سياسة الإسترجاع والإستبدال</a></li>
                    <li><a href="#">أتصل بنا</a></li>
                    <li>92000000089</li>
                </ul>
            </div>

        </div>

        <div class="second">
            <div style="order: 2;">
                <h4>سياسة الخصوصية | شروط الخدمة</h4>
                <p>
                    جميع الحقوق محفوظة لمكتبة جرير &copy; 2015 س.ت 1010032264 اونلاين س.ت 1010654231
                </p>
            </div>
            <div style="order: 1;">
                <img src="<?= System::ASSETS?>icons/svgexport-65.svg" alt="">
                <img src="<?= System::ASSETS?>icons/svgexport-66.svg" alt="">
                <img src="<?= System::ASSETS?>icons/svgexport-67.svg" alt="">
                <img src="<?= System::ASSETS?>icons/svgexport-68.svg" alt="">
                <img src="<?= System::ASSETS?>icons/svgexport-69.svg" alt="">
                <img src="<?= System::ASSETS?>icons/svgexport-70.svg" alt="">

            </div>
        </div>

    </footer>

    <!-- End Footer  -->
    <?php require_once(System::COMPONENTS."modales.php"); ?>
    <?php require_once(System::COMPONENTS."scripts.php"); ?>



</body>

</html>