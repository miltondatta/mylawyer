<?php

namespace App\Http\Resources\Web;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LawyerEducationsResource extends JsonResource
{
    public static $wrap = null;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return [
                "id" =>  $this->id,
                "lawyer_id" =>  $this->lawyer_id,
                "institute" =>  $this->institute,
                "degree" =>  $this->degree,
                "subject" =>  $this->subject,
                "description" =>  $this->description,
                "from" =>  Carbon::parse($this->from)->format('Y-m-d'),
                "to" =>  Carbon::parse($this->to)->format('Y-m-d'),
                "image" =>  $this->image,
                "is_active" =>  $this->is_active,
                "created_at" =>  Carbon::parse($this->created_at)->format('Y-m-d h:i:s'),
                "updated_at" =>  $this->updated_at,
        ];
    }
}
