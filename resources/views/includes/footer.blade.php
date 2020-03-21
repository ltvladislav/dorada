<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="{{ asset('/image/dorad.png') }}" alt="">
        </div>
    </div>

   <div class="footer-content">

       <div class="footer-left">
           <div class="footer-contacts">
               <p class="footer-heading">Контакти:</p>
               <div class="footer-contact-list">
                   @foreach(explode(',', setting('contacts.email')) as $email)
                       <a type="mail" href="mailto:{{ $email }}">
                           <img src="{{ asset('/image/mail.svg') }}" alt="">
                           <span>{{ $email }}</span>
                       </a>
                   @endforeach
                   @foreach(explode(',', setting('contacts.mobile-phone')) as $phone)
                       <a type="phone" href="tel^{{ $phone }}">
                           <img src="{{ asset('/image/phone.svg') }}" alt="">
                           <span>{{ $phone }}</span>
                       </a>
                   @endforeach

               </div>
           </div>

           <div class="footer-contacts">
               <p class="footer-heading">Соціальні мережі:</p>
               <div class="footer-socials-list">
                   @foreach(App\Models\SocialNetwork::all() as $network)
                       <a href="{{ $network->link }}" target="_blank">
                           <img src="{{ $network->getImage(true) }}" alt="">
                       </a>
                   @endforeach
               </div>
           </div>


       </div>

       <div class="footer-right">
           <div class="footer-menu-item">
               <a href="#" class="footer-menu-title">Про асоціацію</a>

               <a href="#">Загальна інформація</a>
               <a href="#">Наша команда</a>
               <a href="#">Наша діяльність</a>
           </div>

           <div class="footer-menu-item">
               <a href="#" class="footer-menu-title">Про асоціацію</a>
               <a href="#">Загальна інформація</a>
               <a href="#">Наша діяльність</a>
           </div>
            <div class="footer-menu-item">
                <a href="#" class="footer-menu-title">Про асоціацію</a>

                <a href="#">Загальна інформація</a>
                <a href="#">Наша команда</a>
                <a href="#">Наша діяльність</a>
            </div>

           <div class="footer-menu-item">
               <a href="#" class="footer-menu-title">Про асоціацію</a>
               <a href="#">Загальна інформація</a>
               <a href="#">Наша діяльність</a>
           </div>
           <div class="footer-menu-item">
               <a href="#" class="footer-menu-title">Дорадництво</a>
               <a href="#">Загальна інформація</a>
               <a href="#">Наша діяльність</a>
               <a href="#">Загальна інформація</a>
               <a href="#">Наша діяльність</a>
           </div>

       </div>
   </div>
    <div class="copyright">
        <p>2020 Dorada ©</p>
        <p>created by Zirael</p>
    </div>


</footer>
