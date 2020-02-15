<!-- Include header -->
<?php $this->need('header.php'); ?>

    <!-- Wallpaper -->
    <div class="wallpaper"
        <?php if (!empty($this->options->bg_url)): ?>
            style="background-image: url(<?php $this->options->themeUrl($this->options->bg_url); ?>)"
        <?php else: ?>
            style="background-image: url(<?php $this->options->themeUrl('img/bg_pic.jpg'); ?>)"
        <?php endif; ?>>
    </div>

    <!-- Main Body -->
    <div class="app">
        <!-- header -->
        <div class="app-header">
            <div class="bg-black navbar-header">
                <a href="/" class="navbar-brand">
                    <img src="<?php $this->options->themeUrl('img/my-long-logo.png') ?>" alt="logo">
                </a>
            </div>
            <div class="navbar bg-black">
                <form class="navbar-form">
                    <div class="bg-pure-white rounded input-group">
                        <input type="search" class="transparent padder form-control navbar-search rounded" placeholder="搜索你想要的内容..." id="search_input">
                        <span id="search_submit" class="transparent input-group-btn">
                            <button class="transparent btn btn-sm">
                                <span>
                                <span><svg t="1581598687040" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1756" width="16" height="16"><path d="M400.696889 801.393778A400.668444 400.668444 0 1 1 400.696889 0a400.668444 400.668444 0 0 1 0 801.393778z m0-89.031111a311.637333 311.637333 0 1 0 0-623.331556 311.637333 311.637333 0 0 0 0 623.331556z" fill="#2c2c2c" p-id="1757"></path><path d="M667.904 601.998222l314.766222 314.823111-62.919111 62.976-314.823111-314.823111z" fill="#2c2c2c" p-id="1758"></path></svg></span>
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-right">
                    <li class="drowdown">
                        <a href="">
                        <svg t="1581673280610" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11780" width="16" height="16"><path d="M0 484.473118l1024 0 0 55.053763L0 539.526882 0 484.473118z" p-id="11781"></path><path d="M484.473118 0l55.053763 0 0 1024-55.053763 0L484.473118 0z" p-id="11782"></path></svg>
                        </a>
                    </li>
                    <li class="drowdown">
                        <a href="">
                        <svg t="1581672480337" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7707" width="16" height="16"><path d="M881.066667 140.8c14.933333 2.133333 42.666667 32 44.8 44.8v524.8c-2.133333 12.8-29.866667 42.666667-44.8 44.8H637.866667l-17.066667 17.066667-108.8 108.8-96-106.666667-17.066667-19.2H138.666667c-14.933333-2.133333-42.666667-32-44.8-44.8V185.6c2.133333-12.8 29.866667-42.666667 44.8-44.8h742.4m2.133333-55.466667H140.8C100.266667 85.333333 42.666667 142.933333 42.666667 185.6v524.8C42.666667 750.933333 100.266667 810.666667 140.8 810.666667h234.666667l136.533333 149.333333 149.333333-149.333333h219.733334c40.533333 0 98.133333-57.6 98.133333-100.266667V185.6c2.133333-42.666667-55.466667-100.266667-96-100.266667z" p-id="7708"></path><path d="M251.733333 386.133333c-34.133333 0-61.866667 27.733333-61.866666 61.866667 0 34.133333 27.733333 61.866667 61.866666 61.866667s61.866667-27.733333 61.866667-61.866667c0-34.133333-27.733333-61.866667-61.866667-61.866667zM524.8 386.133333c-34.133333 0-61.866667 27.733333-61.866667 61.866667 0 34.133333 27.733333 61.866667 61.866667 61.866667 34.133333 0 61.866667-27.733333 61.866667-61.866667 0-34.133333-27.733333-61.866667-61.866667-61.866667zM795.733333 386.133333c-34.133333 0-61.866667 27.733333-61.866666 61.866667 0 34.133333 27.733333 61.866667 61.866666 61.866667 34.133333 0 61.866667-27.733333 61.866667-61.866667 0-34.133333-27.733333-61.866667-61.866667-61.866667z" p-id="7709"></path></svg>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="">
                        <svg t="1581669254554" class="icon" viewBox="0 0 1024 1024" stroke="currentColor" stroke-width="2" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6854" width="16" height="16"><path d="M975.626636 981.454752c0 23.312464-18.649972 41.962436-41.962436 41.962436s-41.962436-18.649972-41.962436-41.962436l-0.582811-4.079681c0-1.748435 0.582812-3.49687 0.582811-4.662493-26.226522-183.585657-183.585657-318.797951-375.913489-321.129197h-9.324985c-189.996585 2.331246-346.190097 134.04667-374.747866 314.71827 1.165623 3.49687 1.748435 6.993739 1.748435 11.07342l0.582811 4.079681c0 23.312464-19.232783 42.545248-42.545247 42.545248s-42.545248-19.232783-42.545248-42.545248v-0.582811h-0.582811c0-1.165623 0.582812-2.331246 0.582811-3.49687 0-3.49687 0.582812-6.993739 1.165624-9.907797 21.56403-169.598179 135.212294-306.558907 290.240182-365.42288C250.608993 544.346044 191.74502 442.354013 191.74502 326.374502c0-180.671599 139.874787-326.374502 319.963574-326.374502s319.963574 145.702903 319.963574 325.79169c0 116.562322-58.863973 217.971542-148.61696 275.669892 153.279454 58.281161 266.344906 194.076266 289.65737 361.92601 1.748435 4.662493 2.914058 9.324986 2.914058 13.987479v4.079681zM758.237906 325.79169c0-136.377917-110.151394-246.529311-246.529312-246.529311S265.179283 189.413773 265.179283 325.79169s110.151394 246.529311 246.529311 246.529312c135.795105 0 246.529311-110.151394 246.529312-246.529312z" p-id="6855"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- asider -->
        <div class="app-asider bg-white font-gray">
            <div class="user-panel">
                <div class="user-panel-bg">
                    <img src="<?php $this->options->themeUrl('img/bilibili-user-panel.jpg') ?>" alt="">
                </div>
                <div class="user-name">
                    <a href="">
                        <?php $this->author(); ?>
                    </a>
                </div>
                <div class="user-avatar">
                    <img src="<?php $this->options->avatarURL() ?>" alt="">
                </div>
                <div class="user-data">
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">122</p>
                        <p class="user-data-text">归档</p>
                    </a>
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">236</p>
                        <p class="user-data-text">日记</p>
                    </a>
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">+3</p>
                        <p class="user-data-text">访客</p>
                    </a>
                </div>
            </div>
            <ul class="nav">
                <div class="line"></div>
                <li class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>导航</span>
                </li>
                <li class="nav-item">
                    <a href="">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581736244934" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11464" width="16" height="16"><path d="M64 512" p-id="11465" fill="#777777"></path><path d="M512 64 0 512l128 0 0 448 768 0L896 512l128 0L512 64zM640 929.984 384 929.984 384 704l256 0L640 929.984z" p-id="11466" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">首页</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581736195609" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="10588" width="16" height="16"><path d="M512 12.64c-282.752 0-512 229.216-512 512 0 226.208 146.72 418.144 350.144 485.824 25.6 4.736 35.008-11.104 35.008-24.64 0-12.192-0.48-52.544-0.704-95.328-142.464 30.976-172.512-60.416-172.512-60.416-23.296-59.168-56.832-74.912-56.832-74.912-46.464-31.776 3.52-31.136 3.52-31.136 51.392 3.616 78.464 52.768 78.464 52.768 45.664 78.272 119.776 55.648 148.992 42.56 4.576-33.088 17.856-55.68 32.512-68.48-113.728-12.928-233.28-56.864-233.28-253.024 0-55.904 20-101.568 52.768-137.44-5.312-12.896-22.848-64.96 4.96-135.488 0 0 43.008-13.76 140.832 52.48a491.296 491.296 0 0 1 128.16-17.248c43.488 0.192 87.328 5.888 128.256 17.248 97.728-66.24 140.64-52.48 140.64-52.48 27.872 70.528 10.336 122.592 5.024 135.488 32.832 35.84 52.704 81.536 52.704 137.44 0 196.64-119.776 239.936-233.792 252.64 18.368 15.904 34.72 47.04 34.72 94.816 0 68.512-0.608 123.648-0.608 140.512 0 13.632 9.216 29.6 35.168 24.576C877.472 942.624 1024 750.784 1024 524.64c0-282.784-229.248-512-512-512z" p-id="10589" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">仓库</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                                <svg t="1581735889428" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4527" width="16" height="16"><path d="M256 169.984l0 342.016 105.984-64 107.989333 64 0-342.016-214.016 0zM768 86.016q34.005333 0 59.989333 25.002667t25.984 59.008l0 683.989333q0 34.005333-25.984 59.008t-59.989333 25.002667l-512 0q-34.005333 0-59.989333-25.002667t-25.984-59.008l0-683.989333q0-34.005333 25.984-59.008t59.989333-25.002667l512 0z" p-id="4528" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">碎月</div>
                        </div>
                        <b class="nav-item-num">56</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                                <svg t="1581735991456" class="icon" viewBox="0 0 1280 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7114" width="16" height="16"><path d="M1184 1024H96c-52.928 0-96-43.072-96-96V96c0-52.928 43.072-96 96-96h1088c52.928 0 96 43.072 96 96v832c0 52.928-43.072 96-96 96zM128 128v768l297.376-297.376a32.096 32.096 0 0 1 45.248 0L576 704 1152 128H128z m224 320a96 96 0 1 1 0-192 96 96 0 0 1 0 192z" p-id="7115" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">相册</div>
                        </div>
                        <b class="nav-item-num">7000</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581736267453" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="12384" width="16" height="16"><path d="M907.6 814.2c-47.8 50.6-104.6 87.6-170.4 110.8C671.4 948.4 602 960 529 960c-69.8 0-133.4-11-190.6-33.2-57.2-22-106.2-52.8-146.6-92.2-40.6-39.4-72-86.6-94.4-141.6-22.4-55-33.4-115-33.4-180 0-64.2 12.2-123.6 36.6-178.2 24.4-54.6 57.6-102 99.8-142.2 42.2-40.2 91.4-71.6 148-94.6C404.6 75.4 465 64 529 64c55.2 0 108.8 8 160.6 24 52 16 98 40.2 138.2 72.2 40.2 32.2 72.2 72.2 96.2 120.4 24 48.2 36 104.8 36 169.8 0 48.2-6.6 90.8-20 127.6-13.4 37-31.2 67.8-53.6 92.8-22.4 25-47.8 43.6-76.6 56-28.8 12.4-59 18.6-90.6 18.6-32.4 0-58.4-7.6-78-22.8-19.4-15.2-29.2-34.6-29.2-57.8l-6 0c-12.2 19.2-30.8 37.6-56 54.8-25.2 17.2-56 26-92.6 26-55.2 0-97.8-18-127.8-54.2-30-36.2-45-83-45-141 0-33.8 5.6-67 17-100 11.4-33 27.6-62.2 48.6-88 21-25.6 46.2-46.4 75.4-62 29.2-15.6 61.6-23.4 97.4-23.4 30.8 0 56.8 6.4 78 19.2 21 12.8 34.8 28.6 41.4 47l1.2 0 9.8-48.2 108.4 0L714 522.8c-1.6 11.2-3.8 23.6-6.6 37.4-2.8 13.6-4.2 26.4-4.2 38.6 0 13.6 2.6 25 8 34.4 5.2 9.2 15.6 13.8 31 13.8 31.6 0 57.8-16.8 78.6-50.6 20.6-33.8 31-79 31-136 0-48.2-8.2-91-24.4-128.2-16.2-37.4-38.8-68.6-67.6-94-28.8-25.2-63.2-44.4-102.8-57.2-39.8-12.8-83.2-19.2-130.2-19.2-51.2 0-98 9-140.6 27s-79 43-109 74.6c-30 31.8-53.4 69-70 112C190.4 418.2 182 464.6 182 514.4c0 53 8.8 100.8 26.2 143.4 17.4 42.6 42 78.8 73.6 109 31.6 30.2 69.4 53.2 113.2 69.2 43.8 16 92.2 24 144.8 24 65.8 0 122.4-10.4 169.8-31.4 47.4-20.8 91-49.8 130.8-86.8L907.6 814.2zM526.6 376c-19.4 0-36.6 5.6-51.2 16.8-14.6 11.2-27 25.4-37.2 42.8-10.2 17.2-17.8 36.4-23.2 57.2-5.2 20.8-8 41-8 60.2 0 9.6 1 19.8 3 30.8 2 10.8 6 20.8 12.2 30.2 6 9.2 14 16.8 23.8 22.8 9.8 6 22.8 9 39 9 22 0 40.6-5.4 56-16.2 15.4-10.8 28-24.4 37.8-41 9.8-16.4 16.8-34.4 21.4-53.6 4.4-19.2 6.6-37 6.6-53 0-12.8-1.2-25.4-3.6-38-2.4-12.4-6.6-23.6-12.8-33.8-6-10-14.4-18.2-25-24.6C555 379.2 542 376 526.6 376z" p-id="12385" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">留言</div>
                        </div>
                        <b class="nav-item-num f-right">+2</b>
                    </a>
                </li>

                <div class="line"></div>
                <li class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>组成</span>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581736981225" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="18181" width="16" height="16"><path d="M446.141079 484.381743 87.103734 484.381743c-19.120332 0-36.116183-16.995851-36.116183-36.116183L50.987552 91.352697c0-19.120332 16.995851-36.116183 36.116183-36.116183L446.141079 55.236515c19.120332 0 36.116183 16.995851 36.116183 36.116183l0 359.037344C482.257261 467.385892 465.261411 484.381743 446.141079 484.381743z" p-id="18182" fill="#777777"></path><path d="M953.892116 484.381743 596.979253 484.381743c-19.120332 0-36.116183-16.995851-36.116183-36.116183L560.863071 91.352697c0-19.120332 16.995851-36.116183 36.116183-36.116183l356.912863 0c19.120332 0 36.116183 16.995851 36.116183 36.116183l0 359.037344C990.008299 467.385892 973.012448 484.381743 953.892116 484.381743z" p-id="18183" fill="#777777"></path><path d="M446.141079 994.257261 87.103734 994.257261c-19.120332 0-36.116183-16.995851-36.116183-36.116183L50.987552 599.103734c0-19.120332 16.995851-36.116183 36.116183-36.116183L446.141079 562.987552c19.120332 0 36.116183 16.995851 36.116183 36.116183l0 359.037344C482.257261 977.261411 465.261411 994.257261 446.141079 994.257261z" p-id="18184" fill="#777777"></path><path d="M953.892116 994.257261 596.979253 994.257261c-19.120332 0-36.116183-16.995851-36.116183-36.116183L560.863071 599.103734c0-19.120332 16.995851-36.116183 36.116183-36.116183l356.912863 0c19.120332 0 36.116183 16.995851 36.116183 36.116183l0 359.037344C990.008299 977.261411 975.136929 994.257261 953.892116 994.257261z" p-id="18185" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">分类</div>
                        </div>
                        <i class="icon-angle-circled-right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581736996576" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="19174" width="16" height="16"><path d="M874.338462 374.153846H653.784615c-51.2 0-82.707692-31.507692-82.707692-82.707692V70.892308c0-17.723077-13.784615-31.507692-31.507692-31.507693H212.676923C161.476923 39.384615 118.153846 82.707692 118.153846 133.907692v756.184616c0 51.2 43.323077 94.523077 94.523077 94.523077h598.646154c51.2 0 94.523077-43.323077 94.523077-94.523077V405.661538c0-17.723077-13.784615-31.507692-31.507692-31.507692z m25.6-120.123077L691.2 45.292308c-3.938462-3.938462-11.815385-5.907692-17.723077-5.907693-11.815385 0-23.630769 9.846154-23.630769 21.661539v167.384615c0 35.446154 31.507692 66.953846 66.953846 66.953846h167.384615c11.815385 0 21.661538-11.815385 21.661539-23.630769 0-5.907692-1.969231-13.784615-5.907692-17.723077z" p-id="19175" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">页面</div>
                        </div>
                        <i class="icon-angle-circled-right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/">
                        <div>
                            <div class="nav-icon">
                            <svg t="1581737046614" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="20305" width="16" height="16"><path d="M819.2 729.088V757.76c0 33.792-27.648 61.44-61.44 61.44H266.24c-33.792 0-61.44-27.648-61.44-61.44v-28.672c0-74.752 87.04-119.808 168.96-155.648 3.072-1.024 5.12-2.048 8.192-4.096 6.144-3.072 13.312-3.072 19.456 1.024C434.176 591.872 472.064 604.16 512 604.16c39.936 0 77.824-12.288 110.592-32.768 6.144-4.096 13.312-4.096 19.456-1.024 3.072 1.024 5.12 2.048 8.192 4.096 81.92 34.816 168.96 79.872 168.96 154.624z" p-id="20306" fill="#777777"></path><path d="M359.424 373.76a168.96 152.576 90 1 0 305.152 0 168.96 152.576 90 1 0-305.152 0Z" p-id="20307" fill="#777777"></path></svg>
                            </div>
                            <div class="nav-item-name">友链</div>
                        </div>
                        <i class="icon-angle-circled-right"></i>
                    </a>
                </li>
                <!--
                <div class="line"></div>
                <li class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>联系</span>
                </li>
                -->
            </ul>
            <div class="asider-footer">
                <a href="" class="col-4 p-b p-t">
                    <div>
                    <svg t="1581748032750" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3657" width="16" height="16"><path d="M853.333333 0H170.666667C73.955556 0 0 73.955556 0 170.666667v682.666666c0 96.711111 73.955556 170.666667 170.666667 170.666667h682.666666c96.711111 0 170.666667-73.955556 170.666667-170.666667V170.666667c0-96.711111-73.955556-170.666667-170.666667-170.666667z m-17.066666 398.222222v22.755556c0 216.177778-164.977778 466.488889-472.177778 466.488889-96.711111 0-182.044444-28.444444-256-73.955556h39.822222c79.644444 0 147.911111-28.444444 204.8-68.266667-73.955556 0-136.533333-51.2-159.288889-113.777777 11.377778 0 17.066667 5.688889 28.444445 5.688889 17.066667 0 22.755556 0 39.822222-5.688889C182.044444 614.4 113.777778 546.133333 113.777778 466.488889c56.888889 11.377778 62.577778 17.066667 85.333333 22.755555-39.822222-34.133333-56.888889-85.333333-56.888889-142.222222 0-28.444444 5.688889-56.888889 22.755556-79.644444 79.644444 96.711111 204.8 164.977778 341.333333 170.666666-5.688889-11.377778-5.688889-22.755556-5.688889-34.133333 0-91.022222 73.955556-164.977778 164.977778-164.977778 45.511111 0 91.022222 17.066667 119.466667 51.2 39.822222-5.688889 73.955556-22.755556 108.088889-39.822222-11.377778 39.822222-39.822222 68.266667-73.955556 91.022222 34.133333-5.688889 68.266667-11.377778 96.711111-28.444444-22.755556 34.133333-51.2 62.577778-79.644444 85.333333z" fill="#1DA1F3" p-id="3658"></path></svg>
                    </div>
                    <div>推特</div>
                </a>
                <a href="" class="col-4 p-b p-t">
                    <div>
                    <svg t="1581748131608" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4450" width="16" height="16"><path d="M352.841143 417.206857h318.902857v116.443429h-318.902857v-116.443429zM794.624 0H229.083429A228.878629 228.878629 0 0 0 0 229.083429v565.540571A229.317486 229.317486 0 0 0 229.083429 1024h565.540571A229.376 229.376 0 0 0 1024 794.624V229.083429A229.317486 229.317486 0 0 0 794.624 0zM240.786286 232.301714h542.427428v60.854857H240.786286V232.301714z m47.104 361.910857v-237.568h448.219428v237.568H287.890286z m510.537143 197.193143H225.28v-60.269714h167.058286a809.077029 809.077029 0 0 0-59.977143-102.985143l59.977143-23.698286A611.474286 611.474286 0 0 1 456.118857 731.428571h113.517714a781.955657 781.955657 0 0 0 59.099429-126.976l65.243429 23.698286a674.728229 674.728229 0 0 1-55.003429 102.985143h159.451429v60.269714z" p-id="4451" fill="#1296db"></path></svg>
                    </div>
                    <div>豆瓣</div>
                </a>
                <a href="" class="col-4 p-b p-t">
                    <div>
                    <svg t="1581747847903" class="icon" viewBox="0 0 1129 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2105" width="16" height="16"><path d="M234.908525 9.656195a80.468288 80.468288 0 0 1 68.398044 0 167.374038 167.374038 0 0 1 41.84351 30.577949l160.936576 140.819503H621.156306L782.092881 40.234144a168.983404 168.983404 0 0 1 41.84351-30.577949 80.468288 80.468288 0 0 1 107.022823 66.788678 80.468288 80.468288 0 0 1-17.703024 53.913753 449.817728 449.817728 0 0 1-35.406046 32.187315 232.553351 232.553351 0 0 1-22.531121 18.507706h100.58536a170.59277 170.59277 0 0 1 118.288383 53.10907A171.397453 171.397453 0 0 1 1128.106519 352.4511v462.692655a325.896565 325.896565 0 0 1-4.023415 70.00741 178.639599 178.639599 0 0 1-80.468288 112.655603 173.006819 173.006819 0 0 1-92.53853 25.749852H212.377404a341.18554 341.18554 0 0 1-72.421459-4.023415 177.834916 177.834916 0 0 1-111.046237-80.468287A172.202136 172.202136 0 0 1 1.550491 846.526387V388.66183A360.497929 360.497929 0 0 1 1.550491 321.873151a177.030233 177.030233 0 0 1 160.936575-143.233552h105.413457c-16.89834-12.070243-31.382632-26.554535-46.671607-39.429461a80.468288 80.468288 0 0 1-25.749852-65.983996A80.468288 80.468288 0 0 1 234.908525 9.656195M216.400819 321.873151a80.468288 80.468288 0 0 0-63.569948 57.937167 108.632188 108.632188 0 0 0 0 30.577949v380.615001a80.468288 80.468288 0 0 0 55.523119 80.468288 106.21814 106.21814 0 0 0 34.601364 5.63278h654.207179a80.468288 80.468288 0 0 0 76.444873-47.47629 112.655603 112.655603 0 0 0 8.046829-53.10907v-354.060465a135.186723 135.186723 0 0 0 0-38.624779 80.468288 80.468288 0 0 0-52.304387-54.718435 129.553943 129.553943 0 0 0-49.890338-7.242146H254.220914a268.764081 268.764081 0 0 0-37.820095 0z m0 0" fill="#1296db" p-id="2106"></path><path d="M348.368811 447.40368a80.468288 80.468288 0 0 1 55.523118 18.507706 80.468288 80.468288 0 0 1 28.163901 59.546533v80.468287a80.468288 80.468288 0 0 1-16.093658 51.499705 80.468288 80.468288 0 0 1-131.967992-9.656195 104.608774 104.608774 0 0 1-10.460877-54.718436v-80.468287a80.468288 80.468288 0 0 1 70.00741-67.593362z m416.021047 0a80.468288 80.468288 0 0 1 86.101068 75.64019v80.468288a94.147897 94.147897 0 0 1-12.070243 53.10907 80.468288 80.468288 0 0 1-132.772675 0 95.757262 95.757262 0 0 1-12.874926-57.132485v-80.468287a80.468288 80.468288 0 0 1 70.00741-70.812093z m0 0" fill="#1296db" p-id="2107"></path></svg>
                    </div>
                    <div>B站</div>
                </a>
            </div>
        </div>

        <!-- content -->
        <div class="app-content">
            <main class="app-content-body f-between">
                <div class="main-col">
                    <div class="wrapper-lg bg-white border-radius">
                        <h1 class="text-black no-margin">ZeroVoid</h1>
                        <small class="text-muted letterspace">我只愿</small>
                        <br/>
                        <small class="text-muted letterspace">面朝大海,春暖花开</small>
                    </div>
                </div>
                <div class="main-asider bg-white">
                    <div class="main-asider-header">
                        <div class="h-w text-center">
                            <div class="col-4 p-b p-t text-center">
                            <svg t="1581775950267" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5354" width="16" height="16"><path d="M908.4928 381.7472H655.36C753.4592 18.6368 587.776 0 587.776 0c-70.2464 0-55.6032 55.7056-60.928 65.024 0 177.5616-188.2112 316.7232-188.2112 316.7232v503.5008c0 49.7664 67.584 67.584 94.208 67.584H813.056c35.84 0 65.024-94.0032 65.024-94.0032 94.0032-320.7168 94.0032-416.1536 94.0032-416.1536 0-66.2528-63.488-60.928-63.488-60.928z m-673.6896 0.1024H83.2512c-31.3344 0-31.744 30.8224-31.744 30.8224l31.232 507.904c0 32.256 32.256 32.256 32.256 32.256h131.2768c27.2384 0 27.0336-21.2992 27.0336-21.2992V420.352c0-38.912-38.5024-38.5024-38.5024-38.5024z" p-id="5355" fill="#777777"></path></svg>
                            </div>
                            <div class="col-4 p-b p-t">
                                test
                            </div>
                            <div class="col-4 p-b p-t">
                                test
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- footer -->
        <div class="app-footer bg-white">
            <div class="bg-gray wrapper h-w f-between">
                <div>Copyright &copy 2020</div>
                <div>
                    <a href="">京ICP备</a>
                    &nbspPower By&nbsp
                    <a href="">Typecho</a>
                    &nbsp| Theme By&nbsp
                    <a href="">Void</a>
                </div>
            </div>
            <div class="right-side-btn">
                <div class="btn">
                    <i class="icon-angle-circled-up"></i>
                </div>
            </div>
        </div>
    </div>

<!-- Include footer -->
<?php include('footer.php'); ?>