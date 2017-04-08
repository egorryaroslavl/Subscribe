<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="egorr" style="height:50px" class="img-circle img-responsive"
                                 src="/inspinia/img/avatar.png"/>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">EGORR</strong>
                             </span> <span class="text-muted text-xs block">Админ  <b class="caret"></b></span> </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="logout">Выйти</a></li>
                    </ul>
                </div>
            </li>
            <?php   $menu = Config::get( 'admin.menu' );   ?>
            @if(count($menu)>0)
                @foreach($menu as $item)
                    <li>
                        <a href="{{$item['href']}}"><i class="{{$item['icon']}}"></i> <span
                                    class="nav-label">{{$item['name']}}</span></a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</nav>
<style>
    .nav > li > a {
        color:       #c0cddf;
        font-weight: normal;
        font-size: 1.3rem;
        font-family:RobotoRegular;
        }
</style>