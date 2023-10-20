<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ScheduleVisit as MailScheduleVisit;
use App\Models\Ad;
use App\Models\Agent;
use App\Models\Apartment;
use App\Models\Document;
use App\Models\Floor;
use App\Models\GeneralDetails;
use App\Models\News;
use App\Models\OurStrength;
use App\Models\Project;
use App\Models\ProjectOverview;
use App\Models\Residency;
use App\Models\ScheduleVisit;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function index()
    {
        $general = GeneralDetails::first();
        $ourStrength = OurStrength::first();
        $agents = Agent::where('status', 1)->get();
        $slides = Slider::where('status', 1)->get();
        $news = News::where('status', 1)->get()->take(3);
        return view('frontend.pages.index', compact('slides', 'ourStrength', 'agents', 'general', 'news'));
    }

    public function CompletedApartment()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $projects = Project::where('type', 'completed')->where('status', 1)->orderBy('order_by')->select('slug', 'apartment_type', 'name', 'gallery', 'type', 'heading', 'bedrooms', 'bathrooms', 'sqft')->get();
        return view('frontend.pages.apartment', compact('general', 'agents', 'projects'));
    }

    public function OngoingApartment()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $projects = Project::where('type', 'ongoing')->where('status', 1)->select('slug', 'apartment_type', 'name', 'gallery', 'type', 'heading', 'bedrooms', 'bathrooms', 'sqft')->orderBy('order_by')->get();
        $upProjects = Project::where('type', 'upcomming')->where('status', 1)->orderBy('order_by')->select('name', 'gallery', 'type', 'heading', 'bedrooms')->get();
        return view('frontend.pages.apartment', compact('general', 'agents', 'projects', 'upProjects'));
    }

    public function apartmentInner($slug)
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $project = Project::where('slug', $slug)->first();
        $overviews = ProjectOverview::where('project_id', $project->id)->first();
        $floors = Floor::where('project_id', $project->id)->get();

        $project_document = Document::where('project_id', $project->id)->first();
        $blocks = Residency::where('project_id', $project->id)->first();
        return view('frontend.pages.apartmentInner', compact('general', 'agents', 'project', 'overviews', 'floors', 'project_document', 'blocks'));
    }

    public function about()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        return view('frontend.pages.about', compact('general', 'agents'));
    }

    public function news()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $news = News::where('status', 1)->get();
        $ads = Ad::where('status', 1)->get();
        return view('frontend.pages.news', compact('general', 'agents', 'news', 'ads'));
    }

    public function newsInner($slug)
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $newsInner = News::where('slug', $slug)->first();
        $news = News::where('status', 1)->get()->take(5);
        return view('frontend.pages.newsInner', compact('general', 'agents', 'news', 'newsInner'));
    }

    public function contact()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        return view('frontend.pages.contact', compact('general', 'agents'));
    }

    public function scheduleVisit()
    {
        $general = GeneralDetails::first();
        $agents = Agent::where('status', 1)->get();
        $apartments = Apartment::all();
        return view('frontend.pages.visit', compact('general', 'agents', 'apartments'));
    }

    public function scheduleVisitCreate(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'apartment' => ['required'],
                // 'agent' => ['required'],
                'date' => ['required'],
                'name' => ['required'],
                'email' => ['required'],
                'number' => ['required'],
            ]);

            $visit = new ScheduleVisit();
            $visit->apartment_id = $validatedData['apartment'];
            $visit->agent_id = 2;
            $visit->date = $validatedData['date'];
            $visit->name = $validatedData['name'];
            $visit->email = $validatedData['email'];
            $visit->number = $validatedData['number'];
            $visit->status = 'pending';
            $visit->save();

            $status = 'done';
            Mail::to('tharukaidushan@gmail.com')->send(new MailScheduleVisit($validatedData));

            return redirect()->route('schedule.vist', compact('status'));
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->route('schedule.vist');
        }
    }

    public function contactMail(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required',
            'message' => 'required',
        ]);
        $status = 'sent';
        Mail::to('tharukaidushan@gmail.com')->send(new ContactMail($validatedData));
        return redirect()->route('contact', compact('status'));
    }
}
