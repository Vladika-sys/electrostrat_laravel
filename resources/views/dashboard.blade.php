<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"
        integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q=="
        crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Electrostrat SRL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#services">
              <span data-feather="file"></span>
              Servicii
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#comenzi">
              <span data-feather="shopping-cart"></span>
              Comenzi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback">
              <span data-feather="users"></span>
              Feedback
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              X
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              X
            </a>
          </li>
        </ul>


      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

      </div>

<div id="services" class="tabel d-none">
    <h2>Servicii</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead class="text-center">

          <tr>
            <th>id</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image path</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody class="text-center">
            @foreach($services as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->title}}</td>
            <td style="width:60%;">{{$item->description}}</td>
            <td>{{$item->image_path}}</td>
            <td>
                <button class="btn btn-primary">
                    Edit
                </button>
                <button class="btn btn-danger">
                    Delete
                </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
<div id="comenzi" class="tabel d-none">
    <h2>Comenzi</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="text-center">

            <tr>
              <th>id</th>
              <th>Slug</th>
              <th>Name</th>
              <th>Email</th>
              <th>Company</th>
              <th>Subject</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody class="text-center">
              @foreach($orders as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->slug}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->company}}</td>
              <td>{{$item->subject}}</td>
              <td>{{$item->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
<div id="feedback" class="tabel d-none">
    <h2>Section title3</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead class="text-center">

            <tr>
              <th>id</th>
              <th>Slug</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image path</th>
            </tr>
          </thead>
          <tbody class="text-center">
              @foreach($services as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->slug}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->description}}</td>
              <td>{{$item->image_path}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
      {{-- ------------------------------------------------------------- --}}

      {{-- ------------------------------------------------------------ --}}

      {{-- ------------------------------------------------------------------------------------- --}}
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
