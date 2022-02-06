<?php defined('BASEPATH') OR exit('No direct script access allowed');

class R extends CI_Model
{
    public function show($status, $message, $data = array()){
        $status = ($status === 1) ? 'success' : 'failed';

        if(count($data) > 0){
            return array(
                'status'    => $status,
                'message'   => $message,
                'data'      => $data
            );
        }

        return array(
            'status'    => $status,
            'message'   => $message,
        );
    }
}
