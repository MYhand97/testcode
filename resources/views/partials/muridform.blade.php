<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
    <label for="nama" class="control-label">Nama</label>
    <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama" required autofocus>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="control-label">E-Mail</label>
    <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
</div>

<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
    <label for="no_hp" class="control-label">No Handphone</label>
    <input id="no_hp" type="text" class="form-control" name="no_hp" placeholder="No Handphone" required autofocus>
</div>

<div class="form-group">
    <h4 class="form-label">Nama Cabang</h4>
    <select name="metode_bayar" class="form-control">
        @foreach($cabangs as $cabang)
        <option value="{{$cabang->id}}">{{$cabang->nama_cabang}}</option>
        @endforeach
    </select>
    <span class="select-arrow"></span>
</div>