@if(Auth::check())
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By Code Info</title>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
  /* transition: margin 0.3s ease; */
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
  transition: background-color 0.3s ease;
  transition: margin 0.3s ease;
  position: relative;
  color: white;
  font-size: 16px;
  display: table;
  width: 280px;
  padding: 10px;
  margin-top: 10px;
}

a:hover{
    background: #4fc8b0;
    margin: 10px;
    border-radius: 5px;
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
  margin-top: 10px;
  margin-left: 200px;
}
.main-skills .card{
  width: 25%;
  height: 450px;
  margin: 13px;
  background: #F0F3F4;
  text-align: center;
  border-radius: 20px;
  padding: 70px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  color: #634637;
}
.main-skills .card h3{
  margin-top: 20px;
  margin-bottom: 10px;
  text-transform: capitalize;
  font-size: 22px;
}
.main-skills .card p{
  font-size: 16px;
  margin-top: 10px;
}
.main-skills .card a{
  position: relative;
  color: white;
  font-size: 14px;
  display: table;
  padding: 10px;
  margin-left: 25px;
  width: 125px;
  height: 40px;
  background: #3C2A21;
  color: #fff;
  border-radius: 8px;
  margin-top: 70px;
  transition: background-color 0.3s ease;
  transition: font-weight 0.1s ease;
  transition: transform 0.3s ease;
}
.main-skills .card a:hover{
  background-color: #634637; /* Warna latar belakang tombol saat dihover */
  font-weight: bold;
  transform: scale(1.1);
}
/* .main-skills .card span:hover{
  background: #319EBF;
} */
.main-skills .card i{
  font-size: 25px;
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
    /* position: relative;
    animation: gerakanTulisan 2s infinite alternate; */
}

/* @keyframes gerakanTulisan {
      0% {
        left: 0;
      }
      100% {
        left: 50px;
      }
    } */

.diagram {
  margin-top: 30px;
  font-size: 21px;
}

.satu {
  --animate-delay: 0.2s;
}
.dua {
  --animate-delay: 0.1s;
}
.tiga {
  --animate-delay: 0.0s;
}

    </style>
    </head>
    <body>
      <div class="container">
        <nav class="nav">
        <h1 class="judul"> Tambah Siswa </h1>
          <ul>
            <li><a href="/dashboard">
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
          <h1 class="diagram animate__animated animate__fadeIn">Masuk ke form</h1>
          <div class="main-skills">
          <div class="card satu animate__animated animate__fadeIn animate__delay-2s">
            <h3>Form Siswa</h3>
              <i class="fa-solid fa-graduation-cap" style="color: #CFC0A4;"></i>
              <p>Form untuk menambahkan data siswa:</p>
              <a href="/addnis">Masuk</a>
            </div>
            <div class="card dua animate__animated animate__fadeIn animate__delay-2s">
            <h3>Form Kelas</h3>
              <i class="fa-solid fa-landmark" style="color: #CFC0A4;"></i>
              <p>Form untuk menambahkan kelas siswa:</p>
              <a href="/addkelas">Masuk</a>
            </div>
            <div class="card tiga animate__animated animate__fadeIn animate__delay-2s">
            <h3>Form Uks</h3>
              <i class="fa-solid fa-briefcase" style="color: #CFC0A4;"></i>
              <p>Form untuk menginput siswa sakit:</p>
              <a href="/book">Masuk</a>
            </div>
          </div>
        </section>
      </div>
    </body>
    </html>
@endif