<x-layouts.admin-app>
    <div class="container">
        <h1>Dashboard Admin</h1>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route('gedung.index') }}" class="list-group-item list-group-item-action">
                        CRUD Data Gedung
                    </a>
                    <a href="{{ route('tenant.index') }}" class="list-group-item list-group-item-action">
                        CRUD Data Tenant
                    </a>
                    <a href="{{ route('maintenance.index') }}" class="list-group-item list-group-item-action">
                        CRUD Data Maintenance
                    </a>
                    <a href="{{ route('user.index') }}" class="list-group-item list-group-item-action">
                        CRUD Data User
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                {{-- Konten utama dashboard bisa ditambahkan di sini --}}
                <div class="card">
                    <div class="card-body">
                        <h5>Selamat datang di Dashboard Admin!</h5>
                        <p>Pilih menu di samping untuk mengelola data.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-app>
