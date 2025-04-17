<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\ContactUs;
use App\Models\Favourite;
use App\Models\Inquiry;
use App\Models\Properties;
use App\Models\Property_plans;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class WebsiteController extends Controller
{
    public function home()
    {
        $featured_properties = Properties::where('feature_non_feature','feature')->get();
        $blogs = Blogs::limit(3)->get();
        if (!empty(Auth::guard('web')->user())) {
            $favourite = Favourite::where('userid', Auth::guard('web')->user()->id)->pluck('propertyid')->toArray();
        } else {
            $favourite = array();
        }
        return view('website.index', compact('featured_properties', 'blogs', 'favourite'));
    }

    public function aboutus()
    {
        return view('website.aboutus');
    }

    public function meeting_schedule()
    {
        return view('website.meeting_schedule');
    }

    public function blogs()
    {
        $blogs = Blogs::all();
        return view('website.blogs', compact('blogs'));
    }

    public function blog_detail($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('website.blog_detail', compact('blog'));
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function contactus()
    {
        $setting = Setting::first();
        return view('website.contactus', compact('setting'));
    }

    public function save_contact_us(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        ContactUs::create($data);
        return redirect()->back()->with('success', 'Successfully Submitted.');
    }

    public function sale_properties(Request $request)
    {
        $query = Properties::where('type', 'Sale');
        if (isset($request->heading) && !empty($request->heading)) {
            $query = $query->where('heading', 'like', '%' . $request->heading . '%');
        }
        if (isset($request->address) && !empty($request->address)) {
            $query = $query->whereHas('location', function ($q) use ($request) {
                $q->where('address', 'like', '%' . $request->address . '%');
            });
        }
        if (isset($request->price) && !empty($request->price)) {
            $query = $query->where('price', '>=', $request->price);
        }
        if (isset($request->bedrooms) && !empty($request->bedrooms)) {
            $query = $query->where('bedrooms', $request->bedrooms);
        }
        if (isset($request->bathrooms) && !empty($request->bathrooms)) {
            $query = $query->where('bathrooms', $request->bathrooms);
        }
        $sale_properties = $query->paginate(6);
        if (!empty(Auth::guard('web')->user())) {
            $favourite = Favourite::where('userid', Auth::guard('web')->user()->id)->pluck('propertyid')->toArray();
        } else {
            $favourite = array();
        }
        return view('website.sale_properties', compact('sale_properties', 'request', 'favourite'));
    }

    public function sale_property_detail($slug)
    {
        $property = Properties::where('slug', $slug)->first();
        return view('website.sale_property_detail', compact('property'));
    }

    public function rent_properties(Request $request)
    {
        $query = Properties::where('type', 'Rent');
        if (isset($request->heading) && !empty($request->heading)) {
            $query = $query->where('heading', 'like', '%' . $request->heading . '%');
        }
        if (isset($request->address) && !empty($request->address)) {
            $query = $query->whereHas('location', function ($q) use ($request) {
                $q->where('address', 'like', '%' . $request->address . '%');
            });
        }
        if (isset($request->price) && !empty($request->price)) {
            $query = $query->where('price', '>=', $request->price);
        }
        if (isset($request->bedrooms) && !empty($request->bedrooms)) {
            $query = $query->where('bedrooms', $request->bedrooms);
        }
        if (isset($request->bathrooms) && !empty($request->bathrooms)) {
            $query = $query->where('bathrooms', $request->bathrooms);
        }
        $rent_properties = $query->paginate(6);
        if (!empty(Auth::guard('web')->user())) {
            $favourite = Favourite::where('userid', Auth::guard('web')->user()->id)->pluck('propertyid')->toArray();
        } else {
            $favourite = array();
        }
        return view('website.rent_properties', compact('rent_properties', 'request', 'favourite'));
    }

    public function rent_property_detail($slug)
    {
        $property = Properties::where('slug', $slug)->first();
        return view('website.rent_property_detail', compact('property'));
    }

    public function commercial_properties(Request $request)
    {
        $query = Properties::where('type', 'Commercial');
        if (isset($request->heading) && !empty($request->heading)) {
            $query = $query->where('heading', 'like', '%' . $request->heading . '%');
        }
        if (isset($request->address) && !empty($request->address)) {
            $query = $query->whereHas('location', function ($q) use ($request) {
                $q->where('address', 'like', '%' . $request->address . '%');
            });
        }
        if (isset($request->price) && !empty($request->price)) {
            $query = $query->where('price', '>=', $request->price);
        }
        if (isset($request->bedrooms) && !empty($request->bedrooms)) {
            $query = $query->where('bedrooms', $request->bedrooms);
        }
        if (isset($request->bathrooms) && !empty($request->bathrooms)) {
            $query = $query->where('bathrooms', $request->bathrooms);
        }
        $commercial_properties = $query->paginate(6);
        if (!empty(Auth::guard('web')->user())) {
            $favourite = Favourite::where('userid', Auth::guard('web')->user()->id)->pluck('propertyid')->toArray();
        } else {
            $favourite = array();
        }
        return view('website.commercial_properties', compact('commercial_properties', 'request', 'favourite'));
    }

    public function commercial_property_detail($slug)
    {
        $property = Properties::where('slug', $slug)->first();
        return view('website.commercial_property_detail', compact('property'));
    }

    public function login()
    {
        $setting = Setting::first();
        if (Auth::guard('web')->check()) {
            return redirect()->route('/');

        } else {
            return view("website.login", compact('setting'));
        }
    }

    public function customerlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'user'])) {
            if (Auth::guard('web')->check()) {
                return redirect()->back();
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password !')->withInput()->withErrors("Invalid Email or Password !");
        }

    }

    public function registration()
    {
        $setting = Setting::first();
        if (Auth::guard('web')->check()) {
            return redirect()->back();

        } else {
            return view("website.register", compact('setting'));
        }
    }

    public function save_register_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['phone'] = $request->phone;
        if ($request->hasFile('profile')) {
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid Profile Picture');
            }

            $image = $request->file('profile');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['image'] = $image_new;
        }
        user::create($data);
        return redirect()->route('login')->with('success', 'Successfully Registered.');
    }

    public function customerlogout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->bac();
    }

    public function userprofile(Request $request)
    {
        return view('website.userprofile');
    }

    public function updateuserprofile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::guard('web')->user()->id,
            'phone' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $getData = user::findOrFail(Auth::guard('web')->user()->id);

        if (isset($request->name)) {
            $getData->name = $request->name;
        }
        if (isset($request->email)) {
            $getData->email = $request->email;
        }
        if (isset($request->phone)) {
            $getData->phone = $request->phone;
        }
        if (isset($request->password)) {
            $validator = Validator::make($request->all(), [
                'password' => 'required|min:8'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Minimum 8 Characters Required for password.');
            }
            $getData->password = Hash::make($request->password);
        }
        if ($request->hasFile('profile')) {
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid Profile Picture');
            }

            if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {

                \File::delete(public_path('admin/assets/uploads/' . $getData->image));
            }

            $image = $request->file('profile');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->image = $image_new;
        }
        $getData->save();
        return redirect()->back()->with('success', 'Data Successfully Added !');
    }

    public function save_inquiry(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }

        $data['propertyid'] = $request->property_id;
        $data['userid'] = Auth::guard('web')->user()->id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;
        Inquiry::create($data);
        return redirect()->back()->with('success', 'Successfully Submitted !');
    }

    public function add_to_favourite($propertyid)
    {
        $check = Favourite::where('userid', Auth::guard('web')->user()->id)->where('propertyid', $propertyid)->count();
        if ($check > 0) {
            Favourite::where('userid', Auth::guard('web')->user()->id)->where('propertyid', $propertyid)->delete();
            return redirect()->back()->with('success', 'Successfully Removed !');
        } else {
            $data['userid'] = Auth::guard('web')->user()->id;
            $data['propertyid'] = $propertyid;
            Favourite::create($data);
            return redirect()->back()->with('success', 'Successfully Added !');
        }
    }

    public function favourites(Request $request)
    {
        $properties = Favourite::where('userid', Auth::guard('web')->user()->id)->get();
        return view('website.favourites', compact('properties'));
    }

    public function inquiries(Request $request)
    {
        $inquiries = Inquiry::where('userid', Auth::guard('web')->user()->id)->get();
        return view('website.inquiries', compact('inquiries'));
    }

}