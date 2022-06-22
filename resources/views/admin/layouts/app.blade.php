<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
@include('admin.layouts.bar')
@include('admin.layouts.side')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@yield('content')
</body>
</html>
