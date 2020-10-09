    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">  <?php
                        //---------- USES DE LAS CLASES DE NAMESPACES ----
                        use \clases\ctrl_session\Ctrl_Session;
                        //-----------------------------------------------
                        $nombre_usuario = Ctrl_Session::get_nombre_usuario();
                        echo $nombre_usuario;
                        ?>
                        </p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Monitor</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item active" href="#"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul>
    </aside>