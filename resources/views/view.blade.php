@include('header')

<div class="container">
  <div class="row">
      <legend style="margin-bottom: 1%;">View Data</legend>
      <table class="table table-hover" border="1px">
      <tr>
        <td>ID</td>
        <td style="text-align: center;">{{ $buku->id }}</td>
      </tr>
      <tr>
        <td>Judul Buku</td>
        <td  style="text-align: center;">{{ $buku->judul }}</td>
      </tr>
      <tr>
        <td>Penerbit Buku</td>
        <td  style="text-align: center;">{{ $buku->penerbit }}</td>
      </tr>
      <tr>
        <td>Tahun Terbit Buku</td>
        <td  style="text-align: center;">{{ $buku->tahun_terbit }}</td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td  style="text-align: center;">{{ $buku->pengarang }}</td>
      </tr>
  </table>
<a href="{{ url('/') }}" class="btn btn-primary">Back</a>

    
  </div>
</div>
  