<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
      //album name
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.spotify.com/v1/me/playlists',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json',
          'Content-Type: application/json',
          'Authorization: Bearer BQBEKIZDY3DyT93qLYxPS45f_fC0WPP5tWtfP3-bXmkKCOFXXPwu5AxRFxgyh76PFmE5lVPGfdW88YS6S_uIL0wt4lQdsVdzlu4Vd_RcC_7xCzSSrRbJqI3jLVq3CSp4Hka0eZ6pLoCMPWeW5WTQxmrsDGLMngg3hr1KHpxvyzeNm65EmK9uos2SP5vPg7DN7mL_B0NlI3ewUrs1oxm3mynItuVKwIk8GAHmM4UWdXblJkuXcKnxFAYYvmhp2QaVLbh9wGbt93EjawxwPGJtV4WQgX7GACo7zzvHeq3Itj1OkmPmnkSiuLpc3uUiTsvJYDPQ26Kjlw',
          'Cookie: sp_t=8e904389d646b1fb73d6e634eda9c181'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
        //echo $response;
        $json = json_decode($response);
        $temp = $json->items;



        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.spotify.com/v1/me',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer BQDdJTvtl-rfZ3LFEZFsUZL1jm8uOLTtkTCZJ0QyhJrT3OZC__YT_s5OXyH4HT0SuaI8jmZB-hB251e04MsZ7vt5x0kee-iktEfT-nm_4MVgzwYspHrX2YJEaLtOxA8Rt0rkKyOtSvlj-h33LwQKeGxe1J5ariHOlWAjFags7p5wcYQUwOyUziviPd_BNXEMN0hmsZesxuV31NG82Zz832LhmXwabs_FokvVBSiX0zaNCtJ_i9PNOS3d7wE_06E6qwH6Im3vc8KmJiUFxSNa2_-USrmhUtLbqACryysz8vRR1oUg9L7UcFslc5rR1s7LlRUnHWbSDQ',
            'Cookie: sp_t=8e904389d646b1fb73d6e634eda9c181'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $json_temp = json_decode($response);
        return view('user.index',compact('temp','json_temp'));
       // $temp = $json->items;
      //  foreach($temp as $data)
       //  {
        //    echo  $data->name;
        // }
    }

    public function listAlbum()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.spotify.com/v1/playlists/6jlvYHZoCO3wHiZ4jTchj4/tracks',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer BQAQSd_mUUlsn7YaM033mRsJNBDsTFUHmJChRYLSfF9HswHhfjGv4Q9kOLrA4fuV1jz7R9bsAgSBsWCwf_kI5oFt8gKQ-EhJER-tgaDXDHmL1WtlelIDTfJG639jjkCwu_CQrCm4El1TTQSbu6bnyGKLN9kiNvS2T_l5LbAFGF_ft8oO7qSH4o4OPJAae0HMzA2vOIIMh7H00c7_765ct9Jqg9k9hu-pjVFVNYPmGTg5_y2kWRyw5uJW7amVrUe-azmas79ht-rdIV2sylS-S1cbvatjixlCume__rC4O8e6-1zvU7h31HynR4veOpE',
            'Cookie: sp_t=8e904389d646b1fb73d6e634eda9c181'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $json = json_decode($response);
        $temp = $json->items;
       // var_dump($temp);
        //exit();
        //foreach($temp as $data)
        // {
         //   $artist =  $data->track->album->artists;
         //   foreach($artist as $row)
        //    {
        //        echo  $row->name;
        //    }
        // }
       // echo $response;
        return view("user.list",compact('temp'));
    }

    public function albumSingle()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.spotify.com/v1/artists/2AWUCT9xtcvkjpFq1ZgpPj/albums',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer BQB4hlENNhUn4u_cduscvuBMk2QH57Ks53BzziXKeLlnuxQKr3XPmP68JSEp10b2ifvl5kc7b2DvHXbfHxzse7Qu_JXjO5CPWah7PdFCjdJWwb4eZt08NdbpLCzcnxY6E-71Iyj_VzsJpPZ56FqGb1ZqVMcuNjZJWURvCzjG2EjL9iRjZzatFoCXyTBKAEgupmV3YXC3kw5fJOsrdnGEuzAeoMBJ97bkJNdPjVv-zgevcLJ4Tbe5F2iAQakkaFJP_6qTPh1pnu40jk6x1e_o_6MwogJ3UOtg7lusaOB0HWLrlrNn5L3mO-T1JULmeo6pafsAqcHL_A',
            'Cookie: sp_t=8e904389d646b1fb73d6e634eda9c181'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
       // echo $response;
       $json_temps = json_decode($response);
       $artists = $json_temps->items;
       //foreach($artists as $row)
      // {
     //   echo $row->name. "<br>";
      // }
       // exit();

        //profile information
        return view('user.albumSingleList',compact('artists'));
    }


    public function profile()
    {
        return view('user.index',compact('json'));
       // echo $response;
    }
}
