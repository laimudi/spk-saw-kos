<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/admin') ? 'collapsed' : '' }}" href="{{ url('/admin') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
</li>

<li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link {{ Request::is('kriteria') ? 'collapsed' : '' }}" href="{{ route('kriteria.index') }}">
      <i class="bi bi-file-text-fill"></i>
      <span>Kriteria</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('crips') ? 'collapsed' : '' }}" href="{{ route('crips.index') }}">
      <i class="bi bi-house-fill"></i>
      <span>Crips</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('kos') ? 'collapsed' : '' }}" href="{{ route('kos.index') }}">
      <i class="bi bi-file-text-fill"></i>
      <span>Data Kos</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('penilaian') ? 'collapsed' : '' }}" href="{{ route('penilaian.index') }}">
      <i class="bi bi-house-fill"></i>
      <span>Penilain</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('peta') ? 'collapsed' : '' }}" href="{{ route('peta.index') }}">
      <i class="bi bi-file-text-fill"></i>
      <span>Peta Kos</span>
    </a>
  </li>
  {{-- <li class="nav-item">
    <a class="nav-link {{ Request::is('perhitungan') ? 'collapsed' : '' }}" href="{{ route('perhitungan.index') }}">
      <i class="bi bi-house-fill"></i>
      <span>Perhitungan</span>
    </a>
  </li> --}}