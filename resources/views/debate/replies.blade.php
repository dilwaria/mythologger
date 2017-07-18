@include('debate/commentContent',['c'=>$c,'mt'=>$mt])

@if($c->children)
    @foreach($c->children as $replies)
    	@include('debate/replies',['c'=>$replies,'mt'=>$mt+5])
    @endforeach 
@endif