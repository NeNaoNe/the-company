<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-4">
      <div class="container">
          <a href="dashboard.php" class="navbar-brand">
             <h1 class="h4">The Company</h1>
          </a>

          <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#main-nav">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="main-nav">

              <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a href="#" class="nav-link fw-bold"><?=  $_SESSION['username'] ?></a></li>
                   <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Log out</a></li>
              </ul>
          </div>
      </div>
    </nav>