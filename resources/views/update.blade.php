@include('header')
<div class="container">
<div class="row">'
  <div class="col-md-6">

    <form method="POST" action="{{ url('/edit', array($buku->id))}}">
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
      <label for="exampleInputEmail1" style="margin-right: 7%;">Judul Buku </label>
      <input style="margin-bottom: 1%;" value="<?php echo $buku->judul; ?>" type="text" class="form-control" name="judul" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 8.5%;">Penerbit</label>
      <input style="margin-bottom: 1%;" value="<?php echo $buku->penerbit; ?>" type="text" class="form-control" name="penerbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 6.5%;">Tahun Terbit</label>
      <input style="margin-bottom: 1%;" value="<?php echo $buku->tahun_terbit; ?>" type="text" class="form-control" name="tahun_terbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="margin-right: 7.5%;">Pengarang</label>
      <input style="margin-bottom: 1%;" value="<?php echo $buku->pengarang; ?>" type="text" class="form-control" name="pengarang" placeholder="">
    </div>

    <button type="submit" style="margin-right: 1%;" class="btn btn-primary" value="">Update</button>
    <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
  </fieldset>
</form>

  </div>

</div>
</div>
