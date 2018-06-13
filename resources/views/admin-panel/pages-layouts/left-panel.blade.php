<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showIndex')}}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="{{route('showIndexSecond')}}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showLayoutTopNav')}}"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="{{route('showLayoutBoxed')}}"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="{{route('showLayoutFixed')}}"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="{{route('showLayoutCollapsed')}}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('showWidgets')}}">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showChart1')}}"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                    <li><a href="{{route('showChart2')}}"><i class="fa fa-circle-o"></i> Morris</a></li>
                    <li><a href="{{route('showChart3')}}"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="{{route('showChart4')}}"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showUiGeneral')}}"><i class="fa fa-circle-o"></i> General</a></li>
                    <li><a href="{{route('showUiIcons')}}"><i class="fa fa-circle-o"></i> Icons</a></li>
                    <li><a href="{{route('showUiButtons')}}"><i class="fa fa-circle-o"></i> Buttons</a></li>
                    <li><a href="{{route('showUiSliders')}}"><i class="fa fa-circle-o"></i> Sliders</a></li>
                    <li><a href="{{route('showUiTimeline')}}"><i class="fa fa-circle-o"></i> Timeline</a></li>
                    <li><a href="{{route('showUiModals')}}"><i class="fa fa-circle-o"></i> Modals</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showFormGeneral')}}"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="{{route('showFormAdvanced')}}"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="{{route('showFormEditors')}}"><i class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showSimpleTable')}}"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="{{route('showTable')}}"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('showCalendar')}}">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showMailboxCompose')}}"><i class="fa fa-circle-o"></i> Mailbox 1</a></li>
                    <li><a href="{{route('showMailboxMailbox')}}"><i class="fa fa-circle-o"></i> Mailbox 2</a></li>
                    <li><a href="{{route('showMailboxReadMail')}}"><i class="fa fa-circle-o"></i> Mailbox 3</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('showExamplesInvoice')}}"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="{{route('showExamplesInvoicePrint')}}"><i class="fa fa-circle-o"></i> Invoice Print</a></li>
                    <li><a href="{{route('showExamplesProfile')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="{{route('showExamplesLogin')}}"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="{{route('showExamplesRegister')}}"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="{{route('showExamplesLockscreen')}}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="{{route('showExamples404')}}"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="{{route('showExamples500')}}"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="{{route('showExamplesBlank')}}"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="{{route('showExamplesPace')}}"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>