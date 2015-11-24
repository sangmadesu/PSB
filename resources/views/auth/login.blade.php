@extends('psb.master')

@section('login')
<section class="secone">
           <div class="secone-login-box">
            <h1>Masuk.</h1><br>
            <form action="/auth/login" method="post"> 
            	{!! csrf_field() !!}
            	<input type="text" name="email" placeholder="E-mail"><br>
	            <input type="password" name="password" placeholder="Sandi"><br>
	            <input type="submit" value="Masuk" class="toggle-login">
            </form>    
           </div>
</section>
@endsection