<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto">
            <h1 class="text-center">Blogger</h1>
            </li>
        </ul>
      </div>

<!-- Side Bar Started-->

      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item">
            <a class="d-flex align-items-center" href="{{route('admin')}}">
              <i data-feather="home"></i>
              <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
            </a>
          </li>
          <li class=" navigation-header">
            <span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span>
            <i data-feather="more-horizontal"></i>
  <li class=" nav-item">
    <a class="d-flex align-items-center" href="#">
      <i data-feather="file-text"></i>
      <span class="menu-title text-truncate" data-i18n="Category">Category</span></a>
  <ul class="menu-content">
      </li>
          <li><a class="d-flex align-items-center" href="{{route('admin.createcategory')}}">
            <i data-feather="circle"></i>
            <span class="menu-item text-truncate" data-i18n="Create">Create</span>
          </a>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a class="d-flex align-items-center" href="#">
          <i data-feather="file-text"></i>
          <span class="menu-title text-truncate" data-i18n="tags">Tags</span></a>
        <ul class="menu-content">
          <li>
            <a class="d-flex align-items-center" href="{{route('admin.tags')}}">
              <i data-feather="circle"></i>
              <span class="menu-item text-truncate" data-i18n="Create">Create</span></a>
          </li>


        </ul>
      </li>
      <li class=" nav-item">
        <a class="d-flex align-items-center" href="#">
          <i data-feather="file-text"></i>
          <span class="menu-title text-truncate" data-i18n="post">POST</span></a>
        <ul class="menu-content">
          <li><a class="d-flex align-items-center" href="{{route('admin.post')}}">
            <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Create POST</span></a>
          </li>

        </ul>
      </li>
     
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
