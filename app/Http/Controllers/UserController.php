<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\News;
use App\Models\Partners;
use App\Models\Projects;
use App\Models\Team;
use App\Models\FAQs;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $projects = Projects::limit(4)->get();
        $newsRecords = News::limit(4)->get();
        $faqRecords = FAQs::all();
        return view("User.Homepage")->with(compact('projects', 'newsRecords', 'faqRecords'));
    }

    public function about()
    {
        $teamMembers = Team::all();
        return view("User.About")->with(compact('teamMembers'));
    }

    public function projects(Request $request)
    {
        $search = $request->projectCategory ?? "";
        if ($search == 'Ongoing' || $search == 'Completed') {
            $allProjects = Projects::where('status', '=', $search)->get();
            return view("User.OurProjects")->with(compact('allProjects'));
        } else {
            $allProjects = Projects::all();
            return view("User.OurProjects")->with(compact('allProjects'));
        }
    }

    public function partners()
    {
        $partnersRecord = Partners::all();
        return view('User.OurPartners')->with(compact('partnersRecord'));
    }

    public function News()
    {
        $newsRecords = News::all();
        return view('User.News')->with(compact('newsRecords'));
    }

    public function ContactUs()
    {
        $faqRecords = FAQs::all();
        return view('User.Contacts')->with(compact('faqRecords'));
    }

    public function createInquiry(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $newInquiry = new Inquiry();
        $newInquiry->customer_first_name = $request->fname;
        $newInquiry->customer_last_name = $request->lname;
        $newInquiry->customer_phone_no = $request->phone;
        $newInquiry->customer_email = $request->email;
        $newInquiry->customer_message = $request->message;
        $res = $newInquiry->save();

        if ($res) {
            toastr()->success('We have received your query. Our team will contact you soon.');
            return redirect()->back();
        }
    }

    public function Donation()
    {
        $projectRecords = Projects::limit(4)->get();
        return view('User.Donation')->with(compact('projectRecords'));
    }
}
