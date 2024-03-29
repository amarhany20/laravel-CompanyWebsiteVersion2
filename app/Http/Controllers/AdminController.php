<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProjectMedia;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    /* +++++++++++++++++++++++++  +++++++++++++++++++++++++ */



    //data



    /* -------------------------  ------------------------- */



    /* +++++++++++++++++++++++++ Public Variables +++++++++++++++++++++++++ */



    private $companyName = "EDG";
    private $companyLang2Name = "ادج";
    private $companyLang3Name = "IDG";



    /* ------------------------- Public Variables ------------------------- */


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
                'lang2_Name' => 'max:100|unique:categories,lang2_Name',
                'lang3_Name' => 'max:100|unique:categories,lang3_Name'
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
                'lang2_Name' => ['max:100', Rule::unique('categories')->ignore($id)],
                'lang3_Name' => ['max:100', Rule::unique('categories')->ignore($id)]
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
        // session()->flash("error")
        // dd(session());
        session()->forget('mediaProjectId'); //I used session in media, so when I go here I need to reset the id
        return view('Admin.projects.projects', compact('projects'));
    }



    /* ------------------------- Projects Menu ------------------------- */


    /* +++++++++++++++++++++++++ Create a project page +++++++++++++++++++++++++ */



    public function createProject()
    {
        $categories = Category::all();
        return view('Admin.projects.createProject', compact('categories'));
    }



    /* ------------------------- Create a project page ------------------------- */



    /* +++++++++++++++++++++++++ Store Created Project +++++++++++++++++++++++++ */



    public function storeProject(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100|unique:projects,title',
                'lang2_title' => 'nullable|max:100|unique:projects,lang2_Title',
                'lang3_title' => 'nullable|max:100|unique:projects,lang3_Title',
                'subtitle' => 'required|max:250',
                'content' => 'required',
                'date' => 'required',
                'category_id' => 'exists:categories,id',
                'thumbnail_Url' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                // 'thumbnail_Alt' => Rule::requiredIf($request->thumbnail_Url),


            ],
            [
                // 'category_id.exists' => 'okay bad',
            ]
        );
        // dd($request->all());
        // dd($request->input());
        // dump($request->hasFile('thumbnail_Url'));
        // die;

        $project = new Project();

        $project->title = $request->title;
        $project->lang2_Title = $request->lang2_Title;
        $project->lang3_Title = $request->lang3_Title;

        $project->subtitle = $request->subtitle;
        $project->lang2_Subtitle = $request->lang2_Subtitle;
        $project->lang3_Subtitle = $request->lang3_Subtitle;

        $project->content = $request->content;
        $project->lang2_Content = $request->lang2_Content;
        $project->lang3_Content = $request->lang3_Content;

        $project->category_id = $request->category_id;

        $project->date = $request->date;

        // $project->thumbnail_Url = $request->file('thumbnail_Url')->storeAs('public/thumbnails',$request->id . $request->title . $request->file('thumbnail_Url')->guessExtension());
        if ($request->hasFile('thumbnail_Url')) {
            $project->thumbnail_Url = $request->file('thumbnail_Url')->storeAs('public/thumbnails', $project->getNextId() . $request->title . '.' . $request->file('thumbnail_Url')->extension());
        } else {
            // $project->thumbnail_Url = "test No Photo";
        }


        if (empty($request->thumbnail_Alt)) {
            $project->thumbnail_Alt = $request->title;
        } else {
            $project->thumbnail_Alt = $request->thumbnail_Alt;
        }
        if (empty($request->lang2_Thumbnail_Alt)) {
            $project->lang2_Thumbnail_Alt = $request->lang2_Title;
        } else {
            $project->lang2_Thumbnail_Alt = $request->lang2_Thumbnail_Alt;
        }
        if (empty($request->lang3_Thumbnail_Alt)) {
            $project->lang3_Thumbnail_Alt = $request->lang3_Title;
        } else {
            $project->lang3_Thumbnail_Alt = $request->lang3_Thumbnail_Alt;
        }

        if (empty($request->meta_Title)) {
            $project->meta_Title = $request->title . $this->companyName;
        } else {
            $project->meta_Title = $request->meta_Title;
        }
        if (empty($request->lang2_Meta_Title)) {
            $project->lang2_Meta_Title = $request->lang2_Title . $this->companyLang2Name;
        } else {
            $project->lang2_Meta_Title = $request->lang2_Meta_Title;
        }
        if (empty($request->lang3_Meta_Title)) {
            $project->lang3_Meta_Title = $request->lang3_Title . $this->companyLang3Name;
        } else {
            $project->lang3_Meta_Title = $request->lang3_Meta_Title;
        }


        if (empty($request->meta_Description)) {
            $project->meta_Description = $request->subtitle . $this->companyName;
        } else {
            $project->meta_Description = $request->meta_Description;
        }
        if (empty($request->lang2_Meta_Description)) {
            $project->lang2_Meta_Description = $request->lang2_Subtitle . $this->companyLang2Name;
        } else {
            $project->lang2_Meta_Description = $request->lang2_Meta_Title;
        }
        if (empty($request->lang3_Meta_Description)) {
            $project->lang3_Meta_Description = $request->lang3_Subtitle . $this->companyLang3Name;
        } else {
            $project->lang3_Meta_Description = $request->lang3_Meta_Title;
        }
        $project->is_Shown = false;

        $project->save();
        return redirect('/admin/projects')->with('status', 'Project has been created successfully');
    }



    /* ------------------------- Store Created Project ------------------------- */



    /* +++++++++++++++++++++++++ Edit Project +++++++++++++++++++++++++ */



    public function editProject($id)
    {

        $project = Project::find($id);
        $categories = Category::all();
        return view('Admin.projects.editProject', compact('project', 'categories'));
    }



    /* ------------------------- Edit Project ------------------------- */



    /* +++++++++++++++++++++++++ Update Project +++++++++++++++++++++++++ */



    public function updateProject(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:100|unique:projects,title,' . $id,
                'lang2_Title' => 'nullable|max:100|unique:projects,lang2_Title,' . $id,
                'lang3_Title' => 'nullable|max:100|unique:projects,lang3_Title,' . $id,
                'subtitle' => 'required|max:250',
                'content' => 'required',
                'date' => 'required',
                'category_id' => 'exists:categories,id',
                'thumbnail_Url' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',


            ],
            [
                // 'category_id.exists' => 'okay bad',
            ]
        );
        $project = Project::find($id);
        $project->title = $request->title;
        $project->lang2_Title = $request->lang2_Title;
        $project->lang3_Title = $request->lang3_Title;

        $project->subtitle = $request->subtitle;
        $project->lang2_Subtitle = $request->lang2_Subtitle;
        $project->lang3_Subtitle = $request->lang3_Subtitle;

        $project->content = $request->content;
        $project->lang2_Content = $request->lang2_Content;
        $project->lang3_Content = $request->lang3_Content;

        $project->category_id = $request->category_id;

        $project->date = $request->date;


        if ($request->hasFile('thumbnail_Url')) {
            if ($project->thumbnail_Url) {
                Storage::delete($project->thumbnail_Url);
            }
            $project->thumbnail_Url = $request->file('thumbnail_Url')->storeAs('public/thumbnails', $project->getNextId() . $request->title . '.' . $request->file('thumbnail_Url')->extension());
        }

        if (empty($request->thumbnail_Alt)) {
            $project->thumbnail_Alt = $request->title;
        } else {
            $project->thumbnail_Alt = $request->thumbnail_Alt;
        }
        if (empty($request->lang2_Thumbnail_Alt)) {
            $project->lang2_Thumbnail_Alt = $request->lang2_Title;
        } else {
            $project->lang2_Thumbnail_Alt = $request->lang2_Thumbnail_Alt;
        }
        if (empty($request->lang3_Thumbnail_Alt)) {
            $project->lang3_Thumbnail_Alt = $request->lang3_Title;
        } else {
            $project->lang3_Thumbnail_Alt = $request->lang3_Thumbnail_Alt;
        }

        if (empty($request->meta_Title)) {
            $project->meta_Title = $request->title . $this->companyName;
        } else {
            $project->meta_Title = $request->meta_Title;
        }
        if (empty($request->lang2_Meta_Title)) {
            $project->lang2_Meta_Title = $request->lang2_Title . $this->companyLang2Name;
        } else {
            $project->lang2_Meta_Title = $request->lang2_Meta_Title;
        }
        if (empty($request->lang3_Meta_Title)) {
            $project->lang3_Meta_Title = $request->lang3_Title . $this->companyLang3Name;
        } else {
            $project->lang3_Meta_Title = $request->lang3_Meta_Title;
        }


        if (empty($request->meta_Description)) {
            $project->meta_Description = $request->subtitle . $this->companyName;
        } else {
            $project->meta_Description = $request->meta_Description;
        }
        if (empty($request->lang2_Meta_Description)) {
            $project->lang2_Meta_Description = $request->lang2_Subtitle . $this->companyLang2Name;
        } else {
            $project->lang2_Meta_Description = $request->lang2_Meta_Title;
        }
        if (empty($request->lang3_Meta_Description)) {
            $project->lang3_Meta_Description = $request->lang3_Subtitle . $this->companyLang3Name;
        } else {
            $project->lang3_Meta_Description = $request->lang3_Meta_Title;
        }

        $project->save();
        return redirect('/admin/projects')->with('status', 'Project has been Updated successfully');
    }



    /* ------------------------- Update Project ------------------------- */



    /* +++++++++++++++++++++++++ Delete Project +++++++++++++++++++++++++ */



    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/admin/projects/')->with('status', 'Project has been Deleted successfully.');
    }



    /* ------------------------- Delete Project ------------------------- */



    /* +++++++++++++++++++++++++ SHOW/HIDE Project Visibility +++++++++++++++++++++++++ */



    public function visibility($id)
    {
        $project = Project::findOrFail($id);
        if ($project->is_Shown) {
            $project->is_Shown = false;
        } else {
            $project->is_Shown = true;
        }
        $project->update();

        return redirect('/admin/projects/')->with('status', 'Project\'s visibility has been changed successfully.');
    }



    /* ------------------------- SHOW/HIDE Project Visibility ------------------------- */




    /* ------------------------- ALL Projects FUNCTIONS ------------------------- */



    /* +++++++++++++++++++++++++ ALL PROJECT MEDIA FUNCTIONS +++++++++++++++++++++++++ */



    /* +++++++++++++++++++++++++ Show Media +++++++++++++++++++++++++ */



    public function projectMedia($projectId)
    {
        session(['mediaProjectId' => $projectId]);
        $projectMedia = ProjectMedia::where('id', '=', $projectId)->paginate(10);
        return view('Admin.projectMedia.projectMedia', compact('projectMedia'));
    }



    /* ------------------------- Show Media ------------------------- */



    /* +++++++++++++++++++++++++ add Media +++++++++++++++++++++++++ */



    public function addProjectMedia()
    {
        if (session('mediaProjectId') == null) {
            return redirect('/admin/projects/')->with('error', 'error happened, please choose the project\'s media again!');
        }

        return view('Admin.projectMedia.addMedia');
    }



    /* ------------------------- add Media ------------------------- */



    public function storeProjectMedia(Request $request)
    {
        //https://stackoverflow.com/questions/66167672/laravel-how-to-validate-multiple-size-rules-on-same-file-based-on-mime-type
        //later
        // $rules = [];

        // $image_max_size = 1024 * 10;
        // $video_max_size = 1024 * 500;

        // foreach ($request->file('mediaUrl') as $index => $file) {

        //     dd($index);
        //     if (in_array($file->getMimeType(), ['image/jpg', 'image/jpeg', 'image/png'])) {
        //         $rules["mediaUrl.$index"] = ["max:$image_max_size"];
        //     } else if (in_array($file->getMimeType(), ['video/mp4'])) {
        //         $rules["mediaUrl.$index"] = ["max:$video_max_size"];
        //     } else {

        //         // Always non-validating => returns error
        //         $rules["file.$index"] = ['bail', 'mimes:jpg,jpeg,png,mp4'];
        //     }
        // }

        // $request->validate($rules);
        if (session()->has('mediaProjectId')) {
            $projectId = session('mediaProjectId');
            $request->validate(
                [
                    'mediaUrl' => 'required|mimes:mp4,mov,ogg,qt | max:20000',

                ],
                [
                    // 'category_id.exists' => 'okay bad',
                ]
            );
            foreach ($request->file('mediaUrl') as $imagefile) {
                dd($imagefile);

                $projectMedia = new ProjectMedia();
                $projectId = session('mediaProjectId');
                $projectMedia->url = $imagefile->storeAs('public/Images/Project ' . $projectId, $projectMedia->getNextId() . '.' . $imagefile->extension());
            }
        } else {
            return redirect('/admin/projects/')->with('error', 'error happened, please choose the project\'s media again!');
        }
    }



    /* ------------------------- Show Media ------------------------- */



    /* +++++++++++++++++++++++++ add Media +++++++++++++++++++++++++ */




    /* ------------------------- ALL PROJECT Media FUNCTIONS ------------------------- */



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
