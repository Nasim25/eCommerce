<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Image;
class SliderController extends Controller
{
    public function slider()
    {
        Session::put('page','slider');
        $sliders = Slider::orderBy('slide_name')->get();
        return view('admin.slider.slider',compact('sliders'));
    }
    public function slider_add(Request $request,$id=NULL)
    {
        if($id == '')
        {
            $slider = new Slider();
        }else{

        }
        if($request->post()){
            $data = $request->all();
            $rules = [
                'slide_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'slide_firs_line' => 'required',
                'slide_second_line' => 'required',
                'slide_third_line' => 'required',
                'category_id' => 'required',
                'slide_image' => 'required|image',
            ];
            $cusomeMessage =[
                'slide_name.required'           =>'Name is required',
                'slide_name.regex'              =>'Valid Name is required',
                'slide_firs_line.required'      =>'First Lisne is required',
                'slide_second_line.required'    =>'Second line is required',
                'slide_third_line.required'     =>'Third line is required',
                'category_id.required'          =>'Category is required',
                'slide_image.required'          =>'Valid image is required',
                'slide_image.image'             =>'Valid image is required'
            ];
            $this->validate($request,$rules,$cusomeMessage);
            if($request->hasFile('slide_image'))
            {
                $image_temp = $request->file('slide_image');
                if($image_temp->isValid()){
                    // Get Image Extention
                    $extention = $image_temp->getClientOriginalExtension();
                    $imageName = rand(111,999999).'.'.$extention;
                    $imagePath = 'public/image/slider_image/'.$imageName;
                    // upload image
                    Image::make($image_temp)->save($imagePath);
                    // save image to database
                    $slider->slide_image = $imagePath;
                }
            }else{
                $slider->slide_image = 'default.png';
            }

            $slider->slide_name = $data['slide_name'];
            $slider->slide_firs_line = $data['slide_firs_line'];
            $slider->slide_second_line = $data['slide_second_line'];
            $slider->slide_third_line = $data['slide_third_line'];
            $slider->category_id = $data['category_id'];
            $slider->status = 1;
            $slider->save();

            return redirect(url('admin/slider'));
        }
        $getCategory = Category::with('subcategories')->where(['parent_id'=>0,'status'=>1])->get();
        $getCategory = json_decode(json_encode($getCategory),true);
        return view('admin.slider.slider_add')->with(compact('getCategory'));
        
    }

    public function slider_update_status(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            if($data['status'] == "Active")
            {
                $status = 0;
            }else{
                $status = 1;
            }
            Slider::where('id',$data['slider_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'slider_id'=>$data['slider_id']]);

        }
    }
}
