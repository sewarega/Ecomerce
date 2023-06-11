
@extends('master');
@section("content")

<div class="container custom-login">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="card">
        <form action="login" method="POST">
           
            <div class="form-group">
            @csrf
                <label for="exampleInputEmail">Email</label></br>
            <input type="email" name="email" class="from-control" id="exampleInputEmail" placeholder="Email">
</div>
<div class="form-group">
                <label for="passwordInputEmail">password</label></br>
            <input type="password" name="password" class="from-control" id="passwordInputEmail" placeholder="password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Login</button>
</div>
</div>
        </form>
</div>
</div>
</div>

@endsection
