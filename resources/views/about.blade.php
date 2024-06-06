@extends('master')

@section('title', 'About')

@section('content')

  <section class="bg-light py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
              <h1 class="card-title mb-0">Ilayda Alkan</h1>
              <p class="text-muted mb-0">Computer Engineering Student</p>
              <p class="text-muted">Karabük University</p>
            </div>
            <div class="text-center mb-4">
              <p class="mb-0"><strong>Email:</strong> ilayda@gmail.com</p>
              <p class="mb-0"><strong>Phone:</strong> 0538 472 59 39</p>
              <p><strong>Location:</strong> Istanbul, Turkey</p>
            </div>
            <hr>
            <div class="text-center mb-4">
              <p class="lead text-secondary">I am a dedicated and passionate second-year Computer Engineering student at Karabük University, originally from <span class="fw-bold">Tekirdağ</span>, with roots in Kırklareli. I have a strong academic background and a keen interest in technology and software development. My hands-on experience in the retail sector, combined with my participation in competitive sports, has endowed me with a unique blend of technical skills, teamwork, and leadership abilities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





  
  <section class="bsb-skill-1 bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Skills</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">Developers with skills in Bootstrap, HTML, CSS, JavaScript
 are in high demand in the tech industry. These technologies are used to build a wide range of websites and applications, from simple blogs to complex e-commerce platforms.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row justify-content-xl-center gy-3 gy-sm-4">
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">Programming Languages</h3>
          <p class="text-secondary fst-italic mb-4">C++, Python, Java</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Bootstrap" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">Web Development</h3>
          <p class="text-secondary fst-italic mb-4">HTML, CSS, JavaScript </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="React" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">Database Management</h3>
          <p class="text-secondary fst-italic mb-4">Mysql, Oracle Sql, Mssql, MongoDb</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Vue" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">65%</div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-xl-5">
        <div class="bg-white rounded shadow-sm p-3 p-md-4 p-xxl-5">
          <h3 class="fw-bold mb-2">Operating Systems</h3>
          <p class="text-secondary fst-italic mb-4">Windows, Linux</p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="WordPress" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
