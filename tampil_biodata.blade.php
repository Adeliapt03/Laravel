<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Menambahkan tautan untuk jenis font "Book Antiqua" -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Book+Antiqua&display=swap">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            
            background-color: #008080; /* Tosca atau Teal Green */
            font-family: 'Book Antiqua', sans-serif; /* Mengubah jenis font menjadi "Book Antiqua" */
            color: Teal; /* Warna teks menjadi Tosca atau Teal Green */
        }
        
    </style>
</head>

<body>
    <div class="container mt-4">
      <div class="card">
        <div class="card-header text-center font-weight-bold">
        <h1>________________________________</h1> 
        <h1>______  HI GOOD PEOPLE ______</h1>
          <h5>  here your data received  </h5>
          <h6>`` thankyou ``</h6>
          <h1>___________________________</h1>

        </div>
        <div class="card-body center-text"> <!-- Mengatur teks di tengah -->
        <div class="card-body">
          <h5>Full Name : {{ $send->fullname }}</h5>
          <h5>Nick Name : {{ $send->nickname }}</h5>
          <h5>NIM : {{ $send->nim }}</h5>
          <h5>Email : {{ $send->email }}</h5>
          <h5>Batch of Student : {{ $send->batchofstudent }}</h5>
          <h5>Gender : {{ $send->gender }}</h5>
          <h5>Class Day : {{ $send->classday }}</h5>
        </div>
      </div>
    </div>
</body>
</html>