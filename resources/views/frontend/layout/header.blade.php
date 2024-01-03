
 @include('frontend.layout.css')

<!--body start here-->
<!------top header start--->
<div class="news-container" id="newsComponent">
    <div class="container">
    <div class="news-heading">News</div>

    <div class="news">
      <a href="#" class="news-single active badge">
        Apple releases new iPhone with 5G capability.
      </a>

      <a href="#" class="news-single badge">
        Facebook under fire for handling of user data.
      </a>

      <a href="#" class="news-single badge">
        Tesla unveils new electric car model with longer range.
      </a>

      <a href="#" class="news-single badge">
        Google introduces new artificial intelligence tools for businesses.
      </a>

      <a href="#" class="news-single badge">
        Amazon announces plans to expand its drone delivery program.
      </a>
    </div>
    <div class="blinking-badge">
        <a href="https://wa.me/8778576419" target="_blank">
            <i class="fa fa-whatsapp" style="color: #25D366;"></i>  &nbsp; +91 877 85 76419</a>
    </div>
    <div class="news-close">
        <i class="fa fa-times-circle-o" aria-hidden="true" onclick="closeNews()"></i>
    </div>
</div>
  </div>
  <!------top header start--->
  <!----header navibar start--->
  <nav class="nav">
    <div class="nav-container">
        <a href="#" class="brand"><img src="{{asset('frontend/images/icons/logo.png')}}" alt="" style="width:100px;height:100px;"></a>
        <ul class="nav-menu">
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Products <i class='bx bx-chevron-down' ></i></a>
                <div class="dropdown-menu">
                    <div class="container">
                        <div class="left-section">
                            <span class="dropdown-close"><i class='bx bx-chevron-left' ></i> Back</span>
                            <h1>BRANDS Products</h1>
                            <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Aspernatur omnis ex, enim, ullam accusantium vitae culpa! Quia, velit? Minus, quas.</p>
                            <a href="#" class="btn-see-all">See all</a>
                        </div>
                        <div class="right-section">
                            <h3>Products features</h3>
                            <ul class="dropdown-links">
                                <li>
                                    <a href="#">
                                        <i class='bx bxs-dashboard' ></i>
                                        <div>
                                            <h5>Website Builder</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-cut' ></i>
                                        <div>
                                            <h5>Video Editor</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-webcam' ></i>
                                        <div>
                                            <h5>Screen Recorder</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-refresh' ></i>
                                        <div>
                                            <h5>Converter</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bxs-component' ></i>
                                        <div>
                                            <h5>Compressor</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-cog' ></i>
                                        <div>
                                            <h5>Integrations</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur, adipisicing.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <a href="#">Blogs</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li >
                <a href="#" class="login-btn">👩🏻‍💼</a>
            </li>
        </ul>
        <i class='bx bx-menu toggle-navbar'  style="font-size: 30px;"></i>
    </div>
</nav>
<!----header navibar start--->
  <!--body end here-->

