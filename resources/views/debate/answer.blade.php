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
                    <div id="commentText_{{$a->id}}" class="btn btn-mini mt2 comments">
                        Comment
                    </div>
                    <div id="comment_{{$a->id}}" class="dspN">
                        @include('debate/comment',['answerID'=>$a->id ])
                    </div>
                @endforeach