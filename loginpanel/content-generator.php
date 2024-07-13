<?php
require_once __DIR__.'/../bpcore/htmlentitygenerator.php';

function imageUploadCroppieJs($croppiebox,$uploadmsg,$additionalstyle=''){


  $a='
  <style>
  .'.$croppiebox.'-wrap {
    width: 100%;
    height: auto;
  }

  img.'.$croppiebox.'-thumb-preview{    max-width: 100%;
    width: 150px;
    border-radius: .2em;
    border: .2em solid #cccccc5c;
     
  }


  .'.$croppiebox.' .'.$croppiebox.'-wrap,
  .'.$croppiebox.' .'.$croppiebox.'-result,
  .'.$croppiebox.'.ready .'.$croppiebox.'-msg {
    display: none;
  }
  .'.$croppiebox.'.ready .'.$croppiebox.'-wrap {
    display: block;
  }
  .'.$croppiebox.'.ready .'.$croppiebox.'-result {
    display: inline-block;    
  }
  .'.$croppiebox.'-wrap {

    margin: 0 auto;
  }

  .'.$croppiebox.'-msg {
    text-align: center;
    padding: 38px;
    font-size: 22px;
    color: #aaa;
    width: 220px;
    margin: 50px auto;
    border: 1px solid #aaa;
  }

  /* Sweet alert modifications */
  .sweet-alert {
    width: auto;
    max-width: 85%;
  }

  a.btn-file ,.upload-result {
    background-color: #189094;
    color: white;
    padding: 10px 15px;
    border-radius: 3px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
    text-shadow: none;
    display: inline-block;
    cursor: pointer;
  }

  .file-btn {
    position: relative;
  }
  .file-btn input[type="file"] {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
  }

  .modal-body{
    padding-bottom: 100px !important; 
  }

  @media handheld, only screen and (max-width: 767px) {

    [class*="col-"] {
      width: auto;
      float: none;
      margin: 10px 0;
      padding-left: 0;
      padding-right: 10px; /* column-space */
    }
    .container, 
    .section-header h2 {
      min-width: 0;
    }

    .croppie-container {
      padding: 30px 0;
    }
  }

  '.$additionalstyle.'

  </style>

<div class="row">
<div class="col-sm-12">
   <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#changeImageCropper-'.$croppiebox.'" role="button" aria-expanded="false" aria-controls="changeImageCropper">
    Upload '.$uploadmsg.'
  </a>
  <div class="collapse" id="changeImageCropper-'.$croppiebox.'">
  <div class="card card-body">
  <div class="demo-wrap '.$croppiebox.' ">
  <div class="col-sm-12">
  <div class="'.$croppiebox.'-msg">
  '.$uploadmsg.'
  </div>
  <div class="'.$croppiebox.'-wrap">
  <div id="'.$croppiebox.'"></div>
  </div>
  </div>

  </div>

  <div class="row justify-content-center">
  <div class="col-sm-12">
  <a class="btn btn-default">
  <input type="file" id="'.$croppiebox.'input" value="Choose a file" accept="image/*" />
  </a>
</div>
  <div class="col-sm-6 mt-4">

   <a class="btn btn-primary '.$croppiebox.'-result">
  Image upload
  </a>
     </div>

  </div>
  </div>
</div>
  

 </div>
 </div>
  
  <img class="'.$croppiebox.'-thumb-preview" style="max-width:100%;" /><br>
    <label for="preview" >Uploaded Image Preview</label> 

   ';
  return $a;


}


function addModel(){



 $a='
 <tr>
 <td> 
 <label>Model Name</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Model Name Arabic</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Model Slug</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="modelslug">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Other Model</label>
 </td>
 </tr>
 <tr>
 <td>  
 
 <input style="width:10%;" type="checkbox" value="othermodel" name="other">
 
 </td>
 </tr>


 ';


 $cropBox=array
 (
  "croppername"=>"modelCropper",
  "cropperuploadmsg"=>"Model Picture"
);
 
 $a.='
 <tr>
 <td> 
 <label>IMAGE</label>
 </td>
 </tr>
 <tr>
 <td>  
 <div class="col-sm-12 text-center">
 '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
 </div>


 </td>
 </tr>

 ';


 $a.='<tr class="h-5"></tr>';

 $a.='  
 <tr>
 <td class="text-center">  
 <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

 </td>
 </tr>
 ';

 



 return $a;


}



function addsoption(){



 $a='
 <tr>
 <td> 
 <label>Service Option Name</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Service Option Name Arabic</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Service Option Slug</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="soptionslug">
 </td>
 </tr>



 ';


 $cropBox=array
 (
  "croppername"=>"soptionCropper",
  "cropperuploadmsg"=>"Service Option Picture"
);
 
 $a.='
 <tr>
 <td> 
 <label>IMAGE</label>
 </td>
 </tr>
 <tr>
 <td>  
 <div class="col-sm-12 text-center">
 '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
 </div>


 </td>
 </tr>

 ';


 $a.='<tr class="h-5"></tr>';

 $a.='  
 <tr>
 <td class="text-center">  
 <button data-dismiss="modal" tabindex="12" id="addsoption" class="btn btn-primary btn-lg"> create </button>

 </td>
 </tr>
 ';

 



 return $a;


}



function editsoption(){



 $a='
 <tr>
 <td> 
 <label>Service Option Name</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
 </td>
 </tr>

 <tr>
 <td> 
 <label>Service Option Name Arabic</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
 </td>
 </tr>


 <tr>
 <td> 
 <label>Service Option Slug</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="soptionslug">
 </td>
 </tr>

 <input type="hidden" value="" name="editid" />
 <input  type="hidden"   name="lang_code">

 ';


 $cropBox=array
 (
  "croppername"=>"soptionCropper2",
  "cropperuploadmsg"=>"Service Option Picture"
);
 
 $a.='
 <tr>
 <td> 
 <label>IMAGE</label>
 </td>
 </tr>
 <tr>
 <td>  
 <div class="col-sm-12 text-center">
 '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
 </div>


 </td>
 </tr>

 ';


 $a.='<tr class="h-5"></tr>';

 $a.='  
 <tr>
 <td class="text-center">  
 <button data-dismiss="modal" tabindex="12" id="editsoption" class="btn btn-primary btn-lg"> Save </button>

 </td>


 </tr>
 <tr>
 <td class="">          <a  class="btn btn-danger btn-delete btn-sm  delete-soption" data-dismiss="modal" >Delete Service</a>
 </td>
 </tr>


 ';

 



 return $a;

}




function addmunci(){

  $stores=extractRecordList('*','databox',' WHERE  metatype="STORE" ');

  $a='
  <tr>
  <td> 
  <label>Municipality Name</label>
  </td>
  </tr>
  <tr>
  <td>  
  <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
  </td>
  </tr>

  <tr>
  <td> 
  <label>Municipality Name Arabic</label>
  </td>
  </tr>
  <tr>
  <td>  
  <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
  </td>
  </tr>

  <tr>
  <td> 
  <label>Nearest Stores</label>
  </td>
  </tr>
  <tr>
  <td>  
  <select  id="stores" multiple="multiple" name="store[]"  tabindex="2" class="form-control">';

  foreach ($stores as $key => $value) {

   $a.='<option value="'.$value["databox_id"].'" >'.$value["metaname"].'</option>';

 }

 $a.='</select>
 </td>
 </tr>


 <tr>
 <td> 
 <label>Municipality Slug</label>
 </td>
 </tr>
 <tr>
 <td>  
 <input   tabindex="2" class="form-control" type="" value="" name="municipalityslug">
 </td>
 </tr>
 <script>
 $(document).ready(function() {
  $(`#stores`).multiselect({
    includeSelectAllOption: true,
    });
    });
    </script>


    ';


//  $cropBox=array
//  (
//   "croppername"=>"soptionCropper",
//   "cropperuploadmsg"=>"Service Option Picture"
// );

//  $a.='
//  <tr>
//  <td> 
//  <label>IMAGE</label>
//  </td>
//  </tr>
//  <tr>
//  <td>  
//  <div class="col-sm-12 text-center">
//  '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
//  </div>


//  </td>
//  </tr>

//  ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="addmunci" class="btn btn-primary btn-lg"> create </button>

    </td>
    </tr>
    ';





    return $a;


  }



  function editmunci(){

    $stores=extractRecordList('*','databox',' WHERE  metatype="STORE" ');

    $a='
    <tr>
    <td> 
    <label>Municipality Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Municipality Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Nearest Stores</label>
    </td>
    </tr>
    <tr>
    <td>  
    <select  id="estores" multiple="multiple" name="store[]"  tabindex="2" class="form-control">';

    foreach ($stores as $key => $value) {

     $a.='<option value="'.$value["databox_id"].'" >'.$value["metaname"].'</option>';

   }

   $a.='</select>
   </td>
   </tr>

   <tr>
   <td> 
   <label>Municipality Slug</label>
   </td>
   </tr>
   <tr>
   <td>  
   <input   tabindex="2" class="form-control" type="" value="" name="municipalityslug">
   </td>
   </tr>


   <input type="hidden" value="" name="editid" />
   <input  type="hidden"   name="lang_code">

   ';


//  $cropBox=array
//  (
//   "croppername"=>"soptionCropper2",
//   "cropperuploadmsg"=>"Service Option Picture"
// );

//  $a.='
//  <tr>
//  <td> 
//  <label>IMAGE</label>
//  </td>
//  </tr>
//  <tr>
//  <td>  
//  <div class="col-sm-12 text-center">
//  '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
//  </div>


//  </td>
//  </tr>

//  ';


   $a.='<tr class="h-5"></tr>';

   $a.='  
   <tr>
   <td class="text-center">  
   <button data-dismiss="modal" tabindex="12" id="editmunci" class="btn btn-primary btn-lg"> Save </button>

   </td>


   </tr>
   <tr>
   <td class=""> <a  class="btn btn-danger btn-delete btn-sm  delete-munci" data-dismiss="modal" >Delete Municipality</a>
   </td>
   </tr>

   <script>
   $(document).ready(function() {
    $(`#estores`).multiselect({
      includeSelectAllOption: true,
      });
      });
      </script>


      ';





      return $a;

    }



    function addstore(){



     $a='
     <tr>
     <td> 
     <label>Store Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Map Link</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input    tabindex="3" class="form-control" type="" value="" name="storemaplink">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Description</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="4" class="form-control"   name="storedesc_en">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Description Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="5" class="form-control"   name="storedesc_ar">
     </textarea>
     </td>
     </tr>


     <tr>
     <td> 
     <label>Store Address</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="6" class="form-control"   name="storeaddress_en">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Address Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="7" class="form-control"   name="storeaddress_ar">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store  Primary Phone </label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="8" class="form-control" type="" value="" name="storephone">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="storesslug">
     </td>
     </tr>


     ';


     $cropBox=array
     (
      "croppername"=>"storeCropper",
      "cropperuploadmsg"=>"Store Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="addstore" class="btn btn-primary btn-lg"> create </button>

     </td>
     </tr>
     ';





     return $a;


   }



   function editstore(){



     $a='
     <tr>
     <td> 
     <label>Store Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <input type="hidden" value="" name="editid" />
     <input  type="hidden"   name="lang_code">
     <input  type="hidden"   name="lang_code_address">
     <input  type="hidden"   name="lang_code_desc">




     <tr>
     <td> 
     <label>Store Map Link</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="3" class="form-control" type="" value="" name="storemaplink">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Description</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="4" class="form-control"   name="storedesc_en">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Description Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="5" class="form-control"   name="storedesc_ar">
     </textarea>
     </td>
     </tr>


     <tr>
     <td> 
     <label>Store Address</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="6" class="form-control"   name="storeaddress_en">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store Address Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <textarea   tabindex="7" class="form-control"   name="storeaddress_ar">
     </textarea>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Store  Primary Phone </label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="8" class="form-control" type="" value="" name="storephone">
     </td>
     </tr>


     <tr>
     <td> 
     <label>Store Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="storeslug">
     </td>
     </tr>

     ';





     $cropBox=array
     (
      "croppername"=>"storeCropper2",
      "cropperuploadmsg"=>"Store Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="editstore" class="btn btn-primary btn-lg"> Save </button>

     </td>


     </tr>
     <tr>
     <td class="">          <a  class="btn btn-danger btn-delete btn-sm  delete-store" data-dismiss="modal" >Delete Store</a>
     </td>
     </tr>


     ';




     return $a;

   }




   function addDeviceService(){



     $a='
     <tr>
     <td> 
     <label>Service Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Service Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Service Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="deviceserviceslug">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Other issue</label>
     </td>
     </tr>
     <tr>
     <td>  

     <input style="width:10%;" type="checkbox" value="otherissue" name="other">

     </td>
     </tr>

     ';


     $cropBox=array
     (
      "croppername"=>"dslCropper",
      "cropperuploadmsg"=>"Service Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="adddsl" class="btn btn-primary btn-lg"> create </button>

     </td>
     </tr>
     ';





     return $a;


   }

   function addBrand(){



     $a='
     <tr>
     <td> 
     <label>Brand Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Brand Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Brand Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="brandslug">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Other Brand</label>
     </td>
     </tr>
     <tr>
     <td>  

     <input style="width:10%;" type="checkbox" value="otherbrand" name="other">

     </td>
     </tr>

     ';


     $cropBox=array
     (
      "croppername"=>"brandCropper",
      "cropperuploadmsg"=>"Brand Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

     </td>
     </tr>
     ';





     return $a;


   }






   function addDevice(){



     $a='
     <tr>
     <td> 
     <label>Device Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="deviceslug">
     </td>
     </tr>


     <tr>
     <td> 
     <label>Other Device</label>
     </td>
     </tr>
     <tr>
     <td>  

     <input style="width:10%;" type="checkbox" value="otherdevice" name="other">

     </td>
     </tr>





     ';


     $cropBox=array
     (
      "croppername"=>"deviceCropper",
      "cropperuploadmsg"=>"Device Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

     </td>
     </tr>
     ';





     return $a;


   }



   function addInstallDevice(){



     $a='

     <tr>
     <td> 
     <label>category</label>
     </td>
     </tr>
     <tr>
     <td>  
     <select class="form-control" name="for">
     <option class="form-control" value="home">Home</option>
     <option class="form-control" value="business">Business</option>
     </select>
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Name</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Name Arabic</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
     </td>
     </tr>

     <tr>
     <td> 
     <label>Device Slug</label>
     </td>
     </tr>
     <tr>
     <td>  
     <input   tabindex="2" class="form-control" type="" value="" name="deviceslug">
     </td>
     </tr>



     ';


     $cropBox=array
     (
      "croppername"=>"installdeviceCropper",
      "cropperuploadmsg"=>"Device Picture"
    );

     $a.='
     <tr>
     <td> 
     <label>IMAGE</label>
     </td>
     </tr>
     <tr>
     <td>  
     <div class="col-sm-12 text-center">
     '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
     </div>


     </td>
     </tr>

     ';


     $a.='<tr class="h-5"></tr>';

     $a.='  
     <tr>
     <td class="text-center">  
     <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

     </td>
     </tr>
     ';





     return $a;


   }



   function editModel(){

    $editModel=extractRecord('*','catalogue_id',$_REQUEST["id"],'catalogue','  AND metatype="MODEL" ');

    $a='

    <tr>
    <td> 
    <label>Model Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="'.extractDataByLangcode($editModel[0]["metacontent"],"ENG").'" name="pname_en">
    <input  type="hidden" value="'.($editModel[0]["metacontent"]).'" name="lang_code">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Model Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.extractDataByLangcode($editModel[0]["metacontent"],"ARB").'" name="pname_ar">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Model Priority</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editModel[0]["priority"]).'" name="priority">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Model Slug</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editModel[0]["meta-url-key"]).'" name="modelslug">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Other Device</label>
    </td>
    </tr>
    <tr>
    <td>  


    <input style="width:10%;" type="checkbox"  name="other" 

    value="'.($editModel[0]["category"]=='' ? 'othermodel' : '').'" 

    '.($editModel[0]["category"]=='othermodel' ? 'checked' : '').'>

    </td>
    </tr>
    ';


    $cropBox=array
    (
      "croppername"=>"modelCropper",
      "cropperuploadmsg"=>"Model Picture"
    );

    $a.='
    <tr>
    <td> 
    <label>IMAGE</label>
    </td>
    </tr>
    <tr>
    <td>  
    <div class="col-sm-12 text-center">
    '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
    </div>


    </td>
    </tr>

    ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="editpatsumbit" class="btn btn-primary btn-lg"> Save </button>
    </td>
    </tr>



    ';





    return $a;


  }


  function editBrand(){

    $editBrand=extractRecord('*','catalogue_id',$_REQUEST["id"],'catalogue','  AND metatype="BRAND" ');

    $a='
    <tr>
    <td> 
    <label>Brand Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="'.extractDataByLangcode($editBrand[0]["metacontent"],"ENG").'" name="pname_en">
    <input  type="hidden" value="'.($editBrand[0]["metacontent"]).'" name="lang_code">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Brand Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.extractDataByLangcode($editBrand[0]["metacontent"],"ARB").'" name="pname_ar">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Brand Priority</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editBrand[0]["priority"]).'" name="priority">
    </td>
    </tr>


    <tr>
    <td> 
    <label>Brand Slug</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editBrand[0]["meta-url-key"]).'" name="brandslug">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Other Device</label>
    </td>
    </tr>
    <tr>
    <td>  


    <input style="width:10%;" type="checkbox"  name="other" 

    value="'.($editBrand[0]["category"]=='' ? 'otherbrand' : '').'" 

    '.($editBrand[0]["category"]=='otherbrand' ? 'checked' : '').'>

    </td>
    </tr>

    ';


    $cropBox=array
    (
      "croppername"=>"brandCropper",
      "cropperuploadmsg"=>"Brand Picture"
    );

    $a.='
    <tr>
    <td> 
    <label>IMAGE</label>
    </td>
    </tr>
    <tr>
    <td>  
    <div class="col-sm-12 text-center">
    '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
    </div>


    </td>
    </tr>

    ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="editpatsumbit" class="btn btn-primary btn-lg"> Save </button>

    </td>
    </tr>
    ';





    return $a;


  }



  function editDeviceService(){

    $editissue=extractRecord('*','catalogue_id',$_REQUEST["id"],'catalogue','  AND metatype="DEVICESERVICELIST" ');

    $a='
    <tr>
    <td> 
    <label>Service Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Service Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
    </td>
    </tr>


    <tr>
    <td> 
    <label>Device Service Slug</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="" name="deviceserviceslug">

    </td>
    </tr>


    <tr>
    <td> 
    <label>Other issue</label>
    </td>
    </tr>
    <tr>
    <td>  

    <input style="width:10%;" type="checkbox" value="otherissue" name="other">

    </td>
    </tr>



    <input type="hidden" value="" name="editid" />
    <input  type="hidden"   name="lang_code">

    ';


    $cropBox=array
    (
      "croppername"=>"dslCropper2",
      "cropperuploadmsg"=>"Service Picture"
    );

    $a.='
    <tr>
    <td> 
    <label>IMAGE</label>
    </td>
    </tr>
    <tr>
    <td>  
    <div class="col-sm-12 text-center">
    '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
    </div>


    </td>
    </tr>

    ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="editdsl" class="btn btn-primary btn-lg"> Save </button>

    </td>


    </tr>
    <tr>
    <td class="">          <a  class="btn btn-danger btn-delete btn-sm  delete-dsl" data-dismiss="modal" >Delete Service</a>
    </td>
    </tr>


    ';





    return $a;

  }




  function editsInstallDevice(){


    $a='
    <tr>
    <td> 
    <label>category</label>
    </td>
    </tr>
    <tr>
    <td>  
    <select class="form-control" name="for">
    <option class="form-control" value="home">Home</option>
    <option class="form-control" value="business">Business</option>
    </select>
    </td>
    </tr>


    <tr>
    <td> 
    <label>Device Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="" name="pname_en">
    <input  type="hidden" value="" name="lang_code">
    </td>
    </tr>
    <input type="hidden" value="" name="editid" />

    <tr>
    <td> 
    <label>Device Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="" name="pname_ar">
    </td>
    </tr>





    <tr>
    <td> 
    <label>Device Slug</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="" name="deviceslug">
    </td>
    </tr>


    ';


    $cropBox=array
    (
      "croppername"=>"installdeviceCropper2",
      "cropperuploadmsg"=>"Device Picture"
    );

    $a.='
    <tr>
    <td> 
    <label>IMAGE</label>
    </td>
    </tr>
    <tr>
    <td>  
    <div class="col-sm-12 text-center">
    '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
    </div>


    </td>
    </tr>

    ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="editpatsumbit" class="btn btn-primary btn-lg"> Save </button>

    </td>
    </tr>

    <tr>
    <td class="">

    <a  class="btn btn-danger btn-delete btn-sm  delete-installdevice" data-dismiss="modal" >Delete</a>
    </td>
    </tr>
    ';





    return $a;


  }

  function editDevice(){

    $editDevice=extractRecord('*','catalogue_id',$_REQUEST["id"],'catalogue','  AND metatype="DEVICE" ');

    $a='
    <tr>
    <td> 
    <label>Device Name</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="1" class="form-control" type="" value="'.extractDataByLangcode($editDevice[0]["metacontent"],"ENG").'" name="pname_en">
    <input  type="hidden" value="'.($editDevice[0]["metacontent"]).'" name="lang_code">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Device Name Arabic</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.extractDataByLangcode($editDevice[0]["metacontent"],"ARB").'" name="pname_ar">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Device Priority</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editDevice[0]["priority"]).'" name="priority">
    </td>
    </tr>



    <tr>
    <td> 
    <label>Device Slug</label>
    </td>
    </tr>
    <tr>
    <td>  
    <input   tabindex="2" class="form-control" type="" value="'.($editDevice[0]["meta-url-key"]).'" name="deviceslug">
    </td>
    </tr>

    <tr>
    <td> 
    <label>Other Device</label>
    </td>
    </tr>
    <tr>
    <td>  


    <input style="width:10%;" type="checkbox"  name="other" 

    value="'.($editDevice[0]["category"]=='' ? 'otherdevice' : '').'" 

    '.($editDevice[0]["category"]=='otherdevice' ? 'checked' : '').'>

    </td>
    </tr>


    ';


    $cropBox=array
    (
      "croppername"=>"deviceCropper",
      "cropperuploadmsg"=>"Device Picture"
    );

    $a.='
    <tr>
    <td> 
    <label>IMAGE</label>
    </td>
    </tr>
    <tr>
    <td>  
    <div class="col-sm-12 text-center">
    '.imageUploadCroppieJs($cropBox["croppername"],$cropBox["cropperuploadmsg"]).'
    </div>


    </td>
    </tr>

    ';


    $a.='<tr class="h-5"></tr>';

    $a.='  
    <tr>
    <td class="text-center">  
    <button data-dismiss="modal" tabindex="12" id="editpatsumbit" class="btn btn-primary btn-lg"> Save </button>

    </td>
    </tr>
    ';





    return $a;


  }





  function imgCropperInit($cropBox){


   echo '


   <script type="text/javascript">
   $(()=>{


    imgCropperModule.init(
    {
     "parentWrapperClass":".'.$cropBox["croppername"].'",
     "cropperElementId":"#'.$cropBox["croppername"].'",
     "inputFileElementID":"#'.$cropBox["croppername"].'input",
     "fileUploadSave":".'.$cropBox["croppername"].'-result",
     "cropViewportParam":{
      "width":'.$cropBox["vwidth"].',
      "height":'.$cropBox["vheight"].',
      "type":"'.$cropBox["vtype"].'"
      },
      "cropBoundaryParam":{
        "width":'.$cropBox["bwidth"].',
        "height":'.$cropBox["bheight"].'
        },
        "cropResultParam":{
          "type":"base64",
          "size":'.$cropBox["size"].',
          "quality":1,
          "format":"png"
          },
          "imgPostParams":{
            "type":"'.$cropBox["ajxtype"].'",
            "url":"./_dp_push.php",
            "thumbnail":".'.$cropBox["croppername"].'-thumb-preview",
            "modalflag":"show",
            "loader":"#ajaxloader"
            },
            "resize":"'.$cropBox["resize"].'",
            "orientation":"'.$cropBox["orientation"].'"

          }
          );
          });
          </script> 

          ';

        }



        function addNewLitem(){




         $litemtype= extract_col_where('configvalue','metaname','LITEMTYPE','systemconfig_xc');
         $a= '
         <tr>
         <td> 
         <label>ITEMTYPE</label>
         </td>
         </tr>
         <tr>
         <td> 

         ';

         $a.=mapArraytoSelect($litemtype,'id="litemtype" class="form-control"  name="pcombination" ','LITEMTYPE');

         $a.=' </td>
         </tr>
         ';

         $a.='
         <tr class="ptitle">
         <td> 
         <label>TITLE </label>
         </td>
         </tr>
         <tr class="ptitle">
         <td>  
         <input  tabindex="2" class="form-control" type="" value="" name="pname">
         </td>
         </tr>

         <tr class="pexam">
         <td> 
         <label>EXAMCODE </label>
         </td>
         </tr>
         <tr class="pexam">
         <td>  
         <input  tabindex="2" class="form-control" type="" value="" name="examcode">
         </td>
         </tr>






         <tr>
         <td> 
         <label>CAPTION</label>
         </td>
         </tr>
         <tr>
         <td>  
         <textarea   tabindex="2" class="form-control" type="" value="" name="pshortdescription"></textarea>
         </td>
         </tr>

         <tr class="ptitle">
         <td> 
         <label >CONTENT</label>
         </td>
         </tr>
         <tr id="content_grabber">
         </tr>


         ';

         $a.='
         <script>
         $(()=>{


           let litem=``;
           $("#litemtype").change((e)=>{
            let litemtypeselect=e.target.value;
            switch (litemtypeselect) {
              case `YOUTUBELINK`:
              litem=`
              <td>  
              <input   tabindex="" class="form-control" type="text" value="" name="pdescription" />
              </td>
              `;
              $(".ptitle").show();
              $(".pexam").hide();
              break;

              case `VIMEOLINK`:
              litem=`
              <td>  
              <input   tabindex="" class="form-control" type="text" value="" name="pdescription" />
              </td>
              `;
              $(".ptitle").show();
              $(".pexam").hide();
              break;

              case `TEXTCONTENT`:
              litem=`
              <td>  
              <textarea    tabindex="" class="form-control" type="" value="" name="pdescription"></textarea>
              </td>
              `;
              $(".ptitle").show();
              $(".pexam").hide();
              break;

              case `IMAGECONTENT`:
              litem=`
              <td>  
              <input  tabindex="" class="form-control"  type="file" name="pdescription[]" accept="image/png,image/jpeg" />
              </td>
              `;

              $(".ptitle").show();
              $(".pexam").hide();
              break;


              case `EXAM`:
              litem=`
              <td>  
              </td>
              `;
              $(".ptitle").hide();
              $(".pexam").show();
              break;

            }
            $("#content_grabber").html(litem);


            });

            $( `input[name="examcode"]` ).autocomplete({

              source: (request,response)=>{
                if((request.term).length >0){
                  ajaxJsonTransferAndOutput(
                  {
                    "query": request.term
                    },
                    "./am1_autocomplete.php",
                    "GET",
                    "",
                    (res)=>{
                     response(res.data[0]);
                     });
                   }

                 }
                 });

                 $(`input[name="examcode"]`).attr("autocomplete", "on");


                 });

                 </script>

                 <style>
                 .ui-autocomplete {
                  z-index: 10000;
                }
                </style>

                ';


                $a.='<tr class="h-5"></tr>';

                $a.='  
                <tr>
                <td class="text-center">  
                <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

                </td>
                </tr>
                ';





                return $a;


              }



              function addNewExam(){


 // $enroltype= extract_col_where('configvalue','metaname','ENROLTYPE','systemconfig_xc');


               $a='
               <tr>
               <td> 
               <label>EXAM NAME</label>
               </td>
               </tr>
               <tr>
               <td>  
               <input   tabindex="2" class="form-control" type="" value="" name="pname">
               </td>
               </tr>


               <style>
               .modal-body{
                height: 230px !important;
              }

              </style>



              ';







              $a.='<tr class="h-5"></tr>';

              $a.='  
              <tr>
              <td class="text-center">  
              <button data-dismiss="modal" tabindex="12" id="addpatsumbit" class="btn btn-primary btn-lg"> create </button>

              </td>
              </tr>
              ';





              return $a;


            }

            function generateModalSearchableDataList($modalname,$modalid,$datalistgenerator,$contenttype='',$modalsize='modal-md',$drag=true){
              $datalist=$datalistgenerator();
              if($drag){
                echo'
                <script>
                $(()=>{
                  dragModal("#'.$modalid.'box");

                  });
                  </script>
                  <style>
     #'.$modalid.'box{
                  cursor:move;
                }
       #'.$modalid.'box:hover{
                background-color:#4242429e;

              }
              </style>
              ';
            }

            echo '
            <!-- '.$modalname.' Modal -->

            <div class="modal " id="'.$modalid.'" role="dialog" >
            <div class="modal-dialog '.$modalsize.'"  >
            <div class="modal-content">
            <form id="init-am2" >

            <div class="modal-header" id="'.$modalid.'box">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">'.$modalname.' </h4>
            <hr class="'.(($contenttype !='')? "hide":"").'">
            <input type="text" class="form-control search-key-pl '.(($contenttype !='')? "hide":"").'"  name="search-key">
            </div>

            <div class="modal-body" style="padding-bottom: 5px !important; height: 500px; overflow:scroll;">

            <div class="row rowfield">

            <table  class="table table-striped">
            <tbody class="search-result">'
            .$datalist.
            '

            </tbody>
            </table>

            </div>

            </div>
            <div class="modal-footer">

            </div>
            </form>

            </div>
            </div>
            </div>

            <!-- '.$modalname.' Modal END -->


            ';
          }

          ?>









