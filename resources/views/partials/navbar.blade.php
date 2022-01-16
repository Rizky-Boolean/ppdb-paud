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
            <a class="nav-link {{ request()->is('ppdb') ? 'active' : '' }}" href="/ppdb">Beranda</a>
          </li>
          <li class="nav-item ms-md-4 ms-auto">
              <a class="nav-link {{ request()->is('ppdb/daftar') ? 'active' : '' }}" href="/ppdb/daftar">Daftar</a>
        </li>
        <li class="nav-item ms-md-4 ms-auto">
            <a class="nav-link {{ request()->is('ppdb/pengumuman') ? 'active' : '' }}" href="/ppdb/pengumuman">Pengumuman</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
{{-- End Nav --}}
