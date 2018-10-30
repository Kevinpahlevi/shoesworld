<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\blog;
class blogcontroller extends Controller
{
   public function index()
    {
        // insert biasa
        // $blog = new blog;
        // $blog->nama = 'TONI';
        // $blog->umur = 12;
        // $blog->save();

        // insert mass assignment
        // blog::create([
        //     'nama'=>'toni',
        //     'umur'=>12
        // ]);

        // update biasa
        // $blog = blog::where('nama','toni')->first();
        // $blog->nama = 'kurumi';
        // $blog->save();

        // update mass assignment
        // blog::where('nama','kokoro')->update([
        //     'nama'=>'kokori',
        //     'umur'=>21
        // ]);

        // delete
        // $blog = blog::find(4);
        // $blog->delete();

        // restore softdeletes
        //blog::withTrashed()->restore();

        // destroy
        // blog::destroy(12);

        // view dengan yg di softdeletes
        // $test = blog::withTrashed()->get();
         $test = blog::all();
    	return view('blog/blog',['user'=>$test]);
    }

   public function show($id)
    {	
        // insert
        // DB::table('users')->insert(['nama'=>'levi','umur'=>19]);
        // update
        // DB::table('users')->where('nama','levi')->update(['umur'=>21]);
        // delete
        // DB::table('users')->where('nama','levi')->delete();
        // menggunakan where
    	// $array = DB::table('users')->where('nama','like','%e%')->get();
        $array = DB::table('users')->where('id',$id)->get();

        // $alert = '<script> alert("test alert")</script>';
    	return view('blog/blog3', ['sifat'=>$array]);
    }

    public function edit($id)
    {
        $blog = blog::where('id',$id)->get();
        return view('blog/edit', ['user'=>$blog]);
    }

    public function update(request $request, $id)
    {
        $blog = blog::find($id);
        $blog->nama = $request->nama;
        $blog->umur = $request->umur;
        $blog->save();

        return redirect('blog');
    }

    public function create(){
        return view('blog/create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:5',
            'umur' => 'required|max:3'
        ]);

        $blog = new blog;
        $blog->nama = $request->nama;
        $blog->umur = $request->umur;
        $blog->save();

        return redirect('blog');
    }

    public function delete($id){
        
        $blog = blog::find($id);
        $blog->delete();
        return redirect('blog');

    }
}
