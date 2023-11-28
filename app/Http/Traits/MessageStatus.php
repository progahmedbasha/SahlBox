<?php

namespace App\Http\Traits;

trait MessageStatus
{
    public function addedMsg()
    {
        return $message = "Added Successfully";
    }

    public function updatedMsg()
    {
        return $message = "Updated Successfully";
    }
    public function deletedMsg()
    {
        return $message = "Deleted Successfully";
    }
}
