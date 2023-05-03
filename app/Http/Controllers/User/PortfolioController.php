<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use App\Models\Header;
use App\Models\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hello');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$user_id='')
    {
        $user_id = $request->session()->get('USER_ID');
        $portfolio = Portfolio::select('id')->where('user_id',$user_id)->get();
        if($portfolio->isEmpty())
        {
            $myportfolio = new Portfolio();
            $myportfolio->user_id = $user_id;
            $myportfolio->template_id = 1;
            $myportfolio->save();
            $header=new Header();
            $header->portfolio_id = $myportfolio->id;
            $header->save();
            $result['header']=Header::find($header->id)->get();
        }
        else
        {
            $portfolio[0]->id;
            $result['header']=Header::where('portfolio_id',$portfolio[0]->id)->get();
        }
        return view('user.portfolio.create',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function saveheader(Request $request)
    {
        if($request->post('header_id')>0){
            $model=Header::find($request->post('header_id'));
            // dd($model);
            $msg="Header updated";
        }
        else{
            $model=new Header();
            $msg="Header inserted";
        }

        $model->logo = $request->logo;
        $model->menu_1 = $request->menu_1;
        $model->menu_2 = $request->menu_2;
        $model->menu_3 = $request->menu_3;
        $model->menu_4 = $request->menu_4;
        $model->menu_5 = $request->menu_5;
        $model->sticky = $request->sticky;
        $model->save();
        $id = $model->id;
        $result= $model;
        return response()->json(['status'=>'success','id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
