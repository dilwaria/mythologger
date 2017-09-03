<html>
<head>
    <meta name="robots" content="noindex, nofollow" />
	<link href="/css/admin.css" rel="stylesheet" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
</head>
	<body>
		
<h2>Post you Quiz</h2>

<form id="quizAdmin" method="post" action="/quiz/saveQuiz" style="border:1px solid #ccc">
  <div class="container">
      @if ($quiz)
         <input type="hidden" name="quizID" value="{!! $quiz->id !!}"> 
      @endif
    <label><b>quiz Content</b></label><br>
        Please convert to HTML before insertion. <a rel="nofollow" target="_blank" href="http://www.textfixer.com/html/convert-word-to-html.php"> Open</a>
    <br><br>
    <textarea name="quiz[quizquestion]">@if ($quiz){!! $quiz->quizquestion !!}@endif</textarea><br><br>

    <label><b>QuizOptions</b></label>
    <input type="text" name="quiz[quizoptions]" 
        @if ($quiz)
            value="{!! $quiz->quizoptions !!}"
        @endif
    required>



    <label><b>quizAnswer</b></label>
     
    <input type="text" name="quiz[quizanswer]" 
        @if ($quiz)
            value="{!! $quiz->quizanswer !!}"
        @endif
    required><br><br>

   
    
    
    <label><b>imagePath(if any)</b></label>
    <input type="text" name="quiz[imgPath]" 
        @if ($quiz)
            value="{!! $quiz->imgPath !!}"
        @endif
    required>

    <span class="tagGrp">
        <label><b>Tags(Please press enter)</b></label>
        @if ($quiz)
            @foreach ($tagArr as $tags)
                <input class="tagList" list="tagDataList" type="text" name="tags[][tagName]" value="{{$tags->tagName}}" autocomplete="off" >
            @endforeach
        @else
            <input class="tagList" list="tagDataList" type="text" name="tags[][tagName]" autocomplete="off" >
        @endif
        <datalist id="tagDataList">
           
        </datalist>

    </span>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>
	</body>

	<script type="text/javascript">
    var tagSearchUrl ="{{route('getTags')}}";
	$(window).ready( function(){

         $('.tagGrp').delegate(".tagList","keypress",function(e){
            var val= $(this).val();
            if(val.length<2 || e.which===13){
                return;
            }

            $.ajax({
                url : tagSearchUrl,
                type : "get",
                success : function(res) {
                   var dataList = $("#tagDataList");
                dataList.empty();
                    if(res.length) {
                        for(var i=0, len=res.length; i<len; i++) {
                            var optStr= "<option value='"+res[i].tagName+"'>"+res[i].tagName+"</option>";
                            var opt = $(optStr);
                            dataList.append(opt);
                        }
                    }
                }
             });
         });
     }
	);

    $(document).on("keydown", function (e) {
        if (e.which === 8 && !$(e.target).is("input, textarea")) {
            e.preventDefault();
        }
    });

    $('.tagGrp').delegate(".tagList","keydown", function(e){
        if((e.keyCode == 8 || e.keyCode == 46) && this.value==='' && $('.tagGrp .tagList').length>1){
            this.remove();
            $('.tagGrp .tagList')[$('.tagGrp .tagList').length -1].focus();
        }
    });

     $('.tagGrp').delegate(".tagList","keypress", function(e){
        if (e.keyCode == 13) {
            var newInput = $("<input name='tags[][tagName]' class='tagList' list='tagDataList'  type='text'>");
            $('.tagGrp').append(newInput);
            $(newInput).focus();
        }
    });

    $('.tagGrp').delegate(".tagList","input", function(e){
        this.value=this.value.toLowerCase();
    });

     $('#quizAdmin').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
	

	</script>

</html>