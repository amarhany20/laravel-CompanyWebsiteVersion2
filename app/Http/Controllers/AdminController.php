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
        return view('Admin.projects.createProject');
    }



    /* ------------------------- Create a project page ------------------------- */



    /* +++++++++++++++++++++++++ Store Created Project +++++++++++++++++++++++++ */



    public function storeProject(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->subtitle = $request->title;
        $project->content = $request->content;
        $project->ar_title = $request->ar_title;
        $project->ar_Subtitle = $request->ar_Subtitle;
        $project->ar_content = $request->ar_content;
        $project->date = $request->date;
        $project->thumbnail_alt = $request->thumbnail_alt;
        $project->thumbnail_ar_alt = $request->thumbnail_ar_alt;
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $project->meta_ar_title = $request->meta_ar_title;
        $project->meta_ar_description = $request->meta_ar_description;

        $project->thumbnail = $request->thumbnail;
        $project->category_id = $request->category_id; //Foriegn

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
