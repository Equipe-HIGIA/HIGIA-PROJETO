
  <nav class="navbar navbar-expand-lg  navbar-transparent bg-transparent">
  <div class="container-fluid  ">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-dark fs-4  <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){echo "active";}else{echo "";}?>" aria-current="page" >Home</a>
        </li>
        <li class="nav-item">
          <a  href="post.php" class="nav-link text-dark fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>" >Features</a>
        </li>
        <li class="nav-item">
          <a href="chat.php" class="nav-link text-dark fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>">Pricing</a>
        </li>
        <li   class="nav-item">
          <a href="filter.php" class="nav-link text-dark fs-4   <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>"  >Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


