<footer class="footer">
    <div class="container cont_foot">
        <div class="row row_foot justify-content-between">
            <div class="footer-col">
                <h4>Info</h4>
                <ul>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li><a href="{{ route('announcements.index') }}">{{__("ui.allAnnouncements")}}</a></li>
                    <li><a href="{{ route('become.revisor') }}"> {{ __('ui.lavoraconnoi') }} </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Team</h4>
                <ul>
                    <li><a href="https://www.linkedin.com/in/francesco-di-salvodev/" target="_blank">Di Salvo</a></li>
                    <li><a href="https://www.linkedin.com/in/fabio-ragusa-b5bab7255/" target="_blank">Ragusa</a></li>
                    <li><a href="https://www.linkedin.com/in/vito-sepewebdeveloper/" target="_blank">Sepe</a></li>
                    <li><a href="https://www.linkedin.com/in/valerio-vastante-dev/" target="_blank">Vastante</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>{{ __('ui.seguici') }}</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/aulab/" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=393339513967&text=Ciao%21+Vorrei+avere+maggiori+informazioni+sul+corso+Hackademy+per+diventare+web+developer&type=phone_number&app_absent=0" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/aulab_it/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/aulab-srl/" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
                <div class="footer-col">
                    <li><a class="text-secondary">&copy; 2024</a></li>
                </div>
            </div>
        </div>
    </div>
</footer>





{{-- <div class="container-fluid">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 my-5 border-top mx-auto ms-5">
        <div class="col mb-3">
            <h5> Presto.it </h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link p-0 text-body-secondary"> {{ __('ui.chisiamo') }} </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('become.revisor') }}"> {{ __('ui.lavoraconnoi') }}</a>
                </li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Tech Titans</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Di Salvo</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Ragusa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sepe</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Vastante</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5> {{ __('ui.contatti') }}</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"></a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Social</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                            class="bi bi-facebook"></i></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                            class="bi bi-instagram"></i></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                            class="bi bi-twitter"></i></a></li>
            </ul>
        </div>

        

        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="30" height="8">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <p class="text-body-secondary">&copy; 2024</p>
        </div>
    </footer>
</div> --}}
