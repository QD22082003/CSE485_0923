
    <div class="col-md-3 sidebar bg-white"  id="blockMenu">
        <div class="logo d-flex" id="logo" style="margin-left: 10px" onclick="xuat()">
            <a>
                <img src="../image/avt1.png" class="rounded" alt="..." style="max-height: 50px;">
                <img src="../image/avt.png" class="rounded" alt="..." style="max-height: 50px;">
            </a>

        </div>

        <div class="container-fluid link-light vh-100" style="max-height: calc(100vh);overflow-y: auto;margin-top: 20px;" >
            <div class="row">
                <div class="btn-vertical menuleft">
<!--                    //1-->
                    <button type="button" class="btn mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#menu1" id="button1">
                        <i class="fa-regular fa-user fa-lg"></i><a href="#" class="text-decoration-none">User</a>
                        <i class="fa-solid fa-caret-right " id="right1"></i>
                    </button>
                    <div id="menu1" class="collapse w-100 menuCon">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="../screens/user.php" class="text-decoration-none"><i class="fa-solid fa-minus"></i> Users</a>
                            </li>
                            <li class="list-group-item">
                                <a href="../screens/index.php" class="text-decoration-none"><i class="fa-solid fa-minus"></i> Groups</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i> Permissions</a>
                            </li>
                        </ul>
                    </div>
<!--                    //2-->
                    <button type="button" class="btn mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#menu2" id="button2">
                        <i class="fa-solid fa-box fa-lg"></i><a href="#" class="text-decoration-none">CMS</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right2"></i>
                    </button>
                    <div id="menu2" class="collapse w-100 menuCon">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Page</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Blog</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"class="text-decoration-none"><i class="fa-solid fa-minus"></i>Comment</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Menu Setup</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Subscribers</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"class="text-decoration-none"><i class="fa-solid fa-minus"></i>Contact Us</a>
                            </li>
                        </ul>
                    </div>
<!--                    3-->
                    <button type="button" class="btn mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#menu3" id="button3">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Config</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <div id="menu3" class="collapse w-100 menuCon">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Site</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Reading</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"class="text-decoration-none"><i class="fa-solid fa-minus"></i>Social</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Widget</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-decoration-none"><i class="fa-solid fa-minus"></i>Theme</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#"class="text-decoration-none"><i class="fa-solid fa-minus"></i>hfghfg</a>
                            </li>
                        </ul>
                    </div>
<!--                    4-->
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Dashboard</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Courses</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Instructor</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Apps</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Charts</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                    <button type="button" class="btn btn-light mb-1 rounded-4 menu-button" data-toggle="collapse" data-target="#">
                        <i class="fa-solid fa-gear fa-lg"></i><a href="#" class="text-decoration-none">Bootstrap</a>
                        <i class="fa-solid fa-caret-right ml-2" id="right3"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
