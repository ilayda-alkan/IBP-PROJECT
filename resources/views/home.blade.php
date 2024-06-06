@extends('master')

@section('title', 'Home')

@section('content')
<div class="hero-section">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="text-center p-5">
      <div class="col-12 text-center">
        <h1>Welcome to my Personal Blog Page</h1>
        <p>Welcome to my blog! I'm delighted to have you here. This blog is a space where I share my thoughts,
          experiences, and insights on various topics, ranging from computer engineering and technology to personal
          hobbies like volleyball and beyond. Whether you're here to learn, be inspired, or simply enjoy a good read, I
          hope you find something that resonates with you. Feel free to explore, comment, and connect—your engagement is
          what makes this journey worthwhile. Happy reading!</p>
      </div>
      <hr>
      <a href="{{ url('/blog') }}" class="btn btn-danger">My Blogs</a>
    </div>

  </div>
</div>
<div class="container">
  <div class="row py-5 justify-content-center align-items-center d-flex flex-column flex-md-row">
    <div class="col-12 col-md-6">
      <h1>About Me </h1>
      <p>I am a dedicated and passionate second-year Computer Engineering student at Karabük University, originally from
        Tekirdağ, with roots in Kırklareli. I have a strong academic background and a keen interest in technology and
        software development. My hands-on experience in the retail sector, combined with my participation in competitive
        sports, has endowed me with a unique blend of technical skills, teamwork, and leadership abilities.
      </p>
    </div>
    <div class="col-12 col-md-5">
      <img class="img-fluid rounded " src="{{asset('/img/about-me.png')}}" alt="">
    </div>
  </div>
</div>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card">
          <div class="card-body py-5">

            <!-- Carousel wrapper -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <!-- Indicators -->
              <div class="carousel-indicators mb-0">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>

              <!-- Inner -->
              <div class="carousel-inner pt-2 pb-5">
                <!-- Single item -->
                <div class="carousel-item active">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-9 col-xl-8">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="https://pbs.twimg.com/profile_images/746860382225076224/qMcxl_W7_400x400.jpg"
                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="kevin mitnick" width="90" height="90">
                        </div>
                        <div class="flex-grow-1 ms-4 ps-3">
                          <figure>
                            <blockquote class="blockquote mb-4">
                              <p>
                                <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                <span class="font-italic">Social engineering is the term we use for the broad range of
                                  techniques used to trick people into revealing information or performing actions that
                                  compromise security. A well-executed social engineering attack can circumvent the most
                                  sophisticated technical security measures.
                                </span>
                              </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                              Kevin Mitnick
                              <cite title="Source Title">The Art of Deception</cite>
                            </figcaption>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-9 col-xl-8">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="https://www.kepplerspeakers.com/krebs-b.jpg"
                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="woman avatar" width="90" height="90">
                        </div>
                        <div class="flex-grow-1 ms-4 ps-3">
                          <figure>
                            <blockquote class="blockquote mb-4">
                              <p>
                                <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                <span class="font-italic">Cybercriminals operate like traditional businesses, with
                                  hierarchies, budgets, and goals. To effectively combat them, law enforcement and
                                  cybersecurity professionals must understand their operational structures.
                                </span>
                              </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                              Brian Krebs
                              <cite title="Source Title">The Cybercrime Landscape</cite>
                            </figcaption>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-9 col-xl-8">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="https://www.kepplerspeakers.com/krebs-b.jpg"
                            class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="woman avatar" width="90" height="90">
                        </div>
                        <div class="flex-grow-1 ms-4 ps-3">
                          <figure>
                            <blockquote class="blockquote mb-4">
                              <p>
                                <i class="fas fa-quote-left fa-lg text-warning me-2"></i>
                                <span class="font-italic">Individuals must take responsibility for their online safety
                                  by using strong passwords, enabling two-factor authentication, and being cautious of
                                  phishing attempts.
                                </span>
                              </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                              Brian Krebs
                              <cite title="Source Title">Protecting Personal Data</cite>
                            </figcaption>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Inner -->

              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Carousel wrapper -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection