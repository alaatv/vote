<?php

namespace App\Http\Controllers\Api;

use App\Classes\Response as myResponse;
use App\Http\Requests\InsertUserVote;
use App\Repositories\UserVoteOptionRepo;
use App\Traits\HTTPRequestTrait;
use App\UserVoteOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserVoteOptionContoller extends Controller
{
    use HTTPRequestTrait;

    /**
     * UserVoteOptionContoller constructor.
     */
    public function __construct()
    {
        $this->middleware('hasUserVoted' , ['only' => 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
        return UserVoteOptionRepo::getRecords($request->all())->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertUserVote $request)
    {
        $userVoteOption = new UserVoteOption($request->all());
        if($userVoteOption->save()){
            return response()->json([
                'message' => __('messages.database_success_insert' , ['resource' => 'رای کاربر']),
                'vote' => $userVoteOption->vote ,
                'category'  =>  $userVoteOption->vote->category,
            ]);
        }else{
            return response()->json($this->setErrorResponse(myResponse::DATABASE_ERROR_ON_INSERTING_USER_VOTE, __('messages.database_error_insert' , ['resource'=>'رای کاربر'])) , Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param UserVoteOption $userVoteOption
     * @return UserVoteOption
     */
    public function show(Request $request, UserVoteOption $userVoteOption)
    {
        return $userVoteOption;
    }
}
