<div class="Navbar p-5">
    <div class="Navbar__Link Navbar__Link-brand">
        <a class="" href="#"><img src="<?=i('')?>headerlogo.png"></a>
      </div>
      <div class="Navbar__Link Navbar__Link-toggle mt-3">
        <i class="fas fa-bars"></i>
      </div>
    <nav class="Navbar__Items p-3 ml-5 nav-item-center">
      <div class="Navbar__Link">
        <a class="nav-link" href="#">Experts Tutorials <span class="sr-only">(current)</span></a>
      </div>
      <div class="Navbar__Link">
        <a class="nav-link" href="#">Learning Journey</a>
      </div>
      <div class="Navbar__Link">
        <a class="nav-link" href="#">Consult With Experts</a>
      </div>
      <div class="Navbar__Link">
        <a class="nav-link" href="#">About Us</a>
      </div>
      <div class="Navbar__Link">
        <a class="nav-link" href="#">Enterprise Partners</a>
      </div>
    </nav>
    

    <?php if(isset($this->session->userdata['logged_in_front']) AND array_filled($this->session->userdata['logged_in_front'])) : ?>

      <nav class="Navbar__Items Navbar__Items--right p-3">
        <div class="Navbar__Link mr-3 d-flex">
            <a src="#" class="user-name-header"><img src="<?=i('')?>dp.png" width="50px" class="mr-2">Andrew Johnson</a> 
            <div class="dropdown">
                <a href="#"><img  onclick="myFunction()" class="dropbtn" src="<?=i('')?>arrow-down.png"></a> 
                <div id="myDropdown" class="dropdown-content mt-3">
                  <a href="<?=l('signout')?>">Logout</a> 
                </div>
              </div>
        </div>

        <div class="Navbar__Link mt-2">
            <a href=""><img src="<?=i('')?>email-box.png" class="mr-3 ml-3"></a>
            <a href=""><img src="<?=i('')?>notif.png"  class="mr-3 ml-3"></a>
        </div>

      </nav>

      <? else :?>


        <nav class="Navbar__Items Navbar__Items--right pt-2">
          <div class="Navbar__Link mr-3 d-flex">
              <a href="javascript:void(0)"><img src="<?=i('')?>CART.png"  class="mr-3 ml-3 mt-3"></a>
              <a href="<?=l('login')?>" class="mr-5 ml-5 mt-4 h5" style="color: #2B97DB !important;">Sign In</a>
          </div>
          <div class="Navbar__Link">
              <a href="<?=l('signup')?>" class="btn transparent register-navbar-btn">Register</a>
          </div>
        </nav> 

      <? endif;?>


      
    
</div> 