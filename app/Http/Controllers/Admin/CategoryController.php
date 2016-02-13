<?php

namespace cmp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use cmp\Http\Requests;
use cmp\Http\Controllers\Controller;
use cmp\Category;

class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $categorias = Category::all();
         //dd($categorias);

         return view('admin.category.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();
        $this->validate($request,[
              'name'=>'required|unique:categories|max:255',
              'color'=>'required',
            ]);
        $category = Category::create([
            'name' => $request->get('name'),
            'slug' => str_slug($request->get('name')),
            'description' => $request->get('description'),
            'color' => $request->get('color')
        ]);
        $message = $category ? 'Categoría agregada correctamente!' : 'La Categoría NO pudo agregarse!';
        return redirect()->route('admin.category.index')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Category $category)
    {
        //
        return $category;
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Category $category)
    {
        //
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->validate($request, [
          'name' => 'required|max:255',
          'color' => 'required',
        ]);

        $category->fill($request->all());
        $category->slug = str_slug($request->get('name'));
        
        $updated = $category->save();
        
        $message = $updated ? 'Categoría actualizada correctamente!' : 'La Categoría NO pudo actualizarse!';
        
        return redirect()->route('admin.category.index')->with('message', $message);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
       /* $this->category->delete();
        $message = $this->category->name . ' fue eliminado de nuestros registros';
       
       if ($request->ajax()) {
           return response()->json([
              'id'      =>$this->category->id,
              'message' =>$message
            ]);
       }

         Session::flash('message', $message);
        return redirect()->route('admin.category.index');*/
        $deleted = $category->delete();
        
        $message = $deleted ? 'Categoría eliminada correctamente!' : 'La Categoría NO pudo eliminarse!';
        
        return redirect()->route('admin.category.index')->with('message', $message);
    }
}
