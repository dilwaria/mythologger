<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Modal header</h5>
        </div>
        <div class="modal-body">
            <form id="signUpForm" action="{{route('saveProfile')}}">
                UserName: <input type="text" name="userName">
                Password: <input type="text" name="emailID">
                Retype Password: <input type="password" name="password">
                
            </form>
        </div>
        <div class="modal-footer">
            
            <button class="btn btn-inverse">Save changes</button>
         	
        </div>
    </div>

    <!-- <input type="submit" name="submit">/ -->