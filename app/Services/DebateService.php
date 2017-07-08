<?
namespace App\Services;

use App\Debate;
use App\Tags;
use App\Users;
use App\Facts;
use DB;
use App\Services\UserService;
use App;

class DebateService{
	private $userService;

	public function __construct(){
		$this->userService= App::make('userService');
	}

	public function getDebate($debateID){
		if(!$debateID){
			return NULL;
		}
		$debate= Debate::where('id','=',$debateID)->first();

		// $tagArr=[];
		// foreach ($blog->tags as $t){
		// 	$tagArr[]=$t->tagName;
		// }
		// $blog->tagList= implode(",",$tagArr);

		return $debate;
	}

}