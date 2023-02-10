<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use Carbon\Carbon;
use App\Models\ShipDistrict;
use App\Models\ShipState;

class ShippingAreaController extends Controller
{

    /**
     * Function showing division page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
	public function DivisionView(){
		$divisions = ShipDivision::orderBy('id','DESC')->get();

		return view('admin.ship.division.view_division', compact('divisions' ) );

	}

    /**
     * Function creating division
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DivisionStore(Request $request){

    	$request->validate([
    		'division_name' => ['required', 'unique:ship_divisions'],
    	]);

	    ShipDivision::create([
            'division_name' => $request->division_name,
    	]);

		return redirect()->back();

    }


    /**
     * Function view edit divison page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function DivisionEdit( $id ){
        $divisions = ShipDivision::findOrFail( $id );

	    return view('admin.ship.division.edit_division', compact('divisions') );
    }

    /**
     * Function updating division page
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DivisionUpdate(Request $request,$id){

    	ShipDivision::findOrFail($id)->update([
		    'division_name' => $request->division_name,
    	]);

		return redirect()->route('shipping.division.all');


    }

    /**
     * Function deleting division by id
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DivisionDelete($id){

    	ShipDivision::findOrFail($id)->delete();

		return redirect()->back();

    }


    //// Start Ship District

    /**
     * District manage page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function DistrictView(){

        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::with('division')->orderBy('id','DESC')->get();

		return view('admin.ship.district.view_district',compact('division','district'));
    }

    /**
     * Function creating new disctrict
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DistrictStore(Request $request){

    	$request->validate([
    		'division_id'   => ['required'],
    		'district_name' => ['required', 'unique:ship_districts'],
    	]);

	    ShipDistrict::create([
            'division_id'   => $request->division_id,
            'district_name' => $request->district_name,
    	]);

		return redirect()->back();

    }

    /**
     * Function edit of district page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function DistrictEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::findOrFail($id);

        return view('admin.ship.district.edit_district',compact('district','division'));
    }

    /**
     * District update function
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DistrictUpdate(Request $request,$id){

    	ShipDistrict::findOrFail($id)->update([
            'division_id'   => $request->division_id,
            'district_name' => $request->district_name,
    	]);

		return redirect()->route('shipping.district.all');

    }

    /**
     * District deleting function
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function DistrictDelete($id){

    	ShipDistrict::findOrFail($id)->delete();

		return redirect()->back();

    }
    //// End Ship District


     ////////////////// Ship State //////////

    /**
     * Function shipping state manage page
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function StateView(){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::orderBy('district_name','ASC')->get();
        $state   = ShipState::with('division','district')->orderBy('id','DESC')->get();

		return view('admin.ship.state.view_state',compact('division','district','state'));
    }

    /**
     * Function creating state
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StateStore(Request $request){

    	$request->validate([
    		'division_id' => 'required',
    		'district_id' => 'required',
    		'state_name'  => ['required', 'unique:ship_states'],
    	]);

	    ShipState::create([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name'  => $request->state_name,
    	]);

		return redirect()->back();

    }

    /**
     * Function edit view page
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function StateEdit($id){
        $division = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistrict::orderBy('district_name','ASC')->get();
        $state    = ShipState::findOrFail($id);


		return view('admin.ship.state.edit_state',compact('division','district','state'));
    }

    /**
     * Function updating state
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StateUpdate(Request $request,$id){

    	ShipState::findOrFail($id)->update([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_name'  => $request->state_name,
    	]);

		return redirect()->route('shipping.state.all');

    }


    /**
     * Function deleting state
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function StateDelete($id){

    	ShipState::findOrFail($id)->delete();

		return redirect()->back();

    }

    //////////////// End Ship State ////////////

}
