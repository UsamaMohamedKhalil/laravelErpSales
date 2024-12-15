

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="content-header bg-light py-3 shadow-sm rounded">
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- Left Section: Page Title -->
      <div class="col-sm-6">
        <h1 class="m-0 text-primary font-weight-bold">
          @yield('contentheader')
        </h1>
      </div>
      
      <!-- Right Section: Breadcrumb -->
      <div class="col-sm-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0 float-sm-right">
            <li class="breadcrumb-item">
              <a href="#" class="text-secondary">@yield('contentheaderlink')</a>
            </li>
            <li class="breadcrumb-item active text-dark" aria-current="page">
              @yield('contentheaderactive')
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>