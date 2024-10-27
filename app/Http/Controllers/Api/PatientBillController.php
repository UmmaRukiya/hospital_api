<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientBill;
use App\Models\PatientBillDetail;
use App\Http\Controllers\Api\BaseController;

class PatientBillController extends BaseController
{
    public function index(){
        $data=PatientBill::with('patient')->get();
        return $this->sendResponse($data,"PatientBill data");
    }

    public function store(Request $request){
         //return $request->all();
        
         $patientbill_data['patient_id']=$request->input['patient_id'];
         $patientbill_data['bill_date']=$request->input['bill_date'];
         $patientbill_data['sub_amount']=$request->totalData['sub_amount'];
         $patientbill_data['discount']=$request->totalData['discount'];
         $patientbill_data['tax']=$request->totalData['tax'];
         $patientbill_data['total_amount']=$request->totalData['finalTotal'];
        //  $purchase_data['discountamt']=$request->totalData['discountAmt']?? 0;
        //  $purchase_data['taxamt']=$request->totalData['taxAmt']?? 0;
         $data=PatientBill::create($patientbill_data);
         foreach($request->cartitems as $itms){
             $item['patient_bill_id']=$data->id;
             $item['roomlist_id']=$itms['id'];
             $item['unit']=$itms['unit'];
             $item['price']=$itms['price'];
            //  BillItem::create($item);
            //  $stock['purchase_id']=$data->id;
            //  $stock['product_id']=$itms['id'];
             //$stock['qty']="-".$itms['quantity']; //use for sales
            //  $stock['qty']=$itms['quantity'];
            //  $stock['price']=$itms['price'];
            //  Stock::create($stock);
         }
        // $data=PatientBill::create($request->all());
        return $this->sendResponse($data,"PatientBill created successfully");
    }
    public function show(PatientBill $patientbill){
        return $this->sendResponse($patientbill,"PatientBill created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientBill::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientBill updated successfully");
    }

    public function destroy(PatientBill $patientbill)
    {
        $patientbill=$patientbill->delete();
        return $this->sendResponse($patientbill,"PatientBill deleted successfully");
    }
}
