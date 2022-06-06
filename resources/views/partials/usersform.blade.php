<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="control-label">Name</label>
    <input id="name" type="text" class="form-control" name="name" placeholder="Nama" required autofocus>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="control-label">E-Mail Address</label>
    <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="control-label">Password</label>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
</div>

<div class="form-group">
    <label for="password-confirm" class="control-label">Confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
</div>