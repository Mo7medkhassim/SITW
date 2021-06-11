       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <div class="sidebar">
               <!-- Sidebar user (optional) -->
               <a href="" class="brand-link">
                   <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                   <span class="brand-text pl-2 font-weight-lighter">@lang('site.name')</span>
               </a>
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('dashboard.home') }}">
                               <i class="nav-icon fas fa-home"></i>
                               <p> @lang('site.dashboard') </p>
                           </a>
                       </li>
                       <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                               <i class="fas fa-project-diagram nav-icon"></i>
                               <p>
                               @lang('site.projects')
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="../../index.html" class="nav-link e-fonts">
                                       <i class="far fa-circle nav-icon e-icon"></i>
                                       <p> @lang('site.all_projects')</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="#" class="nav-link e-fonts">
                                       <i class="far fa-circle nav-icon e-icon"></i>
                                       <p> @lang('site.create')</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                               <i class="far fa-newspaper nav-icon"></i>
                               <p>
                               @lang('site.blog')
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="{{ route('post') }}" class="nav-link e-fonts">
                                       <i class="far fa-file-alt nav-icon e-icon"></i>
                                       <p>Posts</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="../../index2.html" class="nav-link e-fonts">
                                       <i class="far fa-list-alt nav-icon e-icon"></i>
                                       <p>Categories</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="../../index2.html" class="nav-link e-fonts">
                                       <i class="fas fa-hashtag nav-icon e-icon"></i>
                                       <p>Tags</p>
                                   </a>
                               </li>
                           </ul>
                       </li>

                       <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-user-shield"></i>
                               <p>
                                   @lang('site.administration')
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item ">
                                   <a href="" class="nav-link e-fonts">
                                       <i class="far fa-circle nav-icon e-icon"></i>
                                       <span>@lang('system.system')</span>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="" class="nav-link e-fonts">
                                       <i class="far fa-circle nav-icon e-icon"></i>
                                       <span class="">@lang('site.users')</span>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="" class="nav-link e-fonts">
                                       <i class="far fa-circle nav-icon e-icon"></i>
                                       <span class="">@lang('site.role')</span>
                                   </a>
                               </li>
                           </ul>
                       </li>

                       <li class="nav-item has-treeview">
                           <a href="#" class="nav-link">
                               <i class="nav-icon far fa-envelope"></i>
                               <p>
                                   @lang('site.mailbox')
                                   <i class="fas fa-angle-left right"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="../mailbox/mailbox.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Inbox</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="../mailbox/compose.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Compose</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="../mailbox/read-mail.html" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Read</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
               <!-- /.sidebar-menu -->
           </div>
           <!-- /.sidebar -->
       </aside>
