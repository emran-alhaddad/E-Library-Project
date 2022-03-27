
    <!-- Start Login Pop Up -->
    <div id="sign-in">
        <span onclick="hideModule('sign-in');" class="close" title="Close Modal">×</span>
        <form action="">
            <h1>تسجيــــل الدخـــول</h1>
            <hr>
            <input class="" type="text" onkeyup="validateName(this);" id="fullName" name="fullName" placeholder="البريد الإلكتروني أو رقم الجوال">

            <div class="passDiv">
                <a href="#">نسيت ؟</a>
                <input class="input" type="password" onkeyup="validatePassword(this);" id="password" name="password" placeholder="كلمة السر">
            </div>
            <input class="input" id="submit" type="submit" value="تسجيل الدخـــول">

            <div id="CreateAccountBox">
                <label for="createAccountBtn">ليس لديك حساب ؟</label>
                <a id="createAccountBtn" onclick="hideModule('sign-in'); showModule('sign-up');" href="#">إنشاء حساب جديد</a>
            </div>

        </form>
    </div>
    <!-- Finish Login Pop Up -->

    <!-- Starting Sign-up Pop Up -->

    <div id="sign-up">
        <span onclick="hideModule('sign-up');" class="close" title="Close Modal">×</span>
        <form action="">
            <h1>إنشاء حساب</h1>
            <hr>
            <div id="OTP">
                <input class="input1" type="tel" onkeyup="validateName(this);" id="phone" name="phone" placeholder="رقم الجوال">
                <div class="input2" style="position: relative;">
                    <label for="">رمز الدولة</label>
                    <select name="" id="">
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                        <option value="yemen">+967 👍</option>
                    </select>
                </div>
                <p>سوف نرسل لك <b>رمز التحقق عن طريق رسالة نصية</b></p>
                <input class="input" type="submit" value="ارسال رمز التحقق">
            </div>


            <input class="" type="text" id="fname" name="fname" placeholder="الاسم الأول">
            <input class="" type="text" id="lname" name="lname" placeholder="اسم العائلة">
            <input class="" type="email" id="email" name="email" placeholder="اليريد الالكتروني">
            <input class="" type="email" id="re-email" name="re-email" placeholder="تأكيد البريد الألكتروني">
            <input class="" type="password" id="password" name="password" placeholder="كلمة السر">
            <div class="checkbox">
                <input type="checkbox" name="" id="">
                <label for="">اوافق على <b>الشروط والأحكام</b></label>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="" id="">
                <label for="">التسجل للإنظمام للنشرة البريدية</label>
            </div>
            <input class="input" id="submit" type="submit" value="إنشاء حساب">

            <div id="LoginBox">
                <label for="loginBtn"> لديك حساب ؟</label>
                <a id="loginBtn" onclick="hideModule('sign-up'); showModule('sign-in');" href="#">تسجيل الدخـــول <</a>
            </div>

        </form>
    </div>

    <!-- Finish Sign-up Pop Up -->

     <!-- Start Gallary Viewer PopUp -->
     <div id="popUP">
        <div class="header">
            <h1 id="closeGallary" onclick="hideModule('popUP');">X</h1>
        </div>
        <div id="Gallary"></div>
    </div>
    <!-- End Gallary Viewer PopUp -->