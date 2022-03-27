<!DOCTYPE html>
<html lang="ar">

<?php require_once(System::COMPONENTS."head.php"); ?>
<link rel="stylesheet" href="<?= System::ASSETS?>css/shopBagStyle.css">


<body onload="showCardProducts();">

<?php require_once(System::COMPONENTS."header.php"); ?>


    <!-- Start Header -->

    <!-- Start Body Section -->
    <section class="body">
    <?php require_once(System::COMPONENTS."searchLogo.php"); ?>


        <div id="bagTitle">
            <img src="<?= System::ASSETS?>icons/cart-2.svg" alt="">
            <div>
                <h1>السلــــة<sub style="font-size: 10px;" id="noBagItems">(5 منتجات)</sub> </h1>

            </div>
        </div>
        <div class="bagBody">
            <div id="itemsCards" class="right">
                <div class="shoppingItem">
                    <div class="itemBody">
                        <div>
                            <img id="itemImage1" src="<?= System::ASSETS?>images/book.jpg" alt="" class="icon">
                        </div>
                        <div class="content">
                            <h1 id="itemTitle1">البداية والنهاية الجز الأول (كتاب إلكتروني)</h1>
                            <p>منتج قابل للخصم لحاملي بطاقة خصم جرير</p>
                            <div class="note">
                                <p> <b>ملاحظة: </b> هذا المنتج رقمي وسيتم توصيلة من خلال البريد الإلكتروني </p>
                                <a href="#">كيفية الحصول على المنتج ؟</a>
                            </div>
                        </div>
                        <div class="price">
                            <h1 id="itemPrice1"> 3.99
                                <sub>ر.س.</sub>
                            </h1>
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                    </div>
                    <hr>
                    <div class="itemFooter">
                        <ul>
                            <li>احذف</li>
                        </ul>
                    </div>
                </div>

                <div class="shoppingItem">
                    <div class="itemBody">
                        <div>
                            <img src="<?= System::ASSETS?>images/book.jpg" alt="" class="icon">
                        </div>
                        <div class="content">
                            <h1>البداية والنهاية الجز الأول (كتاب إلكتروني)</h1>
                            <p>منتج قابل للخصم لحاملي بطاقة خصم جرير</p>
                            <div class="note">
                                <p> <b>ملاحظة: </b> هذا المنتج رقمي وسيتم توصيلة من خلال البريد الإلكتروني </p>
                                <a href="#">كيفية الحصول على المنتج ؟</a>
                            </div>
                        </div>
                        <div class="price">
                            <h1> 29.99
                                <sub>ر.س.</sub>
                            </h1>
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                    </div>
                    <hr>
                    <div class="itemFooter">
                        <ul>
                            <li>احذف</li>
                        </ul>
                    </div>
                </div>

                <div class="shoppingItem">
                    <div class="itemBody">
                        <div>
                            <img src="<?= System::ASSETS?>images/book.jpg" alt="" class="icon">
                        </div>
                        <div class="content">
                            <h1>البداية والنهاية الجز الأول (كتاب إلكتروني)</h1>
                            <p>منتج قابل للخصم لحاملي بطاقة خصم جرير</p>
                            <div class="note">
                                <p> <b>ملاحظة: </b> هذا المنتج رقمي وسيتم توصيلة من خلال البريد الإلكتروني </p>
                                <a href="#">كيفية الحصول على المنتج ؟</a>
                            </div>
                        </div>
                        <div class="price">
                            <h1> 34.99
                                <sub>ر.س.</sub>
                            </h1>
                            <select name="" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                        </div>
                    </div>
                    <hr>
                    <div class="itemFooter">
                        <ul>
                            <li>احذف</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="left">
                <div class="priceDetails">
                    <div class="top">
                        <div class="lineDetails">
                            <h3>المجموع</h3>
                            <h3 id="totalPrice">68.97
                                <sub>ر.س.</sub>
                            </h3>
                        </div>

                        <div class="lineDetails">
                            <h3>تكاليف الشحن</h3>
                            <h2 class="free">مجاني</h2>
                        </div>

                        <div class="lineDetails">
                            <h1 class="red">المجموع الكلي
                                <sub>شامل الضريبة</sub>
                            </h1>
                            <h3 class="red" id="allTotalPrices">68.97
                                <sub class="red">ر.س.</sub>
                            </h3>
                        </div>
                    </div>
                    <div class="bottom">
                        <p>بالضغط على إنهاء التسوق فأنت توافق على
                            <a href="#">الشروط والأحكام و سياسةالخصوصية</a>
                        </p>
                        <form action="checkout">
                            <input type="submit" value="تحديث سلة التسوق">
                        </form>
                    </div>
                </div>
            </div>
        </div>
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