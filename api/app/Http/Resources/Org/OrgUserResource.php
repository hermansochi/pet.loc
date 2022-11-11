<?php

namespace App\Http\Resources\Org;

use Illuminate\Http\Resources\Json\JsonResource;

class OrgUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'hide' => $this->hide,
            'thumbnail' => $this->thumbnail,
            'gender' => $this->gender,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'cn' => $this->cn,
            'telephone' => $this->telephone,
            'mobile' => $this->mobile,
            'title' => $this->title,
            'department' => $this->department,
            'company' => $this->company,
            'city' => $this->city,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
