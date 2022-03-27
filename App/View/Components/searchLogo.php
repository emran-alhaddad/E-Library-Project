<section class="search_logo">
            <div class="logo">
                <a href="Home">
                    <img src="<?= System::ASSETS?>images/eLibrary_logo_web.jpg" alt="Logo">
                </a>
            </div>
            <form action="" class="searchBox">
                <input type="text" name="seach" id="search" onkeyup="search_books();">
                <input type="submit" value="">
            </form>
            <div class="bag">
                <div style="position:relative ;">
                    <span id="BagCounter"></span>
                    <a href="ShopBage">
                        <img src="<?= System::ASSETS?>icons/svgexport-51.svg" id="BagImage" alt="">
                    </a>
                </div>
            </div>
        </section>