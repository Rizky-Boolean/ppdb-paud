{{-- Nav --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand text-semibold text-blue-dark" href="/">TK Al-Ishlah</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link {{ request()->is('admin/index*') ? 'active' : '' }}" href="/admin/index{{ count(DB::table('recruitments')->get()) > 0 ? '?tahun_ajaran=' . DB::table('recruitments')->orderBy('id', 'desc')->first()->tahun_ajaran : '' }}">Data Calon Peserta Didik</a>
          </li>
          <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link {{ request()->is('admin/recruitment*') ? 'active' : '' }}" href="/admin/recruitment">Manajemen Pendaftaran</a>
          </li>
          @auth
          <li class="nav-item ms-md-4 ms-auto">
              <div class="dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Yunus Febriansyah</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
                    </ul>
              </div>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
{{-- End Nav --}}
