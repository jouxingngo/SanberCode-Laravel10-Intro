@include("partials.header")
@include("partials.navbar")
@include("partials.sidebar")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield("title")</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">@yield("title")</h3>
        </div>
        <div class="card-body">
          @yield("content")
        </div>
      </div>
    </section>
  </div>

@include("partials.footer")