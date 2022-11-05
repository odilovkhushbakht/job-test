<?php

namespace App\Http\Controllers\Api\Blog;

use Illuminate\Http\Request;
use App\Contracts\Blog\DetailAction;
use App\Http\Controllers\Controller;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Support\Facades\Validator;
use App\Contracts\Blog\BlogActionInterface;


class BlogApiController extends Controller
{
    protected $blogAction;
    protected $blogDetailAction;

    public function __construct(BlogActionInterface $blogAction, DetailAction $blogDetailAction)
    {
        $this->blogAction = $blogAction;
        $this->blogDetailAction = $blogDetailAction;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $result = $this->blogAction->listBlog($params);
        return response($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data = $this->blogAction->add($data);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blogDetailAction->detailPage($id);
        return response($blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $result = $this->blogAction->update($data, $id);
        return response($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->blogAction->delete($id);
        return response($result);
    }
}
