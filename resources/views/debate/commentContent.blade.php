<div class="answer p1 mt2 inputForReply" style="border-radius: 15px;margin-left: {{$mt}}%;">
                        <div class="mt2">
                            <img class="img-circle mr2 floatL" src=" {!! Avatar::create($c->writer->name)->toBase64()!!}" style=" height: 30px;width: 30px;">
                            <div class="dspIB">
                                {{$c->writer->name}} <br> <span style="font-size:12px;">{{Carbon\Carbon::parse($c->updateDateTime)->format('d-F-Y')}}</span>
                            </div> 
                        </div>
                        <div class="comment pl4 p1">
                                {!! $c->commentContent !!} 
                        </div>
                        <button id="replyToComment_{{$a->id}}_{{$c->id}}" class="btn btn-mini mt1 replyToComment"> Reply</button>
        </div>
    <div id="reply_{{$a->id}}_{{$c->id}}" class="dspN">
            <form id="replySubmit_{{$a->id}}_{{$c->id}}" method="post" class="commentFormSubmit" action="{{route('postComment')}}" >
             <input type="hidden" name="debateAnswerID" value="{{$a->id}}">
            <input type="hidden" name="creatorID" value="{{Auth::user()->id}}">
            <input type="hidden" name="parentID" value="{{$c->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="answer p1 mt2" style="border-radius: 15px;margin-left: {{$mt+5}}%;">
                            <div class="comment p1 dspIB">
                                    <!-- <textarea class="commentInput" style="width: 82%;" name="commentContent"></textarea> -->
                                    <input type="text" class="commentInput" style="width: 82%;margin: 0 10px;" name="commentContent">
                                    <button class="btn btn-mini commentSubmitBtn"> Submit</button>
                                
                            </div>
                        </div>
            </form>
        </div>
