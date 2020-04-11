
<header class="headerHome">

    <div class="headerHome__logo">
        <img src="assets/icon/logo_svg.png" alt="logo_lumino">
    </div>
    <div class="headerHome__nav nav">
      <div class="nav__item">Home</div>
      <div class="nav__item">Genre <img class="item__arrow" src="assets/icon/chevron_gris.svg"/> </div>
      <div class="nav__item">My list</div>
    </div>

    <div class="headerHome__search">
      <img src="assets/icon/loupe.svg"/>
      <div class="search__text"> Search a title</div>
    </div>

    <div class="headerHome__bell"><img src="assets/icon/bell.svg"/></div>
    <div class="headerHome__name">Hello <?php echo $_SESSION['firstname']; ?> !</div>
    <div class="headerHome__profil"><img src="assets/img/profil.png"/></div>
    <div class="headerHome__disconnect"><a href="index.php?action=deco"><img src="assets/icon/unlog.svg"/></a></div>

</header>

