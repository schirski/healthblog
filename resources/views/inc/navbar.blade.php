<nav class="navbar navbar-expand navbar-dark bg-dark" >

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link @yield('nav_main_active')"  href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('nav_posts_active')" href="/posts">Записи</a>
            </li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link @yield('nav_createpost_active')" href="/posts/create">Новая запись</a>
            </li>
          </ul>
        </div>
      </nav>