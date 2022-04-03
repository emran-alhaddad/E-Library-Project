<!DOCTYPE html>
<html lang="ar">

    <?php require_once("Components/head.php"); ?>
    <link rel="stylesheet" href="css/checkoutStyle.css">


<body onload="disapleAll();">
    
    <?php require_once("Components/header.php"); ?>

    <!-- End Header -->

    <!-- Start Body Section -->
    <section class="body">

    <?php require_once("Components/searchLogo.php"); ?>

        <div class="containerForm">
            <form action="Home" method="post" id="checkoutForm">

                <div class="tab">
                    <h1>
                        معلومات المستخدم
                    </h1>

                    <label for="firstName">الأسم الأول</label>
                    <input class="" type="text" onkeyup="validateName(this);" id="firstName" name="firstName" placeholder="إسمك الرباعي">

                    <label for="lastName">الأسم الأخير</label>
                    <input class="input" type="text" onkeyup="validateName(this);" id="lastName" name="lastName" placeholder="اللقب">

                    <label for="email">البريد الإلكتروني</label>
                    <input class="input" type="email" onkeyup="validateEmail(this);" id="email" name="email" placeholder="example@gmail.com">

                    <label for="Phone">الهاتف</label>
                    <input class="input" type="tel" onkeyup="validatePhone(this);" id="Phone" name="Phone" placeholder="777------">

                </div>

                <div class="tab">
                    <h1>
                        معلومات الدفع
                    </h1>

                    <label for="cardName">إسم البطاقة</label>
                    <input class="input" type="text" onkeyup="validateCardName(this);" id="cardName" name="cardName" placeholder="اسم البطاقة">

                    <label for="cardNumber">رقم البطاقة</label>
                    <input class="input" type="number" onkeyup="validateCardNumber(this);" id="cardNumber" name="cardNumber" placeholder="رقم البطاقة">

                </div>

                <div class="tab">
                    <h1>
                        تأكيد الدفع
                    </h1>

                    <label for="Address">العنوان</label>
                    <input class="" type="text" onkeyup="validateAddress(this);" id="Address" name="Address" placeholder="العنوان">

                    <label for="City">المدينة</label>
                    <input class="input" type="text" onkeyup="validateCity(this);" id="City" name="City" placeholder="المدينة">

                </div>

                <div class="tab" id="lastTab">
                    <h1>
                        حالة الدفع:
                    </h1>

                    <img src="images/Done.gif" alt="">
                    <h5>جاهز للدفع</h5>
                </div>

                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
                <div id="myControls" class="controls">
                    <button type="button" id="prevBtn" onclick="nextPrevCheckout(-1)">السابق</button>
                    <button type="button" id="nextBtn" onclick="nextPrevCheckout(1)">التالي</button>
                </div>


            </form>
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