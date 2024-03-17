
</main>

<!-- Footer -->
<footer class="footer inner-page" >
    <div class="footer-top">
        <div class="container">
            <div class="row">
               

                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Menu</h4>
                        <div class="footer-nav">
                            <ul class="footer_menu">
                                <li class="menu-item"><a href="">Home</a></li>
                                <li class="menu-item"><a href="">Services</a></li>                            
                                <li class="menu-item"><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Service</h4>
                        <div class="footer-nav">
                            <ul class="footer_menu">
                                <?php service()?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Policy</h4>
                        <div class="footer-nav">
                            <ul class="footer_menu">
                                <?php policyList()?>
                            </ul>
                        </div>
                    </div>
                </div>
              

             
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Contact Us</h4>
                      <?php contact()?>
                    </div>
                </div>

               
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="copyright">
                    <p>Copyright ©2024 . All rights reserved by <a href="">NAVI FINANCE</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="totop">
<a href="#"><i class="bi bi-chevron-up"></i></a>
</div>