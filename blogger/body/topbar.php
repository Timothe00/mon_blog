<nav class="nav-extended light-green">
    <div class="nav-wrapper">
      <a href="index.php?page=home" class="brand-logo">Super Blog</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="<?php echo($page=="home")?"active":""?>"><a href="index.php?page=home">Accueil</a></li>
        <li class="<?php echo($page=="blog")?"active":""?>"><a href="index.php?page=blog">Blog</a></li>
      </ul>

      <ul class="sidenav" id="mobile-demo">
        <li><a class="<?php echo($page=="home")?"active":""?>">Accueil</a></li>
        <li><a class="<?php echo($page=="blog")?"active":""?>">Blog</a></li>
      </ul>
    </div>
</nav>