<!DOCTYPE html>
<html>
  </head>
  @include('admin.css')
  <body>
    @include('admin.header')

    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      @include('admin.body')
      @include('admin.footer')
  </body>
</html>