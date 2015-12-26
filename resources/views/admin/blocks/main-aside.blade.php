<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <div class="user-panel">
            <div class="pull-left image">
                {{--<img width="45" height="45" src="" class="img-circle" alt="User Image">--}}
                <div style="width: 45px; height: 45px;"></div>
            </div>
            <div class="pull-left info">
                <p>{{ env('ADMIN_USERNAME') }}</p>
                <!-- Status -->
            </div>
        </div>

        <!-- search form (Optional) -->
        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <li><a href="{{ route('admin.user.index') }}">Manage User <i class="fa fa-link"></i> <span></span></a></li>
            {{--<li class="treeview">--}}
                {{--<a href="{{ route('admin.product.index') }}"><i class="fa fa-link"></i> <span>产品</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{ route('admin.product.index') }}">产品列表</a></li>--}}
                    {{--<li><a href="{{ route('admin.catelabel.product') }}">分类标签</a></li>--}}
                    {{--<li><a href="{{ route('admin.stock.index') }}">库存</a></li>--}}
                    {{--<li><a href="{{ route('') }}">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>