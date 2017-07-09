@extends('master')

 @section('title')
 Mythologger- Applied Mythology Blogging
 @endsection

 @section('styleCss')
   <link rel="stylesheet" href="/css/profile.css">
 @endsection

@section('content')
<div class="mainContent">
	<div class="profileLeft">
		@include('profile/profileLeftWidget') 
	</div>    

	<div class="centerProfileSection">
		@include('profile/centerProfileSection') 
	</div>
</div>
@endsection