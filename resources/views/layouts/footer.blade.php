@section('footer')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <img src="images/logos/logo-light.png" alt="">
                        <small></small>
                    </div>
                    <p> E-mail marketing company</p>
                    <p></p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:#">info@purnell.us</a></li>
                        <li><a href="#">www.purnell.us</a></li>
                        <li>5010 DUNDERDALE CT, VIRGINIA BEACH, VA 23462</li>
                        <li>757.477.5230 </li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href={!! asset('/') !!}>Home</a></li>

                        <li><a href={!! asset("pricing") !!}>Pricing</a></li>
                        <li><a href={!! asset('about') !!}>About</a></li>

                        <li><a href={!! asset('contact') !!}>Contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Social</h3>
                    </div>
                    <ul class="footer-links social-md">
                        <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a class="gi" href="#"><i class="fa fa-github"></i> Github</a></li>
                        <li><a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a class="dr" href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>

                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">PURNELL MARKET LLC</a> </p>
            </div>

            <div class="footer-right">
                <form method="get" action="#">
                    <input placeholder="Subscribe our newsletter.." name="search">
                    <i class="fa fa-envelope-o"></i>
                </form>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>

</body>
</html>
