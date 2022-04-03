<!DOCTYPE html>
<html lang="ar">

<?php require_once("Components/head.php"); ?>

<body>

    <?php require_once("Components/header.php"); ?>

    <!-- Start Body Section -->
    <section class="body">

    <?php require_once("Components/searchLogo.php"); ?>
    <?php require_once("Components/carosel.php"); ?>

        <menu class="subMenue">
            <ul>
                <li><a href="">الرئيسية</a></li>
                <li><a href="">الكتب العربية</a></li>
                <li><a href="">كتب إلكترونية</a></li>
            </ul>
        </menu>
        <section class="categories categories2">
            <aside class="categoriesFilter">
                <div class="top">
                    <img src="icons/svgexport-34.svg" alt="">
                    <h1>كتب إلكترونية</h1>
                </div>
                <div class="filterBox">
                    <div class="header">
                        <h1>تصفية النتائج</h1>
                    </div>
                    <div class="body">
                        <div class="itemFilter">
                            <div class="itemFilterHead">
                                <span>علامة تجارية</span>
                                <img src="icons/minimize.png" alt="">
                            </div>
                            <div class="itemFilterContent"></div>
                        </div>
                        <hr color="#ccc">

                        <div class="itemFilter">
                            <div class="itemFilterHead">
                                <span>السعر</span>
                                <img src="icons/minimize.png" alt="">
                            </div>
                            <div class="itemFilterContent">
                                <input type="range">
                            </div>
                        </div>
                        <hr color="#ccc">

                        <div class="itemFilter">
                            <div class="itemFilterHead">
                                <span>صيغة الكتاب</span>
                                <img src="icons/minimize.png" alt="">
                            </div>
                            <div class="itemFilterContent"></div>
                        </div>

                    </div>
                </div>
            </aside>
            <main class="presentations">
                <div class="sortByDiv">
                    <span>الترتيب بحسب: </span>
                    <select name="" id="">
                        <option value="" selected>الرجاء الإختيار</option>
                        <option value="">الأسم</option>
                        <option value="">السعر</option>
                    </select>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book1.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                            <h2>17.99 <sub>رس</sub></h2>
                            <h5 id="lastOffers1"></h5>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book2.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                            <h2>24.99 <sub>رس</sub></h2>
                            <h5 id="lastOffers2"></h5>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book3.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                            <h5 id="lastOffers3"></h5>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book4.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                            <h5 id="lastOffers4"></h5>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>







                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book2.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                            <h2>24.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book3.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book4.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book5.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                            <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                            <h2>3.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>




                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book1.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book3.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book4.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book5.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                            <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                            <h2>3.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>




                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book1.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book2.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                            <h2>24.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book4.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">إلى الذي أسرني حبه (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book5.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                            <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                            <h2>3.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>




                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book1.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كبرياء وهوى (كتاب إلكتروني)</p>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book2.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">خلف قوتي ضعف يحبك (كتاب إلكتروني)</p>
                            <h2>24.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book3.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt="">كتاب إلكتروني</h1>
                            <p class="BoookTitle">كتالوج الحب (كتاب إلكتروني)</p>
                            <h2>19.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>


                    <div class="card">
                        <div class="header">
                            <img src="images/Books/Book5.jpg" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1><img src="images/bookIcon.png" alt=""> كتاب إلكتروني</h1>
                            <p class="BoookTitle">زواج غير متوقع (كتاب إلكتروني)</p>
                            <h2>3.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">
                            <img src="icons/svgexport-55.svg" alt="transfere" srcset="">
                            <img class="origin" src="icons/cart-2.svg" alt="shopbag" srcset="">
                            <img src="icons/svgexport-54.svg" alt="star" srcset="">
                        </div>
                    </div>

                </div>



                <div class="container">
                    <input type="button" id="showMoreBtn" value="عرض المزيد">
                </div>

                <hr size="12" style="background-color: rgb(241 241 241);">
                <div style="all: inherit; margin-top: 0;">
                    <h1>
                        <a href="#" style="color: rgb(70 127 70); ">
                            أشتر من كتب إلكترونية على متجر جرير الإلكتروني
                        </a>
                    </h1>
                </div>
            </main>
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
                        <img src="icons/svgexport-58.svg" alt="">
                        <img src="icons/svgexport-59.svg" alt="">
                        <img src="icons/svgexport-60.svg" alt="">
                        <img src="icons/svgexport-61.svg" alt="">
                        <img src="icons/svgexport-62.svg" alt="">
                        <img src="icons/svgexport-63.svg" alt="">
                        <img src="icons/svgexport-64.svg" alt="">

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
                <img src="icons/svgexport-65.svg" alt="">
                <img src="icons/svgexport-66.svg" alt="">
                <img src="icons/svgexport-67.svg" alt="">
                <img src="icons/svgexport-68.svg" alt="">
                <img src="icons/svgexport-69.svg" alt="">
                <img src="icons/svgexport-70.svg" alt="">

            </div>
        </div>

    </footer>

    <!-- End Footer  -->

    <?php require_once("Components/modales.php"); ?>
    <?php require_once("Components/scripts.php"); ?>
</body>

</html>