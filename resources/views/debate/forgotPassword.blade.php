<div class="modal hide fade" id="myModalReset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Reset Password</h5>
        </div>

        <div class="modal-body">
            
          

<form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
{{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


        </div>




        <div class="modal-footer">
            
            <button type="submit"  class="btn btn-inverse">Send Password Reset Link</button>
         	</form>
        </div>
    </div>

    <!-- <input type="submit" name="submit">/ -->