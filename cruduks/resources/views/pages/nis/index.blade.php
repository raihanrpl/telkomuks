@if(Auth::check())
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By Code Info</title>
      <!-- <link rel="stylesheet" type="text/css" href="css/dashboard.css" /> -->
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
      <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: #dfe9f5;
}
.container{
  display: flex;
}
.nav {
  position: fixed;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  background: green;
  width: 232px;
  overflow: hidden;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.2);
  background-color: #009879;
}

/* .logo{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
}
.logo img{
  width: 45px;
  height: 45px;
  border-radius: 50%;
}
.logo span{
  font-weight: bold;
  padding-left: 15px;
  font-size: 18px;
  text-transform: uppercase;
} */
a{
  position: relative;
  color: white;
  font-size: 16px;
  display: table;
  width: 280px;
  padding: 10px;
  margin-top: 10px;

}

.nav a {
    transition: background-color 0.3s ease;
    transition: margin 0.3s ease;
}

.nav a:hover {
    margin: 10px;
    border-radius: 5px;
}

a:hover{
    background: #4fc8b0;
}

.nav .fas{
  position: relative;
  width: 70px;
  height: 40px;
  top: 14px;
  font-size: 20px;
  text-align: center;
}
.nav-item{
  position: relative;
  top: 12px;
  margin-left: 10px;
}
.uks{
  text-align: center;
  display: flex;
  margin: 10px 0 0 10px;
  position: relative;
  top: 12px;
  color: white;
  margin-bottom: 30px;
}

.logout{
  position: absolute;
  bottom: 0;
}

/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
  margin-left: 232px;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
  margin-left: 100px;
}
.main-skills .card {
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
}
.main-skills .card {
  width: 90%;
  margin: 10px;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 14px;
}
/* .main-skills .card span{
  background: #E41913;
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
} */

/* .main-skills .card span:hover{
  background: #319EBF;
} */
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}

/* Courses */
.main-course{
  margin-top:20px ;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: 300px;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
}
.box{
  width: 33%;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box span{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box span:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.html{
  color: rgb(25, 94, 54);
}
.css{
  color: rgb(104, 179, 35);
}
.js{
  color: rgb(28, 98, 179);
}

.logoo {
    position: relative;
    bottom: 8px;
    margin: 4px;
  } 

  .ulogo {
    width: 40px;
    height: 40px;
  }

  .tlogo { 
    width: 43px;
    height: 43px;
  }

  .plogo {
    width: 40px;
    height: 40px;
    margin-right: 10px;
  }

.judul {
    text-align: center;
    position: relative;
    top: 12px;
    margin-bottom: 30px;
    color: #fff;
}

.judul2 {
    margin-right: 888px;
}

tbody tr:hover {
        background-color: #cce5ff;
}

.animated-alert {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    </style>
    </head>
    <body>
      <div class="container">
        <nav class="nav">
        <h1 class="judul"> Dashboard </h1>
          <ul>
            <li><a href="dashboard">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
              </a></li>
            <li><a href="/dashboard/form">
              <i class="fas fa-solid fa-calendar-plus" style="color: #ffffff;"></i>
              <span class="nav-item">Tambah Siswa</span>
              </a></li>
            <li><a href="">
              <i class="fas fa-solid fa-calendar-plus" style="color: #ffffff;"></i>
              <span class="nav-item">Tambah Data</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Daftar Data</span>
            </a></li>
            <li><a href="/login/logout" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
          </ul>
        </nav>

        <section class="main">
          <div class="main-top">
            <h1 class="judul2">UKS SMK TELKOM BANJARBARU</h1>
            <div class="logoo">
                <img class="ulogo" src="img/uks.png" />
                <img class="tlogo" src="img/telkom.png" />
                <img class="plogo" src="img/pmi.png" />
            </div>
          </div>
          <div class="item animate__animated animate__fadeIn">
          <div class="main-skills">
          <div class="card">

          <h1 style="text-align: left; margin-bottom: 10px;">List Siswa</h1>

          <div style="display: flex; align-items: center; justify-content: space-between;">
          <a href="{{ route('addnis.create') }}" style="background-color: #007BFF; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; width: 180px;">Tempat search <i class="fa-solid fa-plus" style="color: #ffffff; font-size: 18px; margin-right: -20px;"></i></a>   
          @if(Session::has('success'))
            <div id="animatedAlert" class="animated-alert" style="background-color: #28A745; color: white; padding: 8px; border-radius: 5px; margin-top: 5px; margin-left: 285px; width: 240px;">
                {{ Session::get('success')}}
            </div>
            @endif
            <a href="{{ route('addnis.create') }}" style="background-color: #007BFF; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; width: 180px; margin-left: auto;">Tambah Siswa <i class="fa-solid fa-plus" style="color: #ffffff; font-size: 18px; margin-right: -20px;"></i></a>

        </div>

<table style="width: 100%; border-collapse: collapse; margin-top: 10px;">
    <thead style="background-color: #007BFF; color: white;">
        <tr>
            <th style="padding: 10px;">No</th>
            <th style="padding: 10px;">NIS</th>
            <th style="padding: 10px;">Name</th>
            <th style="padding: 10px;">Jenis Kelamin</th>
            <th style="padding: 10px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if($nis->count() > 0)
            @foreach ($nis as $n)
                <tr>
                    <td style="padding: 10px;">{{ $loop->iteration}}</td>
                    <td style="padding: 10px;">{{ $n->nis}}</td>
                    <td style="padding: 10px;">{{ $n->name}}</td>
                    <td style="padding: 10px;">{{ $n->jk}}</td>
                    <td style="padding: 10px;">
                            <a href="{{ route('addnis.show', $n->nis) }}" style="background-color: #6C757D; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; width: 80px; display: inline-block; font-size: 14px;">Detail</a>
                            <a href="{{ route('addnis.edit', $n->nis) }}" style="background-color: #FFC107; color: white; padding: 8px 16px; text-decoration: none; border-radius: 5px; width: 80px; margin-left: 5px; display: inline-block; font-size: 14px;">Edit</a>

                            <form action="{{ route('addnis.destroy', $n->nis) }}" method="POST" onsubmit="return confirm('Delete?')" style="display: inline-block; margin-left: 5px;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: #DC3545; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer; margin-top:10px; width: 100px; ">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10" style="text-align: center;">NIS Data not found</td>
            </tr>
        @endif
    </tbody>
</table>


    {{ $nis->links() }} 

          </div>
          </div>
        </section>
      </div>

      <script>
    document.addEventListener('DOMContentLoaded', function() {
        var animatedAlert = document.getElementById('animatedAlert');

        if (animatedAlert) {
            // Setelah 1 detik, animasi fade in
            setTimeout(function() {
                animatedAlert.style.opacity = '1';
            }, 600);

            // Setelah 3 detik, animasi fade out
            setTimeout(function() {
                animatedAlert.style.opacity = '0';
            }, 4500);
        }
    });
</script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    </body>
    </html>
@endif
    
    
