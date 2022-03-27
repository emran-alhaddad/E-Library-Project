<!DOCTYPE html>
<html lang="ar">

<?php require_once(System::COMPONENTS."head.php"); ?>
<link rel="stylesheet" href="<?= System::ASSETS?>css/details.css">


<body>

    <?php require_once(System::COMPONENTS."header.php"); ?>

    <!-- Start Body Section -->
    <section class="body">

    <?php require_once(System::COMPONENTS."searchLogo.php"); ?>
    <?php require_once(System::COMPONENTS."carosel.php"); ?>

        <menu class="subMenue">
            <ul>
                <li><a href="">الرئيسية</a></li>
                <li><a href="">الكتب العربية</a></li>
                <li><a href="">كتب إلكترونية</a></li>
                <li><a href="">لأنك الله (كتاب إلكتروني)</a></li>
            </ul>
        </menu>
        <section class="categories">
            <main class="presentations">
                <div class="container">

                    <div class="card">
                        <div class="header" style="height: 85%;">
                            <img id='boxImage' src="<?= System::ASSETS?>images/Books/Book1.jpg" height="100%" onclick="callImage(this);">
                        </div>
                        <div class="body">
                            <div class="slider">
                                <div class="image">
                                    <img class="slideImage switch__" src="<?= System::ASSETS?>images/Books/Book2.jpg" onclick="switchImage(this,'boxImage');">
                                </div>
                                <div class="image">
                                    <img class="slideImage switch__" src="<?= System::ASSETS?>images/Books/Book3.jpg" onclick="switchImage(this,'boxImage');">
                                </div>
                                <div class="image">
                                    <img class="slideImage switch__" src="<?= System::ASSETS?>images/Books/Book4.jpg" onclick="switchImage(this,'boxImage');">
                                </div>
                                <div class="image">
                                    <img class="slideImage switch__" src="<?= System::ASSETS?>images/Books/Book5.jpg" onclick="switchImage(this,'boxImage');">
                                </div>
                                <div class="image">
                                    <img class="slideImage switch__" src="<?= System::ASSETS?>images/Books/Book1.jpg" onclick="switchImage(this,'boxImage');">
                                </div>
                            </div>
                        </div>
                        <!-- Navigation arrows -->

                    </div>

                    <div class="card card-Temp">
                        <div class="header">
                            <h1>لأنك الله (كتاب إلكتروني)</h1>
                            <a href="#"> عرض المزيد 🔽</a>
                            <div class="price">
                                <h1> 12.99
                                    <sub>ر.س.</sub>
                                </h1>
                                <span>شامل الضريبة</span>
                            </div>
                        </div>
                        <div class="body">
                            <div>
                                <span>وحدة البيع:</span>
                                <span>Each</span>
                            </div>
                            <div>
                                <span>*****</span>
                                <span><a href="#">(المراجعات 15)</a></span>
                            </div>
                            <div>
                                <span>رقم المنتج</span>
                                <span>4</span>
                                <span>رقم الصنف</span>
                                <span>JBB410156</span>
                            </div>
                        </div>
                        <div class="footer">
                            <span>الصيغ المتوفرة</span>
                            <div class="oneLineDiv" style="width: 100%;">
                                <div class="oneLineDiv">
                                    <input type="radio" checked name="book" id="">
                                    <label for="">كتاب إلكتروني</label>
                                    <img src="<?= System::ASSETS?>icons/Question.png" alt="">
                                </div>
                                <div class="price">
                                    <h1> 12.99
                                        <sub>ر.س.</sub>
                                    </h1>
                                    <span>شامل الضريبة</span>
                                </div>
                            </div>

                            <div class="oneLineDiv" style="width: 100%;">
                                <div class="oneLineDiv">
                                    <input type="radio" name="book" id="">
                                    <label for="">كتاب مطبوع</label>
                                    <img src="<?= System::ASSETS?>icons/Question.png" alt="">
                                </div>
                                <div class="price">
                                    <h1> 17.25
                                        <sub>ر.س.</sub>
                                    </h1>
                                    <span>شامل الضريبة</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-Temp">
                        <div class="card">
                            <div class="header">
                                <div class="note">
                                    <p> <b>ملاحظة: </b> سيتم إضافة هذا الكتاب الإلكتروني إلى مكتبتك في قارئ جرير
                                    </p>
                                    <a href="#">اقرأ المزيد</a>
                                </div>
                            </div>
                            <div class="body">
                                <div class="row">

                                    <select name="" id="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    <input type="button" value="أضف إلى السلة">
                                </div>
                                <div class="all-Market-Tags">
                                    <div class="row">
                                        <span class="marketTags">
                                        <img src="<?= System::ASSETS?>icons/Market.png" alt="">
                                        تسوق أمن
                                        <img src="<?= System::ASSETS?>icons/Question.png" alt="">
                                    </span>
                                        <span class="marketTags">
                                        <img src="<?= System::ASSETS?>icons/safe.png" alt="">
                                        أصلي ومضمون
                                        <img src="<?= System::ASSETS?>icons/Question.png" alt="">
                                    </span>
                                    </div>

                                    <div class="row">
                                        <span class="marketTags">
                                        <img src="<?= System::ASSETS?>icons/Delivery.png" alt="">
                                        شحن سريع ومجاني
                                        <img src="<?= System::ASSETS?>icons/Question.png" alt="">
                                    </span>
                                    </div>
                                </div>
                                <hr width="100%">
                            </div>
                            <div class="footer">
                                <div class="row">
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Share.png" alt="">
                                        مشاركة
                                    </button>
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Heart.png" alt="">
                                        المفضلة
                                    </button>
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Transfere.png" alt="">
                                        مقارنة
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header"></div>
                            <div class="body"></div>
                            <hr width="100%">
                            <div class="footer">
                                <div class="row">
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Share.png" alt="">
                                        مشاركة
                                    </button>
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Heart.png" alt="">
                                        المفضلة
                                    </button>
                                    <button>
                                        <img src="<?= System::ASSETS?>icons/Transfere.png" alt="">
                                        مقارنة
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="itemDescrition">
                    <p>
                        كتاب يتحدث عن بعض أسماء الله الحسنى وكيف نعيشها في حياتنا حرصا المؤلف أن يكون الكتاب مناسب لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم
                    </p>
                </div>
                <div class="container" style="flex-direction: column; margin-bottom: 0;">
                    <div class="card card-Temp margin-0 padding-0 border-btm">
                        <div class="header">
                            <h1> المواصفات</h1>
                        </div>

                        <div class="body">
                            <div class="table">
                                <div class="trow">
                                    <span>رقم الصنف</span>
                                    <b>JBB410156</b>
                                </div>
                                <div class="trow">
                                    <span>رقم المنتج</span>
                                    <b>4</b>
                                </div>
                                <div class="trow">
                                    <span>المؤلف</span>
                                    <b>علي جابر الفيفي</b>
                                </div>
                                <div class="trow">
                                    <span>الناشر</span>
                                    <b>دار الحضارة للنشر والتوزيع</b>
                                </div>
                                <div class="trow">
                                    <span>تاريخ النشر </span>
                                    <b>2016</b>
                                </div>
                                <div class="trow">
                                    <span>صيغة الكتاب</span>
                                    <b>Ebook</b>
                                </div>
                                <div class="trow">
                                    <span>عدد الصفحات</span>
                                    <b>182</b>
                                </div>
                                <div class="trow">
                                    <span>وزن الشحن (كجم)</span>
                                    <b>0.0100</b>
                                </div>
                                <div class="trow">
                                    <span>صيغة الملف</span>
                                    <b>ePub</b>
                                </div>
                                <div class="trow">
                                    <span>اللغة</span>
                                    <b>عربي</b>
                                </div>
                                <div class="tFooter">
                                    <a href="#">عرض أقل  ^</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-Temp margin-0 padding-0 border-btm">
                        <div class="header">
                            <h1> مراجعات العملاء
                                <input class="primary-btn" type="button" value="إكتب مراجعتك">
                            </h1>
                        </div>

                        <div class="body">
                            <div class="reviwes">
                                <div class="review">
                                    <div class="header">
                                        <h3>good</h3>
                                        <div class="oneLineDiv">
                                            <span>من قبل reem</span>
                                            <span>2021/11/16</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>
                                            Good
                                        </p>
                                    </div>
                                    <div class="footer"></div>
                                </div>
                                <div class="review">
                                    <div class="header">
                                        <h3>كتاب رائع</h3>
                                        <div class="oneLineDiv">
                                            <span>من قبل خالد أبو جميلة</span>
                                            <span>2021/9/25</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>
                                            جميل جدا
                                        </p>
                                    </div>
                                    <div class="footer"></div>
                                </div>
                                <div class="review">
                                    <div class="header">
                                        <h3>لأنك الله</h3>
                                        <div class="oneLineDiv">
                                            <span>من قبل باسل</span>
                                            <span>2021/9/20</span>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <p>
                                            جميل جدا ومفيد
                                        </p>
                                    </div>
                                    <div class="footer"></div>


                                </div>
                                <div class="reviewsFooter">
                                    <a href="#">إضهار جميع المراجعات (15)  &gt;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="oneLineDiv">
                    <h1> منتجات مشابهة</h1>
                </div>
                <div class="container">
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                    <div class="card card2">
                        <div class="header">
                            <img src="<?= System::ASSETS?>images/Books/Book1.jpg" width="100" alt="" srcset="">
                        </div>
                        <div class="body">
                            <h1>كبرياء وهوى</h1>
                            <h2>17.99 <sub>رس</sub></h2>
                        </div>
                        <div class="footer">

                        </div>
                    </div>


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