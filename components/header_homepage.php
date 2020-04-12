<script defer src="./js/headerHomePage.js"></script>
<header class="headerHome">

    <div class="headerHome__logo">
        <img src="assets/icon/logo_svg.png" alt="logo_lumino">
    </div>
    <div class="headerHome__nav nav">
      <div class="nav__item">Home</div>
      <div class="nav__item" id="genre">Genre <img class="item__arrow" src="assets/icon/chevron_gris.svg"/>
    	<ul id="genre__ul">
				<li><a href="#">Action</a></li>
				<li><a href="#">Animation</a></li>
				<li><a href="#">Comedie</a></li>
				<li><a href="#">Documentary</a></li>
				<li><a href="#">SF</a></li>
			</ul>
    </div>
      <div class="nav__item">My list</div>
    </div>

    <div class="headerHome__search search">
      <form class="search__form" action="index.php?action=home">
        <img class="search__loupe" src="assets/icon/loupe.svg"/>
        <input type="text" class="search__input" placeholder="Search a title">
        <div class="show_up"></div>
        <ul class="suggestions"></ul>
      </form>

    </div>

    <div class="headerHome__bell"><img src="assets/icon/bell.svg"/></div>
    <div class="headerHome__name">Hello <?php echo $_SESSION['firstname']; ?> !</div>

    <div class="headerHome__profil">
      <a href="index.php?action=user">
      <?php
       if (file_exists($filepath)) 
       {
       ?>
       <img class="icon_user" src="assets/uploads/<?=$_SESSION['id']?>.png" alt="picture profile" srcset="">
       <?php
       } else {
      ?>
        <img src="assets/img/profil.png.png"/>
        <?php
        }
        ?>
      </a>
    </div>

    <div class="headerHome__disconnect"><a href="index.php?action=deco"><img src="assets/icon/unlog.svg"/></a></div>

</header>

