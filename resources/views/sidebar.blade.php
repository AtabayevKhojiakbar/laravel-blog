<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">



                <li class="nav-item {{  request()->routeIs('adminpost.index') ? 'active' : '' }}">
                    <a href="{{route('adminpost.index')}}">
                        <i class="fas fa-pen"></i>
                        <p>Postlar</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.sher.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-bars"></i>
                        <p>Sherlar</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>



