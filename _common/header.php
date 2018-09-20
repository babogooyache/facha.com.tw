 <!-- header -->
    <!-- pc menu 【css:menu】【js：current】 -->
    <header id="header" class="main_header active">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-2 col-xs-3">
                    <a href="./" class="main_logo">
                        <img src="assets/images/common_icon/logo.svg" width="104px">
                    </a>
                </div>
                <div class="col-sm-10 col-xs-9">
                    <ul class="main_menu text-right text6 hidden-xs">
                        <li>
                            <a class="centrofondo" href="javascript:void(0)" onClick="scrollToElem('step1')">
                                <svg x="0" y="5" width="70" height="17">
                                    <!-- 文字漸層背景色，滑過套用這個顏色，只需要一個 -->
                                    <defs>
                                        <linearGradient id="svgcolor" x1="0%" y1="100%" x2="100%" y2="0%">
                                        <stop offset="30%" stop-color="#ead1b9" />
                                        <stop offset="70%" stop-color="#d2b191" />
                                        </linearGradient>
                                    </defs>
                                    <text x="35" y="17" text-anchor="middle">STYLE</text>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="centrofondo" href="javascript:void(0)" onClick="scrollToElem('step2')">
                                <svg x="0" y="5" width="84" height="17">
                                    <text x="42" y="17" text-anchor="middle">SERVICE</text>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="centrofondo" href="javascript:void(0)" onClick="scrollToElem('step3')">
                                <svg x="0" y="5" width="80" height="17">
                                    <text x="40" y="17" text-anchor="middle">SECRET</text>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="centrofondo" href="javascript:void(0)" onClick="scrollToElem('step4')">
                                <svg x="0" y="5" width="88" height="17">
                                    <text x="44" y="17" text-anchor="middle">PROCESS</text>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="centrofondo order-check" href="javascript:void(0)" onClick="scrollToElem('step5')">
                                <svg x="0" y="5" width="84" height="17">
                                    <text x="42" y="17" text-anchor="middle">FABRICS</text>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="centrofondo order-check" href="javascript:void(0)" onClick="scrollToElem('step6')">
                                <svg x="0" y="5" width="86" height="17">
                                    <text x="43" y="17" text-anchor="middle">BRANCH</text>
                                </svg>
                            </a>
                        </li>
                        <li class="menu-icon menu-fb"><a href="https://www.facebook.com/FACHACUSTOMIZEDSUIT" target="_blank"></a></li>
                        <li class="menu-icon menu-ig"><a href="https://www.instagram.com/fachacustomizedsuit/?hl=zh-tw" target="_blank"></a></li>
                    </ul>

                    <div class="mobile_nav visible-xs text-right">
                        <!-- pad/phone menu 【js：current】【css:menu_responsive】 -->
                        <div class="menu">
                            <div class="main_menu">
                                <div class="trigger">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <div class="menu_content text6">
                                <ul>
									<li><a href="javascript:void(0)" onClick="scrollToElem('step1')">STYLE</a></li>
                                    <li><a href="javascript:void(0)" onClick="scrollToElem('step2')">SERVICE</a></li>
                                    <li><a href="javascript:void(0)" onClick="scrollToElem('step3')">SECRET</a></li>
                                    <li><a href="javascript:void(0)" onClick="scrollToElem('step4')">PROCESS</a></li>
                                    <li><a href="javascript:void(0)" onClick="scrollToElem('step5')">FABRICS</a></li>
                                    <li><a href="javascript:void(0)" onClick="scrollToElem('step6')">BRANCH</a></li>
                                    <li><a href="javascript:void(0)" class="order-check"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- pad/phone menu end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->