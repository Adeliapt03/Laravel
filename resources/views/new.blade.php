<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Menambahkan tautan untuk jenis font "Book Antiqua" -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Book+Antiqua&display=swap">

    <title>Technology Information Udayana</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #008080; /* Tosca atau Teal Green */
            font-family: 'Book Antiqua', sans-serif; /* Mengubah jenis font menjadi "Book Antiqua" */
            color: white; /* Warna teks menjadi putih */
        }
        /* Mengatur tata letak dan padding formulir */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 50px;
            border: 1px solid #008080;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2); /* Latar belakang transparan */
        }

        .form-group {
            width: 100%;
            max-width: 400px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container" data-aos="fade-up">


    <h1 class="text-center">HI IT LOVERS</h1>
    <h3 class="text-center">Please Fill the Form bellow</h3>
    <h3 class="text-center">____________________________</h3>
    <h6 class="text-center">Internet Programming</h6>
    <h6 class="text-center">Class A / 13.30-16.00</h6>
    <h6 class="text-center">Instructor: Mr. I Nyoman Piarsa S.T.,M.T</h6>
    <h3 class="text-center">____________________________</h3>
    <div class="section-title">
</div>
      <form name="formbio" action="/student" method="post" onsubmit="return validateForm()">
      @csrf
        <div class="form-group mb-4">
          <strong><label for="fullname">Full Name :</label></strong>
          <input type="text" class="form-control" name="fullname">
        </div>

        <div class="form-group mb-4">
          <strong><label for="nickname">Nick Name :</label></strong>
          <input type="text" class="form-control" name="nickname">
        </div>
      
        <div class="form-group mb-4">
            <strong><label for="nim">NIM :</label></strong>
            <input type="text" class="form-control" name="nim">
        </div>
        <div class="form-group mb-4">
          <strong><label for="email">Email :</label></strong>
          <input type="text" class="form-control" name="email">
      </div>
        <div class="form-group mb-4">
          <strong><label>Batch of Student :</label></strong>
          <select class="form-select" name="batchofstudent">
            <option selected>Select this option bellow</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
          </select>
        </div>
        <div>
          <strong><label>Gender :</label></strong>
          <p><input class="me-1" type='radio' name='gender' value='Male'>Male</p>
          <p><input class="me-1" type='radio' name='gender' value='Female'>Female</p>
        </div>

  <div class="form-group mb-3">
    <strong><label>Class Day :</label></strong>
    <input type="text" name="classday" id="classday" class="form-control" placeholder="classday">
  </div>
  <div>
    <button type="send" name="send" class="btn btn-primary mb-4">Send</button>
  </div>
</form>
</div>
<script>
function validateForm() {
  // Validasi Full Name
  if (document.forms["formbio"]["fullname"].value == "") {
      alert("Write your full name here");
      document.forms["formbio"]["fullname"].focus();
      return false;
  }
  // Validasi Nick Name
  if (document.forms["formbio"]["nickname"].value == "") {
      alert("Write your nick name here");
      document.forms["formbio"]["nickname"].focus();
      return false;
  }
  // Validasi Nick Name
  if (document.forms["formbio"]["nim"].value == "") {
      alert("Write your nim here");
      document.forms["formbio"]["nim"].focus();
      return false;
  }
  // Validasi Email
  if (document.forms["formbio"]["email"].value == "") {
      alert("Your active email");
      document.forms["formbio"]["email"].focus();
      return false;
  }
  // Validasi Batch of Student
  if (document.forms["formbio"]["batchofstudent"].selectedIndex < 1){
      alert("Fill the batch first!");
      document.forms["formbio"]["batchofstudent"].focus();
      return false;   
      }
    
  // Validasi Gender
  var gender = document.getElementsByName('gender');
  var genValue = false;
    for(var i=0; i<gender.length;i++){
      if(gender[i].checked == true){
          genValue = true;    
      }
    }
    if(!genValue){
      alert("Choose your gender!");
      return false;
    }
  // Validasi Class Day
if (document.forms["formBiodata"]["classday"].value == "") {
    alert("What day is your class day?");
    document.forms["formbio"]["classday"].focus();
    return false;
}
}
</script>
</body>
</html>