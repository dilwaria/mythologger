<form id="commentSubmit_{{$a->id}}" method="post" action="{{route('postComment')}}" >
<input type="hidden" name="debateAnswerID" value="{{$a->id}}">
<input type="hidden" name="creatorID" value="1">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="answer p1 mt2" style="border-radius: 15px;margin-left: 10%;">
                <div class="comment p1 dspIB">
                        <input type="textbox" style="width: 82%;padding-left: 1%" name="commentContent">
                        <button class="btn btn-mini mt1"> Submit</button>
                    
                </div>
            </div>
</form>

@foreach($a->pComments as $c)
   
        @include('debate/replies',['c'=>$c,'mt'=>10])

@endforeach

