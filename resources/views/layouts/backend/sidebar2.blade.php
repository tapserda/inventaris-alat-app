<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
      <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') &mdash; Laravel</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
  
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/icheck/skins/minimal/minimal.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, "USER NAME"</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
                <form id="logout-form" action="" method="POST" style="display: none;">
                  @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">INVALSE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">IVS</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">General Dashboard</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="">List User</a></li>
                  <li><a class="nav-link" href="">Tambah User</a></li>
                </ul>
              </li>
              <li class="menu-header">Starter</li>
                <li class="nav-item dropdown">
                  <a href="" class="nav-link has-dropdown"><i class="fas fa-square"></i><span>Postingan</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">List Postingan</a></li>
                    <li><a class="nav-link" href="">Tambah Postingan</a></li>
                    <li><a class="nav-link" href="">Postingan Terhapus</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Kategori</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">List Kategori</a></li>
                    <li><a class="nav-link" href="">Tambah Kategori</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="" class="nav-link has-dropdown"><i class="fas fa-tag"></i><span>Tag</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">List Tag</a></li>
                    <li><a class="nav-link" href="">Tambah Tag</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="" class="nav-link"><i class="fab fa-php"></i><span>Phpmyadmin</span></a>
                </li>
              </li>
            </ul>
        </aside>
      </div>