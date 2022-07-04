<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Courier;

class CouriersController extends Controller
{

    protected $token;
    protected $kitchens;

    public function __construct()
    {
        $urlAuth = "https://api-ru.iiko.services/api/1/access_token"; // Auth URL
        $urlKitchens = "https://api-ru.iiko.services/api/1/organizations"; // Kitchens/Organizations URL

        $this->token = Http::post($urlAuth, ['apiLogin' => 'accb4285']);
        $this->kitchens = Http::withToken($this->token['token'])->post($urlKitchens, ['organizationIds' => null]);  // API list of kitchens/organizations
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $urlCourier = "https://api-ru.iiko.services/api/1/employees/couriers";
        $urlKitchens = "https://api-ru.iiko.services/api/1/organizations";

        $kitchens = $this->kitchens;

        if(is_null($request->get('kitchen'))){
            $orgIds = [];

            foreach($kitchens['organizations'] as $kitchen){
                $orgIds[] = $kitchen['id'];
            }
        } else {
            $orgIds[] = $request->get('kitchen');
        }

        $couriersApi = Http::withToken($this->token['token'])->post($urlCourier, ['organizationIds' => $orgIds]);

        $couriers = [];

        $i = 0;
        foreach($couriersApi['employees'] as $courierApi){
            $courierKitchen = Http::withToken($this->token['token'])->post($urlKitchens, ['organizationIds' => [$courierApi['organizationId']]]);

            foreach($courierApi['items'] as $item){
                $couriers[$i]['kitchen'] = $courierKitchen['organizations'][0]['name'];
                $couriers[$i]['displayName'] = $item['displayName'];
                $i++;
            }
        }

        return view('admin.pages.couriers', compact('kitchens', 'couriers'));
    }

    public function checkApi(){

        $urlOrg = "https://api-ru.iiko.services/api/1/organizations";

        $kitchens = Http::withToken($this->token['token'])->post($urlOrg, ['organizationIds' => null]);

        $terminal = "https://api-ru.iiko.services/api/1/employees/couriers";

        $orgIds = [];

        foreach($kitchens['organizations'] as $kitchen){
            $orgIds[] = $kitchen['id'];
        }

        $terminals = Http::withToken($this->token['token'])->post($terminal, ['organizationIds' => $orgIds]);

        dd($terminals['employees']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
