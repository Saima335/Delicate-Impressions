<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('username', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('password', 'like', '%'.$query.'%')
         ->orWhere('contact', 'like', '%'.$query.'%')
         ->orWhere('city', 'like', '%'.$query.'%')
         ->orWhere('postal', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->password.'</td>
         <td>'.$row->contact.'</td>
         <td>'.$row->city.'</td>
         <td>'.$row->postal.'</td>
         <td>'.$row->address.'</td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }




    
    function Contact(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('contactus')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('contact', 'like', '%'.$query.'%')
         ->orWhere('message', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('contactus')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->contact.'</td>
         <td>'.$row->message.'</td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

