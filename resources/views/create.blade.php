@include('header')
<div class="container">
<div class="row">'
  <div class="col-md-6">

    <form method="POST" action="{{ url('/insert')}}">
      {{csrf_field()}}
  <fieldset>
    <legend>Buku Baru</legend>
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 7%;">Judul Buku</label>
      <input style="margin-bottom: 1%;" type="text" class="form-control" name="judul" placeholder="Judul Buku">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 8.5%;">Penerbit</label>
      <input style="margin-bottom: 1%;" type="text" class="form-control" name="penerbit" placeholder="Penerbit Buku">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 6.5%;">Tahun Terbit</label>
      <input style="margin-bottom: 1%;" type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit Buku">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 7.5%;">Pengarang</label>
      <input style="margin-bottom: 1%;" type="text" class="form-control" name="pengarang" placeholder="Pengarang Buku">
    </div>

    <button style="margin-right: 1%;" type="submit" class="btn btn-primary" value="">Simpan</button>
    <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
  </fieldset>
</form>

  </div>

</div>
</div>