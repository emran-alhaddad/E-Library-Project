    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="../dashboard/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="../dashboard/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="../dashboard/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="../dashboard/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="../dashboard/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    
    <!-- Required Js -->
    <script src="../dashboard/js/vendor-all.min.js"></script>
    <script src="../dashboard/js/pcoded.min.js"></script>
    <script src="../dashboard/js/utils.js"></script>
    <script src="../dashboard/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dashboard/js/fancyTable.js"></script>
		<script type="text/javascript">
		

			$(document).ready(function() {
				// And make them fancy
				var fancyTableA = $("#sampleTableA").fancyTable({
					sortColumn:0,
					pagination: true,
					perPage:5,
					globalSearch:true
				});

                $("#changeRows").on("change",function(e){
                    alert("change");
                    fancyTableA.fancyTable.perPage = $("#changeRows").val();
                })
				
			});
		</script>