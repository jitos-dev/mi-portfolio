<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Jitos | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="jitos-dev">
    <meta content="" name="Full Stack junior developer">

    <meta property="og:site_name" content="Jitos Portfolio">
    <meta name="title" content="Jitos | Portfolio">
    <meta name="description" content="Portfolio personal donde explico un poco sobre mi.">
    <meta property="image" content="img/foto-calle.jpg">
    <meta property="og:title" content="Jitos | Portfolio">
    <meta property="og:description" content="Portfolio personal donde explico un poco sobre mi.">
    <meta property="og:image" content="img/foto-calle.jpg">
    <meta name="next-head-count" content="18">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-nav fw-bold m-0">Inicio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Inicio</a>
                <a href="#about" class="nav-item nav-link">Sobre mi</a>
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#service" class="nav-item nav-link">Servicios</a>
            </div>
            <!-- <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">ProMan</h1>
            </a> -->
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link">Proyectos</a>
                <!-- <a href="#team" class="nav-item nav-link">Team</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a> -->
                <a href="#contact" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="yo-soy mb-3">Hola soy</h3>
                    <h1 class="display-3 mb-3">Juanjo García</h1>
                    <h2 class="yo-soy">Junior Full Stack Developer</h2>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Android Developer, Spring Boot, Spring Cloud, Microservicios, Angular
                    </div>
                    <div class="d-flex align-items-center pt-5 contacto">
                        <a class="btn btn-primary-portfolio me-4 hvr-grow"
                            href="mailto:jitos86@gmail.com?Subject=Contacto desde jitos.dev" target="_blank"><i
                                class="bi bi-envelope heading"></i></a>
                        <a class="btn btn-primary-portfolio linkedin-header me-4 hvr-grow"
                            href="https://www.linkedin.com/in/juanjo-garc%C3%ADa-jitos-dev" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=34605993035" target="_blank"
                            class="btn btn-primary-portfolio me-4 hvr-grow"><i class="bi bi-whatsapp whatsap"></i></a>
                        <a download
                            href="https://github.com/jitos-dev/jitos-dev/raw/fd37651f85f8f7da85e499c34c4b5355f706a0ac/JuanJoseGarcia.pdf"
                            target="_blank" class="btn btn-primary-portfolio download-cv hvr-grow">CV</a>

                        <!-- <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5> -->
                    </div>
                    <div class="email">
                        <h5 class="mr-3">jitos@jitos.dev</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/mia-header.png" alt="" class="mia-header">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <!-- <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> -->
    <!-- 16:9 aspect ratio -->
    <!-- <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-3">3</h1>
                            <h5 class="mb-0">AÑOS</h5>
                        </div>
                        <h3 class="lh-base mb-0 intro">Formándome en BackEnd y FrontEnd con distintos lenguajes y
                            especialmente en Java</h3>
                    </div>
                    <p class="mb-4">Experiencia profesional de 1 año desarrollando apps web, desde la fase de
                        diseño, pasando por la BBDD y la parte FrontEnd y BackEnd
                    </p>
                    <p>Actualmente estoy centrado en la arquitectura de Microservicios y en los frameworks Spring y
                        Angular</p>
                    <p>En el futuro me gustaría seguir especializandome en el desarrollo BackEnd con Java, FrontEnd con
                        Angular y apps movil Android</p>
                    <h5 class="mt-4 mb-4">Mis valores</h5>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Orientado a resultados</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Comprometido</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Flexible</p>
                    <!-- <a class="btn btn-primary-portfolio py-3 px-5 mt-3" href="">Read More</a> -->

                    <em class="mt-4 d-inline-block"><strong>&quot;He cambiado mi cómoda vida y mi cómodo sueldo en
                            mi
                            anterior
                            trabajo por
                            realizar mi
                            mejor
                            proyecto profesional que
                            es dedicarme a la programación&quot;</strong> </em>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-12">
                            <img class="img-fluid rounded" src="img/foto-calle.jpg" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Polivalente</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2>
                    </div>
                    <p class="mb-4">He trabajado con distintos lenguajes de programación como HTML, CSS, PHP, JavaScript, Kotlin,
                        Java, distintas BBDD como MySQL, SqLite, Oracle, H2 e Hibernate</p>
                    <P class="mb-4">Además también utilizo distintos frameworks como Angular, Spring, JavaFX, jQuery,
                        Ajax, Bootstrap, CodeIgniter, PWA, arquitectura de microservicios y control de versiones
                        Git</P>
                    <!-- <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projectos Completados</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">100</h2>
                    </div>
                    <p class="mb-0">Durante estos tres años solo me he dedicado a programar, desarrollando cientos de
                        pequeños proyectos, los cuales me han supuesto muchos retos distintos y me han hecho madurar
                        como programador</p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5 mx-3">Skills</h1>
                    <div class="row align-items-center img-skills">
                        <div class="col-md-12">
                            <img src="img/logos-skills/Java.png" alt="">
                            <img src="img/logos-skills/spring.png" alt="">
                            <img src="img/logos-skills/angular-icon.png" alt="">
                            <img src="img/logos-skills/JavaScript.png" alt="">
                            <img src="img/logos-skills/html.png" alt="">
                            <img src="img/logos-skills/CSS.png" alt="">
                            <img src="img/logos-skills/kotlin.png" alt="">
                            <img src="img/logos-skills/bootstrap.png" alt="">
                            <img src="img/logos-skills/php.png" alt="">
                            <img src="img/logos-skills/codeigniter.png" alt="">
                            <img src="img/logos-skills/jquery.png" alt="">
                            <img src="img/logos-skills/hibernate.png" alt="">
                            <img src="img/logos-skills/mysql.png" alt="">
                            <img src="img/logos-skills/oracle-logo.png" alt="">
                            <img src="img/logos-skills/sqlite.png" alt="">
                            <img src="img/logos-skills/git-icon.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-5">Experiencia & Educación</h1>
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill"
                                href="#tab-1">Experiencia</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill"
                                href="#tab-2">Educación</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-12">
                                    <h5>Desarrollador Web</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-2">2021 - 2021</p>
                                    <h6 class="mb-2">Roka Creativa</h6>
                                    <p>Desarrollo de distintas apps web desde el propio diseño inicial hasta el
                                        despliegue en el servidor. FrontEnd con HTML, CSS y
                                        JavaScript, BackEnd con PHP, Codeigniter y BBDD MySQL</p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="education">
                                    <div class="col-sm-12 mb-4">
                                        <h5>FP2 Desarrollo de aplicaciones multiplataforma</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2021 - 2022</p>
                                        <h6 class="mb-0">Ilerna</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>Programador Java certificación OCP</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2020 - 2021</p>
                                        <h6 class="mb-0">Tokio School</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>Java desde 0</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2019 - 2020</p>
                                        <h6 class="mb-0">Píldoras informáticas</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>Diseño de aplicaciones web. HTML 5, CSS, JavaScript, PHP,
                                            JQuery y bases de datos MySql</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2020 - 2021</p>
                                        <h6 class="mb-0">Virensis</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>PWA- Aplicaciones Web Progresivas de 0 a experto</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2021 - 2022</p>
                                        <h6 class="mb-0">Udemy</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>Angular desde 0</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2022 - 2022</p>
                                        <h6 class="mb-0">Virensis</h6>
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <h5>Microservicicos Spring Cloud, Eureka & Angular Full-stack</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2022 - 2022</p>
                                        <h6 class="mb-0">Udemy</h6>
                                    </div>
                                    <p class="mt-2">Además de los cursos mencionados tengo otros muchos sobre Java, SQL,
                                        JavaFX,
                                        JavaScript, CodeIgniter, Kotlin, Android, Bootstrap, git...</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Mis servicios</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary-portfolio py-3 px-5 to-contact" href="#contact">Contacto</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <!-- <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div> -->
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Páginas Web</h4>
                            <span>Diseño y programación copleta de páginas web desde el FrontEnd, BackEnd, gestión de la BBDD hasta
                                el despliegue en el servidor</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/html.png" alt="">
                                <img src="img/logos-skills/JavaScript.png" alt="">
                                <img src="img/logos-skills/CSS.png" alt="">
                                <img src="img/logos-skills/bootstrap.png" alt="">
                                <img src="img/logos-skills/php.png" alt="">
                                <img src="img/logos-skills/mysql.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <!-- <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div> -->
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Apps de escritorio</h4>
                            <span>Apps de escritorio responsive para cualquier tipo de negocio con el mejor diseño
                                realizadas en JavaFX</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/Java.png" alt="">
                                <img src="img/logos-skills/CSS.png" alt="">
                                <img src="img/logos-skills/mysql.png" alt="">
                                <img src="img/logos-skills/sqlite.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                                <img src="img/logos-skills/bootstrap.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Microservicios</h4>
                            <span>Proyectos BackEnd con arquitectura de microservicios utilizando SpringBoot,
                                SpringSecurity,
                                SpringClud, Gateway, Eureka, Load balancer...</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/Java.png" alt="">
                                <img src="img/logos-skills/spring.png" alt="">
                                <img src="img/logos-skills/mysql.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Angular y SpringBoot</h4>
                            <span>Aplicaciones web completas realizando la parte FrontEnd con Angular y la parte
                                BackEnd con Spring y comunicación API Rest hasta su despliegue en el servidor</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/Java.png" alt="">
                                <img src="img/logos-skills/spring.png" alt="">
                                <img src="img/logos-skills/angular-icon.png" alt="">
                                <img src="img/logos-skills/mysql.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Android</h4>
                            <span>Desarrollo de aplicaciones móviles para cualquier serctor utilizando las mejores
                                tecnologías y con el mejor diseño</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/android-logomark.png" alt="">
                                <img src="img/logos-skills/kotlin.png" alt="">
                                <img src="img/logos-skills/material-ui.png" alt="">
                                <img src="img/logos-skills/sqlite.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Gestión de BBDD</h4>
                            <span>Gestión completa de sus bases de datos en distintos gestores como MySQL, Oracle, H2,
                                sQlite...</span>
                            <div class="servicios-iconos">
                                <img src="img/logos-skills/mysql.png" alt="">
                                <img src="img/logos-skills/oracle-logo.png" alt="">
                                <img src="img/logos-skills/sqlite.png" alt="">
                                <img src="img/logos-skills/hibernate.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Alguno de mis proyectos</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="py-3 px-5 to-proyects" href="https://github.com/jitos-dev" target="_blank">Ver todos</a>
                </div>
                <!-- <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">Todos</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div> -->
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <!--Los proyectos se pueden clasificar poniendo la clase first o second-->
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/logo-calculator-pan.png" alt="">
                        <div class="portfolio-btn">
                            <!--Aquí dentro va lo que queramos que se vea cuando pasan el ratón encima-->
                            <!-- <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a> -->
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                href="https://github.com/jitos-dev/Calculator-pan" target="_blank"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/twitor.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                href="https://jitos-dev.github.io/twittor/" target="_blank"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" target="_blank"
                                href="https://github.com/jitos-dev/twittor"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/spotify.jpg" alt="">
                        <div class="portfolio-btn">
                            <!-- <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a> -->
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" target="_blank"
                                href="https://github.com/jitos-dev/ConexionUniversalBD"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Team Members</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary-portfolio py-3 px-5" href="">Contact Us</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-1.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-2.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/team-3.jpg" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-1.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam
                                tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-2.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam
                                tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto"
                                    src="img/testimonial-3.jpg" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic">Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam
                                tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Trabajemos juntos</h1>
                </div>
                <!-- <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary-portfolio py-3 px-5" href="">Say Hello</a>
                </div> -->
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">123 Street, New York, USA</h3>
                    <hr class="w-100"> -->
                    <p class="mb-2">Teléfono:</p>
                    <h3 class="fw-bold">605993035</h3>
                    <hr class="w-100">
                    <p class="mb-2">Email:</p>
                    <h3 class="fw-bold">jitos@jitos.dev</h3>
                    <hr class="w-100">
                    <p class="mb-2">O si lo prefieres:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-primary-portfolio me-3 hvr-grow"
                            href="mailto:jitos86@gmail.com?Subject=Contacto desde jitos.dev" target="_blank"><i
                                class="bi bi-envelope heading"></i></a>
                        <a class="btn btn-primary-portfolio linkedin-header me-3 hvr-grow"
                            href="https://www.linkedin.com/in/juanjo-garc%C3%ADa-jitos-dev" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="hvr-grow" href="https://api.whatsapp.com/send?phone=34605993035" target="_blank"><i
                                class="btn btn-primary-portfolio bi bi-whatsapp"></i></a>
                        <!-- <a class="btn btn-square btn-primary-portfolio me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary-portfolio me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary-portfolio me-2" href=""><i class="bi bi-envelope"></i></a>
                        <a class="btn btn-square btn-primary-portfolio me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp contact" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                        with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->

                    <div class="confirm-contact alert alert-success" role="alert">
                        <span class="message-contact"></span>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        <button type="button" class="btn-close"></button>
                    </div>
                    <form method="POST" id="form_contact" action="contact.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Tu nombre" name="name" required maxlength="150">
                                    <label for="name">Tu Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Tu Email" name="email" maxlength="150" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Por favor escriba una dirección de email correcta" required>
                                    <label for="email">Tu Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Asunto" name="subject" required maxlength="200">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Deja un mensaje aquí" id="message"
                                        style="height: 100px" name="message" required maxlength="500"></textarea>
                                    <label for="message">Deja un mensaje aquí</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary-portfolio py-3 px-5" type="submit">Enviar
                                    Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <!-- <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div> -->
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">    
        <div class="row">
            <footer>
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 div-footer">
                    <h5>Sobre mi</h5>
                    <p>Experiencia profesional de 1 año desarrollando apps web, desde la fase de diseño, pasando por la BBDD y la parte FrontEnd y BackEnd</p>
                    <p>Actualmente estoy centrado en la arquitectura de Microservicios y en los frameworks Spring y Angular</p>
                    <p>En el futuro me gustaría seguir especializandome en el desarrollo BackEnd con Java, FrontEnd con Angular y apps movil Android</p>
                </div>
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 div-footer">
                    <h5 class="border-end pe-3 me-3">Polivalente</h5>
                    <h2 class="text-primary fw-bold" data-toggle="counter-up">100</h2>
                    <p class="mb-4">He trabajado con distintos lenguajes de programación como HTML, CSS, PHP, JavaScript, Kotlin,
                        Java, distintas BBDD como MySQL, SqLite, Oracle, H2 e Hibernate</p>
                    <p class="mb-4">Además también utilizo distintos frameworks como Angular, Spring, JavaFX, jQuery,
                        Ajax, Bootstrap, CodeIgniter, PWA, arquitectura de microservicios y control de versiones
                        Git</p>
                </div>
            </footer>
        </div>     
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary-portfolio btn-lg-square back-to-top hvr-grow"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>