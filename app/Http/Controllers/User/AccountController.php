<?php

namespace App\Http\Controllers\User;

use DateTime;
use App\Models\BabyInfo;
use App\Models\Section;
use App\Models\Services;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use array_add;

class AccountController extends Controller
{
    public function dashboard(){
        $baby = BabyInfo::where('owner_id', '=', Auth()->user()->id)->first();
        return view('client.Account.dashboard', compact('baby'));
    }

    public function addBabyInfo(Request $request){
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required'
        ]);

        $form_data = array(
            'owner_id'=> Auth()->User()->id,
            'name'=> $request->name,
            'date_of_birth'=> $request->date_of_birth,
        );

        BabyInfo::create($form_data);
        return redirect()->back();
    }

    public function babySuggestion(){
        $final_suggestion;

        $baby = BabyInfo::where('owner_id', '=', Auth()->User()->id)->first();
        if($baby){
            $bday = new DateTime($baby->date_of_birth);
            $today = new Datetime(date('m.d.y'));
            $diff = $today->diff($bday);
            $total_days = $diff->days;
            $total_month = $total_days / 30;
            $to_int_month = (int)$total_month;

            function selectSuggestion($start_age, $end_age){
                $result = Services::join('sections', 'sections.service_id', '=', 'services.id')
                    ->where('age_range', '>=', $start_age)
                    ->where('age_range', '<=', $end_age)
                    ->select('service_title', 'title', 'details', '.sections.id as id')
                    ->get();
                return $result;
            };
            
            if($to_int_month <= 6){
                $final_suggestion = selectSuggestion(0,6);
            }elseif($to_int_month > 6 and $to_int_month <= 12 ){
                $final_suggestion = selectSuggestion(6,12);
            }elseif($to_int_month > 12 and $to_int_month <= 18 ){
                $final_suggestion = selectSuggestion(12,18);
            }elseif($to_int_month > 18 and $to_int_month <= 24 ){
                $final_suggestion = selectSuggestion(18,24);
            }elseif($to_int_month > 30 and $to_int_month <= 36 ){
                $final_suggestion = selectSuggestion(24,30);
            }elseif($to_int_month > 36 and $to_int_month <= 42 ){
                $final_suggestion = selectSuggestion(36,42);
            }elseif($to_int_month > 42 and $to_int_month <= 48 ){
                $final_suggestion = selectSuggestion(42,48);
            }
            elseif($to_int_month > 48 and $to_int_month <= 54 ){
                $final_suggestion = selectSuggestion(48,54);
            }elseif($to_int_month > 54 and $to_int_month <= 60 ){
                $final_suggestion = selectSuggestion(54,60);
            }elseif($to_int_month > 66 and $to_int_month <= 72 ){
                $final_suggestion = selectSuggestion(66,72);
            }elseif($to_int_month > 78 and $to_int_month <= 84 ){
                $final_suggestion = selectSuggestion(78,84);
            }else{
                $final_suggestion = selectSuggestion(0,0);
            }

        }

        return view('client.Account.baby-suggestion', compact('baby', 'diff', 'final_suggestion'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $form_data = array(
            'name'=> $request->name
        );

        $record = User::find(Auth()->User()->id);
        $record->update($form_data);
        return redirect()->back()->with('success', 'Successfully updated');
        
    }

    public function vaccination(){
        $vaccines = Services::join('sections', 'sections.service_id', '=', 'services.id')
            ->where('sections.age_range', 0)
            ->get();
        return view('client.Account.vaccination', compact('vaccines'));
    }
}
