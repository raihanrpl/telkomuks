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
a .nav-tem :hover{
  background: #4fc8b0;
  margin: 10px;
  border-radius: 5px;
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
}
.main-skills .card {
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card {
  width: 25%;
  margin: 10px;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
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

.main-skills .card .rpl{
  /* background: #26A0FCff;  */
  background: #E41913; 
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
.main-skills .card .tkj{
  /* background: #FEBC3Bff;  */
  background: #E41913; 
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
.main-skills .card .dkv{
  background: #E41913; 
  /* background: #8B75D7ff;  */
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
.main-skills .card .tja{
  background: #E41913; 
  /* background: #26A0FCff;  */
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
.main-skills .card .anim{
  background: #E41913;
  /* background: #93F1FEff; */
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
.main-skills .card .tjkt{
  background: #E41913; 
  /* background: #26E7A6ff;  */
  color: #fff;
  padding: 7px 20px;
  border-radius: 5px;
}
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

                a:hover{
          background: #4fc8b0;
          margin: 10px;
          border-radius: 5px;
        }
        .chart {
            width: 90%;
            height: 60%;
            padding: 20px;
            position: relative;
            margin-top: -40px;
            /* margin-left: -100px; */
        }
        /* CSS */
        .parent {
        padding-right: 1rem; /* px-4 pada Tailwind CSS */
        padding-left: 1rem; /* px-4 pada Tailwind CSS */
        margin-right: auto; /* mx-auto pada Tailwind CSS */
        margin-left: auto; /* mx-auto pada Tailwind CSS */
        max-width: 80%; /* container pada Tailwind CSS */
        }
        /* CSS */
        .child {
        padding: 1.5rem; /* p-6 pada Tailwind CSS */
        margin: 2.5rem; /* m-20 pada Tailwind CSS */
        background-color: #ffffff; /* bg-white pada Tailwind CSS */
        border-radius: 0.375rem; /* rounded pada Tailwind CSS */
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.1); /* shadow pada Tailwind CSS */
        }

        .diagram {
            margin-top: 50px;
            font-size: 20px;
        }

        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.item {
  --animate-delay: 0.2s;
}

.satu {
  --animate-delay: 0.0s;
}
.dua {
  --animate-delay: 0.1s;
}
.tiga {
  --animate-delay: 0.2s;
}
.empat {
  --animate-delay: 0.3s;
}
.lima {
  --animate-delay: 0.4s;
}
.enam {
  --animate-delay: 0.5s;
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
          <div class="main-skills">
          <div class="card satu animate__animated animate__fadeIn animate__delay-2s">
              <i class="fa-solid fa-bolt-lightning" style="color: #000000;"></i>
              <h3>Teknik Jaringan Akses</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span  class="tja">22</span>
            </div>
            <div class="card dua animate__animated animate__fadeIn animate__delay-2s">
              <i class="fa-solid fa-diagram-project" style="color: #000000;"></i>
              <h3>Teknik Jaringan Komputer dan Telekomunikasi</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span  class="tjkt">30</span>
            </div>
            <div class="card tiga animate__animated animate__fadeIn animate__delay-2s">
              <i class="fa-solid fa-network-wired" style="color: #000000;"></i>
              <h3>Teknik Komputer Jaringan</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span  class="tkj">9</span>
            </div>
            <div class="card empat animate__animated animate__fadeIn animate__delay-2s">
              <i class="fas fa-laptop-code"></i>
              <h3>Rekayasa Perangkat Lunak</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span class="rpl">12</span>
            </div>
            <div class="card lima animate__animated animate__fadeIn animate__delay-2s">
              <i class="fas fa-palette"></i>
              <h3>Desain Komunikasi Visual</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span class="dkv">14</span>
            </div>
            <div class="card enam animate__animated animate__fadeIn animate__delay-2s">
              <i class="fab fa-app-store-ios"></i>
              <h3>Animasi</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span  class="anim">17</span>
            </div>
          </div>
          
          <div class="item animate__animated animate__fadeInUp animate__delay-2s">
          <h1 class="diagram">Diagram Siswa Sakit</h1>
          <center>  
            <div class="chart">
            <div class="parent">
            <div class="child">
                {!! $chart->container() !!}
            </div>
            </div>
            <script src="{{ $chart->cdn() }}"></script>
            {{ $chart->script() }}
            </div>
          </center>
          </div>
        </section>
      </div>
    </body>
    </html>
@endif
    