<form id="commentSubmit_{{$a->id}}" class="commentFormSubmit" method="post" action="{{route('postComment')}}" onkeypress="return event.keyCode != 13;" >
<input type="hidden" name="debateAnswerID" value="{{$a->id}}">
<input type="hidden" name="creatorID" value="{{Auth::user()->id}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="answer p1 mt2" style="border-radius: 15px;margin-left: 10%;">
                <div class="comment p1 dspIB">
                        <input type="text" style="width:82%;margin: 0 10px;" name="commentContent">
                        <button class="btn btn-mini commentSubmitBtn flR"> Submit</button>
                    
                </div>
            </div>
</form>

@foreach($a->pComments as $c)
   
        @include('debate/replies',['c'=>$c,'mt'=>10])

@endforeach

