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
                    $slider->slide_image = $imageName;
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
