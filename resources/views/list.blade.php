<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adell Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/">Adell</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo"><img src="/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/student">My Task</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>

  </header><!-- End Header -->

  <!-- ======= Start Hasil Form ======= -->
  <div id="form" class="form-mf sect-pt4 route mt-4 mb-4" style="overflow: auto; max-height: 400px;">
  <div class="container mt-5">
    <h1 class="text-center mb-5">Biodata List</h1>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Nick Name</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Batch of Student</th>
          <th>Gender</th>
          <th>Class Day</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <form action="/student/create" method="get">
          <button class="badge bg-success border-0 mb-2" type="submit">New Data</button>
        </form>
        @foreach ($data as $student)
          <tr>
            <td>{{ $student->fullname }}</td>
            <td>{{ $student->nickname }}</td>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batchofstudent }}</td>
            <td>{{ $student->gender}}</td>
            <td>{{ $student->classday }}</td>
            <td>
              <form action="/student/{{ $student->id }}/edit" method="GET">
              <button class="badge bg-primary border-0">Edit</button>
              </form>
              <form action="/student/{{ $student->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
  <!-- ======= End Hasil Form ======= -->
</body>
</html>