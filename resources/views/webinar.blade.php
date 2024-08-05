<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NumerIQ Webinar</title>

        <!-- Box icon CDN -->
	    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
        <!-- Top bar starts  -->
        <div class="top-bar">
            <h3 class="notification">Impulsa tu Éxito Académico con NumerIQ</h3>
        </div>
        <!-- Top bar starts  -->

        <!-- Header section starts from here -->
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col header-content">
                        <h3 class="subheading">
                            ¡Únete a nuestro webinar!
                        </h3>
                        <h2 class="main-heading">
                            Descubre técnicas y estrategias para superar tus <span>desafíos académicos</span>
                        </h2>
                        <div class="inner-row">
                            <div class="col">
                                <h3 class="date">
                                    <i class='bx bx-calendar'></i> 1ro Septiembre 2024
                                </h3>
                            </div>
                            <div class="col">
                                <h3 class="time">
                                    <i class='bx bxs-hourglass-top'></i> 4:00 PM
                                </h3>
                            </div>
                            <div class="col">
                                <h3 class="time">
                                    <i class='bx bx-map'></i> Online
                                </h3>
                            </div>
                        </div>
                        <p class="para-line white">
                            Domina tus estudios con NumerIQ: Únete a nuestro webinar y descubre técnicas personalizadas para alcanzar tu máximo potencial académico.
                        </p>
                    </div>
                    <div class="col header-form">
                        <p class="main-heading">
                            Adminsiones: <span>25/25</span>
                        </p>
                        <div class="form-area">
                            <h2 class="form-heading">
                                ¡Reserva tu lugar ahora!
                            </h2>

                            <hr>
                            <form action="#" class="booking-form">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="input-field">
                                            <label for="firstName">Nombres</label>
                                            <input type="text" id="firstName">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-field">
                                            <label for="lastName">Apellidos</label>
                                            <input type="text" id="lastName">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-field">
                                    <label for="emailId">Dirección de correo electrónico</label>
                                    <input type="email" id="emailId">
                                </div>
                                <div class="input-field">
                                    <button class="btn">
                                        <a href="{{ route('thankyou') }}">
                                            Reservar ahora
                                        </a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header section ends from here -->

        <!-- Topic section starts from here -->
        <section class="topics">
            <div class="container">
                <h3 class="subheading">
                    Impulsa tu Potencial Académico
                </h3>
                <h2 class="heading">
                    <!-- Tu Mejor Aliado en el Camino del Conocimiento -->
                    Todo lo que Necesitas Saber Sobre Nuestra Próxima Tutoría
                </h2>
                <p class="para-line">
                    Descubre cómo nuestro enfoque personalizado y apoyo constante te llevan al éxito académico
                </p>

                <div class="topics-row">
                    <div class="col">
                        <i class='bx bx-bulb'></i>
                        <h2 class="topic-heading">
                            ¿De Qué Trata esta Tutoría?
                        </h2>
                        <p class="para-line">
                            Esta tutoría te ofrece una comprensión clara y práctica de [tema específico], combinando teoría y aplicaciones para mejorar tus habilidades en [área de estudio]. Ideal para quienes buscan dominar [tema] de manera efectiva por el maestro Rigoberto Hernandez
                        </p>
                    </div>
                    <div class="col">
                        <i class='bx bx-bulb'></i>
                        <h2 class="topic-heading">
                            Metas de la Tutoría
                        </h2>
                        <p class="para-line">
                            Las metas de esta tutoría son proporcionar una comprensión profunda de [tema], desarrollar habilidades prácticas en [área de estudio] y mejorar tu rendimiento académico a través de estrategias efectivas y enfoque personalizado
                        </p>
                    </div>
                    <div class="col">
                        <i class='bx bx-chart'></i>
                        <h2 class="topic-heading">
                            Descripción de la Tutoría
                        </h2>
                        <p class="para-line">
                            Esta tutoría ofrece una visión integral de [tema], abordando tanto la teoría como la práctica. Diseñada para estudiantes de [nivel académico], proporcionará herramientas y técnicas para mejorar tu comprensión y habilidades
                        </p>
                    </div>
                    <div class="col">
                        <i class='bx bx-money-withdraw'></i>
                        <h2 class="topic-heading">
                            Requisitos Previos
                        </h2>
                        <p class="para-line">
                            Para aprovechar al máximo esta tutoría, se recomienda tener conocimientos básicos de [tema relacionado] y habilidades en [área relevante]. No se requieren conocimientos avanzados
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Topic section ends from here -->

        <!-- Testimonial section start -->
        <section class="testimonial">
            <div class="container">
                <h3 class="subheading">Tutor</h3>
                <h2 class="heading">Conoce a Nuestro Experto</h2>
                <p class="para-line">
                    Conoce al Educador que Hará la Diferencia en Tu Rendimiento Académico
                </p>

                <div class="row testimonial-row">
                    <div class="col">
                        <img src="{{ asset('images/expositor.jpg') }}" alt="Teacher" class="client">
                        <h4 class="client-name">Rigoberto Hernandez</h4>
                        <p class="para-line location">Guadalajara, Jalisco</p>
                        <div class="testimonial-divider"></div>
                        <p class="para-line review-content">
                            El Maestro Rigoberto Hernández, con más de 20 años de experiencia, es un experto en matemáticas a nivel de
                            preparatoria y universidad. Graduado de la UNAM, es reconocido por su habilidad para hacer las matemáticas
                            accesibles y comprensibles. Su enfoque claro y práctico ha mejorado significativamente el rendimiento
                            académico de sus estudiantes. Además, ha participado en seminarios y publicaciones sobre educación matemática,
                            destacándose como un pilar fundamental en el equipo de NumerIQ.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section end -->

        <!-- Host section starts -->
        <section class="host">
            <div class="container">
                <div class="row">
                    <div class="col host-profile-col">
                        <img src="{{ asset('images/estudiar-online-en-casa-para-universitarios.jpg') }}" alt="estudiante-online" class="host-img">
                    </div>
                    <div class="col host-content-col">
                        <h3 class="subheading">Lo que Obtendrás en Nuestro Webinar</h3>
                        <h2 class="heading">NumerIQ: Excelencia Garantizada</h2>
                        <p class="para-line">
                            Descubre cómo nuestras sesiones te brindan estrategias efectivas, recursos únicos y orientación personalizada para alcanzar el éxito académico
                        </p>
                        <div class="host-feature">
                            <i class='bx bx-badge-check'></i>
                            <h4 class="feature-name">Orientación en Vivo y Personalizada</h4>
                        </div>
                        <div class="host-feature">
                            <i class='bx bxl-sketch'></i>
                            <h4 class="feature-name">Recursos Exclusivos</h4>
                        </div>
                        <div class="host-feature">
                            <i class='bx bx-shield-quarter'></i>
                            <h4 class="feature-name">Flexibilidad de Horario</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Host section ends -->

        <section class="footer">
            <div class="container">
                <h2 class="heading white">No Esperes Más: Asegura Tu Éxito con NumerIQ</h2>
                <p class="para-line white">
                    Reserva tu tutoría con NumerIQ y recibe orientación personalizada para mejorar tus habilidades académicas y alcanzar tus metas educativas
                </p>
                <button class="btn">
                    <a href="{{ route('thankyou') }}">
                        ¡Únete ahora!
                    </a>
                </button>
        </section>


                <!-- Custom Footer Start -->
                    <footer class="custom-footer">
                        <div class="custom-footer-content">
                            <div class="custom-footer-row">
                                <div class="custom-footer-col">
                                    <h3 class="custom-footer-heading">Contacto</h3>
                                    <ul class="custom-footer-contact">
                                        <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                                        <li><i class="fas fa-envelope"></i> contacto@numeriq.com</li>
                                    </ul>
                                </div>
                                <div class="custom-footer-col">
                                    <h3 class="custom-footer-heading">Síguenos</h3>
                                    <div class="custom-footer-social">
                                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-footer-bottom">
                                <p>&copy; 2024 NumerIQ. Todos los derechos reservados.</p>
                            </div>
                        </div>
                    </footer>
                <!-- Custom Footer End -->
    </body>
</html>
