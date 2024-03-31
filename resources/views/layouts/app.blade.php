<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title',env('APP_NAME'))</title>

    <link
      rel="shortcut icon"
      href="{{asset('public/assets/compiled/svg/favicon.svg')}}"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="{{asset('public/assets/compiled/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/compiled/css/app-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/compiled/css/iconly.css')}}" />
    
  </head>

  <body>
    <script src="{{asset('public/assets/static/js/initTheme.js')}}"></script>
    <div id="app">
      <div id="sidebar">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.html">
                  <img src="{{asset('public/images/logo.png')}}" alt="Logo" srcset="" class="ww-100"/>
                </a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item active">
                <a href="{{route('dashboard')}}" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('user.list') }}" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Volunteer List</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('blog_list') }}" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Blog List</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('skill_list') }}" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Skill List</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('activity_list') }}" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Volunteer Activity</span>
                </a>
              </li>
              {{-- <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Components</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="component-accordion.html" class="submenu-link"
                      >Accordion</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-alert.html" class="submenu-link"
                      >Alert</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-badge.html" class="submenu-link"
                      >Badge</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-breadcrumb.html" class="submenu-link"
                      >Breadcrumb</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-button.html" class="submenu-link"
                      >Button</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-card.html" class="submenu-link">Card</a>
                  </li>

                  <li class="submenu-item">
                    <a href="component-carousel.html" class="submenu-link"
                      >Carousel</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-collapse.html" class="submenu-link"
                      >Collapse</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-dropdown.html" class="submenu-link"
                      >Dropdown</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-list-group.html" class="submenu-link"
                      >List Group</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-modal.html" class="submenu-link"
                      >Modal</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-navs.html" class="submenu-link">Navs</a>
                  </li>

                  <li class="submenu-item">
                    <a href="component-pagination.html" class="submenu-link"
                      >Pagination</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-progress.html" class="submenu-link"
                      >Progress</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-spinner.html" class="submenu-link"
                      >Spinner</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-toasts.html" class="submenu-link"
                      >Toasts</a
                    >
                  </li>
                  <li class="submenu-item">
                    <a href="component-tooltip.html" class="submenu-link"
                      >Tooltip</a
                    >
                  </li>
                </ul>
              </li> --}}
              <li class="sidebar-item">
                <a href="{{route('organization.index')}}" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Organization</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('event.index')}}" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Event</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('activity.index')}}" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Activity</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{route('logOut')}}" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h2 class="">@yield('title')</h2>
        </div>
        <div class="page-content">
          <section class="row">
            @yield('content')
          </section>
        </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>{{ date('Y') }} &copy; Volunteer</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"
                  ><i class="bi bi-heart-fill icon-mid"></i
                ></span>
                by <a href="https://saugi.me">Jannat</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{asset('public/assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('public/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('public/assets/compiled/js/app.js')}}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{asset('public/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/assets/static/js/pages/dashboard.js')}}"></script>
  </body>
</html>
