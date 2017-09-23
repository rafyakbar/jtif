<table class="table">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Banyak Konten</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Menu::orderBy('nama')->get() as $item)
        <form action="{{ route('edit.menu') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $item->id }}">
            <tr>
                <td>
                    <input type="text" name="nama" value="{{ $item->nama }}" required>
                </td>
                <td>
                    <input type="radio" name="banyak_konten" value="1" @if($item->banyak_konten) checked @endif> Ya<br>
                    <input type="radio" name="banyak_konten" value="0" @if(!$item->banyak_konten) checked @endif> Tidak
                </td>
                <td>
                    <button type="submit">Simpan</button>
                    <button onclick="event.preventDefault(); document.getElementById('{{ $item->id }}').submit();">Hapus</button>
                </td>
            </tr>
        </form>
        <form action="{{ route('hapus.menu') }}" method="post" id="{{ $item->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $item->id }}">
        </form>
    @endforeach
    </tbody>
</table>
<br>
<h2>Tambah menu</h2>
<form action="{{ route('tambah.menu') }}" method="post">
    {{ csrf_field() }}
    Nama <input type="text" name="nama" required><br>
    Banyak konten?<br>
    <input type="radio" name="banyak_konten" value="1" required> Ya<br>
    <input type="radio" name="banyak_konten" value="0" required> Tidak<br>
    <button type="submit">Simpan</button>
</form>