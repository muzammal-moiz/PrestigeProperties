<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Blogs;
use App\Models\Inquiry;
use App\Models\Properties;
use App\Models\Property_amenities;
use App\Models\Property_images;
use App\Models\Property_location;
use App\Models\Property_plans;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function adminLogin(Request $request)
    {
        if ($request->isMethod('post')) {

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'type' => 'admin'])) {

                if (Auth::guard('admin')->check()) {

                    return redirect()->back();
                }

            } else {
                return redirect()->back()->withInput()->with('error', 'Invalid Email or Password !');
            }
        } else {

            if (Auth::guard('admin')->check()) {
                return redirect()->route('admin.Home');

            } else {
                return view('admin.login');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route("admin.login");
    }

    public function Dashboard()
    {
        return view('admin.index');
    }

    public function AdminProfile()
    {
        $admin = User::findOrFail(1);
        $system = Setting::first();
        return view("admin.profile", compact("admin", "system"));
    }

    public function updateprofile(Request $request)
    {
        $GetData = User::findOrFail(1);
        if (isset($request->name)) {
            $GetData->name = $request->name;
        }

        if (isset($request->phone)) {
            $GetData->phone = $request->phone;
        }

        if (isset($request->address)) {
            $GetData->address = $request->address;
        }

        if (isset($request->email)) {
            $GetData->email = $request->email;
        }
        if (isset($request->password)) {

            $validator = Validator::make($request->all(), [
                'password' => 'required|string|min:8'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Please Enter Valid Password !');
            }
            $GetData->password = Hash::make($request->password);
        }

        if ($request->hasFile('profile')) {
            $validator = Validator::make($request->all(), [
                'profile' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid Profile Picture');
            }

            if (\File::exists(public_path('admin/assets/uploads/' . $GetData->image))) {

                \File::delete(public_path('admin/assets/uploads/' . $GetData->image));
            }

            $image = $request->file('profile');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $GetData->image = $image_new;
        }

        $GetData->save();
        return back()->with('success', 'Successfully Updated !');
    }

    public function setting()
    {
        $system = Setting::findOrFail(1);
        return view('admin.setting', compact('system'));
    }

    public function updatesetting(Request $request)
    {
        $getData = Setting::first();
        if (isset($request->name)) {
            $getData->name = $request->name;
        }
        if (isset($request->phone)) {
            $getData->phone = $request->phone;
        }
        if (isset($request->email)) {
            $getData->email = $request->email;
        }
        if (isset($request->location)) {
            $getData->location = $request->location;
        }
        $getData->facebook = $request->facebook;
        $getData->twitter = $request->twitter;
        $getData->instagram = $request->instagram;
        $getData->whatsapp = $request->whatsapp;
        $getData->youtube = $request->youtube;


        if ($request->hasFile('white_logo')) {
            $validator = Validator::make($request->all(), [
                'white_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid Logo');
            }

            if (\File::exists(public_path('admin/assets/uploads/' . $getData->white_logo))) {

                \File::delete(public_path('admin/assets/uploads/' . $getData->white_logo));
            }

            $image = $request->file('white_logo');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->white_logo = $image_new;
        }
        if ($request->hasFile('logo')) {
            $validator = Validator::make($request->all(), [
                'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid Logo');
            }

            if (\File::exists(public_path('admin/assets/uploads/' . $getData->logo))) {

                \File::delete(public_path('admin/assets/uploads/' . $getData->logo));
            }

            $image = $request->file('logo');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->logo = $image_new;
        }
        if ($request->hasFile('favicon')) {
            $validator = Validator::make($request->all(), [
                'favicon' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid favicon');
            }

            if (\File::exists(public_path('admin/assets/uploads/' . $getData->favicon))) {

                \File::delete(public_path('admin/assets/uploads/' . $getData->favicon));
            }

            $image = $request->file('favicon');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->favicon = $image_new;
        }
        $getData->save();
        return back()->with('success', 'Successfully Updated !');
    }

    public function contact_messages()
    {
        $contactus = ContactUs::orderBy('id', 'desc')->get();
        return view('admin.contact_messages', compact('contactus'));
    }

    public function inquiries()
    {
        $inquiries = Inquiry::orderBy('id', 'desc')->get();
        return view('admin.inquiries', compact('inquiries'));
    }

    public function add_blogs()
    {
        return view('admin.add_blogs');
    }

    public function save_blogs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }

        $data['heading'] = $request->heading;
        $data['description'] = $request->description;

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid image');
            }

            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['image'] = $image_new;
        }

        Blogs::create($data);
        return redirect()->route('admin.blogs_list')->with('success', 'Successfully Added !');
    }

    public function blogs_list()
    {
        $blogs = Blogs::all();
        return view('admin.blogs_list', compact('blogs'));
    }

    public function delete_blog($id)
    {
        $getData = Blogs::findOrFail(decrypt($id));
        if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {
            \File::delete(public_path('admin/assets/uploads/' . $getData->image));
        }
        $getData->delete();
        return back()->with('success', 'Data Deleted Successfully !');
    }

    public function edit_blog($id)
    {
        $blog = Blogs::findOrFail(decrypt($id));
        return view('admin.edit_blog', compact('blog'));
    }

    public function update_blog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }
        $getData = Blogs::find($request->id);
        $getData->heading = $request->heading;
        $getData->description = $request->description;

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'Invalid image');
            }

            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->image = $image_new;
        }
        $getData->save();
        return redirect()->route('admin.blogs_list')->with('success', 'Successfully Updated !');
    }

    public function add_properties($type)
    {
        if (!in_array($type, ['Sale', 'Rent', 'Commercial'])) {
            return redirect()->back()->with('error', 'Select Valid Property Type.');
        }
        return view('admin.add_properties', compact('type'));
    }

    public function save_property(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'heading' => 'required',
            'price' => 'required',
            'added_by_name' => 'required',
            'description' => 'required',
            'rooms' => 'required',
            'garage_size' => 'required',
            'bedrooms' => 'required',
            'year_built' => 'required',
            'bathrooms' => 'required',
            'property_size' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->with('error', 'All fields required !');
        }
        $CheckSlug = Properties::where('slug', Str::slug($request->heading))->count();
        if ($CheckSlug > 0) {
            return back()->withInput()->with('error', 'This heading is already exist .');
        }
        $data['slug'] = Str::slug($request->heading);
        $data['type'] = $request->type;
        $data['heading'] = $request->heading;
        $data['price'] = $request->price;
        $data['added_by_name'] = $request->added_by_name;
        $data['description'] = $request->description;
        $data['rooms'] = $request->rooms;
        $data['garage_size'] = $request->garage_size;
        $data['bedrooms'] = $request->bedrooms;
        $data['year_built'] = $request->year_built;
        $data['bathrooms'] = $request->bathrooms;
        $data['property_size'] = $request->property_size;
        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Property image');
            }

            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['image'] = $image_new;
        }
        if ($request->hasFile('added_by_image')) {
            $validator = Validator::make($request->all(), [
                'added_by_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Owner image');
            }

            $image = $request->file('added_by_image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['added_by_image'] = $image_new;
        }
        $propert_data = Properties::create($data);
        $property_location['property_id'] = $propert_data->id;
        $property_location['country'] = $request->country;
        $property_location['state'] = $request->state;
        $property_location['city'] = $request->city;
        $property_location['address'] = $request->address;
        Property_location::create($property_location);
        if (isset($request->amenities_heading) && !empty($request->amenities_heading)) {
            foreach ($request->amenities_heading as $ah) {
                $property_amenity['property_id'] = $propert_data->id;
                $property_amenity['heading'] = $ah;
                Property_amenities::create($property_amenity);
            }
        }
        if (isset($request->floor_heading) && !empty($request->floor_heading)) {
            foreach ($request->floor_heading as $i => $ah) {
                $property_floor_plans['property_id'] = $propert_data->id;
                $property_floor_plans['heading'] = $ah;

                // Check if file was uploaded for this iteration
                if ($request->hasFile('floor_image.' . $i)) {
                    // Validate the uploaded file
                    $validator = Validator::make($request->all(), [
                        'floor_image.' . $i => 'required|image|mimes:jpg,png,jpeg,gif,svg'
                    ]);

                    // If validation fails, return back with error
                    if ($validator->fails()) {
                        return back()->withInput()->with('error', 'Invalid Floor image');
                    }

                    // Move the uploaded file to desired location
                    $image = $request->file('floor_image.' . $i);
                    $image_new = time() . $image->getClientOriginalName();
                    $image->move('admin/assets/uploads/', $image_new);

                    // Assign the image filename to the property floor plan
                    $property_floor_plans['image'] = $image_new;
                }

                // Create a new Property_plans entry
                Property_plans::create($property_floor_plans);
            }
        }
        if ($request->hasFile('MoreImages')) {

            $imagessize = sizeof($request->MoreImages);
            for ($i = 0; $i < $imagessize; $i++) {
                $image = $request->file('MoreImages')[$i];
                $image_new = time() . $image->getClientOriginalName();
                $image->move('admin/assets/uploads/', $image_new);
                $propertyImagesData['property_id'] = $propert_data->id;;
                $propertyImagesData['image'] = $image_new;
                Property_images::create($propertyImagesData);
            }

        }
        return redirect()->route('admin.properties_list', [$request->type])->with('success', 'Successfully Added !');
    }

    public function properties_list($type)
    {
        if (!in_array($type, ['Sale', 'Rent', 'Commercial'])) {
            return redirect()->back()->with('error', 'Select Valid Property Type.');
        }
        $properties = Properties::where('type', $type)->get();
        return view('admin.properties_list', compact('type', 'properties'));
    }

    public function delete_property($id)
    {
        $getData = Properties::findOrFail(decrypt($id));
        if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {
            \File::delete(public_path('admin/assets/uploads/' . $getData->image));
        }
        if (\File::exists(public_path('admin/assets/uploads/' . $getData->added_by_image))) {
            \File::delete(public_path('admin/assets/uploads/' . $getData->added_by_image));
        }

        if (!empty($getData->plans)) {
            foreach ($getData->plans as $plan_image) {
                if (\File::exists(public_path('admin/assets/uploads/' . $plan_image->image))) {
                    \File::delete(public_path('admin/assets/uploads/' . $plan_image->image));
                }
            }
        }

        if (!empty($getData->images)) {
            foreach ($getData->images as $images_image) {
                if (\File::exists(public_path('admin/assets/uploads/' . $images_image->image))) {
                    \File::delete(public_path('admin/assets/uploads/' . $images_image->image));
                }
            }
        }
        $getData->delete();
        return back()->with('success', 'Data Deleted Successfully !');
    }

    public function edit_property($id)
    {
        $property = Properties::findOrFail(decrypt($id));
        return view('admin.edit_property', compact('property'));
    }

    public function update_property(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'heading' => 'required',
            'price' => 'required',
            'added_by_name' => 'required',
            'description' => 'required',
            'rooms' => 'required',
            'garage_size' => 'required',
            'bedrooms' => 'required',
            'year_built' => 'required',
            'bathrooms' => 'required',
            'property_size' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'feature_non_feature' => 'required',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->with('error', 'All fields required !');
        }
        $CheckSlug = Properties::where('id', '!=', $request->id)->where('slug', Str::slug($request->heading))->count();
        if ($CheckSlug > 0) {
            return back()->withInput()->with('error', 'This heading is already exist .');
        }
        $getData = Properties::findOrFail($request->id);
        $getData->slug = Str::slug($request->heading);
        $getData->heading = $request->heading;
        $getData->price = $request->price;
        $getData->added_by_name = $request->added_by_name;
        $getData->description = $request->description;
        $getData->rooms = $request->rooms;
        $getData->garage_size = $request->garage_size;
        $getData->bedrooms = $request->bedrooms;
        $getData->year_built = $request->year_built;
        $getData->bathrooms = $request->bathrooms;
        $getData->property_size = $request->property_size;
        $getData->feature_non_feature = $request->feature_non_feature;
        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Property image');
            }
            if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {
                \File::delete(public_path('admin/assets/uploads/' . $getData->image));
            }
            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->image = $image_new;
        }
        if ($request->hasFile('added_by_image')) {
            $validator = Validator::make($request->all(), [
                'added_by_image' => 'required | image | mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Owner image');
            }
            if (\File::exists(public_path('admin/assets/uploads/' . $getData->added_by_image))) {
                \File::delete(public_path('admin/assets/uploads/' . $getData->added_by_image));
            }
            $image = $request->file('added_by_image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $getData->added_by_image = $image_new;
        }
        $getData->update();
        $getDataLocation = Property_location::where('property_id', $request->id)->first();
        $getDataLocation->country = $request->country;
        $getDataLocation->state = $request->state;
        $getDataLocation->city = $request->city;
        $getDataLocation->address = $request->address;
        $getDataLocation->update();
        return redirect()->route('admin.properties_list', [$getData->type])->with('success', 'Successfully Updated !');
    }

    public function edit_images($id)
    {
        $images = Property_images::where('property_id', decrypt($id))->get();
        $propertyid = decrypt($id);
        return view('admin.edit_images', compact('images', 'propertyid'));
    }

    public function add_new_property_image(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }
        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Property image');
            }

            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['image'] = $image_new;
        }
        $data['property_id'] = $request->id;
        Property_images::create($data);
        return redirect()->back()->with('success', 'Successfully Added !');
    }

    public function delete_property_image($id)
    {
        $getData = Property_images::findOrFail(decrypt($id));
        if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {
            \File::delete(public_path('admin/assets/uploads/' . $getData->image));
        }
        $getData->delete();
        return back()->with('success', 'Data Deleted Successfully !');
    }

    public function edit_amenities($id)
    {
        $amenities = Property_amenities::where('property_id', decrypt($id))->get();
        $propertyid = decrypt($id);
        return view('admin.edit_amenities', compact('amenities', 'propertyid'));
    }

    public function add_new_property_amenity(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }
        $data['property_id'] = $request->id;
        $data['heading'] = $request->heading;
        Property_amenities::create($data);
        return redirect()->back()->with('success', 'Successfully Added !');
    }

    public function delete_property_amenity($id)
    {
        $getData = Property_amenities::findOrFail(decrypt($id))->delete();
        return back()->with('success', 'Data Deleted Successfully !');
    }

    public function edit_plans($id)
    {
        $plans = Property_plans::where('property_id', decrypt($id))->get();
        $propertyid = decrypt($id);
        return view('admin.edit_plans', compact('plans', 'propertyid'));
    }

    public function add_new_property_plans(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'heading' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'All fields required !');
        }
        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
            ]);

            if ($validator->fails()) {
                return back()->withInput()->with('error', 'Invalid Property image');
            }

            $image = $request->file('image');
            $image_new = time() . $image->getClientOriginalName();
            $image->move('admin/assets/uploads/', $image_new);
            $data['image'] = $image_new;
        }
        $data['heading'] = $request->heading;
        $data['property_id'] = $request->id;
        Property_plans::create($data);
        return redirect()->back()->with('success', 'Successfully Added !');
    }

    public function delete_property_plans($id)
    {
        $getData = Property_plans::findOrFail(decrypt($id));
        if (\File::exists(public_path('admin/assets/uploads/' . $getData->image))) {
            \File::delete(public_path('admin/assets/uploads/' . $getData->image));
        }
        $getData->delete();
        return back()->with('success', 'Data Deleted Successfully !');
    }

}
