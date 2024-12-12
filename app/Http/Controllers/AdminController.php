<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use App\Models\News;
use App\Models\Partners;
use App\Models\Projects;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.Dashboard');
    }

    public function Donation()
    {
        return view('Admin.Donation');
    }

    public function News()
    {
        $newsRecords = News::all();
        return view('Admin.News')->with(compact("newsRecords"));
    }

    // News Form
    public function addNewsForm()
    {
        return view('Admin.AddNews');
    }

    // Add news to database
    public function addNewsToDB(Request $request)
    {
        // Form Validation
        $request->validate([
            'news_headline' => 'required',
            'news_description' => 'required',
            'news_category' => 'required',
            'featuredImg' => 'required',
            'publish_date' => 'required'
        ]);
        $request->featuredImg->move('News', time() . '.' . $request->featuredImg->getClientOriginalExtension());

        // Create Table Instance / Object
        $newsData = new News();
        $newsData->news_headline = $request->news_headline;
        $newsData->news_content = $request->news_description;
        $newsData->news_category = $request->news_category;
        $newsData->news_featured_image = time() . '.' . $request->featuredImg->getClientOriginalExtension();
        $newsData->publish_date = $request->publish_date;
        $result = $newsData->save();

        if ($result) {
            toastr()->success('News published successfully!');
            return redirect()->back();
        }
    }
    public function Partners()
    {
        $partners = Partners::all();
        return view('Admin.Partners')->with(compact('partners'));
    }

    public function addPartner()
    {
        return view('Admin.AddPartner');
    }

    public function addPartnerToDB(Request $request)
    {
        $request->validate([
            'partner_logo' => 'required',
            'partner_name' => 'required',
        ]);

        // Get image extension
        $imgName = time() . '.' . $request->partner_logo->getClientOriginalExtension();
        $partner = new Partners();
        $partner->partner_logo = $imgName;
        $partner->partner_name = $request->partner_name;

        // Save logo image to public folder
        $request->partner_logo->move('partners', $imgName);


        $result = $partner->save();

        if ($result) {
            toastr()->success('New Partner Added successfully.');
            return redirect()->route('Partners');
        }
    }

    public function viewSpecificPartner($id)
    {
        $findPartner = Partners::find($id);
        return view('Admin.ViewSpecificPartner')->with(compact('findPartner'));
    }

    public function editSpecificPartner($id)
    {
        $findPartner = Partners::find($id);
        return view('Admin.EditSpecificPartner')->with(compact('findPartner'));
    }

    public function updatePartnerInfoToDB(Request $request, $id)
    {

        $request->validate([
            'partner_logo' => 'required',
            'partner_name' => 'required',
        ]);

        // Get image extension
        $imgName = time() . '.' . $request->partner_logo->getClientOriginalExtension();
        $findPartner = Partners::find($id);
        $findPartner->partner_logo = $imgName;
        $findPartner->partner_name = $request->partner_name;

        // Save logo image to public folder
        $request->partner_logo->move('partners', $imgName);


        $result = $findPartner->save();

        if ($result) {
            toastr()->success('Partner Information Updated Successfully.');
            return redirect()->route('Partners');
        }
    }

    public function deleteSpecificPartner($id)
    {
        $findPartner = Partners::find($id);
        if ($findPartner) {
            $findPartner->delete();
            toastr()->success('Partner Information Deleted Successfully.');
            return redirect()->back();
        }
    }
    public function Projects()
    {
        $projects = Projects::all();
        return view('Admin.Projects')->with(compact('projects'));
    }

    public function addProject()
    {
        return view('Admin.AddProject');
    }

    public function saveProjectData(Request $request)
    {
        // form validation
        $request->validate([
            'title' => 'required',
            'objective' => 'required',
            'owner' => 'required',
            'partner' => 'required',
            'duration' => 'required',
            'budget' => 'required',
            'code' => 'required',
            'thumbnailImage' => 'required',
            'images' => 'required',
        ]);

        // Loop through the images
        $images = array();

        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $imageName = md5(rand(1000, 10000));
                // extract file extenstion
                $extension = strtolower($file->getClientOriginalExtension());
                $imgFullName = $imageName . '.' . $extension;
                $uploadPath = 'projects/images/';
                $imageURL = $uploadPath . $imgFullName;
                $file->move($uploadPath, $imgFullName);
                $images[] = $imageURL;
            }
        }
        // Store the project data into database table
        $project = new Projects();
        $project->title = $request->title;
        $project->objective = $request->objective;
        $project->owner = $request->owner;
        $project->partner = $request->partner;
        $project->duration = $request->duration;
        $project->budget = $request->budget;
        $project->code = $request->code;
        $thumbnailImage = time() . '.' . $request->thumbnailImage->getClientOriginalExtension();
        $project->thumbnail_image = $thumbnailImage;
        // store thumbnail image to public directory
        $request->thumbnailImage->move('projects/thumbnail', $thumbnailImage);

        // Here 'implode' function place multiple image names into a single array.
        // 'json_encode' convert data into JSON format
        $project->images = json_encode(implode('|', $images));
        $result = $project->save();

        if ($result) {
            toastr()->success('Project added successfully.');
            return redirect()->route('Dashboard.Projects');
        } else {
            toastr()->error('Please try again later');
        }
    }

    public function editProjectData($id)
    {
        $findProject = Projects::find($id);
        $imageArr = explode('|', $findProject->images);
        return view('Admin.EditProject')->with(compact('findProject', 'imageArr'));
    }

    public function updateProjectData(Request $request, $id)
    {
        // form validation
        $request->validate([
            'title' => 'required',
            'objective' => 'required',
            'owner' => 'required',
            'partner' => 'required',
            'duration' => 'required',
            'budget' => 'required',
            'code' => 'required',
        ]);

        // Store the project data into database table
        $project = Projects::find($id);
        $project->title = $request->title;
        $project->objective = $request->objective;
        $project->owner = $request->owner;
        $project->partner = $request->partner;
        $project->duration = $request->duration;
        $project->budget = $request->budget;
        $project->code = $request->code;

        $result = $project->save();

        if ($result) {
            toastr()->success('Project updated successfully.');
            return redirect()->route('Dashboard.Projects');
        } else {
            toastr()->error('Please try again later');
        }
    }

    public function deleteProject($id)
    {
        $findProject = Projects::find($id);
        if ($findProject) {
            $result = $findProject->delete();
            if ($result) {
                toastr()->success('Project deleted successfully.');
                return redirect()->route('Dashboard.Projects');
            } else {
                toastr()->error('Please try again later');
            }
        }
    }

    public function updateProjectStatus($id)
    {
        $findProject = Projects::find($id);
        if ($findProject->status == 'Ongoing') {
            $findProject->status = 'Completed';
            $findProject->save();
            toastr()->success('Project status updated successfully.');
            return redirect()->back();
        }
    }
    public function Team()
    {
        $teamData = Team::all();
        return view('Admin.Team')->with(compact('teamData'));
    }

    public function addTeamMemberForm()
    {
        return view('Admin.AddTeamMember');
    }

    public function addNewTeamMember(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'profile' => 'required',
            'gender' => 'required',
            'department' => 'required'
        ]);

        $timestampProfile = time() . '.' . $request->profile->getClientOriginalExtension();

        // Store profile picture into public folder
        $request->profile->move('profile', $timestampProfile);

        $newMember = new Team();
        $newMember->fullname = $request['name'];
        $newMember->designation = $request['position'];
        $newMember->email = $request['email'];
        $newMember->phone_number = $request['phone'];
        $newMember->profile_picture = $timestampProfile;
        $newMember->gender = $request['gender'];
        $newMember->department = $request['department'];
        $result = $newMember->save();

        if ($result) {
            toastr()->success('New team member added successfully.');
            return redirect()->route('Team');
        }
    }

    public function viewSpecificTeamMember($id)
    {
        $findMember = Team::find($id);
        return view('Admin.ViewTeamMember')->with(compact('findMember'));
    }

    public function editSpecificTeamMember($id)
    {
        $findMember = Team::find($id);
        return view('Admin.EditTeamMember')->with(compact('findMember'));
    }

    public function UpdateTeamMemberInfoToDB($id, Request $request)
    {
        // Form Validation
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'department' => 'required'
        ]);
        $findMember = Team::find($id);

        $findMember->fullname = $request['name'];
        $findMember->designation = $request['position'];
        $findMember->email = $request['email'];
        $findMember->phone_number = $request['phone'];
        $findMember->gender = $request['gender'];
        $findMember->department = $request['department'];

        $result = $findMember->save();

        if ($result) {
            toastr()->success('Information updated successfully');
            return redirect()->route('Team');
        }
    }

    public function deleteTeamMemberRecord($id)
    {
        $findMember = Team::find($id);
        if ($findMember) {
            $findMember->delete();
            toastr()->info('Record deleted successfully');
            return redirect()->route('Team');
        }
    }
    public function Users()
    {
        return view('Admin.Users');
    }

    public function FAQ()
    {
        return view('Admin.FAQ');
    }

    public function FaqForm()
    {
        return view('Admin.AddFAQ');
    }

    // CRUD
    // C - Create
    // R - Read
    // U - Update
    // D - Delete

    public function createFAQ(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = new FAQs();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $result = $faq->save();

        if ($result) {
            toastr()->success('New FAQ Added Successfully');
            return redirect()->route('FAQ');
        }
    }

}
