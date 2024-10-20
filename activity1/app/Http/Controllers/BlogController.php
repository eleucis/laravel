<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use App\Models\Category;



class BlogController extends Controller
{
    public function index(Request $request){


        //dd($request->all());

        //$result = DB::table('blogs')->get();

        //$result = DB::table('blogs')->pluck('title');

        // $result = DB::table('blogs')
        //             // ->where('title', '=', 'uiXRwLvQlO')
        //             // ->orWhere('status', '=', 0)
        //             ->get();

        // $result = DB::table('blogs as b')
        //     ->join('category as c', 'c.id', '=', 'b.category_id')
        //     ->select('b.id as id', 'b.title', 'b.description', 'b.status', 'b.created_at', 'b.category_id', 'c.id as category_id', 'c.name')
        //     ->get();

        //$result = Blog::all();    
        
        //$result = Category::all();
        
        //$result = Blog::find(1);
        //$result = $result->title;

        //$result = Blog::findOrFail(100);

        $result = Blog::where('id', 2)->orWhere('id', 5)->get();

        //$this->insertBlogData();
        
        $this->massAssignment();

        return $result;

    }

    public function insertBlogData(){

        // $blog = new Blog();


        // $blog->title = 'Sample';
        // $blog->description = 'Sample asadasdadsad';
        // $blog->status = 1;
        // $blog->created_at = date('Y-m-d H:i:s');
        // $blog->category_id = 2;

        // $blog->save();

        //update
        $blog = Blog::find(1);
        $blog->title = 'New Title 3';
        $blog->description = 'New Description 3';
        $blog->save();

        //delete
        $blog = Blog::findOrFail(4)->delete();


    }

    public function massAssignment() {
        // $blog = Blog::create([
            
        //         'title' => 'Sample333', 
        //         'description' => 'Sample asdasda2222',
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'category_id' => 2,
        // ]);

        // dd('success');


        // $blog = Blog::find(17)->update([
        //     'title' => 'ad2323sada',
        //     'status' => 2,
        // ]);

        // $blog = Blog::where('status', 1)->update([
        //     'title' => 'BGt0LlyW6i',
        //     'status' => 2,
        // ]);


        //Blog::find(5)->delete();
    }

   public function getAllData(){

       //$blogs = Blog::get()->all();
       // $blogs = Blog::onlyTrashed()->get();

       //$blogs = Blog::withTrashed->find(5)->restore();
        //$blogs = Blog::withTrashed()->find(3)->forceDelete();
        return $blogs;
    
    }





    public function showCreateForm(){

        $categories = Category::get()->all();

        $blogs = Blog::get()->all();

        return view('blogs.blogCreateView',compact('categories', 'blogs'));

    

    }


    public function createBlogData(Request $request){

        //dd('insert');

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'category_id' => $request ->input ('category')
        ];
        

        $result = Blog::create($data);

        $blog = Blog::find($result->id);

         return redirect()->route('blog.create');

        // return $blog;

    //     $result = DB::table('blogs')->insert(
    //         [
    //             'title' => 'Sample',
    //             'description' => 'Sanple Description',
    //             'status' => 0,
    //             'created_at' => date('Y-m-d H:i:s'),

    //         ],
    //         [
    //             'title' => 'Sample1',
    //             'description' => 'Sanple Description',
    //             'status' => 1,
    //             'created_at' => date('Y-m-d H:i:s'),

    //         ]
    
    // );

    //     return $result;
    }

    public function updateBlogData(){

        DB::table('blogs')->where('id', '=', 7)->update([
            'description' => 'sdfsdfsdfsdf'
        ]);

    }

    public function deleteBlogData(){

        $result = DB::table('blogs')->where('id',3)->delete();

        return $result;
    }


}
