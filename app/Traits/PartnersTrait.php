<?php
namespace App\Traits;

use App\Models\Partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait PartnersTrait
{
    public function partners_directory()
    {
        $partners = DB::table('partners')->get();
        $partnerspages = DB::table('partners')->paginate(5);
        $partner_tags = DB::table('partners')->select()->distinct('partner_company_tag1','partner_company_tag2')->get();
        $data['title'] = 'AMZ One Step Partners';
        $data['description'] = 'AMZ One Step Partners';

        return view('partners.index',compact('partnerspages'), $data)->with('partners',$partners)->with('partner_tags',$partner_tags);
    }

    public function partners_company($company_name)
    {
        $partners = DB::table('partners')->where('partner_company_name',$company_name)->get();
        $partner_tags = DB::table('partners')->select()->distinct('partner_company_tag1','partner_company_tag2')->get();
        $data['company_name'] = $company_name;
        return view('partners.partners-company', $data)->with('partners',$partners)->with('partner_tags',$partner_tags);

    }

    public function partners_category_tag1($tag_name1)
    {
        $partners = DB::table('partners')->where('partner_company_tag1',$tag_name1)->get();
        $partner_tags = DB::table('partners')->select()->distinct('partner_company_tag1','partner_company_tag2')->get();
        $data['tag_name1'] = $tag_name1;
        return view('partners.partners-category', $data)->with('partners',$partners)->with('partner_tags',$partner_tags);
    }
    public function partners_category_tag2($tag_name2)
    {
        $partners = DB::table('partners')->where('partner_company_tag2',$tag_name2)->get();
        $partner_tags = DB::table('partners')->select()->distinct('partner_company_tag1','partner_company_tag2')->get();
        $data['tag_name2'] = $tag_name2;
        return view('partners.partners-category2', $data)->with('partners',$partners)->with('partner_tags',$partner_tags);
    }

   
   public function partners_dashboard()
   {
       $partners = DB::table('partners')->get();
       $data['title'] = 'AMZ One Step Partners';
       $data['description'] = 'AMZ One Step Partners';

       return view('partners.dashboard', $data)->with('partners',$partners);
   }

   public function partners_dashboard_add()
   {
       $data['title'] = 'AMZ One Step Partners';
       $data['description'] = 'AMZ One Step Partners';

     return view('partners.create', $data);
   }
   public function partners_dashboard_submit_add(Request $request)
   {
       if($request->partner_company_logo == "" && $request->partner_role_image == "")
       {
           DB::table('partners')->insert([
               'partner_company_logo' => 'NULL',
               'partner_company_name' => $request->input('partner_company_name'),
               'partner_company_link' => $request->input('partner_company_link'),
               'partner_company_contact_email' => $request->input('partner_company_contact_email'),
               'partner_company_tag1' => $request->input('partner_company_tag1'),
               'partner_company_tag2' => $request->input('partner_company_tag2'),
               'partner_company_description1' => $request->input('partner_company_description1'),
               'partner_company_description2' => $request->input('partner_company_description2'),
               'partner_role_image' => 'NULL',
               'partner_role_name' => $request->input('partner_role_name'),
               'partner_role_fb' => $request->input('partner_role_fb'),
               'partner_role_linkedin' => $request->input('partner_role_linkedin'),
               'partner_role_ytube' => $request->input('partner_role_ytube'),
               'created_at' => date('Y-m-d h:i:s'),
           ]);
           return redirect('partner/dashboard')->with('partner_added','Partner Added Successfully!');
       }
       elseif($request->partner_company_logo == "")
       {
           $image2 = $request->file('partner_role_image');
           $image_name2 = strtotime("now").'.'.$image2->getClientOriginalExtension();
           $path2 = $image2->move(public_path('partners-role'), $image_name2);

           DB::table('partners')->insert([
               'partner_company_logo' => 'NULL',
               'partner_company_name' => $request->input('partner_company_name'),
               'partner_company_link' => $request->input('partner_company_link'),
               'partner_company_contact_email' => $request->input('partner_company_contact_email'),
               'partner_company_tag1' => $request->input('partner_company_tag1'),
               'partner_company_tag2' => $request->input('partner_company_tag2'),
               'partner_company_description1' => $request->input('partner_company_description1'),
               'partner_company_description2' => $request->input('partner_company_description2'),
               'partner_role_image' => $image_name2,
               'partner_role_name' => $request->input('partner_role_name'),
               'partner_role_fb' => $request->input('partner_role_fb'),
               'partner_role_linkedin' => $request->input('partner_role_linkedin'),
               'partner_role_ytube' => $request->input('partner_role_ytube'),
               'created_at' => date('Y-m-d h:i:s'),
           ]);
           return redirect('partner/dashboard')->with('partner_added','Partner Added Successfully!');
       }
       elseif($request->partner_role_image == "")
       {
           $image1 = $request->file('partner_company_logo');
           $image_name1 = strtotime("now").'.'.$image1->getClientOriginalExtension();
           $path1 = $image1->move(public_path('partners-logo'), $image_name1);

           DB::table('partners')->insert([
               'partner_company_logo' => $image_name1,
               'partner_company_name' => $request->input('partner_company_name'),
               'partner_company_link' => $request->input('partner_company_link'),
               'partner_company_contact_email' => $request->input('partner_company_contact_email'),
               'partner_company_tag1' => $request->input('partner_company_tag1'),
               'partner_company_tag2' => $request->input('partner_company_tag2'),
               'partner_company_description1' => $request->input('partner_company_description1'),
               'partner_company_description2' => $request->input('partner_company_description2'),
               'partner_role_image' => 'NULL',
               'partner_role_name' => $request->input('partner_role_name'),
               'partner_role_fb' => $request->input('partner_role_fb'),
               'partner_role_linkedin' => $request->input('partner_role_linkedin'),
               'partner_role_ytube' => $request->input('partner_role_ytube'),
               'created_at' => date('Y-m-d h:i:s'),
           ]);
           return redirect('partner/dashboard')->with('partner_added','Partner Added Successfully!');
       }
       else
       {
           $image1 = $request->file('partner_company_logo');
           $image_name1 = strtotime("now").'.'.$image1->getClientOriginalExtension();
           $path1 = $image1->move(public_path('partners-logo'), $image_name1);

           $image2 = $request->file('partner_role_image');
           $image_name2 = strtotime("now").'.'.$image2->getClientOriginalExtension();
           $path2 = $image2->move(public_path('partners-role'), $image_name2);

           DB::table('partners')->insert([
               'partner_company_logo' => $image_name1,
               'partner_company_name' => $request->input('partner_company_name'),
               'partner_company_link' => $request->input('partner_company_link'),
               'partner_company_contact_email' => $request->input('partner_company_contact_email'),
               'partner_company_tag1' => $request->input('partner_company_tag1'),
               'partner_company_tag2' => $request->input('partner_company_tag2'),
               'partner_company_description1' => $request->input('partner_company_description1'),
               'partner_company_description2' => $request->input('partner_company_description2'),
               'partner_role_image' => $image_name2,
               'partner_role_name' => $request->input('partner_role_name'),
               'partner_role_fb' => $request->input('partner_role_fb'),
               'partner_role_linkedin' => $request->input('partner_role_linkedin'),
               'partner_role_ytube' => $request->input('partner_role_ytube'),
               'created_at' => date('Y-m-d h:i:s'),
           ]);
           return redirect('partner/dashboard')->with('partner_added','Partner Added Successfully!');
       }

   }

   public function partners_dashboard_edit($id){
       $partner = Partners::find($id);
       $data['title'] = 'AMZ One Step Partners';
       $data['description'] = 'AMZ One Step Partners';
       return view('partners.edit',compact('partner'), $data);
   }

   public function partners_dashboard_updated(Request $request,$id)
   {

       if ($request->partner_company_logo == "" && $request->partner_role_image == "") {
           $partner = Partners::find($id);
           $partner->partner_company_logo = 'NULL';
           $partner->partner_company_name = $request->partner_company_name;
           $partner->partner_company_link = $request->partner_company_link;
           $partner->partner_company_contact_email = $request->partner_company_contact_email;
           $partner->partner_company_tag1 = $request->partner_company_tag1;
           $partner->partner_company_tag2 = $request->partner_company_tag2;
           $partner->partner_company_description1 = $request->partner_company_description1;
           $partner->partner_company_description2 = $request->partner_company_description2;
           $partner->partner_role_image = 'NULL';
           $partner->partner_role_name = $request->partner_role_name;
           $partner->partner_role_fb = $request->partner_role_fb;
           $partner->partner_role_linkedin = $request->partner_role_linkedin;
           $partner->partner_role_ytube = $request->partner_role_ytube;
           $partner->updated_at = date('Y-m-d h:i:s');
           $partner->update();
           return redirect('partner/dashboard')->with('partner_updated', 'Partner Updated Successfully!');
       }
       elseif ($request->partner_company_logo == "") {
           $image2 = $request->file('partner_role_image');
           $image_name2 = strtotime("now") . '.' . $image2->getClientOriginalExtension();
           $path2 = $image2->move(public_path('partners-role'), $image_name2);

           $partner = Partners::find($id);
           $partner->partner_company_logo = 'NULL';
           $partner->partner_company_name = $request->partner_company_name;
           $partner->partner_company_link = $request->partner_company_link;
           $partner->partner_company_contact_email = $request->partner_company_contact_email;
           $partner->partner_company_tag1 = $request->partner_company_tag1;
           $partner->partner_company_tag2 = $request->partner_company_tag2;
           $partner->partner_company_description1 = $request->partner_company_description1;
           $partner->partner_company_description2 = $request->partner_company_description2;
           $partner->partner_role_image = $image_name2;
           $partner->partner_role_name = $request->partner_role_name;
           $partner->partner_role_fb = $request->partner_role_fb;
           $partner->partner_role_linkedin = $request->partner_role_linkedin;
           $partner->partner_role_ytube = $request->partner_role_ytube;
           $partner->updated_at = date('Y-m-d h:i:s');
           $partner->update();
           return redirect('partner/dashboard')->with('partner_updated', 'Partner Updated Successfully!');
       }
       elseif ($request->partner_role_image == "") {
           $image1 = $request->file('partner_company_logo');
           $image_name1 = strtotime("now") . '.' . $image1->getClientOriginalExtension();
           $path1 = $image1->move(public_path('partners-logo'), $image_name1);

           $partner = Partners::find($id);
           $partner->partner_company_logo = $image_name1;
           $partner->partner_company_name = $request->partner_company_name;
           $partner->partner_company_link = $request->partner_company_link;
           $partner->partner_company_contact_email = $request->partner_company_contact_email;
           $partner->partner_company_tag1 = $request->partner_company_tag1;
           $partner->partner_company_tag2 = $request->partner_company_tag2;
           $partner->partner_company_description1 = $request->partner_company_description1;
           $partner->partner_company_description2 = $request->partner_company_description2;
           $partner->partner_role_image = 'NULL';
           $partner->partner_role_name = $request->partner_role_name;
           $partner->partner_role_fb = $request->partner_role_fb;
           $partner->partner_role_linkedin = $request->partner_role_linkedin;
           $partner->partner_role_ytube = $request->partner_role_ytube;
           $partner->updated_at = date('Y-m-d h:i:s');
           $partner->update();
           return redirect('partner/dashboard')->with('partner_updated', 'Partner Updated Successfully!');
       }
       else {
           $image1 = $request->file('partner_company_logo');
           $image_name1 = strtotime("now") . '.' . $image1->getClientOriginalExtension();
           $path1 = $image1->move(public_path('partners-logo'), $image_name1);

           $image2 = $request->file('partner_role_image');
           $image_name2 = strtotime("now") . '.' . $image2->getClientOriginalExtension();
           $path2 = $image2->move(public_path('partners-role'), $image_name2);

           $partner = Partners::find($id);
           $partner->partner_company_logo = $image_name1;
           $partner->partner_company_name = $request->partner_company_name;
           $partner->partner_company_link = $request->partner_company_link;
           $partner->partner_company_contact_email = $request->partner_company_contact_email;
           $partner->partner_company_tag1 = $request->partner_company_tag1;
           $partner->partner_company_tag2 = $request->partner_company_tag2;
           $partner->partner_company_description1 = $request->partner_company_description1;
           $partner->partner_company_description2 = $request->partner_company_description2;
           $partner->partner_role_image = $image_name2;
           $partner->partner_role_name = $request->partner_role_name;
           $partner->partner_role_fb = $request->partner_role_fb;
           $partner->partner_role_linkedin = $request->partner_role_linkedin;
           $partner->partner_role_ytube = $request->partner_role_ytube;
           $partner->updated_at = date('Y-m-d h:i:s');
           $partner->update();
           return redirect('partner/dashboard')->with('partner_updated', 'Partner Updated Successfully!');

       }
   }


   public function partners_dashboard_delete($id)
   {
       Partners::find($id)->delete();
       return back()->with('partner_deleted','Partner Deleted Successfully!');
   }

}
