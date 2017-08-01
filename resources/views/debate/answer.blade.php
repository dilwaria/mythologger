@if(Auth::user())
    @if(!$hasUserAnswered)
        <div class="qa_btn">
        <button class="btn btn-small btn-warning" type="button" id="answerBtn">Answer</button>
        </div>
        <div class="mt2 dspN" id="userAnswerInput">
            <form id="submitAnswerForm" action="{{route('submitAnswer')}}" method="post">
                <input type="hidden" name="debateID" value="{{$debate->id}}">
                <!-- need to get userID dynamic   !-->
                <input type="hidden" name="creatorID" value="{{ Auth::user()->id }}">
                <textarea class="span6" id="editorText" rows="5" name="answerContent"></textarea>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-small btn-warning floatR mt2 mb9 dspIB" type="button" id="answerSubmit">Submit</button>
            </form>
        </div>

    @else
        <div class="qa_btn">
        <button class="btn btn-small btn-warning" type="button" id="answerBtn">Edit Answer</button>
        </div>
        <div class="mt2 dspN" id="userAnswerInput">
            <form id="submitAnswerForm" action="{{route('submitAnswer')}}" method="post">
                <input type="hidden" name="debateID" value="{{$debate->id}}">
                <!-- need to get userID dynamic   !-->
                <input type="hidden" name="creatorID" value="{{ Auth::user()->id }}">
                <input type="hidden" name="answerID" value="">
                <textarea class="span6" id="editableAnswerText" rows="5" name="answerContent"></textarea>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-small btn-warning floatR mt2 mb9 dspIB" type="button" id="answerSubmit">Submit</button>
            </form>
        </div>
    @endif
@endif
            <div id="hiddenDiv9" class="mb9 mt2 dspN"></div>
            <div id="answerContainer">

                @foreach($answers as $a)
                                    <div class="answer p2 mt2">
                                        <div class="mb2">
                                                <img class="img-circle " src="{{Common::getUserPic($a->writer)}}" style="height: 30px;width: 30px;margin-top: -4%"> 
                                                <div class="mt2 dspIB">
                                                    {{$a->writer->name}}<br><span style="font-size:12px;">{{Carbon\Carbon::parse($a->updateDateTime)->format('d-F-Y')}}</span>
                                                </div>  
                                        </div>
                                        <div style="margin-left: 2%">
                                            {!! $a->answerContent !!}
                                        </div>
                                    </div>

                                    @if(Auth::user())
                                        <div id="commentText_{{$a->id}}" class="btn btn-mini mt2 comments">
                                            Comment
                                        </div>
                                        <div id="comment_{{$a->id}}" class="dspN">
                                            @include('debate/comment',['answerID'=>$a->id ])
                                        </div>
                                    @endif 
                                     
                                @endforeach
            
            </div>