@extends('master');
@section("content")

<div class="container custom-login">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
        @csrf
        <div class="form-group">
           
           <label for="exampleInputEmail">User Name</label></br>
       <input type="text" name="name" class="from-control" id="exampleInputName" placeholder="User Name">
</div>
            <div class="form-group">
           
                <label for="exampleInputEmail">Email</label></br>
            <input type="email" name="email" class="from-control" id="exampleInputEmail" placeholder="Email">
</div>
<div class="form-group">
                <label for="passwordInputEmail">password</label></br>
            <input type="password" name="password" class="from-control" id="passwordInputEmail" placeholder="password">
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">Register</button>
</div>
        </form>

</div>
</div>
</div>

@endsection
