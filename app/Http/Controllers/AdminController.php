<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    /* +++++++++++++++++++++++++  +++++++++++++++++++++++++ */



    //data



    /* -------------------------  ------------------------- */



    /* +++++++++++++++++++++++++ Admin Menu +++++++++++++++++++++++++ */



    public function menu()
    {
        return view("Admin.menu");
    }



    /* ------------------------- Admin Menu ------------------------- */



    /* +++++++++++++++++++++++++ ALL CATEGORIES FUNCTIONS +++++++++++++++++++++++++ */



    /* +++++++++++++++++++++++++ Categories Page +++++++++++++++++++++++++ */



    public function categories()
    {
        $categories = Category::paginate(10);
        return view('Admin.Categories.categories', compact("categories"));
    }



    /* ------------------------- Categories Page ------------------------- */



    /* +++++++++++++++++++++++++ Create a category Page +++++++++++++++++++++++++ */



    public function createCategory()
    {
        return view('Admin.Categories.createCategory');
    }



    /* ------------------------- Create a category Page ------------------------- */



    /* +++++++++++++++++++++++++ Store a category  +++++++++++++++++++++++++ */



    public function storeCategory(Request $request)
    {
        //     $request->validate([
        //         'name' => 'required|max:100',
        //         'arName' => 'required|max:100'
        //         // 'arName' => array('required','max:100', "regex:/^[\p{Arabic}\s\p{N}]+$/")
        //     ],
        // );


        $this->validate(
            $request,
            [
                'name' => 'required|max:100|unique:categories,name',
                'lang2_Name' => 'required|max:100|unique:categories,lang2_Name',
                'lang3_Name' => 'required|max:100|unique:categories,lang3_Name'
                // 'arName' => array('required','max:100', "regex:/^[\p{Arabic}\s\p{N}]+$/")
            ],
            [
                'lang2_Name.max' => 'The max amount of characters for the language 2 category name is 100!',
                'lang2_Name.unique' => 'The language 2 category name is already used',
                'lang3_Name.max' => 'The max amount of characters for the language 3 category name is 100!',
                'lang3_Name.unique' => 'The language 3 category name is already used'
            ]
        );

        // return back()->with('error', 'The error message here!');
        // dd($request);
        // dd($request->all());
        // dd($request->input());
        // dd($request->post());

        // Category::create($request->post());
        // $category = Category::make($request->all());


        Category::create($request->all());

        // return redirect('/admin/categories/create')->with('status', 'Category has been created successfully.');
        return redirect('/admin/categories')->with('status', 'Category has been created successfully.');
    }



    /* ------------------------- Store a category ------------------------- */



    /* +++++++++++++++++++++++++ Edit Category +++++++++++++++++++++++++ */



    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('Admin.Categories.editCategory', compact('category'));
    }



    /* ------------------------- Edit Category ------------------------- */



    /* +++++++++++++++++++++++++ Update Category +++++++++++++++++++++++++ */



    public function updateCategory(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => ['required', 'max:100', Rule::unique('categories')->ignore($id)],
                'lang2_Name' => ['required', 'max:100', Rule::unique('categories')->ignore($id)],
                'lang3_Name' => ['required', 'max:100', Rule::unique('categories')->ignore($id)]
                // 'arName' => array('required','max:100', "regex:/^[\p{Arabic}\s\p{N}]+$/")
            ],
            [
                'lang2_Name.max' => 'The max amount of characters for the language 2 category name is 100!',
                'lang2_Name.unique' => 'The language 2 category name is already used',
                'lang3_Name.max' => 'The max amount of characters for the language 3 category name is 100!',
                'lang3_Name.unique' => 'The language 3 category name is already used'
            ]
        );
        $category = Category::find($id);
        $category->name = $request->name;
        $category->lang2_Name = $request->lang2_Name;
        $category->lang3_Name = $request->lang3_Name;
        $category->save();

        // return redirect('/admin/categories/edit/' . $id)->with('status', 'Category has been edited successfully.');
        return redirect('/admin/categories/')->with('status', 'Category has been edited successfully.');
    }



    /* ------------------------- Update Category ------------------------- */



    /* +++++++++++++++++++++++++ Delete Category +++++++++++++++++++++++++ */



    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/admin/categories/')->with('status', 'Category has been Deleted successfully.');
    }



    /* ------------------------- Delete Category ------------------------- */



    /* ------------------------- ALL CATEGORIES FUNCTIONS ------------------------- */



    /* +++++++++++++++++++++++++ ALL PROJECTS FUNCTIONS +++++++++++++++++++++++++ */



    /* +++++++++++++++++++++++++ Projects Menu +++++++++++++++++++++++++ */



    public function projects()
    {
        $projects = Project::paginate(10);
        return view('Admin.projects.projects', compact('projects'));
    }



    /* ------------------------- Projects Menu ------------------------- */


    /* +++++++++++++++++++++++++ Create a project page +++++++++++++++++++++++++ */



    public function createProject()
    {
        $categories = Category::all();
        return view('Admin.projects.createProject',compact('categories'));
    }



    /* ------------------------- Create a project page ------------------------- */



    /* +++++++++++++++++++++++++ Store Created Project +++++++++++++++++++++++++ */



    public function storeProject(Request $request)
    {
        $request->validate(
            [
                'category_id' => 'exists:categories,id'
            ],
            [
                'category_id.exists' => 'teez',
            ]
        );
        // dd($request->all());
        // dd($request->input());
        $project = new Project();

        $project->title = $request->title;
        $project->lang2_title = $request->lang2_title;
        $project->lang3_title = $request->lang3_title;

        $project->subtitle = $request->subtitle;
        $project->lang2_subtitle = $request->lang2_subtitle;
        $project->lang3_subtitle = $request->lang3_subtitle;

        $project->content = $request->content;
        $project->lang2_Content = $request->lang2_Content;
        $project->lang3_Content = $request->lang3_Content;

        $project->category_id = $request->category_id;

        $project->date = $request->date;

        $project->thumbnail_url = "Empty for now";

        $project->thumbnail_alt = $request->thumbnail_alt;
        $project->lang2_thumbnail_alt = $request->lang2_thumbnail_alt;
        $project->lang3_thumbnail_alt = $request->lang3_thumbnail_alt;

        $project->meta_title = $request->meta_title;
        $project->meta_title = $request->lang2_meta_Title;
        $project->meta_title = $request->lang3_meta_Title;

        $project->meta_description = $request->meta_description;
        $project->meta_description = $request->lang2_meta_description;
        $project->meta_description = $request->lang3_meta_description;

        $project->save();
        return redirect('/admin/projects')->with('status', 'Project has been created successfully');
    }



    /* ------------------------- Store Created Project ------------------------- */






    /* ------------------------- ALL Projects FUNCTIONS ------------------------- */



    /* +++++++++++++++++++++++++ Admins Page +++++++++++++++++++++++++ */

    public function admins()
    {
        return view('Admin.Admins.admins');
    }



    /* ------------------------- Admins Page ------------------------- */



    /* +++++++++++++++++++++++++ Slideshow Page +++++++++++++++++++++++++ */



    public function slideshow()
    {
        return view('Admin.slideshow.slideshow');
    }



    /* ------------------------- Slideshow Page ------------------------- */
}
