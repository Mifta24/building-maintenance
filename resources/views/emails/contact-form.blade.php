<x-layouts.plain-app>
    <div>
        <h2>Anda Menerima Pesan Baru!</h2>
        <p><strong>Nama:</strong> {{ $data['name'] }}</p>
        <p><strong>Email Pengirim:</strong> {{ $data['email'] }}</p>
        <hr>
        {{-- <p><strong>Pesan:</strong></p>
        <p>{{ $data['message'] }}</p> --}}
    </div>

</x-layouts.plain-app>
