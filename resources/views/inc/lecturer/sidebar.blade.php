<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="" class="logo">
                <img src="{{ asset('assets/images/logo-lg.png') }}" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="/lecturer" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="/lecturer/profile" class="waves-effect">
                        <i class="mdi mdi-face-profile"></i>
                        <span> Profile</span>
                    </a>
                </li>

                

                

                
                

                <li>
                        
                        <a class="waves-effect" href="javascript:document.admin.submit()">
                            
                                {{ csrf_field() }}
                                <i class="mdi mdi-logout "></i>
                                <span> Logout </span>
                        </a>
                    <form name = "admin" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </li>

                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>