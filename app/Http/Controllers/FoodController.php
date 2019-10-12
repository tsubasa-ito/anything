<?php

namespace App\Http\Controllers;

use App\Food;
use App\Tag;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = \Request::query();
        // queryにタグが入る場合
        if(isset($q['tag_name'])){
            $foods = Food::latest()->where('comment', 'like', "%{$q['tag_name']}%")->paginate(3);
            $foods->load('user', 'category_one', 'category_two', 'category_three', 'category_four', 'category_five','tags' );

            return view('foods.index', [
                'foods' => $foods,
                'tag_name' => $q['tag_name'],
            ]);
        }else{ //普通ののindex
            $foods = Food::latest()->paginate(5);
            // modelで$fillableの下で関数にして許可したものを使う宣言を変数に入れる
            $foods->load('user', 'category_one', 'category_two', 'category_three', 'category_four', 'category_five','tags' );
            return view('foods.index', [
                'foods' => $foods,
            ]);
        }
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

        preg_match_all('/#([a-zA-Z0-9０-９ぁ-んァ-ヶー一-龠]+)/u', $request->comment, $match);
        $tags = [];
        foreach ($match[1] as $tag) {
            $found = Tag::firstOrCreate(['tag_name' => $tag]);
            array_push($tags, $found);
        }
        $tag_ids = [];
        foreach ($tags as $tag) {
            array_push($tag_ids, $tag['id']);
        }
        $food = $food->create($input);
        $food->tags()->sync($tag_ids);

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

            preg_match_all('/#([a-zA-Z0-9０-９ぁ-んァ-ヶー一-龠]+)/u', $request->comment, $match);
            $tags = [];
            foreach ($match[1] as $tag) {
                $found = Tag::firstOrCreate(['tag_name' => $tag]);
                array_push($tags, $found);
            }
            // dd($tags);
            $tag_ids = [];
            foreach ($tags as $tag) {
                array_push($tag_ids, $tag['id']);
            }
            $food->tags()->sync($tag_ids);
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
