<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CandidateModel;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{

    public function candidate()
    {
        $url=url('candidates');
        $title="Customer Registration";
        $data=compact('url','title');
        return view('candidate')->with($data);
    }

    public function candidatePost(Request $request)
    {
        $candidate = new CandidateModel();
        $candidate->name = $request->input('name');
        $candidate->email = $request->input('email');
        $candidate->address = $request->input('address');
        $candidate->country = $request->input('country');
        $candidate->state = $request->input('state');
        $candidate->save();
        return "User registered successfully";
    }

    public function candidateTable()
    {
        $data = CandidateModel::paginate(5);
        return view('candidateTable', ['candidates' => $data]);
    }

    public function delete($id)
    {
        $candidate = CandidateModel::find($id)->delete();
        return redirect()->back();
        //for route 
        //  $candidate=CandidateModel::find($id);
        //  if(!is_null($candidate)){
        //     $candidate->dalete();
        //  }
        //  return redirect('candidateTable');   
    }
    public function forceDelete($id)
    {
        $candidate = CandidateModel::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
        //for route 
        //  $candidate=CandidateModel::find($id);
        //  if(!is_null($candidate)){
        //     $candidate->dalete();
        //  }
        //  return redirect('candidateTable');   
    }

    public function restore($id)
    {
        $candidate = CandidateModel::withTrashed()->find($id)->restore();
        return redirect('candidateTable');
        //for route 
        //  $candidate=CandidateModel::find($id);
        //  if(!is_null($candidate)){
        //     $candidate->dalete();
        //  }
        //  return redirect('candidateTable');   
    }

    // public function trash(){
    //     // dd("hfdgdbgdafkbgvadfv");
    //     $candidates=CandidateModel::onlyTrashed()->get();
    //     // $candidate = DB::table('candidates')->select('id','name','email','address','country','state')->get();
    //     $load=$candidates->toArray();
    //     // dd($load[0]);
    //     $data = compact('candidates');
    //     return view('candidatetrash')->with($data);
    // }
    public function trash()
    {
        $candidates = CandidateModel::onlyTrashed()->paginate(10); // Adjust the pagination limit as needed

        return view('candidatetrash', compact('candidates'));
    }

    // public function edit($id){

    //     $candidates=CandidateModel::find($id)->get();
    //     // dd($candidate);
    //     $data=compact('candidates');
    //     return view('candidateTable')->with($data);
    // }
    // public function edit($id){

    //     $candidates=CandidateModel::find($id)->get();
    //     // dd($candidates->toArray());
    //     // dd($candidate);
    //     // $data=compact('candidate');
    //     return view('candidateTable',compact('candidates'));
    // }

    public function edit($id)
    {
        $candidate = CandidateModel::find($id);
       
        if (is_null($candidate)) {
            // Handle the case when the candidate is not found
            return redirect('candidate');
        }else{
            $title="Update Costomer";
            $url=url('candidateTable/update')."/".$id;
            $data=compact('candidate','url','title');
            return view('candidate', compact('candidate','url'));

        }
    }
}
     // dd("hfdgdbgdafkbgvadfv");
    //  $candidate=CandidateModel::onlyTrashed()->get();
     // $candidate = DB::table('candidates')->select('id','name','email','address','country','state')->get();
     // $load=$candidate->toArray();
     // dd($candidate[0]);
    //  $name = $candidate->name;
    //  dd($name);
     // $candidate = new CandidateModel();
     // $name = $candidate->name = $request->input('name');
     // $name = $candidate->name = $request->Input::get('name');
     // dd($name);
     // dd($candidate->toArray());
     // $objectProduct = new ProductManagementModel;
     // $objectProduct->product_name        = Input::get('product_name');