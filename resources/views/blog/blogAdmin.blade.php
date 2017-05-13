<html>
<head>
    <meta name="robots" content="noindex, nofollow" />
	<link href="/css/admin.css" rel="stylesheet" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
</head>
	<body>
		
<h2>Post you blog</h2>

<form id="blogAdmin" method="post" action="/blog/saveBlog" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Blog Content</b></label><br>
        Please convert to HTML before insertion. <a rel="nofollow" target="_blank" href="https://wordhtml.com/"> Open</a>
    <br><br>
    <textarea name="blog[blogContent]">Lorem ipsum</textarea><br><br>

    <label><b>Slug</b></label>
    <input type="text" name="blog[slug]" required>

    <label><b>Title(to display)</b></label>
     Please convert to HTML before insertion. <a rel="nofollow" target="_blank" href="https://wordhtml.com/"> Open</a>
    <input type="text" name="blog[title]" required>

    <label><b>seoDescription</b></label>
    <input type="text" name="blog[seoDescription]" required>
    
    <label><b>imagePath(if any)</b></label>
    <input type="text" name="blog[imgPath]" >

    <span class="tagGrp">
        <label><b>Tags(Please press enter)</b></label>
        <input class="tagList" list="tagDataList" type="text" name="tags[][tagName]" autocomplete="off" required >
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

         $('.tagList').on("input",function(e){
            var val= $(this).val();
            if(val.length<3){
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
     $('.tagGrp').delegate(".tagList","keypress", function(e){
        if (e.keyCode == 13) {
            var newInput = $("<input name='tags[][tagName]' class='tagList' list='tagDataList'  type='text'>");
            $('.tagGrp').append(newInput);
            $(newInput).focus();
        }
    });

     $('#blogAdmin').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });
	

	</script>

</html>