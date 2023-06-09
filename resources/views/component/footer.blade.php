
<div class="bg-footer">
    <div class="container">
        <div class="footer p-4">
            <div class="row">
                <div class="col-12 col-lg-4 bg-light text-dark rounded">
                    <div class="row">
                        <div class="col-12 px-4 text-start">
                            <img class="img-footer" src="{{ asset ('assets/images/logo/asabri.png') }}" alt="Footer Logo">
                        </div>
                        <div class="col-12 px-4 py-2">
                            <p class="footer-font-address">
                                Gedung Kantor Pusat PT. ASABRI (Persero) <br>
                                Jl. Mayjen Sutoyo, No. 11      
                            </p>
                        </div>
                        <div class="col-6 col-lg-5 px-4">
                            <p class="footer-font-number">
                                <i class='bx bxs-phone'></i> (021) 8094140
                            </p>
                        </div>
                        <div class="col-6 col-lg-7 px-4 text-start">
                            <p class="footer-font-number">
                                <i class='bx bx-support'></i> 150043
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <p class="footer-font-head">
                        About Us
                    </p>
                    <p class="footer-font-content">
                        Our Services
                    </p>
                    <p class="footer-font-content">
                        How It Works
                    </p>
                    <p class="footer-font-content">
                        Become a Partner
                    </p>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <p class="footer-font-head">
                        Terms and Conditions
                    </p>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <p class="footer-font-head">
                        Social Media
                    </p>
                    <p class="footer-font-content">
                        Twitter <i class='bx bxl-twitter' ></i> 
                    </p>
                    <p class="footer-font-content">
                         Facebook <i class='bx bxl-facebook-circle'></i>
                    </p>
                    <p class="footer-font-content">
                         Instagram <i class='bx bxl-instagram-alt' ></i>
                    </p>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <p class="footer-font-head">
                        Need more help? 
                    </p>
                    <p class="footer-font-content">
                        Please contact us at
                        <br>
                        <a href="#" class="text-warning">
                            helpdesk@apiasabri.id
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset ('assets/js/jquery-3.6.1.js')}}" ></script>
<script src="https://unpkg.com/swagger-ui-dist@4.5.0/swagger-ui-bundle.js" crossorigin></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{ asset ('assets/bootstrap.5.2.3/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('assets/js/aos/aos.js') }}"></script>
<script src="{{ asset ('assets/showdown/showdown.min.js') }}"></script>
@include('sweetalert::alert')
<script>
    AOS.init();
    $('.reset-local-storage').on('click',function(){
        localStorage.removeItem('tryoutapi');
        localStorage.removeItem('urlcallback');
        localStorage.removeItem('access_token_parshing');
        localStorage.removeItem('Auth');
        localStorage.removeItem('idapi');
        localStorage.removeItem('callback');
    });
</script>
@stack('script')
</body>
</html>