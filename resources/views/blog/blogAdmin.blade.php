<html>
<head>
    <meta name="robots" content="noindex, nofollow" />
	<link href="/css/admin.css" rel="stylesheet" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
</head>
	<body>
		
<h2>Post you blog</h2>

<form method="post" action="/blog/saveBlog" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Blog Content</b></label><br><br>
    <textarea name="blog[blogContent]">Lorem ipsum</textarea><br><br>

    <label><b>Slug</b></label>
    <input type="text" name="blog[slug]" required>

    <label><b>Title</b></label>
    <input type="text" name="blog[title]" required>

    <label><b>seoDescription</b></label>
    <input type="text" name="blog[seoDescription]" required>
    
    <label><b>imagePath(if any)</b></label>
    <input type="text" name="blog[imgPath]" >

    <label><b>Tags(comma separated)</b></label>
    <input type="text" name="tags[tagName]" >

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>
	</body>

	<script type="text/javascript">
	$(window).ready(
		function(){
			CKEDITOR.replace( 'blog[blogContent]');
		}
	);

	</script>

</html>