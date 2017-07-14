<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Modal header</h5>
        </div>
        <div class="modal-body">
            
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                Name: <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                Email: <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                Password: <input id="password" type="password" class="form-control" name="password" required>

                Confirm Password<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                
            
        </div>
        <div class="modal-footer">
            
            <button type="submit"  class="btn btn-inverse">Register</button>
         	</form>
        </div>
    </div>

    <!-- <input type="submit" name="submit">/ -->