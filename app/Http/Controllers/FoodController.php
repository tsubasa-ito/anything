<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('id','desc')->get();
        // modelで$fillableの下で関数にして許可したものを使う宣言を変数に入れる
        $foods->load('user', 'category_one', 'category_two', 'category_three', 'category_four', 'category_five', );
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('foods.create', [
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = new Food;
        $input = $request->only($food->getFillable());
        $food = $food->create($input);

        return redirect('/');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('foods.show', [
            'food' => $food,
        ]);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        return view('foods.edit', [
            'food' => $food,
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        if (\Auth::id() === $food->user_id) {
            $food->categoryid_one = $request->categoryid_one;
            $food->categoryid_two = $request->categoryid_two;
            $food->categoryid_three = $request->categoryid_three;
            $food->categoryid_four = $request->categoryid_four;
            $food->categoryid_five = $request->categoryid_five;
            $food->comment = $request->comment;
            $food->save();
        }
        return redirect('/');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        if (\Auth::id() === $food->user_id) {
            $food->delete();
        }
        return redirect('/');
    }


    public function compare_index($id)
    {
        $foods = Food::orderBy('id','desc')->get();//自分以外のユーザIDのものを持ってくる→そのためには、多対多の関係を作る？
        $foods->load('user', 'category_one', 'category_two', 'category_three', 'category_four', 'category_five', );

        $my_food = Food::find($id);

        return view('foods.c_index', [
            'foods' => $foods,
            'my_food' => $my_food
        ]);
    }

}
