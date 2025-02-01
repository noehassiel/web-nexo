@extends('layouts.front')

@section('content')
    <nav class="d-flex justify-content-between align-items-center">
        <div class="logo">
            Nexo
        </div>

        <div class="btn">Registrate</div>
    </nav>

    <main>
        <section class="hero" id="hero">

            <img src="{{ asset('img/nexo-7.jpg') }}" alt="Nexo" class="js-parallax-in">

            <div class="overlay"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 hero_content">
                        <div>
                            <div>
                                <h1 class="title-1">Welcome</h1>
                                <h1 class="title-2">to Nexo</h1>
                            </div>
                            <h2 class="subtitle">In the Dawn of AI Revolution</h2>
                        </div>

                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <button class="button button--bestia">
                                <div class="button__bg"></div><span>Registro</span>
                            </button>

                            <dotlottie-player
                                src="https://lottie.host/50a0221f-8d4c-405e-be5b-221f961c3765/BeVQq4fHmV.lottie"
                                background="transparent" speed="1" style="width: 90px; height: 90px" loop
                                autoplay></dotlottie-player>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature">
            <p class="reveal-type">The web isn't static anymore. It's dynamic, interactive, and constantly evolving.</p>
        </section>

        <section class="features-list">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="subtitle-circle">A</div>
                        <h3 class="feature-title">Interactive</h3>
                        <img src="{{ asset('img/nexo-1.jpg') }}" alt="Nexo" class="d-md-none d-block feature-img">
                    </div>
                    <div class="col-md-3">
                        <div class="subtitle-circle">B</div>
                        <h3 class="feature-title">Dynamic</h3>
                        <img src="{{ asset('img/nexo-3.jpg') }}" alt="Nexo" class="d-md-none d-block feature-img">
                    </div>
                    <div class="col-md-3">
                        <div class="subtitle-circle">C</div>
                        <h3 class="feature-title">Evolving</h3>
                        <img src="{{ asset('img/nexo-4.jpg') }}" alt="Nexo" class="d-md-none d-block feature-img">
                    </div>
                    <div class="col-md-3">
                        <div class="subtitle-circle">D</div>
                        <h3 class="feature-title">AI</h3>
                        <img src="{{ asset('img/nexo-8.jpg') }}" alt="Nexo" class="d-md-none d-block feature-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="venues">
            <img src="{{ asset('img/nexo-8.jpg') }}" alt="Nexo" class="js-parallax-in">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <h3>Nexo La Paz</h3>
                            <p class="mb-3">Reuniones los Jueves a las 19:00 horas</p>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.1584195996465!2d-98.23081542378743!3d19.05677115257396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc74d9ca0828d%3A0xdc611bfebe242a66!2sMia%20Serenia!5e0!3m2!1sen!2smx!4v1738434838845!5m2!1sen!2smx"
                                width="100%" height="450" style="border:0; border-radius: 8px" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <h3>Nexo Norte</h3>
                            <p class="mb-3">Reuniones los Viernes a las 19:00 horas</p>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.711564655634!2d-98.1332382!3d19.0764152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfea7583989b01%3A0xbf796b6fe8af9fef!2sCanal%20de%20Cuautlancingo%2C%20Galaxia%20Bosques%20de%20Manzanilla%2C%2072229%20Heroica%20Puebla%20de%20Zaragoza%2C%20Pue.!5e0!3m2!1sen!2smx!4v1738434862165!5m2!1sen!2smx"
                                width="100%" height="450" style="border:0; border-radius: 8px" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">

        </section>


    </main>

    <footer></footer>
@endsection
