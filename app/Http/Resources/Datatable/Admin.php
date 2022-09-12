<?php

namespace App\Http\Resources\Datatable;

use Illuminate\Http\Resources\Json\JsonResource;

class Admin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'image'             => $this->imageUrl,
            'fullname'          => htmlspecialchars($this->fullname),
            'username'          => $this->username,
            'mobile'          => $this->mobile,
            'created_at'        => tverta($this->created_at)->format('%d %B %Y'),

            'links' => [
                'edit'    => route('admin.admins.edit', ['admin' => $this]),
                'show'    => route('admin.admins.show', ['admin' => $this]),
            ]
        ];
    }
}
