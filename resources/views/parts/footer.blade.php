<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="{{ route('home') }}" >home</a>
         <a href="{{ route('about') }}" >about</a>
         <a href="{{ route('allBooks') }}" >all books</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="{{ route('login') }}" >login</a>
         <a href="{{ route('register') }}" >register</a>
        
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone" ></i> +123-456-7890 </p>
         <p> <i class="fas fa-phone" ></i> +111-222-3333 </p>
         <p> <i class="fas fa-envelope" ></i> yourbook@gmail.com</p>
         <p> <i class="fas fa-map-marker-alt" ></i> Errachidia, Morocco </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f" ></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter" ></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram" ></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin" ></i> linkedin </a>
      </div>

   </div>

   <p class="credit"> &copy; copyright  @ <?php echo date('Y'); ?> </p>

</section>