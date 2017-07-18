<div class="answer p1 mt2 inputForReply" style="border-radius: 15px;margin-left: {{$mt}}%;">
                        <div class="mt2">
                            <img class="img-circle mr2 floatL" src="/images/user-avatar.jpg" style=" height: 30px;width: 30px;">
                            <div class="dspIB">
                                Abhinav Sharma, <br> <span style="font-size:12px;">June 27</span>
                            </div> 
                        </div>
                        <div class="comment pl4 p1">
                                {!! $c->commentContent !!} 
                        </div>
                        <button id="replyToComment_{{$a->id}}_{{$c->id}}" class="btn btn-mini mt1 replyToComment"> Reply</button>
        </div>

<div id="reply_{{$a->id}}_{{$c->id}}" class="dspN">
        <form id="replySubmit_{{$a->id}}_{{$c->id}}" method="post" action="{{route('postComment')}}" >
         <input type="hidden" name="debateAnswerID" value="{{$a->id}}">
        <input type="hidden" name="creatorID" value="1">
        <input type="hidden" name="parentID" value="{{$c->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="answer p1 mt2" style="border-radius: 15px;margin-left: {{$mt+5}}%;">
                        <div class="comment p1 dspIB">
                                <textarea class="commentInput" style="width: 82%;" name="commentContent"></textarea>
                                <button class="btn btn-mini mt1"> Submit</button>
                            
                        </div>
                    </div>
        </form>
    </div>